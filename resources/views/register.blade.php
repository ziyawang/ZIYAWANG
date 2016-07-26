<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>资芽网</title>
	<link rel="stylesheet" href="css/register.css" type="text/css">

	<script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/jquery-session.js')}}"></script>
    <script src="{{asset('/js/fs.js')}}"></script>
</head>
<body>
	<header>
		<div class="wrap">
			<div class="login">
                <h1 class="logo"><a href="{{url('/')}}"><img src="img/logo.png" height="68" width="172" alt="首页" /></a></h1>
                <p class="logo_word">全球不良资产超级综服平台</p>
                <span>欢迎注册</span>
            </div>
            <span class="arr"></span>
		</div>
	</header>
	<div class="sec">
		<div class="wrap">
			<div class="sec_reg">
				<h2>免费注册<a href="{{url('/login')}}" class="member">会员登录</a></h2>
				<div class="sec_inp">
					<form action="">
						<p><input type="text" placeholder="请输入手机号" class="sec_tel"></p>
						<p class="test_code"><input type="text" placeholder="请输入验证码" class="sec_test"><a class="get_test" href="javascript:;">获取验证码</a></p>
						<p><input type="password" placeholder="请输入密码" class="sec_pwd"></p>
						<p><input type="password" placeholder="请再输入一次密码" class="sec_pwd2"></p>
						<p><input type="button" value="注册" class="reg_btn btn" id="register"></p>
						<p class="agree_pro pp">同意《资芽网平台注册协议》</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="footnav">
			<a href="#">首页</a>|<a href="#">关注我们</a>|<a href="#">联系我们</a>|<a href="#">人才招聘</a>|<a href="#">商务合作</a>|<a href="#">法律声明</a>|<a href="#">意见反馈</a>
		</div>
		<p>Copyright&copy;ziyawang.com<a href="#">资芽网</a>京ICP备08007112号-1</p>
	</footer>
	<script>
    	$('.get_test').click(function(){
    		var phonenumber = $(".sec_tel").val();

    		$.ajax({
    			url:"http://api.ziyawang.com/v1/auth/getsmscode",
    			type:"POST",
        		data:"phonenumber=" + phonenumber + "&access_token=token&action=register",
        		dataType:"json",
        		success:function(msg){
        			if(msg.status_code == 405){
        				alert('号码已经注册！');
        			}
        			if(msg.status_code == 200){
        				$(".get_test").attr('disabled',true);
        			}
        		}
    		});
    	});

    	$('#register').click(function(){
    		var phonenumber = $(".sec_tel").val();
    		var password = $(".sec_pwd").val();
    		var repwd = $(".sec_pwd2").val();
    		var smscode = $(".sec_test").val();

    		if ( password != repwd ) {
    			alert('两次密码不一样！');
    			return false;
    		}
    		$.ajax({
    			url:"http://api.ziyawang.com/v1/auth/register",
    			type:"POST",
    			data:"phonenumber=" + phonenumber + "&password=" + password + "&smscode=" + smscode + "&access_token=token",
    			dataType:'json',
    			success:function(msg){
    				console.log(msg);
    				if(msg.token){
    					// console.log(msg.token);
    					$.session.set('phonenumber', "'"+ phonenumber +"'");
    					$.session.set('token', "'"+msg.token+"'");
    					window.location = "{{url('/')}}";
    				}
    			}
    		});
    	});
    </script>
</body>
</html>