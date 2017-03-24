@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=2.1.7.1.1" />
<!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon ucRightSafe">
            <h3 class="selectiveType security"><span>修改密码</span></h3>
            <div class="congratulation">
                <h4 class="rechargeBg">恭喜你，修改成功！</h4>
                <p><em class="orange second" id="second">3</em>秒后跳转页面至安全中心，如未跳转请点击<a href="{{url('/ucenter/safe')}}" class="orange">这里</a></p>
            </div>
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