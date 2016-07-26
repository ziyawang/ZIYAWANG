<!DOCTYPE html>
<html>
    <head>
        <title>资芽网</title>
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('/js/jquery-session.js')}}"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/css/ziyawang.css')}}" />
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/js/Area.js')}}"></script>
        <script src="{{asset('/js/AreaData_min.js')}}"></script>
    </head>
<body>
<header>
    <!--顶部区域-->
    <div id="top">
    </div>
    <!--Header区域-->
    <div id="header">
        <nav class="header-container">
            <div>
                <section class="logo">
                    <ul>
                        <li>
                            <a href="/">
                                <img src="{{asset('/images/logo.png')}}" />
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="slogan">全球不良资产超级综服平台</section>
                <section class="menu">
                    <ul>
                        <li id="unlogin">
                            <a href="{{url('/register')}}">注册</a>
                            <a href="{{url('/login')}}">登录</a>
                        </li>
                        <li id="haslogin" style="display:none">
                            <a href="{{url('/ucenter')}}"></a>
                            <a href="javascript:" id="logout">退出</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}">
                                首页
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/project')}}">
                                找信息
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/service')}}">
                                找服务
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                新闻中心
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                资芽视频
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                合同下载
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </nav>
    </div>
</header>
<script>
    $(document).ready(function(){
        var phonenumber = $.session.get('phonenumber');
        // console.log(typeof(phonenumber));
        if(typeof(phonenumber)!="undefined") {
            $('#unlogin').hide();
            $('#haslogin').show();
            $($('a')[3]).text(phonenumber);
        }
    });

    $('#logout').click(function(){
        $.session.clear();
        $('#unlogin').show();
        $('#haslogin').hide();
        window.location = "{{url('/')}}";
    });
</script>
    @yield('content')

    <div id="footer">
        footer
    </div>
</body>
</html>

