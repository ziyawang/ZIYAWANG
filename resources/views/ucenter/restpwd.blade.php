@extends('layouts.home')
@section('content')
<div class="container">
	<form action="">
		<p>新密码：<input type="password" name="password" id=""></p>
		<p>确认密码：<input type="password" name="repassword" id=""></p>
		<p><input type="hidden" name="access_token" value="token"></p>
		<p><input type="hidden" name="token" id="token" value=""></p>
	</form>
	<p><button id="pub">提交</button></p>
</div>
<script>
	$('#pub').click(function(){
		var token = $.session.get('token');
		// var TypeID = getNum(window.location.pathname);
		$('#token').val(token);
	 	var data = $('form').serialize();
	 	console.log(data);
// return false;
		$.ajax({
			url:"http://api.ziyawang.com/api/auth/chpwd?token="+token,
			type:"POST",
			data:data,
			dataType:"json",
			success:function(msg){
				console.log(msg);
			}
		});
	});
</script>
@endsection