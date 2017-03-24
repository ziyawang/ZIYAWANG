@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=2.1.7.1.1" />
    <!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon ucRightSafe">
            <h3 class="selectiveType security"><span>安全中心</span></h3>
            <div class="congratulation">
                <h4 class="rechargeBg">恭喜你，充值成功！</h4>
                <p><em class="orange second" id="czsuccess">3</em>秒后跳转页面至充值中心，如未跳转请点击<a href="javascript:;" class="orange">这里</a></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        //声明input昵称宽度随文字长度而变化
        var textWidth = function(text){ 
            var sensor = $('<pre>'+ text +'</pre>').css({display: 'none'}); 
            $('body').append(sensor); 
            var width = sensor.width()+20;
            sensor.remove(); 
            return width;
        };
    })
    //3秒倒计时
    var iTime = 3; 
    var intervalid; 
    intervalid = setInterval("fun()", 1000); 
    function fun() { 
        if (iTime == 0){ 
            window.location.href = "{{url('/ucenter/money')}}"; 
            clearInterval(intervalid); 
        }
        document.getElementById("czsuccess").innerHTML = iTime; 
        iTime--; 
    }
</script>
@endsection