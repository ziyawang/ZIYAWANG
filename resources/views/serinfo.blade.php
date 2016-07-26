@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{asset('/css/fsdetails.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="content wrap">
	<!-- 面包屑导航 -->
	<div class="breadcrumb_nav"><a href="{{url('/')}}">首页</a>&gt;<a href="{{url('/service')}}">找服务</a>&gt;<span id="servicename"></span></div>
	<div class="content_middle">
		<div class="abstract">
	        
		</div>
		<div class="userinfo">
			<h2><em></em>会员信息</h2>
			<span class="toux_pic"><img src="/img/defaltoux.jpg" id="userpicture"></span>
			<a href="javascript:;" id="check">查看联系方式</a>
			<a href="#" class="chat"><i></i>私聊</a>
		</div>
	</div>
	<div class="content_bottom">
		<div class="cb_intro">
			<h2>服务方详情</h2>
			<div class="service_details">
				
			</div>
			<h2>服务方资质</h2>
			<div class="service_ceti">
                <img src="" id="ConfirmationP1" style="display:none"/>
                <img src="" id="ConfirmationP2" style="display:none"/>
				<img src="" id="ConfirmationP3" style="display:none"/>
			</div>
		</div>
		<div class="pic_info cbi_picinfo">
            <h2><em></em>相关信息</h2>
            <ul>
                <li>
                    <img src="/img/pic01.png">
                    <div class="picinfo_content">
                        <h3>融资借贷</h3>
                        <h4>融资金额6000万元...</h4>
                        <div class="picon_intro">
                            <p>北京某畜牧业扩建项目融资融资</p>
                            <p>金额6000万元-1亿元</p>
                            <p>所在地：北京市</p>
                            <p>所属行业：农林畜牧</p>
                        </div>
                        <a href="#" class="look">查看内容</a>
                        <span class="white_cube"></span>
                    </div>
                </li>
                <li>
                    <img src="/img/pic01.png">
                    <div class="picinfo_content">
                        <h3>融资借贷</h3>
                        <h4>融资金额6000万元...</h4>
                        <div class="picon_intro">
                            <p>北京某畜牧业扩建项目融资融资</p>
                            <p>金额6000万元-1亿元</p>
                            <p>所在地：北京市</p>
                            <p>所属行业：农林畜牧</p>
                        </div>
                        <a href="#" class="look">查看内容</a>
                        <span class="white_cube"></span>
                    </div>
                </li>
                <li>
                    <img src="/img/pic01.png">
                    <div class="picinfo_content">
                        <h3>融资借贷</h3>
                        <h4>融资金额6000万元...</h4>
                        <div class="picon_intro">
                            <p>北京某畜牧业扩建项目融资融资</p>
                            <p>金额6000万元-1亿元</p>
                            <p>所在地：北京市</p>
                            <p>所属行业：农林畜牧</p>
                        </div>
                        <a href="#" class="look">查看内容</a>
                        <span class="white_cube"></span>
                    </div>
                </li>
            </ul>
        </div>
	</div>
</div>
<script>
     $(function () {
        
        var ServiceID = window.location.pathname.replace(/[^0-9]/ig,"");
        var token = $.session.get('token');

        function collect() {
            if(!token){
                window.location = "{{url('/login')}}";
            }
            token = token.replace(/\'/g,"");
            $.ajax({
                url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
                type:'POST',
                data:'itemID=' + ServiceID + '&type=4',
                dataType:'json',
                success:function(msg){
                    console.log(msg);
                }
            });
        }

        $.ajax({  
         url: 'http://api.ziyawang.com/v1/service/list/'+ ServiceID +'?access_token=token&token=' + token,  
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

            var ServiceName = json.ServiceName;   //服务方头像 
            var UserPicture = json.UserPicture;   //服务方名称 
            var ViewCount = json.ViewCount;    //浏览次数
            var ServiceNumber = json.ServiceNumber;    //编号
            var ServiceLocation = json.ServiceLocation;    //公司所在地 
            var ServiceLevel = json.ServiceLevel;    //服务等级 
            var ServiceArea = json.ServiceArea;    //服务地区
            var ServiceType = json.ServiceType;    //服务类型
            var CoNumber = json.CoNumber;    //已接单数
            var ServiceID = json.ServiceID;    //服务商ID
            var ServiceIntroduction = json.ServiceIntroduction;    //服务商简介
            var ConfirmationP1 = json.ConfirmationP1;    //服务商资质
            var ConfirmationP2 = json.ConfirmationP2;    //服务商资质
            var ConfirmationP3 = json.ConfirmationP3;    //服务商资质
            var ConnectPhone = json.ConnectPhone;    //服务商联系方式
            //  var HideNumber = PhoneNumber.replace(reg, "$1****$2"); 

            $('#userpicture').attr('src',UserPicture);
            $("#servicename").html(ServiceName); 
            $(".abstract").html("<div class='abstract_info'><a href='http://ziyawang.com/service/" + ServiceID + "' class='blue_color'>" + ServiceName + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p><dl><dt>编号：</dt><dd>" + ServiceNumber + "</dd><dt>所在地：</dt><dd>" + ServiceLocation + "</dd><dt>服务级别：</dt><dd class='yellow_color'>" + ServiceLevel + "</dd></dl><p>服务地区：" + ServiceArea + "</p><p>服务类型：" + ServiceType + "</p></div><a href='#' class='much'>已接" + CoNumber + "单</a><div class='share'><a href='javascript:;' class='collect'><em></em>收藏</a><a href='#'><em></em>分享</a></div>");  
            $(".service_details").html("<p>" + ServiceIntroduction + "</p>");
            //  $("#member").html("<p>会员信息</p><p>"+ HideNumber +"</p><p>查看联系方式</p>")
            if(ConfirmationP1.length >0 ) {
                $('#ConfirmationP1').attr('src', ConfirmationP1).show();
            }
            if(ConfirmationP2.length >0 ) {
                $('#ConfirmationP2').attr('src', ConfirmationP2).show();
            }
            if(ConfirmationP3.length >0 ) {
                $('#ConfirmationP3').attr('src', ConfirmationP3).show();
            }

            // console.log($("#spec01"));  
            $("#rush").click(function(){
                rush();
            });

            $(".collect").click(function(){
                collect();
            });

            $("#check").click(function(){
                var phonenumber = $.session.get('phonenumber');
                // console.log(typeof(phonenumber));
                if(typeof(phonenumber)!="undefined") {
                    $("#check").html(ConnectPhone);
                } else {
                    window.location = "{{url('/login')}}";
                }
            });
        } 
    });

</script>
@endsection