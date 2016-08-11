<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>资芽网</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/base.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/index.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/public.css')}}" /> 


        <meta name="viewport" content="width=1492">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <script type="text/javascript" src="//s.union.360.cn/53727.js"></script>
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('/js/fs.js')}}"></script>
        <script src="{{asset('/js/jquery-session.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/public.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/contract.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/jquery.pagination.js')}}"></script>
        
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
                    <a href="javascript:;" class="weixin1">微信<span class="wx_ma"><img src="/img/wx.jpg" /></span></a>
                    <a href="#" class="weibo1">微博<span class="wb_ma"><img src="/img/wb.png" /></span></a>
                    <a target="_blank" href="{{url('/ucenter/mycollect')}}" class="mycol">我的收藏</a>
                </div>
                <div class="brum_login">
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
        var phonenumber = $.session.get('phonenumber');
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
        $.session.clear();
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
                    <li id="news"><a href="{{url('/news')}}">新闻中心</a>|</li>
                    <li id="video"><a href="{{url('/video')}}">资芽视频</a>|</li>
                    <li id="contract"><a href="{{url('/contract')}}">下载专区</a></li>
                </ul>
                <div class="login after">
                    <h1 class="logo"><a href="{{url('/')}}"><img src="/img/logo.png" height="68" width="172" alt="首页" /></a></h1>
                    <p class="logo_word">全球不良资产超级综服平台<p>
                    
                    <span class="arr"></span>
                </div>
                <div class="arrow"></div>
                <div class="hotline">服务热线：<br/>
                    <span>400-898-8557</span>
                </div>
        </div>
    </div>

    @yield('content')

    <!-- 底部 -->
    <div class="foot">
        <div class="footer">
            <div class="nav_foot">
                <a href="{{url('/')}}">首页</a>|<a href="{{url('/aboutus')}}">关于我们</a>|<a href="{{url('/connectus')}}">联系我们</a>|<a href="javascript:;">人才招聘</a>|<a href="javascript:;">商务合作</a>|<a href="{{url('/legal')}}">法律声明</a>
                <p>京ICP备16037201号  Copyright      2016 ziyawang.com</p>
            </div>
            <div class="conection">
                <p class="con_ziya">联系资芽</p>
                <p class="tel"><span></span>Tel：400 - 898 - 8557</p>
                <p class="fax"><span></span>Mail：ziyawang@ziyawang.com</p>
                <p class="address">总部地址：<br>北京市海淀区中关村大街15-15号创<br>业公社·中关村国际创客中心B2-C15</p>
            </div>
            <img src="/img/footer.png" class="erwei">
        </div>
    </div>
    <!-- // <script type="text/javascript" src="js/jquery.min.js"></script>
    // <script type="text/javascript" src="js/fs.js"></script> -->
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