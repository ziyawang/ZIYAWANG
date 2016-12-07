<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        @yield('seo')

        <link type="text/css" rel="stylesheet" href="{{asset('/css/base.css')}}?v=1.0.8" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/index.css')}}?v=1.0.8" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/public.css')}}?v=1.0.8" /> 


        <meta name="viewport" content="width=1492">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('/js/fs.js')}}"></script>
        <script src="{{url('/js/jquery.cookie.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/public.js')}}?v=1.0.8"></script>
        <script type="text/javascript" src="{{url('/js/contract.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/jquery.pagination.js')}}"></script>
        <script type="text/javascript" src="{{url('/org/layer/layer.js')}}"></script>
        
    <script src="http://libs.cncdn.cn/jquery-ajaxtransport-xdomainrequest/1.0.3/jquery.xdomainrequest.min.js"></script>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?68b543fbd583e0bc6eccb7d2adee8156";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    </head>
    <body>
        <div class="rec" style="width:0;height:0;overflow:hidden;">
        <img src="/img/rec.jpg" height="420" width="420" alt="" />
        </div>
    <div class="header">
        <div class="wrap">
                <div class="guide">
                    <a target="_blank" href="{{url('/ucenter/index')}}" class="personal">个人中心</a>
                    <a href="" class="ziyaapp">APP下载<span class="ziya_ma"><img src="/img/ziyaapp.png" /></span></a>
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
        $.removeCookie('userid', { path: '/', domain: '.ziyawang.com' });
        $('#unlogin').show();
        $('#after_login').hide();
        $('.personal').hide();
        $('.login').removeClass('after');
        $('')
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
                <p class="address fs12">总部地址：</p><p class="mb10 fs12">北京市海淀区中关村大街15-15号创业公社·中关村</p><p class="fs12">国际创客中心B2-C15</p>
            </div>
            <img src="/img/footer.png" class="erwei">
        </div>
    </div>
    
    <!-- // <script type="text/javascript" src="js/jquery.min.js"></script>
    // <script type="text/javascript" src="js/fs.js"></script> -->
    <script type="text/javascript" src="//s.union.360.cn/53727.js"></script>
    </body>

</html>


<script>
    //导航样式
    $(function(){
        var Url = window.location.pathname;
        var project = $('#project');
        var service = $('#service');
        var news = $('#news');
        var video = $('#video');
        var contract = $('#contract');
        if (Url.indexOf("project") >= 0) {
            project.addClass("current");
        } else if (Url.indexOf("service") >= 0 ) {
            service.addClass("current");
        }else if (Url.indexOf("news") >= 0) {
            news.addClass("current");
        } else if (Url.indexOf("video") >= 0) {
            video.addClass("current");
        } else if (Url.indexOf("contract") >= 0) {
            contract.addClass("current");
        }
    }); 
</script>