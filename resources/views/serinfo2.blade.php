@extends('layouts.home')

@section('seo')
<title>找服务_不良资产处置服务机构-资芽网</title>
        <meta name="Keywords" content="资产收购,投融资服务,法律服务,催收公司,不良资产处置服务机构,资芽网" />
        <meta name="Description" content="资芽网找服务，海量处置服务机构任你选，保理公司，认证资质；投融资服务，解你资金之急；资产债权收购方，诚心交易；急着催收没途径？催收公司，尽职调查，法律服务，三管齐下，保你债务无忧。" />
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/issueinfo.css')}}?v=2.0.3" />
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
        .layui-layer-btn{text-align: center;}
        .layui-layer-btn a{width: 108px;padding: 6px 0px 10px; background: #f4f4f4; border-radius: 5px; border-right: 2px; color: #000; box-shadow: 0 -5px 0 #bababa inset; position: relative;border: 0 none;margin: 0;font-size: 20px;margin: 0 20px;text-align: center;}
        .layui-layer-btn .layui-layer-btn0, .layui-layer-btn a:hover {background: #fdd000; box-shadow: 0 -5px 0 #b69600 inset; color: #000;border:none; }
    </style>
<!-- 二级banner -->
    <!-- banner/start -->
    <div class="findInfo">
        <ul>
            <li></li>
        </ul>
    </div>
    <!-- banner/end -->
    <div class="clearfix section serve-role">
        <div class="secLeft fl">
            <div class="indiv-top">
                <h2 class="headline"><span class="fl sub-title">{{$service['ServiceName']}}</span><span class="serial">{{$service['ServiceNumber']}}</span></h2>
                <div class="sm-feature">
                    @if(isset($service['CollectFlag']) && $service['CollectFlag'] == 1)
                    <a href="javascript:;" class="storeup" id="collect"><i class="iconfont peach" style="color:#f00">&#xe601;</i><span>已收藏</span></a>
                    @else
                    <a href="javascript:;" class="storeup" id="collect"><i class="iconfont peach">&#xe601;</i><span>收藏</span></a>
                    @endif
                    <div class="shareBox">
                        <div class="jiathis_style_32x32">
                            <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank">分享</a>
                        </div>
                    </div>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script><script type="text/javascript" src="http://v3.jiathis.com/code/plugin.client.js" charset="utf-8"></script>
                    <a href="javascript:;" class="report">举报</a>
                    <span class="pageview" title="浏览量"><i class="iconfont">&#xe603;</i>{{$service['ViewCount']}}</span>
                    <span class="collection" title="收藏量"><i class="iconfont">&#xe601;</i>{{$service['CollectCount']}}</span>
                </div>
            </div>
            <div class="indiv-main clearfix">
                <div class="server-star">
                    @foreach($service['showlevelarr'] as $n=>$level)
                        @if($n == 1)
                            @if($level == 2)
                                <a href="javacript:;" class="server-jin" title="保证金认证"></a>
                            @else
                                <a href="javacript:;" class="jin" title="保证金认证"></a>
                            @endif
                        @endif
                        @if($n == 2)
                            @if($level == 2)
                                <a href="javacript:;" class="server-shidi" title="实地认证"></a>
                            @else
                                <a href="javacript:;" class="shidi" title="实地认证"></a>
                            @endif
                        @endif
                        @if($n == 3)
                            @if($level == 2)
                                <a href="javacript:;" class="server-shipin" title="视频认证"></a>
                            @else
                                <a href="javacript:;" class="shipin" title="视频认证"></a>
                            @endif
                        @endif
                        @if($n == 4)
                            @if($level == 2)
                                <a href="javacript:;" class="server-nuo" title="承诺书认证"></a>
                            @else
                                <a href="javacript:;" class="nuo" title="承诺书认证"></a>
                            @endif
                        @endif
                        @if($n == 5)
                            @if($level == 2)
                                <a href="javacript:;" class="server-sanzh" title="三证认证"></a>
                            @else
                                <a href="javacript:;" class="sanzh" title="三证认证"></a>
                            @endif
                        @endif
                    @endforeach
                </div>
                <div class="fl headshot">
                    <img src="http://images.ziyawang.com/{{$service['UserPicture']}}" class="headshotImg" />
                    <span class="nickname" title="{{$service['ConnectPerson']}}">{{$service['ConnectPerson']}}</span>
                </div>
                <div class="fr indiv-con">
                    <div class="triangle-left"></div>
                    <div class="loan">
                        <ul class="loan-l fl">
                            <li class="loan-l-name" title="{{$service['ServiceName']}}"><span>企业名称：</span>{{$service['ServiceName']}}</li>
                            <li><span>所在地：</span>{{$service['ServiceLocation']}}</li>
                            <li><span>规模：</span>@if($service['Size']>0) {{$service['Size']}}人 @else 未填写 @endif</li>
                            <li><span>注册资金：</span>@if($service['Founds']>0) {{$service['Founds']}}万 @else 未填写 @endif</li>
                            <li><span>成立时间：</span>@if($service['RegTime']>0) {{$service['RegTime']}} @else 未填写 @endif</li>
                        </ul>
                        <ul class="loan-r fr">
                            <li><span>联系人：</span><span class="click-chat" id="check">&gt;点击约谈</span></li>
                            <li>
                                <span>会员权限：</span>
                                <div class="member-type-icon">
                                @if(!isset($service['showrightarr'][0]))
                                    <em>无</em>
                                @else
                                    @foreach($service['showrightarr'] as $right)
                                        @if($right[0] == "资产包")
                                            <span class="bao" title="资产包VIP"></span>
                                        @endif
                                        @if($right[0] == "固定资产")
                                            <span class="gu" title="固定资产VIP"></span>
                                        @endif
                                        @if($right[0] == "个人债权")
                                            <span class="ge" title="个人债权VIP"></span>
                                        @endif
                                        @if($right[0] == "企业商账")
                                            <span class="qi" title="企业商账VIP"></span>
                                        @endif
                                        @if($right[0] == "融资信息")
                                            <span class="rong" title="融资信息VIP"></span>
                                        @endif
                                    @endforeach
                                @endif
                                </div>
                            </li>
                            <li><span>服务地区：</span><span class="server-area">{{$service['ServiceArea']}}</span></li>
                        </ul>
                    </div>
                    <div class="chat-count">约谈次数：{{$service['CheckCount']}}次</div>
                </div>
            </div>
            <div class="rests">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/server_type.png" />服务类型</h3>
                <div class="boxRest fr">
                    <ul class="rest-list">
                        @foreach($service['ServiceType'] as $type)
                        <li>{{$type}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="spot">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/server_com.png" />企业简介</h3>
                <div class="charact-con fr">
                {{$service['ServiceIntroduction']}}
                </div>
            </div>
            <div class="character">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/server_level.png" />星级认证</h3>
                <div class="charact-con fr">
                    <ul class="member-state">
                        @foreach($service['showlevelarr'] as $n=>$level)
                        @if($n == 1)
                            @if($level == 2)
                                <li><span class="server-jin icon-state"></span><strong>保证金：</strong><em class="wem1"></em><span class="member-state-desc">（已认证）</span></li>
                            @else
                                <li><span class="jin icon-state"></span><strong>保证金：</strong><em class="wem1"></em><span class="member-state-desc">（未认证）</span></li>
                            @endif
                        @endif
                        @if($n == 2)
                            @if($level == 2)
                                <li><span class="server-shidi icon-state"></span><strong>实地认证：</strong><span class="member-state-desc">（已认证）</span><span id="checksd" class="immediate-see">立即查看</span></li>
                            @else
                                <li><span class="shidi icon-state"></span><strong>实地认证：</strong><span class="member-state-desc">（未认证）</span></li>
                            @endif
                        @endif
                        @if($n == 3)
                            @if($level == 2)
                                <li><span class="server-shipin icon-state"></span><strong>视频认证：</strong><span class="member-state-desc">（已认证）</span><span id="checksp" class="immediate-see">立即查看</span></li>
                            @else
                                <li><span class="shipin icon-state"></span><strong>视频认证：</strong><span class="member-state-desc">（未认证）</span></li>
                            @endif
                        @endif
                        @if($n == 4)
                            @if($level == 2)
                                <li><span class="server-nuo icon-state"></span><strong>承诺认证：</strong><span class="member-state-desc">（已认证）</span><span id="checkcns" class="immediate-see">立即查看</span></li>
                            @else
                                <li><span class="nuo icon-state"></span><strong>承诺认证：</strong><span class="member-state-desc">（未认证）</span></li>
                            @endif
                        @endif
                        @if($n == 5)
                            @if($level == 2)
                                <li><span class="server-sanzh icon-state"></span><strong>三证认证：</strong><span class="member-state-desc">（已认证）</span><span id="checksz" class="immediate-see">立即查看</span></li>
                            @else
                                <li><span class="sanzh icon-state"></span><strong>三证认证：</strong><span class="member-state-desc">（未认证）</span></li>
                            @endif
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="relevant">
                <h3 class="charact-title">相关凭证</h3>
                <div class="proof">
                    <ul>
                        @if($service['PictureDes'])
                        @foreach($service['PictureDes'] as $picture)
                        <li><a href="javascript:;"><img src="http://images.ziyawang.com{{$picture}}" /></a></li>
                        @endforeach
                        @endif
                    </ul>
                    <a href="javascript:;" class="proof-l proof-btn"></a>
                    <a href="javascript:;" class="proof-r proof-btn"></a>
                </div>
            </div>
        </div>
        <div class="conRight">
        <div class="recommend">
            <h2 class="recommendTitle"><i class="iconfont"></i>相关服务<a href="javascript:;" class="changeAlot" id="change">换一换</a></h2>
            <div class="recommendCon">
                <ul id="match"><li><div class="reconTop"><a href="http://ziyawang.com/service/1044" class="reconTopTitle">北京艺苑资产管理有限公司</a><div class="cue"><i class="iconfont icon" title="浏览数"></i><span class="visitors" title="浏览数">36</span><i class="iconfont" title="收藏数"></i><span class="collectors" title="收藏数">0</span></div></div><a href="http://ziyawang.com/service/1044" class="recImg"><img title="北京艺苑资产管理有限公司" src="http://images.ziyawang.com/services/14811859605218.jpg"></a><a href="http://ziyawang.com/service/1044" class="reconDescription">艺苑资产管理公司成立于2015年12月，主营业务为资产管理、项目投资、投资咨询等</a><div class="reconBottom"><span class="reconBottomCon">服务类型</span>资产包收购、投融资服务、资产收购、债权收购</div><a href="http://ziyawang.com/service/1044" class="lookMore">查看内容&nbsp;&gt;</a></li><li><div class="reconTop"><a href="http://ziyawang.com/service/909" class="reconTopTitle">上海正佳商务咨询有限公司</a><div class="cue"><i class="iconfont icon" title="浏览数"></i><span class="visitors" title="浏览数">33</span><i class="iconfont" title="收藏数"></i><span class="collectors" title="收藏数">0</span></div></div><a href="http://ziyawang.com/service/909" class="recImg"><img title="上海正佳商务咨询有限公司" src="http://images.ziyawang.com/services/14784828738187.jpg"></a><a href="http://ziyawang.com/service/909" class="reconDescription">代客户求购资产，代客户寻找客户。</a><div class="reconBottom"><span class="reconBottomCon">服务类型</span>资产包收购、投融资服务、资产收购</div><a href="http://ziyawang.com/service/909" class="lookMore">查看内容&nbsp;&gt;</a></li><li><div class="reconTop"><a href="http://ziyawang.com/service/339" class="reconTopTitle">广东德纳（武汉）律师事务所</a><div class="cue"><i class="iconfont icon" title="浏览数"></i><span class="visitors" title="浏览数">52</span><i class="iconfont" title="收藏数"></i><span class="collectors" title="收藏数">0</span></div></div><a href="http://ziyawang.com/service/339" class="recImg"><img title="广东德纳（武汉）律师事务所" src="http://images.ziyawang.com/services/14725275819437.jpg"></a><a href="http://ziyawang.com/service/339" class="reconDescription">   德纳（武汉）律师事务所依托深圳总所的业务和管理资源，于2011年6月应运而生，坐落于武汉市武昌区和平大道750号-绿地国际金融城绿地蓝海A座802-810，隶属湖北省司法厅，以服务公司企业为宗...</a><div class="reconBottom"><span class="reconBottomCon">服务类型</span>资产包收购、催收机构、律师事务所、投融资服务、尽职调查</div><a href="http://ziyawang.com/service/339" class="lookMore">查看内容&nbsp;&gt;</a></li></ul>
            </div>
        </div>
    </div>
    </div>
    <div class="poplayer">
        <div class="jubaoBox">
            <div class="jubao">
                <h3>选择举报原因</h3>
                <ul class="reasons">
                    <li reasonid="1"><a href="javascript:;">已合作或已处置</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="2"><a href="javascript:;">虚假信息</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="3"><a href="javascript:;">泄露私密</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="4"><a href="javascript:;">垃圾广告</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="5"><a href="javascript:;">人身攻击</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="6"><a href="javascript:;">无法联系</a><a href="javascript:;" class="rightCheck"></a></li>
                </ul>
                <div class="btns2">
                    <a href="javascript:;" class="btnConfirm" id="reportpub">确定</a>
                    <a href="javascript:;" class="quxiao" id="reportcancel">取消</a>
                </div>
                <p class="ziyaHot">资芽网全国服务热线&nbsp;&nbsp;400-898-8557</p>
            </div>
        </div>
    </div>        
    </body>
</html>
<script type="text/javascript">
    $(function(){
        layer.config({
            extend: '{{asset("/org/layer/extend/layer.ext.js")}}'
        });
            var proofKey = 0;
            $('.proof ul li').eq(0).show(); 
            var proofLi = $('.proof ul li').length;
            var proofNum = proofLi - 1;
            var proofFn = function(){
                $('.proof ul li').eq(proofKey).fadeOut();
                proofKey++;
                if(proofKey > proofNum){
                    proofKey = 0;
                }
                $('.proof ul li').eq(proofKey).fadeIn();
            }
            var timer01 = null;
            timer01 = setInterval(proofFn,3000);
            $('.proof-r').click(function() {
                proofFn();
            });
            $('.proof-l').click(function() {
                $('.proof ul li').eq(proofKey).fadeOut();
                proofKey--;
                if(proofKey < 0){
                    proofKey = proofNum;
                }
                $('.proof ul li').eq(proofKey).fadeIn();
            });
            $('.proof').hover(function() {
                if(proofLi > 1 ){
                    $('.proof-btn').stop().fadeIn('fast');
                }
                clearInterval(timer01);
            }, function() {
                if(proofLi > 1 ){
                    $('.proof-btn').stop().fadeOut('fast');
                }
                timer01 = setInterval(proofFn,3000);
            });
    })
</script>
<script>
$(function () {
    var ServiceID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.cookie('token');
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

var token = $.cookie('token');
var stop = false;
var insider = "@if($service['right'] != '') 1 @else 2 @endif";

function checkLogin(){
    if(!token){
        // window.location = "{{url('/login')}}";
        window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes"); 
        stop = true;
        return false;
    }
}


function collect() {
    $.ajax({
        url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
        type:'POST',
        data:'itemID=' + ServiceID + '&type=4',
        dataType:'json',
        success:function(msg){
        }
    });
}

$("#collect").click(function(){
    checkLogin();
    if(stop){
        return false;
    }
    collect();
    if($(this).children('span').html()=='收藏'||$(this).children('span').html()=='取消收藏'){
        $(this).children('i').css('color', '#f00');
        $(this).children('span').html('已收藏');
    }else{
        $(this).children('i').css('color', '#d1d1d1');
        $(this).children('span').html('收藏');
    }
});

$("#check").click(function(){
    checkLogin();
    if(stop){
        return false;
    }
    if(insider.indexOf('1')<0){
        layer.alert('该服务方未办理会员，无法查看其联系方式',{title:false,closeBtn:0});
        return false;
    }
    layer.alert('{{$service["ConnectPerson"]}}:{{$service["ConnectPhone"]}}',{title:false,closeBtn:0});
    $.ajax({
        url:"http://api.ziyawang.com/v1/count/service?access_token=token&token=" + token,
        type:"POST",
        data:{"ServiceID":ServiceID, "Channel":"PC"}
    })
});

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


@if(isset($service['starsd'][0]) && $service['starsd'][0] != '')
//查看实地认证图片
$('#checksd').click(function(){
    var vjson = {
    "data": [
        @foreach($service['starsd'] as $n=>$v)
        {
          "src": "{{$v}}"
        },
        @endforeach
      ]
    }

    layer.photos({
        photos: vjson,shift: 0 
    });
})
@endif

@if($service['starvideo'] != '')
//查看视频认证视频
$('#checksp').click(function(){
    layer.open({
      type: 2,
      title: false,
      area: ['630px', '360px'],
      shade: 0.8,
      closeBtn: 0,
      shadeClose: true,
      content: '{{$service["starvideo"]}}'
    });
})
@endif

@if($service['starcns'] != '')
//查看承诺书认证图片
$('#checkcns').click(function(){
    var vjson = {
    "data": [
        {
          "src": "{{$service['starcns']}}"
        },
      ]
    }

    layer.photos({
        photos: vjson,shift: 0 
    });
})
@endif

@if(isset($service['starsz'][0]) && $service['starsz'][0] != '')
//查看三证认证图片
$('#checksz').click(function(){
    var vjson = {
    "data": [
        @foreach($service['starsz'] as $n=>$v)
        {
          "src": "{{$v}}"
        },
        @endforeach
      ]
    }

    layer.photos({
        photos: vjson,shift: 0 
    });
})
@endif
</script>
@endsection