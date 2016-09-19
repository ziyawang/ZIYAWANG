<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>资芽网-全球不良资产超级综服平台</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/base.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/public.css')}}" /> 
        <link type="text/css" rel="stylesheet" href="{{asset('/css/index.css')}}" />

        <meta name="viewport" content="width=1492">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('/js/fs.js')}}"></script>
        <script src="{{url('/js/jquery.cookie.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/public.js')}}"></script>
    <script src="http://libs.cncdn.cn/jquery-ajaxtransport-xdomainrequest/1.0.3/jquery.xdomainrequest.min.js"></script>
        <script type="text/javascript" src="{{url('/js/jquery.pagination.js')}}"></script>
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
$(function () {
    var token = $.cookie('token');
    if(!token){
        // window.location = "{{url('/login')}}";
        return false;
    }

    var role = $.cookie('role');
    if(role == 1){
        $("#myrush").show();
    }

    $('#container').show();
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
    <!-- 主体 -->
    <div class="main wrap">
    <!-- 左侧导航 -->
        <div class="main_left">
            <h2>个人中心</h2>
            <ul>
                <li id="index1"><a href="{{url('/ucenter/index')}}">系统消息</a></li>
                <li id="helper"><a href="{{url('/ucenter/helper')}}">资芽助手</a></li>
                <li id="pubpro"><a href="{{url('/ucenter/pubpro')}}">发布信息</a></li>
                <li id="mypro"><a href="{{url('/ucenter/mypro')}}">我发布的</a></li>
                <li id="mycoo"><a href="{{url('/ucenter/mycoo')}}">我合作的</a></li>
                <li id="confirm"><a href="{{url('/ucenter/confirm')}}">服务方认证</a></li>
                <li id="mycollect"><a href="{{url('/ucenter/mycollect')}}">我收藏的</a></li>
                <li id="myrush" style="display:none"><a href="{{url('/ucenter/myrush')}}">我的抢单</a></li>
                <li id="safe"><a href="{{url('/ucenter/safe')}}">安全中心</a></li>
            </ul>
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
        var myrush = $('#myrush');
        var safe = $('#safe');
        var mycollect = $('#mycollect');
        if (Url.indexOf("index") >= 0) {
            index1.addClass("current");
        } else if (Url.indexOf("helper") >= 0 ) {
            helper.addClass("current");
            
        } else if (Url.indexOf("pubpro") >= 0) {
            pubpro.addClass("current");
            
        } else if (Url.indexOf("mypro") >= 0) {
            mypro.addClass("current");
            
        } else if (Url.indexOf("mycoo") >= 0) {
            mycoo.addClass("current");
            
        } else if (Url.indexOf("confirm") >= 0) {
            confirm.addClass("current");
            
        } else if (Url.indexOf("myrush") >= 0) {
            myrush.addClass("current");
            
        } else if (Url.indexOf("safe") >= 0) {
            safe.addClass("current");
            
        } else if (Url.indexOf("mycollect") >= 0) {
            mycollect.addClass("current");
            
        }
    }); 
</script>
        </div>

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