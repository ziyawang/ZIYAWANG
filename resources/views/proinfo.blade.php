@extends('layouts.home')
@section('content')
<style>
    table,tr,td {
        border:1px solid black;
        padding: 10px;
        font-size:20px;
    }
</style>
<div class="container">
    <div class="content">
        <div class="title">信息详情</div>
    </div>
    <div>
        <table style="float:left" id="info">
            
        </table>
        <div style="float:right" id="member">
            
        </div>
    </div>
</div>

<script>
    $(function () {
        
        var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");

        function rush() {
            var token = $.session.get('token');
            token = token.replace(/\'/g,"");
            $.ajax({
                url:'http://api.ziyawang.com/api/project/rush?access_token=token&token='+token,
                type:'POST',
                data:'ProjectID=' + ProjectID,
                dataType:'json',
                success:function(msg){
                    console.log(msg);
                }
            });
        }

        $.ajax({  
         url: 'http://api.ziyawang.com/api/project/list/'+ ProjectID +'?access_token=token',  
         type: 'GET',  
         dataType: 'json',  
         timeout: 1000,  
         cache: false,
         beforeSend: LoadFunction, //加载执行方法    
         error: erryFunction,  //错误执行方法    
         success: succFunction //成功执行方法    
        })  
        function LoadFunction() {  
         $("#spec01").html('加载中...');  
        }  
        function erryFunction() {  
         alert("error");  
        }  
        function succFunction(tt) {  
         $("#spec01").html('');

             var json = eval(tt); //数组 
             console.log(json);

             var TypeName = json.TypeName;
             var ViewCount = json.ViewCount;
             var ProjectID = 10000 + json.ProjectID;  
             var ProArea = json.ProArea;  
             var FromWhere = json.FromWhere;  
             var TotalMoney = json.TotalMoney;  
             var TransferMoney = json.TransferMoney;  
             var VoiceDes = json.TransferMoney;  
             var WordDes = json.WordDes;  
             var AssetList = json.AssetList;  
             var PictureDes = json.PictureDes;
             var PhoneNumber = json.PhoneNumber;
             var reg = /^(\d{3})\d{4}(\d{4})$/;
             var HideNumber = PhoneNumber.replace(reg, "$1****$2");  
             $("#info").html("<tr><td>信息类型</td><td>"+ TypeName +"</td><td><button id='rush'>申请抢单</button></td></tr><tr><td>浏览数</td><td>"+ ViewCount +"人</td></tr><tr><td>编号："+ ProjectID +"</td><td>地区："+ ProArea +"</td><td>来源："+ FromWhere +"</td><td>总金额："+ TotalMoney +"万</td><td>转让价："+ TransferMoney +"万</td></tr><tr><td>信息完整度：三颗星</td></tr><tr><td>语音信息："+ VoiceDes +"</td></tr><tr><td>文字信息："+ WordDes +"</td></tr><tr><td>清单下载："+ AssetList +"</td></tr><tr><td>图片信息："+ PictureDes +"</td></tr>");  
             $("#member").html("<p>会员信息</p><p>"+ HideNumber +"</p><p>查看联系方式</p>")

            console.log($("#spec01"));  
            $("#rush").click(function(){
                rush();
            }); 
        } 
    });

    
</script>
@endsection
