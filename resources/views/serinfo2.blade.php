@extends('layouts.home')

@section('seo')
<title>找服务_不良资产处置服务机构-资芽网</title>
        <meta name="Keywords" content="资产收购,投融资服务,法律服务,催收公司,不良资产处置服务机构,资芽网" />
        <meta name="Description" content="资芽网找服务，海量处置服务机构任你选，保理公司，认证资质；投融资服务，解你资金之急；资产债权收购方，诚心交易；急着催收没途径？催收公司，尽职调查，法律服务，三管齐下，保你债务无忧。" />
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/infomation.css')}}?v=1.0.5.3" />
    <style>
        .jubaoBox{padding:22px;background:#fff;width: 415px;position: fixed;top: 50%;left: 50%;margin:-290px 0 0 -207px;display: none;z-index: 9999;}
        .jubao{background:#d5d5d5;padding:30px 40px 18px;}
        .ziyaHot{margin-top: 20px; color: #666; font-size: 12px; text-align: center; letter-spacing: 1px;}
        .jubao h3{text-align: center;color:#333;font-size: 24px;font-weight: normal;padding-bottom: 20px;border-bottom: 1px solid #fff;}
        .reasons a{color:#4c4c4c;text-decoration: none;font-size: 18px;}
        .reasons li{border-bottom: 1px dashed #fff;padding:16px 0;}
        .reasons .rightCheck{float: right;width: 17px;height: 22px;background:url(/img/report.png) no-repeat 0px -18px;}
        .reasons .cur .rightCheck{background:url(/img/report.png) no-repeat 0px 4px;}
        .btns2{padding-top: 38px;overflow: hidden;}
        .btns2 a{display: block;width: 154px;height: 38px;line-height: 33px;text-align: center;color:#454545;position: relative;font-size: 20px;text-decoration: none;}
        .btns2 .btnConfirm{background:#fdd000;box-shadow: 0 -5px 0 #b69600 inset;color:#000;float: left;}
        .quxiao{background:#fff;box-shadow: 0 -5px 0 #828282 inset;float: right;}
        .btns2 a:active{top:1px;}
    </style>
<!-- 二级banner -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/course')}}"></a></li>
    </ul>
</div>
<!-- 主体 -->
<div class="content clearfix">
    <div class="conLeft">
        <div class="conleftTop">
            <div class="cltTitle">
                <p id="ServiceName"><b class="serWidth"></b></p>
                <div class="shareandstore">
                    <!-- 分享 -->
                    <a href="javascript:;" class="report">举报</a>
                    <div class="shareBox">
                        <div class="jiathis_style_32x32">
                            <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank" id="share_asign"></a>
                        </div>
                        <span class="span_share">分享</span>
                    </div>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                    <!-- 分享 -->
                    <a href="javascript:;" class="collect" id="collectinfo"><i class="iconfont heart">&#xe601;</i><span>收藏</span></a>

                </div>
            </div>
            <div class="cltCon" id="ServiceIntroduction">
            </div>
        </div>
        <div class="conleftMiddle1 clearfix">
            <div class="clmLeft">
                <div class="clmleftTitle">
                    Type of Service
                    <p>服务类型</p>
                </div>
                <div class="clmleftCon">
                    <div class="clmleftClassify">
                        <div class="classifyLeft" id="ServiceType">
                            <!-- <span id="ServiceType01" class="zlltype">资产包收购</span>
                            <span id="ServiceType03" class="zlltype">律师事务所</span>
                            <span id="ServiceType10" class="zlltype">尽职调查</span>
                            <span id="ServiceType12" class="zlltype">资产收购</span>
                            <span id="ServiceType04" class="zlltype">保理公司</span>
                            <span id="ServiceType06" class="zlltype">投融资服务</span>
                            <span id="ServiceType05" class="zlltype">典当担保</span>
                            <span id="ServiceType14" class="zlltype">债权收购</span>
                            <span id="ServiceType02" class="zlltype">催收机构</span> -->
                        </div>
                    </div>
                    <div class="clmleftZone">
                        <p>服务地区：</p>
                        <div class="clmleftProvince" id="ServiceArea">
                        </div>
                    </div>
                </div>
            </div>
            <div class="moreArea clmleftProvince" id="moresa">
            </div>
            <div class="clmRight">
                <div class="theInfomation" id="information">
                    <div class="colorful"></div>
                    <div class="orderLevel">
                    </div>
                    <div class="location">
                    </div>
                    <div class="secondary">
                    </div>
                    <a href="javascript:;" class="lookConnection1" id="check">约谈</a>
                    <div class="headBox">
                        <a href="javascript:;" class="headPortrait">
                            <img id="userpicture" src="" />
                            <!-- <div class="zhe"></div> -->
                            
                        </a>
                        <span class="privateChat" id="sound"><i class="iconfont">&#xe613;</i>私聊</span>
                        <!-- <span class="identifier" id="ServiceNumber"></span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="conleftBottom" id="Confirmation">
            <div class="clbTitle">服务方资质</div>
            <!-- 有图 -->
            <div class="clbCon">
                <span class="flowerTl flower"></span><span class="flowerTr flower"></span>
                <span class="flowerBl flower"></span><span class="flowerBr flower"></span>
                <div class="imgBox">
                    <div class="imgContent">
                        <img src="" id="ConfirmationP1" style="display:none"/>
                        <img src="" id="ConfirmationP2" style="display:none"/>
                        <img src="" id="ConfirmationP3" style="display:none"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="conRight">
        <div class="recommend">
            <h2 class="recommendTitle"><i class="iconfont">&#xe612;</i>相关服务<a href="javascript:;" class="changeAlot" id="change">换一换</a></h2>
            <div class="recommendCon">
                <ul id="match">
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 弹层/start -->
<div class="poplayer"></div>
<!-- 联系人弹出层 -->
<div class="poplayer1">
    <a href="javascript:;" class="certain" id="connect">确定</a>
</div>
<!-- 聊天弹出层 -->
<div class="poplayer2">
    <a href="javascript:;" class="certain" id="app">确定</a>
</div>
<div class="jubaoBox">
    <div class="jubao">
        <h3>选择举报原因</h3>
        <ul class="reasons">
            <li reasonid='1'><a href="javascript:;">服务方描述与事实不符</a><a href="javascript:;" class="rightCheck"></a></li>
            <li reasonid='2'><a href="javascript:;">虚假信息</a><a href="javascript:;" class="rightCheck"></a></li>
            <li reasonid='3'><a href="javascript:;">泄露私密</a><a href="javascript:;" class="rightCheck"></a></li>
            <li reasonid='4'><a href="javascript:;">垃圾广告</a><a href="javascript:;" class="rightCheck"></a></li>
            <li reasonid='5'><a href="javascript:;">人身攻击</a><a href="javascript:;" class="rightCheck"></a></li>
            <li reasonid='6'><a href="javascript:;">无法联系</a><a href="javascript:;" class="rightCheck"></a></li>
        </ul>
        <div class="btns2">
            <a href="javascript:;" class="btnConfirm" id="reportpub">确定</a>
            <a href="javascript:;" class="quxiao" id="reportcancel">取消</a>
        </div>
        <p class="ziyaHot">资芽网全国服务热线&nbsp;&nbsp;400-898-8557</p>
    </div>
</div>
<!-- 弹层/end -->
<style>
    .layui-layer{border-top: 8px solid #fdd000; width: 420px!important; padding: 0 40px 30px;background: #fff;}
    .layui-layer .layui-layer-title{color:#000;text-align: center; border-bottom: 2px solid #fdd000; padding: 26px 0 22px 25px; font-size: 30px; letter-spacing: 25px; margin-bottom: 15px;background: none;}
    .layui-layer-dialog .layui-layer-content{padding: 0;line-height: 36px;text-align: justify;font-size: 20px;color: #000;letter-spacing: 1px;}
    .layui-layer .layui-layer-btn{text-align: center;margin-top: 20px;}
    .layui-layer-btn{padding: 0;}
    .layui-layer-btn a{width: 104px;padding: 6px 0px 10px; background: #f4f4f4; border-radius: 5px; border-right: 2px; color: #000; box-shadow: 0 -5px 0 #bababa inset; position: relative;border: 0 none;margin: 0;font-size: 20px;margin: 0 18px;text-align: center;}
    .layui-layer-btn .layui-layer-btn1{}
    .layui-layer-btn .layui-layer-btn0,.layui-layer-btn a:hover{background: #fdd000;box-shadow: 0 -5px 0 #b69600 inset;color: #000;}
    .layui-layer-btn a:active{top: 1px;}
    .layui-layer-setwin .layui-layer-close1{display: none;}
</style>
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
                var ViewCount = data[index].ViewCount;   //浏览次数
                var CollectCount = data[index].CollectCount;   //浏览次数
                var ConfirmationP1 = data[index].ConfirmationP1;    //服务商资质 
                var ServiceLocation = data[index].ServiceLocation;    //公司所在地 
                var ServiceLevel = data[index].ServiceLevel;    //服务等级 
                var ServiceIntroduction = data[index].ServiceIntroduction;    //服务地区
                if(ServiceIntroduction.length > 100) {
                    ServiceIntroduction = ServiceIntroduction.substr(0,100) + '...';
                }
                var ServiceType = data[index].ServiceType;    //服务类型
                // if(ServiceType.length > 10) {
                //     ServiceType = ServiceType.substr(0,10) + '...';
                // }
                var ServiceID = data[index].ServiceID;    //服务商ID
                $("#match").html($("#match").html() + "<li><div class='reconTop'><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconTopTitle'>" + ServiceName + "</a><div class='cue'><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></div></div><a href='http://ziyawang.com/service/" + ServiceID + "' class='recImg'><img title='" + ServiceName + "' src='http://images.ziyawang.com" + ConfirmationP1 + "' /></a><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconDescription'>" + ServiceIntroduction + "</a><div class='reconBottom'><span class='reconBottomCon'>服务类型</span>" + ServiceType + "</div><a href='http://ziyawang.com/service/" + ServiceID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>"); 
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
        var ConnectPerson = json.ConnectPerson;   //服务方联系人
        var UserPicture = json.UserPicture;   //服务方名称 
        var ViewCount = json.ViewCount;    //浏览次数
        var CollectCount = json.CollectCount;    //浏览次数
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
        var insider = json.insider;    //收藏状态
        if(CollectFlag == 1){
            $('#collectinfo').html('<i class="iconfont heart red">&#xe601;</i><span>已收藏</span>')
        }
        document.title = ServiceName + '_不良资产处置服务机构-资芽网';

        //服务类型
        var typearr = new Array();
        var typehtml = '';
        typearr = ServiceType.split('、');
        $(typearr).each(function(index){
            typehtml += "<span class='on'>" + typearr[index] + "</span>"
        })
        $('#ServiceType').html(typehtml);

        //服务方地区
        var areaarr = new Array();
        areaarr = ServiceArea.split(' ');
        var areahtml = '';
        var morehtml = '';
        $(areaarr).each(function(index){
            if(index < 7){
                areahtml += "<span>" + areaarr[index] + "</span>";
            } else {
                morehtml += "<span>" + areaarr[index] + "</span>";
            }
        })
        if(areaarr.length > 7){
                areahtml += '<span class="moreIcon">&gt;&gt;</span>';
        }
        $('#ServiceArea').html(areahtml);
        $('#moresa').html(morehtml);

        $('.moreIcon').hover(function() {
            $('.moreArea').stop().toggle();
        });

        $('#userpicture').attr('src','http://images.ziyawang.com'+UserPicture);
        $("#ServiceName").html('<b class="serWidth" title=' + ServiceName + '>'+ ServiceName + '</b>');
        // $('#ServiceNumber').html(ConnectPerson);

        var orderLevel = "<span class='disc'></span><span class='levels'><i class='iconfont'>&#xe60e;</i><em>" + ServiceLevel + "</em></span>";
        var location = "<span class='disc'></span><span class='locationCon'>所在地：</span>" + ServiceLocation;
        var secondary = "<span class='disc'></span><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont hearts' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span>";
        $('.orderLevel').html(orderLevel);
        $('.location').html(location);
        $('.secondary').html(secondary);
        $("#ServiceIntroduction").html(ServiceIntroduction);
        if(ConfirmationP1.length >0 ) {
            $('#ConfirmationP1').attr('src', 'http://images.ziyawang.com'+ConfirmationP1).attr('title', ServiceName).show();
        } else {
            $('#Confirmation').addClass('noImg');
        }
        if(ConfirmationP2.length >0 ) {
            $('#ConfirmationP2').attr('src', 'http://images.ziyawang.com'+ConfirmationP2).attr('title', ServiceName).show();
        }
        if(ConfirmationP3.length >0 ) {
            $('#ConfirmationP3').attr('src', 'http://images.ziyawang.com'+ConfirmationP3).attr('title', ServiceName).show();
        }

        var clmLeftHei = $('.clmLeft').height()/2;
        $('.clmLeft').css('margin-top', -clmLeftHei + 'px');
        var top1 = $('.clmleftProvince').offset().top;
        var top2 = $('.conleftMiddle1').offset().top;
        var topHei = top1-top2+20;
        // alert(top1)
        $('.moreArea').css({'top':topHei+'px'});
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
            if(insider != '1'){
                layer.alert('该服务方未办理会员，无法查看其联系方式');
                return false;
            }
            $("#check").html(ConnectPerson + ':' + ConnectPhone);
            $.ajax({
                url:"http://api.ziyawang.com/v1/count/service?access_token=token&token=" + token,
                type:"POST",
                data:{"ServiceID":ServiceID, "Channel":"PC"}
            })
            $(this).unbind('click');
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
var ServiceID = window.location.pathname.replace(/[^0-9]/ig,"");
$('#change').click(function(){
    //相关服务方
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/match/service?access_token=token&ServiceID=' + ServiceID,  
        type: 'GET',  
        dataType: 'json',
        asycn: false,  
        timeout: 5000,  
        cache: false,
        // beforeSend: LoadFunction, //加载执行方法    
        // error: erryFunction,  //错误执行方法    
        success: function (tt){
            $('#match').html('');
            json = eval(tt);
            var data = json.data;    
            $.each(data, function (index, item) {  
                //循环获取数据
                var ServiceName = data[index].ServiceName;   //服务方名称
                var ViewCount = data[index].ViewCount;   //浏览次数
                var CollectCount = data[index].CollectCount;   //浏览次数
                var ConfirmationP1 = data[index].ConfirmationP1;    //服务商资质 
                var ServiceLocation = data[index].ServiceLocation;    //公司所在地 
                var ServiceLevel = data[index].ServiceLevel;    //服务等级 
                var ServiceIntroduction = data[index].ServiceIntroduction;    //服务地区
                if(ServiceIntroduction.length > 100) {
                    ServiceIntroduction = ServiceIntroduction.substr(0,100) + '...';
                }
                var ServiceType = data[index].ServiceType;    //服务类型
                // if(ServiceType.length > 10) {
                //     ServiceType = ServiceType.substr(0,10) + '...';
                // }
                var ServiceID = data[index].ServiceID;    //服务商ID
                $("#match").html($("#match").html() + "<li><div class='reconTop'><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconTopTitle'>" + ServiceName + "</a><div class='cue'><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></div></div><a href='http://ziyawang.com/service/" + ServiceID + "' class='recImg'><img title='" + ServiceName + "' src='http://images.ziyawang.com" + ConfirmationP1 + "' /></a><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconDescription'>" + ServiceIntroduction + "</a><div class='reconBottom'><span class='reconBottomCon'>服务类型</span>" + ServiceType + "</div><a href='http://ziyawang.com/service/" + ServiceID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>"); 
            });           
                   
        } //成功执行方法    
    }) 
});


$('.report').click(function(){
    var token = $.cookie('token');
    if(!token){
        // window.location = "{{url('/login')}}";
        window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes"); 
        return false;
    }
    $('.poplayer').show();
    $('.jubaoBox').show();
})

$('.reasons a').click(function(event) {
    $(this).parent().toggleClass('cur');
});

$('#reportpub').click(function(){
    var ReasonID = '';
    $('.reasons li').each(function(){
        if($(this).hasClass('cur')){
            ReasonID = ReasonID + ',' + $(this).attr('reasonid');
        }
    })
    if(ReasonID == ''){
        alert('您还没有选择理由呢！');
        return false;
    }
    var ServiceID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.cookie('token');
    $.ajax({
        url: "http://api.ziyawang.com/v1/report?access_token=token&token=" + token,
        type: "POST",
        data: {'ItemID':ServiceID, 'Type':2, 'ReasonID':ReasonID, 'Channel':'PC'},
        dataType: "json",
        timeout: 5000,  
        cache: false,
        success: function(msg){
            if(msg.status_code == "200"){
                layer.msg("举报成功!客服人员将尽快进行处理",{title:'提示',shade: 0.6});
                $('.poplayer').hide();
                $('.jubaoBox').hide();
            } else {
                layer.msg("异常，请刷新重试！");
                $('.poplayer').hide();
                $('.jubaoBox').hide();
            }
        }
    });
})

$('#reportcancel').click(function(){
    $('.poplayer').hide();
    $('.jubaoBox').hide();
})

</script>
@endsection