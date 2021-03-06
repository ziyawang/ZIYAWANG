<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>资芽网-全球不良资产超级综服平台</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/base.css')}}?v=1.0.4" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/public.css')}}?v=1.0.4" /> 
        <link type="text/css" rel="stylesheet" href="{{asset('/css/index.css')}}?v=1.0.4" />

        <meta name="viewport" content="width=1492">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('/js/fs.js')}}"></script>
        <script src="{{url('/js/jquery.cookie.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/public.js')}}"></script>
    <script src="http://libs.cncdn.cn/jquery-ajaxtransport-xdomainrequest/1.0.3/jquery.xdomainrequest.min.js"></script>
        <script type="text/javascript" src="{{url('/js/jquery.pagination.js')}}"></script>
        <script type="text/javascript" src="{{url('/org/layer/layer.js')}}"></script>
    </head>
    <body>
    <div class="header">
        <div class="wrap">
                <div class="guide">
                    <a target="_blank" href="{{url('/ucenter/index')}}" class="personal">个人中心</a>
                    <a class="ziyaapp">APP下载<span class="ziya_ma"><img src="/img/ziyaapp.png" /></span></a>
                    <a href="javascript:;" class="weixin1">微信<span class="wx_ma"><img src="/img/wx.jpg" /></span></a>
                    <a href="#" class="weibo1">微博<span class="wb_ma"><img src="/img/wb.png" /></span></a>
                    <a target="_blank" href="{{url('/ucenter/mycollect')}}" class="mycol">我的收藏</a>
                </div>
                <div class="brum_login" style="display:none">
                        <a href="{{url('/login')}}" class="viplog" target="_blank">会员登录</a>
                        <a href="{{url('/register')}}" class="freereg" target="_blank">免费注册</a>
                </div>
                <!-- 登录后内容 -->
                <div class="after_login">
                    <a href="{{url('/ucenter/index')}}" class="number" id="phone"></a><a href="javascript:;" id="logout" class="back">退出</a>
                </div>
