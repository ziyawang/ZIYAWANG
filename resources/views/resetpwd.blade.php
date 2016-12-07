<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>资芽网</title>
    <link rel="stylesheet" href="{{asset('/css/register.css')}}" type="text/css">
    <meta name="viewport" content="width=1492">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{url('/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('/js/fs.js')}}"></script>
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
<style>
    .enrollError {
        margin-left: 42px;
        margin-top: -20px;
        display: block;
        color: red;
    }
</style>
</head>
<body>
    <div class="header">
        <div class="wrap">
            <div class="login">
                <h1 class="logo"><a href="{{url('/')}}"><img src="img/logo.png" height="68" width="172" alt="首页" /></a></h1>
                <p class="logo_word">全球不良资产超级综服平台</p>
                <span>欢迎登录</span>
            </div>
            <span class="arr"></span>
        </div>
    </div>
    <div class="sec">
        <div class="wrap">
            <div class="sec_reg sec_for">
                <h2>忘记密码</h2>
                <div class="sec_inp">
                    <form action="">
                        <p><input type="text" placeholder="请输入手机号" class="sec_tel" diy='1'></p>
                        <p class="test_code"><input type="text" placeholder="请输入验证码" class="sec_test" diy='1'><input type="button" style="width:110px;cursor: pointer;float:right;padding:0;" id="btn" value="获取验证码" class="get_test" /></p>
                        <p><input type="password" placeholder="请设置新密码" class="sec_pwd" diy='1'></p>
                        <p><input type="password" placeholder="请再输入一次密码" class="sec_pwd2" diy='1'></p>
                        <p><input type="button" id="login" value="登录" class="reg_btn btn"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footnav">
            <a href="{{'/'}}">首页</a>|<a href="{{'/aboutus'}}">关于我们</a>|<a href="connectus">联系我们</a>|<a href="javascript:;">人才招聘</a>|<a href="javascript:;">商务合作</a>|<a href="{{'/legal'}}">法律声明</a>|<a href="javascript:;">意见反馈</a>
        </div>
        <p>Copyright&copy;ziyawang.com<a href="#">资芽网</a>京ICP备16037201号</p>
    </div>
</body>
</html>
<script>

$(function(){
    var token = $.cookie('token');
    if(token){
        window.location.href = "http://ziyawang.com/ucenter/index";
    }
})

function _checkInput(T){
    var stop = false;
    $("input[diy='1']").each(function(){
        $parent=$(this).parent();
        $parent.parent().find("span").remove();
        if($(this).val()==""){
            $parent.after("<span class='enrollError'>此项必填！</span>");
            stop = true;
            return false;
        }
    });

    if(stop){
        return;
    }

    permission = 1;
}
$('.get_test').click(function(){
    var phonenumber = $(".sec_tel").val();
    var reg = /^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
    if(reg.test(phonenumber)){
        $.ajax({
            url:"http://api.ziyawang.com/v1/ie/auth/getsmscode",
            type:"GET",
            data:"phonenumber=" + phonenumber + "&access_token=token&action=login",
            dataType:"json",
            success:function(msg){
                if(msg.status_code == 406){
                    alert('手机号码不存在！');
                }
                if(msg.status_code == 200){
                    $(".get_test").attr('disabled',true);
                    time(this);  
                }
            }
        });
    } else {
        alert('请填写正确的手机号！');
    }
});

var permission = 0;
$('#login').click(function(){
    _checkInput();
    if(permission != 1){
        return;
    }
    var phonenumber = $(".sec_tel").val();
    var password = $(".sec_pwd").val();
    var repwd = $(".sec_pwd2").val();
    var smscode = $(".sec_test").val();
    var reg = /^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
    if(!reg.test(phonenumber)){
        alert('请填写正确的手机号！');
        return false;
    }
    if ( password != repwd ) {
        alert('两次密码不一样！');
        return false;
    }
    $(this).val('登录中...');
    $.ajax({
        url:"http://api.ziyawang.com/v1/ie/auth/resetpwd",
        type:"GET",
        data:"phonenumber=" + phonenumber + "&password=" + password + "&smscode=" + smscode + "&access_token=token",
        // dataType:'json',
        success:function(msg){
            console.log(msg);
            if(msg.status_code == "402"){
                alert('验证码错误，请重新输入！');
                $('#login').val('登录');
            }
            if(msg.token){
                alert('重置密码成功');
                var date = new Date();
                date.setTime(date.getTime() + (120 * 60 * 1000));
                if(msg.token){
                    // console.log(msg.token);
                    $.cookie('token', msg.token, { expires: date, path: '/', domain: '.ziyawang.com' });
                    $.cookie('role', msg.role, { expires: date, path: '/', domain: '.ziyawang.com' });
                    $.cookie('phonenumber', phonenumber, { expires: date, path: '/', domain: '.ziyawang.com' });
                    $.cookie('userid', msg.UserID, { expires: date, path: '/', domain: '.ziyawang.com' });
                    window.location.href = "http://ziyawang.com/ucenter/index";
                }
            }
        },
        error: function (a, b, c) {
            // console.log(b);
            $('#login').val('异常，请刷新重试！');
        }
    });
});
</script>
 <script type="text/javascript">
    //获取验证码60秒倒计时
    var wait=60;  
    function time() {  
        var o = document.getElementById("btn");
        if (wait == 0) {  
            o.removeAttribute("disabled");            
            o.value="验证码";  
            wait = 60;  
        } else {  
            o.setAttribute("disabled", true);  
            o.value= wait + "秒";  
            wait--;  
            setTimeout(function() {  
                time(o)  
            },  
            1000)  
        }  
    }  
    
</script>