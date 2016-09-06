@extends('layouts.home')

@section('seo')
<title>资芽网找服务-海量不良资产处置服务机构</title>
        <meta name="Keywords" content="资产收购,投融资服务,法律服务,催收公司,不良资产处置服务机构,资芽网" />
        <meta name="Description" content="资芽网找服务，海量处置服务机构任你选，保理担保公司，认证资质；投融资服务，解你资金之急；资产债权收购方，诚心交易；急着催收没途径？催收公司，尽职调查，法律服务，三管齐下，保你债务无忧。" />
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/infomation.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="content clearfix">
    <div class="conLeft">
        <div class="conleftTop">
            <div class="cltTitle">
                <p id="ServiceName"><b></b></p>
                <div class="shareandstore">
                    <!-- 分享 -->
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
        <div class="conleftMiddle clearfix">
            <div class="clmLeft">
                <div class="clmleftTitle">
                    Type Of Service
                    <p>服务类型</p>
                </div>
                <div class="clmleftCon">
                    <div class="clmleftClassify">
                        <div class="classifyLeft">
                            <span id="ServiceType01" class="zlltype">资产包收购</span>
                            <span id="ServiceType03" class="zlltype">律师事务所</span>
                            <span id="ServiceType10" class="zlltype">尽职调查</span>
                            <span id="ServiceType12" class="zlltype">资产收购</span>
                            <span id="ServiceType04" class="zlltype">保理公司</span>
                        </div>
                        <div class="classifyRight">
                            <span id="ServiceType06" class="zlltype">投融资服务</span>
                            <span id="ServiceType05" class="zlltype">典当担保</span>
                            <span id="ServiceType14" class="zlltype">债权收购</span>
                            <span id="ServiceType02" class="zlltype">催收机构</span>
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
                    <a href="javascript:;" class="lookConnection1" id="check">查看联系方式</a>
                    <div class="headBox">
                        <a href="javascript:;" class="headPortrait">
                            <img id="userpicture" src="" />
                            <div class="zhe"></div>
                            <span class="privateChat" id="sound"><i class="iconfont">&#xe613;</i>私聊</span>
                        </a>
                        <span class="identifier" id="ServiceNumber"></span>
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
            <h2 class="recommendTitle"><i class="iconfont">&#xe612;</i>相关信息<a href="javascript:;" class="changeAlot" id="change">换一换</a></h2>
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
<!-- 弹层/end --><script>
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
                $("#match").html($("#match").html() + "<li><div class='reconTop'><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconTopTitle'>" + ServiceName + "</a><div class='cue'><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></div></div><a href='http://ziyawang.com/service/" + ServiceID + "' class='recImg'><img src='http://images.ziyawang.com" + ConfirmationP1 + "' /></a><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconDescription'>" + ServiceIntroduction + "</a><div class='reconBottom'><span class='reconBottomCon'>服务类型</span>" + ServiceType + "</div><a href='http://ziyawang.com/service/" + ServiceID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>"); 
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
        if(CollectFlag == 1){
            $('#collectinfo').html('<i class="iconfont heart red">&#xe601;</i><span>已收藏</span>')
        }

        //服务类型
        var typearr = new Array();
        typearr = ServiceType.split('、');
        $(typearr).each(function(index){
            $('span[class="zlltype"]').each(function(){
                if( $(this).text() == typearr[index]){
                    $(this).addClass('on');
                }
            })
        })

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
        $("#ServiceName").html('<b>'+ ServiceName + '</b>');
        $('#ServiceNumber').html(ServiceNumber);

        var orderLevel = "<span class='disc'></span><span class='already'><i class='iconfont'>&#xe60d;</i><em>已接" + CoNumber + "单</em></span><span class='levels'><i class='iconfont'>&#xe60e;</i><em>" + ServiceLevel + "</em></span>";
        var location = "<span class='disc'></span><span class='locationCon'>所在地：</span>" + ServiceLocation;
        var secondary = "<span class='disc'></span><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont hearts'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span>";
        $('.orderLevel').html(orderLevel);
        $('.location').html(location);
        $('.secondary').html(secondary);
        $("#ServiceIntroduction").html(ServiceIntroduction);
        if(ConfirmationP1.length >0 ) {
            $('#ConfirmationP1').attr('src', 'http://images.ziyawang.com'+ConfirmationP1).show();
        } else {
            $('#Confirmation').addClass('noImg');
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
                $("#match").html($("#match").html() + "<li><div class='reconTop'><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconTopTitle'>" + ServiceName + "</a><div class='cue'><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></div></div><a href='http://ziyawang.com/service/" + ServiceID + "' class='recImg'><img src='http://images.ziyawang.com" + ConfirmationP1 + "' /></a><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconDescription'>" + ServiceIntroduction + "</a><div class='reconBottom'><span class='reconBottomCon'>服务类型</span>" + ServiceType + "</div><a href='http://ziyawang.com/service/" + ServiceID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>"); 
            });           
                   
        } //成功执行方法    
    }) 
});


</script>
@endsection