@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{asset('/css/fsdetails.css')}}?v=1.0.4" />
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
	        <div id='first'>
                
            </div>
            
            <div class="share">
                <a href="javascript:;" class="collect"><em></em><span>收藏</span></a>
                <!-- 分享 -->
                <div class="jiathis_style_32x32">
                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank" id="share_asign"></a>
                </div>
                <span class="span_share">分享</span>
                <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                <!-- 分享 -->
            </div>
		</div>
		<div class="userinfo">
			<h2><em></em>会员信息</h2>
			<span class="toux_pic"><img src="http://images.ziyawang.com/user/defaltoux.jpg" id="userpicture"></span>
			<a href="javascript:;" id="check" class="look1">查看联系方式</a>
			<a href="javascript:;" class="chat look2"  id='sound' ><i></i>私聊</a>
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
            <ul id="match">
            </ul>
        </div>
	</div>
</div>
<!-- 弹层/start -->
<div class="poplayer"></div>
<!-- 联系人弹出层 -->
<div class="poplayer1">
    <a href="javascript:;" class="certain">确定</a>
</div>
<!-- 聊天弹出层 -->
<div class="poplayer2">
    <a href="javascript:;" class="certain" id="app">确定</a>
</div>
<!-- 弹层/end -->
<script>
$(function () {

    var ServiceID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.cookie('token');

    //服务方详情
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/service/list/'+ ServiceID +'?access_token=token&token=' + token,  
        type: 'GET',  
        dataType: 'json',
        asycn: false,  
        timeout: 10000,  
        cache: false,
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: succFunction //成功执行方法    
    })
    //相关服务方
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/match/service?access_token=token&ServiceID=' + ServiceID,  
        type: 'GET',  
        dataType: 'json',
        asycn: false,  
        timeout: 5000,  
        cache: false,
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: function (tt){
            $('#match').html('');
            json = eval(tt);
            var data = json.data;    
            $.each(data, function (index, item) {  
                //循环获取数据
                var ServiceName = data[index].ServiceName;   //服务方名称
                var ConfirmationP1 = data[index].ConfirmationP1;    //服务商资质 
                var ServiceLocation = data[index].ServiceLocation;    //公司所在地 
                var ServiceLevel = data[index].ServiceLevel;    //服务等级 
                var ServiceArea = data[index].ServiceArea;    //服务地区
                if(ServiceArea.length > 10) {
                    ServiceArea = ServiceArea.substr(0,10) + '...';
                }
                var ServiceType = data[index].ServiceType;    //服务类型
                if(ServiceType.length > 10) {
                    ServiceType = ServiceType.substr(0,10) + '...';
                }
                var ServiceID = data[index].ServiceID;    //服务商ID
                $("#match").html($("#match").html() + "<li><img src='http://images.ziyawang.com" + ConfirmationP1 + "'><div class='picinfo_content'><h3>" + ServiceName + "</h3><h4>服务等级：" + ServiceLevel + "</h4><div class='picon_intro'><p>所在地：" + ServiceLocation + "</p><p>服务地区：" + ServiceArea + "</p><p>服务类型：" + ServiceType + "</p></div><a href='http://ziyawang.com/service/" + ServiceID + "' class='look'>查看内容</a><span class='white_cube'></span></div></li>"); 
            });           
                   
        } //成功执行方法    
    })   
    function LoadFunction() {  
        $("#spec01").html('加载中...');  
    }  
    function erryFunction() {  
     // alert("error");  
    }  
    function succFunction(tt) {  

        $("#spec01").html('');

        var json = eval(tt); //数组
        // console.log(json) 

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
        var CollectFlag = json.CollectFlag;    //收藏状态
        if(CollectFlag == 1){
            $(".collect").children('em').addClass('star_cl');
            $(".collect").children('span').html('已收藏');
        }
        //  var HideNumber = PhoneNumber.replace(reg, "$1****$2"); 

        $('#userpicture').attr('src','http://images.ziyawang.com'+UserPicture);
        $("#servicename").html(ServiceName); 
        var first = "<div class='abstract_info'><a href='http://ziyawang.com/service/" + ServiceID + "' class='blue_color'>" + ServiceName + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p><dl><dt>编号：</dt><dd>" + ServiceNumber + "</dd><dt>所在地：</dt><dd>" + ServiceLocation + "</dd><dt>服务等级：</dt><dd class='yellow_color'>" + ServiceLevel + "</dd></dl><p>服务地区：" + ServiceArea + "</p><p>服务类型：" + ServiceType + "</p></div><a href='#' class='much'>已接" + CoNumber + "单</a>";
        $("#first").html(first);
        $(".service_details").html("<p>" + ServiceIntroduction + "</p>");
        //  $("#member").html("<p>会员信息</p><p>"+ HideNumber +"</p><p>查看联系方式</p>")
        if(ConfirmationP1.length >0 ) {
            $('#ConfirmationP1').attr('src', 'http://images.ziyawang.com'+ConfirmationP1).show();
        }
        if(ConfirmationP2.length >0 ) {
            $('#ConfirmationP2').attr('src', 'http://images.ziyawang.com'+ConfirmationP2).show();
        }
        if(ConfirmationP3.length >0 ) {
            $('#ConfirmationP3').attr('src', 'http://images.ziyawang.com'+ConfirmationP3).show();
        }
        var token = $.cookie('token');
        var ServiceID = window.location.pathname.replace(/[^0-9]/ig,"");
        var stop = false;

        function checkLogin(){
        if(!token){
            // window.location = "{{url('/login')}}";
            window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes"); 
            stop = true;
            return false;
        }
    }

    function matchFunction(tt) {
        var json = eval(tt); //数组
        // console.log(json)
        return;
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
    }

    function collect() {

        $.ajax({
            url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
            type:'POST',
            data:'itemID=' + ServiceID + '&type=4',
            dataType:'json',
            success:function(msg){
                // if($(".collect").children('span').html()=='收藏'||$(".collect").children('span').html()=='取消收藏'){
                //     $(".collect").children('em').addClass('star_cl');
                //     $(".collect").children('span').html('已收藏');
                // }else{
                //     $(".collect").children('em').removeClass('star_cl');
                //     $(".collect").children('span').html('收藏');
                // }
            }
        });
    }

    $(".collect").click(function(){
        checkLogin();
        if(stop){
            return false;
        }
        collect();
    });

    $("#check").click(function(){
        checkLogin();
        if(stop){
            return false;
        }
        $("#check").html(ConnectPhone);
        });
    } 

    //声明方法
    var myFn = function(box){
        $('.poplayer').show();
        $('.'+box).show();
    }

     //点击确定关闭弹出查看语音信息
    $('#app').click(function(event) {
        $(this).parent().hide();
        $('.poplayer').hide();
    });

    $('#sound').click(function(){
        myFn('poplayer2')
    })
});


</script>
@endsection