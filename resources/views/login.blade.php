<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>资芽网</title>
	<link rel="stylesheet" href="{{asset('/css/register.css')}}" type="text/css">

	<script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/jquery-session.js')}}"></script>
    <script src="{{asset('/js/fs.js')}}"></script>
</head>
<body>
	<header>
		<div class="wrap">
			<div class="login">
				<h1 class="logo"><a href="{{url('/')}}"><img src="/img/logo.png" height="68" width="172" alt="首页" /></a></h1>
				<p class="logo_word">全球不良资产超级综服平台</p>
				<span>欢迎登录</span>
			</div>
			<span class="arr"></span>
		</div>
	</header>
	<div class="sec">
		<div class="wrap">
			<div class="sec_reg sec_log">
				<h2>资芽会员<a href="{{url('register')}}" class="member">免费注册</a></h2>
				<div class="sec_inp">
					<form action="">
						<p><input type="text" placeholder="请输入手机号" class="sec_tel"></p>
						<p><input type="password" placeholder="请输入密码" class="sec_pwd"></p>
						<p class="freelog"><a href="#" class="agree_pro">30天内免登录</a><a href="#" class="forg">忘记密码？</a></p>
						<p><input type="button" value="登录" class="reg_btn btn" id="login"></p>
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
    	$('#login').click(function(){
    		var phonenumber = $(".sec_tel").val();
    		var password = $(".sec_pwd").val();

    		$.ajax({
    			url:"http://api.ziyawang.com/v1/auth/login",
    			type:"POST",
    			data:"phonenumber=" + phonenumber + "&password=" + password  + "&access_token=token",
    			dataType:'json',
    			success:function(msg){
    				if(msg.token){
    					// console.log(msg.token);
    					$.session.set('token', "'"+msg.token+"'");
    					$.session.set('phonenumber', "'"+ phonenumber +"'");
    					window.location = "{{url('/')}}";
    				}
    			}
    		});
    	});
    </script>
</body>
</html>