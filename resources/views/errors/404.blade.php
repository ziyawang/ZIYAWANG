<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{url('css/base.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('css/wrong.css')}}" />
    </head>
    <body>
    <div class="wrong">
        <ul>
            <li class="li1"></li>
            <li class="li2"></li>
            <li class="li3"></li>
            <li class="li4"></li>
            <li class="li5"></li>
        </ul>
        <div class="wrongImg">
            <img src="/img/404.png" height="218" width="538" alt="404" />
            <div class="bad"><span>糟糕！</span>你要访问的页面跑到了火星</div>
            <div class="dao"><span id="five">5</span> 秒后自动帮您跳到首页</div>
            <a href="{{'/'}}" class="backhomeLink">www.ziyawang.com</a>
            <a href="{{'/'}}" class="backhomeBtn">返回首页</a>
            <span class="linkhome">www.ziyawang.com</span>
        </div>
    </div>
    </body>
</html>
<script type="text/javascript">
    var iTime = 4; 
    var intervalid; 
    intervalid = setInterval("jishi()", 1000); 
    function jishi() { 
        if (iTime == 0){ 
            window.location.href = "{{'/'}}"; 
            clearInterval(intervalid); 
        } 
        document.getElementById("five").innerHTML = iTime; 
        iTime--; 
    }
</script>