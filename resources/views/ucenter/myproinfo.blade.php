@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/fidetails.css')}}" />

<!-- 右侧详情 -->
    <div class="main_right">
        <div class="breadcrumb_nav"><a href="{{url('/ucenter/mypro')}}">我发布的</a>&gt;<span id="navname"></span></div>
        <div class="content_middle">
            <div class="abstract">
                <div class="abstract_info fi_abstractinfo">
                    <div id="common">
                        
                    </div>
                    <div id="diff">
                        
                    </div>
                    <div class="ai_info">
                        
                    </div>
                </div>
                <div id="status">
                    
                </div>
            </div>
            <div class="cb_intro">
                <h2 class="pingzheng">凭证信息</h2>
                <div class="service_ceti">
                    <img id="PictureDes1" src="" />
                    <img id="PictureDes2" src="" />
                    <img id="PictureDes3" src="" />
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
    var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.session.get('token');
    $.ajax({  
         url: 'http://api.ziyawang.com/v1/project/list/'+ ProjectID +'?access_token=token&token=' + token,  
         type: 'GET',  
         dataType: 'json',  
         timeout: 1000,  
         cache: false,
         beforeSend: LoadFunction, //加载执行方法    
         error: erryFunction,  //错误执行方法    
         success: succFunction //成功执行方法    
        })  
        function LoadFunction() {  
         $("#common").html('加载中...');  
        }  
        function erryFunction() {  
         $(".content_middle").html('加载异常，请刷新页面...'); 
        }  
        function succFunction(tt) {  
         $("#spec01").html('');

            var json = eval(tt); //数组 
            console.log(json);

            var TypeID        = json.TypeID;
            var ProjectID     = json.ProjectID;
            var TypeName      = json.TypeName;
            var ViewCount     = json.TypeID;
            var ProjectNumber = json.ProjectNumber;
            var ProArea       = json.ProArea;
            var PublishState  = json.PublishState;
            var RushCount     = json.RushCount;
            var WordDes       = json.WordDes;
            var brief         = WordDes.substr(0,20) + "...";
            var VoiceDes      = json.VoiceDes;
            var PictureDes1   = json.PictureDes1;
            var PictureDes2   = json.PictureDes2;
            var PictureDes3   = json.PictureDes3;
            var UserPicture   = json.UserPicture;
            var ConnectPhone  = json.PhoneNumber;
            var ServiceID     = json.ServiceID;
            var CertifyState  = json.CertifyState;
            if(CertifyState == '0'){
                PublishState = "<a href='http://ziyawang.com/ucenter/mypro/rushlist/" + ProjectID + "' class='much applyorder'>审核中</a>";
            } else if ( CertifyState == '1') {
                PublishState = "<a href='http://ziyawang.com/ucenter/mypro/rushlist/" + ProjectID + "' class='much applyorder' id=rush>查看抢单人</a>";
            } else if ( PublishState == '1') {
                PublishState = "<img src='/img/gaizhang.png' class='seal' />";
            }

            $('#navname').html(TypeName);

            var PublishTime = json.PublishTime;
            var common = "<a href='#' class='blue_color'>信息类型：" + TypeName + "</a><div class='fi_time'>" + PublishTime + "</div><p class='people fi_people'><span class='grab'><em>" + RushCount + "</em>人已抢单</span><span class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</span><span>信息完整度：<em class='degree'></em></span></p>";
            var des = "<dl><dt>语音信息：</dt><dd class='voice_info'><a href='javascript:;'></a><span>0分0秒</span></dd><dt>文字信息：</dt><dd>" + WordDes + "</dd></dl>";

            var FromWhere     = ('FromWhere' in json)     ? json.FromWhere : null;
            var TotalMoney    = ('TotalMoney' in json)    ? json.TotalMoney : null;
            var TransferMoney = ('TransferMoney' in json) ? json.TransferMoney : null;
            var AssetType     = ('AssetType' in json)     ? json.AssetType : null;
            var AssetList     = ('AssetList' in json)     ? json.AssetList : null;
            var Status        = ('Status' in json)        ? json.Status : null;
            var Rate          = ('Rate' in json)          ? json.Rate : null;
            var Requirement   = ('Requirement' in json)   ? json.Requirement : null;
            var BuyerNature   = ('BuyerNature' in json)   ? json.BuyerNature : null;
            var Informant     = ('Informant' in json)     ? json.Informant : null;
            var Buyer         = ('Buyer' in json)         ? json.Buyer : null;

            switch(TypeID)
                {
                    case "1":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>总金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>资产包类型：" + AssetType + "</span></p><p class='line_info'><span>地区：" + ProArea + "</span><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span><span>来源：" + FromWhere + "</span></p>";
                        des = "<dl><dt>语音信息：</dt><dd class='voice_info'><a href='#'></a><span>5分22秒</span></dd><dt>文字信息：</dt><dd>" + WordDes + "</dd><dt>清单下载：</dt><dd><button><a href='http://files.ziyawang.com/" + AssetList + "'>下载</a></button></dd></dl>";
                        break;
                    case "2":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p><p class='line_info'><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></p>";
                        break;
                    case "3":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>需求：" + Requirement + "</span></p>";
                        break;

                    case "4":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>合同金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>买方性质：" + BuyerNature + "</span></p>";
                        break;

                    case "5":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p>";
                        break;

                    case "6":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>回报率：" + Rate + "%</span></p>";
                        break;

                    case "9":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p>";
                        break;

                    case "10":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>被调查方：" + Informant + "</span></p>";
                        break;

                    case "12":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span></p>";
                        break;

                    case "13":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>求购方：" + Buyer + "</span></p>";
                        break;

                    case "14":
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>类型：" + AssetType + "</span><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span></p>";
                        break;

                }
            $("#brief").html(brief);
            $("#status").html(PublishState); 
            $('#userpicture').attr('src',UserPicture);
            $("#common").html(common);
            $("#diff").html(html);
            $(".ai_info").html(des);
            //  $("#member").html("<p>会员信息</p><p>"+ HideNumber +"</p><p>查看联系方式</p>")
            if(PictureDes1.length >0 ) {
                $('#PictureDes1').attr('src', 'http://images.ziyawang.com/'+PictureDes1).show();
            }
            if(PictureDes2.length >0 ) {
                $('#PictureDes2').attr('src', 'http://images.ziyawang.com/'+PictureDes2).show();
            }
            if(PictureDes3.length >0 ) {
                $('#PictureDes3').attr('src', 'http://images.ziyawang.com/'+PictureDes3).show();
            }
  
            $("#rush").click(function(){
                checkLogin();
                rush();
            });

            $(".collect").click(function(){
                checkLogin();
                collect();
            });

            $("#check").click(function(){
                checkLogin();
                $("#check").html(ConnectPhone);
            });
        }
    
})

</script>
@endsection