<!-- 登录退出状态 -->
<script>
    $(document).ready(function(){
         var phonenumber = $.cookie('phonenumber');
        // console.log(typeof(phonenumber));
        if(typeof(phonenumber)!="undefined") {
            phonenumber = phonenumber.replace(/\'/g,"");
            $('#unlogin').hide();
            $('.brum_login').hide();
            $('.personal').show();
            $('.after_login').show();
            $('#phone').text(phonenumber);
            $('.login').addClass('after');
        } else {
            $('#unlogin').show();
            $('.brum_login').show();
            $('.after_login').hide();
            $('.personal').hide();
        }
    });

     $('#logout').click(function(){
        $.removeCookie('token', { path: '/', domain: '.ziyawang.com' });
        $.removeCookie('phonenumber', { path: '/', domain: '.ziyawang.com' });
        $.removeCookie('role', { path: '/', domain: '.ziyawang.com' });
        $('#unlogin').show();
        $('#after_login').hide();
        $('.personal').hide();
        $('.login').removeClass('after');
        window.location = "{{url('/')}}";
    });
</script>
<!-- 登录退出状态 -->
                <ul class="nav">
                    <li id="index"><a href="{{url('/')}}">首页</a>|</li>
                    <li id="project"><a href="{{url('/project')}}">找信息</a>|</li>
                    <li id="service"><a href="{{url('/service')}}">找服务</a>|</li>
                    <li id="video"><a href="{{url('/video')}}">资芽视频</a>|</li>
                    <li id="news"><a href="{{url('/news')}}">新闻中心</a>|</li>
                    <li id="contract"><a href="{{url('/contract')}}">下载专区</a></li>
                </ul>
                <div class="login after">
                    <h1 class="logo"><a href="{{url('/')}}"><img src="/img/logo2.png" height="79" width="205" alt="首页" /></a></h1>
                    <p class="logo_word">全球不良资产超级综服平台<p>
                    
                    <span class="arr"></span>
                </div>
                <div class="arrow"></div>
                <div class="hotline">服务热线：
                    <span>400-898-8557</span>
                </div>
        </div>
    </div>
    <!-- 二级banner -->
    <div class="find_service">
        <ul>
            <li></li>
        </ul>
    </div>
<!-- 个人中心 -->
<div class="userContent clearfix">
    <!-- 个人中心侧边栏 -->
    <div class="ucLeft">
        <h2>个人中心</h2>
        <div class="ucleftHead">
            <a href="{{url('/ucenter/safe')}}"><img id="avatar" src="" /></a>
            <span id="nickname"></span>
        </div>
        <!-- ps: 有新的系统消息时redTips显示，没有新消息时隐藏 -->
        <div class="ucleftMiddle">
            <a href="{{url('/ucenter/message')}}" class="sysInfo" title="系统消息"><i class="iconfont">&#xe61c;</i><span id="msg"></span></a>
            <a href="{{url('/ucenter/money')}}" class="money" title="芽币金额"><span id="account"></span></a>
        </div>
        <div class="ucleftBottom">
            <ul>
                <li id="pubpro"><a href="{{url('/ucenter/index')}}"><i class="iconfont">&#xe61e;</i>发布信息</a></li>
                <li id="mypro"><a href="{{url('/ucenter/mypro')}}"><i class="iconfont">&#xe61a;</i>我的发布</a></li>
                <li id="confirm"><a href="{{url('/ucenter/confirm')}}"><i class="iconfont">&#xe60f;</i>服务方认证</a></li>
                <li id="myrush" style="display:none;"><a href="{{url('/ucenter/myrush')}}"><i class="iconfont">&#xe619;</i>我的约谈</a></li>
                <li id="money"><a href="{{url('/ucenter/money')}}"><i class="iconfont chongzhi">&#xe61f;</i>充值中心</a></li>
                <li id="safe"><a href="{{url('/ucenter/safe')}}"><i class="iconfont">&#xe61d;</i>安全中心</a></li>
                <li id="mycollect"><a href="{{url('/ucenter/mycollect')}}"><i class="iconfont">&#xe61b;</i>我的收藏</a></li>
            </ul>
        </div>
    </div>
<script>
    //导航样式
    $(function(){
        var Url = window.location.pathname;
        var index1 = $('#index1');
        var helper = $('#helper');
        var pubpro = $('#pubpro');
        var mypro = $('#mypro');
        var mycoo = $('#mycoo');
        var confirm = $('#confirm');
        var money = $('#money');
        var myrush = $('#myrush');
        var safe = $('#safe');
        var mycollect = $('#mycollect');
        if (Url.indexOf("index") >= 0) {
            pubpro.addClass("current");
        } else if (Url.indexOf("helper") >= 0 ) {
            helper.addClass("current");
            
        } else if (Url.indexOf("pubpro") >= 0) {
            pubpro.addClass("current");
            
        } else if (Url.indexOf("mypro") >= 0) {
            mypro.addClass("current");
            
        } else if (Url.indexOf("myrush") >= 0) {
            myrush.addClass("current");
            
        } else if (Url.indexOf("confirm") >= 0) {
            confirm.addClass("current");
            
        } else if (Url.indexOf("money") >= 0) {
            money.addClass("current");
            
        } else if (Url.indexOf("safe") >= 0) {
            safe.addClass("current");
            
        } else if (Url.indexOf("mycollect") >= 0) {
            mycollect.addClass("current");
            
        }
    }); 
</script>
<script>
$(function(){
    var token = $.cookie('token');
        // var token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIzMyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0Nzk0NTQyIiwiZXhwIjoiMTQ3NTM5OTM0MiIsIm5iZiI6IjE0NzQ3OTQ1NDIiLCJqdGkiOiJmNmFhNDRhODA4ODBlZjAxNzE3NWJmYTZhNDczMWJiZCJ9.ho521A0Prh6LcNAPNcmQEF2H_VTQBXstSwf2m4yeXpA";

    if(!token){
        window.location = "{{url('/login')}}";
        return false;
    }
    var role = $.cookie('role');
    // console.log(role);
    if(role == 1){
        $("#myrush").show();
    }

    $('#container').show();
    $.ajax({
        url: 'http://api.ziyawang.com/v1/auth/me?access_token=token&token=' + token,
        type: 'POST',
        success:function(msg){
            var data = eval(msg);
            // console.log(data);
            var picture = data.user.UserPicture;
            var nickname = data.user.username;
            if(nickname.length<1){
                nickname = '未设置';
            }
            var account = data.user.Account;
            var phonenumber = data.user.phonenumber;
            var msgcount = data.MyMsgCount;
            $('#avatar, #avatar1').attr('src', 'http://images.ziyawang.com'+picture);
            $('#nickname, #nickname1').html(nickname);
            $('#account').html(account);
            $('#accounts').html(account);
            if(msgcount>0){
                $('#msg').addClass('redTips');
            }
            $('#_phonenumber').html('联系电话：'+phonenumber);
        }
    });
})
</script>

    @yield('content')

    <!-- 底部 -->
    <div class="foot">
        <div class="footer">
            <div class="botbrands">
                <a class="website" id="_pingansec_bottomimagesmall_brand" href="http://si.trustutn.org/info?sn=671160812023618276847&certType=1" target="_blank"><img src="http://v.trustutn.org/images/cert/brand_bottom_small.jpg"/></a>
                <a  key ="579ebe15efbfb033fb17ed33"  logo_size="96x36"  logo_type="business"  href="http://www.anquan.org" ><script src="//static.anquan.org/static/outer/js/aq_auth.js"></script></a>
                <a href="http://webscan.360.cn/index/checkwebsite/url/www.ziyawang.com" target="_blank"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/9cb32b38475b891e54655e56518a3b9e"/></a>
            </div>
            <div class="nav_foot">
                <a href="{{url('/')}}">首页</a>|<a href="{{url('/aboutus')}}">关于我们</a>|<a href="{{url('/connectus')}}">联系我们</a>|<a href="javascript:;">人才招聘</a>|<a href="javascript:;">商务合作</a>|<a href="{{url('/legal')}}">法律声明</a>
                <p>京ICP备16037201号  Copyright      2016 ziyawang.com</p>
            </div>
            <div class="conection">
                <p class="con_ziya">联系资芽</p>
                <p class="tel"><span></span>Tel：400 - 898 - 8557</p>
                <p class="fax"><span></span>Mail：ziyawang@ziyawang.com</p>
                <p class="address fs12">总部地址：</p><p class="mb10 fs12">北京市海淀区中关村大街15-15号创业公社 · 中关村</p><p class="fs12">国际创客中心B2-C15</p>
            </div>
            <img src="/img/footer.png" class="erwei">
        </div>
    </div>
    <script type="text/javascript" src="//s.union.360.cn/53727.js"></script>
    </body>



</html>