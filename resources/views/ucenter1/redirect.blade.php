@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/safe.css')}}?v=1.0.4" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>修改密码</h2>
        <div class="congratulation">
            <h3>恭喜你，修改密码成功！</h3>
            <p><em class="orange second" id="second">3</em>秒后跳转页面至安全中心，如未跳转请点击<a href="{{url('/ucenter/safe')}}" class="orange">这里</a></p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        var url = document.referrer;
        if( url.indexOf(resetpwd) < 0){
            window.location.href = "{{url('/ucenter/index')}}"
        }
    })
    var i = 2; 
    var intervalid; 
    intervalid = setInterval("fun()", 1000); 
    function fun() { 
        if (i == 0){ 
            window.location.href = "{{url('/ucenter/safe')}}"; 
            clearInterval(intervalid); 
        } 
        document.getElementById("second").innerHTML = i; 
        i--; 
    } 
</script>
@endsection