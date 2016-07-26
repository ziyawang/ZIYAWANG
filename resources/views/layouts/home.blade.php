<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>资芽网</title>
        <link type="text/css" rel="stylesheet" href="{{asset('/css/base.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/public.css')}}" /> 

        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('/js/fs.js')}}"></script>
        <script src="{{asset('/js/jquery-session.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/public.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/contract.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/jquery.pagination.js')}}"></script>
    </head>
    <body>
    <header>
        <div class="wrap">
                <div class="guide">
                    <span id="haslogin" style="display:none;font:white;">
                        <a href="{{url('/ucenter/index')}}" id="phone"></a>
                        <a href="javascript:" id="logout">退出</a>
                    </span>
                    <a href="#">我的收藏</a>
                    <a href="#">联系客服</a>
                </div>
                <div class="brum_login">
                    <div id="unlogin" style="display:none;font:white;">
                        <a href="{{url('/login')}}" class="viplog">会员登录</a>
                        <a href="{{url('/register')}}" class="freereg">免费注册</a>
                    </div>
                </div>
<!-- 登录退出状态 -->
<script>
    $(document).ready(function(){
        var phonenumber = $.session.get('phonenumber');
        // console.log(typeof(phonenumber));
        if(typeof(phonenumber)!="undefined") {
            phonenumber = phonenumber.replace(/\'/g,"");
            $('#unlogin').hide();
            $('#haslogin').show();
            $('#phone').text(phonenumber);
        } else {
            $('#unlogin').show();
            $('#haslogin').hide();
        }
    });

    $('#logout').click(function(){
        $.session.clear();
        $('#unlogin').show();
        $('#haslogin').hide();
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
                    <li id="contract"><a href="{{url('/contract')}}">合同下载</a></li>
                </ul>
                <div class="login">
                    <h1 class="logo"><a href="{{url('/')}}"><img src="/img/logo.png" height="68" width="172" alt="首页" /></a></h1>
                    <p class="logo_word">全球不良资产超级综服平台<p>
                    
                    <span class="arr"></span>
                </div>
                <div class="arrow"></div>
                <div class="hotline">服务热线：<br/>
                    <span>400-000-9999</span>
                </div>
        </div>
    </header>

    @yield('content')

    <!-- 底部 -->
    <footer>
        <div class="footer">
            <div class="nav_foot">
                <a href="#">首页</a>|<a href="#">关注我们</a>|<a href="#">联系我们</a>|<a href="#">人才招聘</a>|<a href="#">商务合作</a>|<a href="#">法律声明</a>|<a href="#">意见反馈</a>
                <p>经营许可证：京ICP证150904号  Copyright      2016 ziyawang.com</p>
            </div>
            <div class="conection">
                <p class="con_ziya">联系资芽</p>
                <p class="tel"><span></span>Tel：400 - 000 - 9999</p>
                <p class="fax"><span></span>Fax：+86 10 - 1234 5678</p>
                <p class="address">总部地址：<br>北京市海淀区中关村国际创客中心A座725</p>
            </div>
            <img src="/img/footer.png" class="erwei">
        </div>
    </footer>
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