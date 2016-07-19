@extends('layouts.home')
@section('content')
<div class="container" style="display:none">
	<form action="">
		<p>我的头像：<input type="file" name="ProArea" id=""></p>
		<p>姓名：<input type="text" name="ConnectPerson" id=""></p>
		<p>联系方式：<input type="text" name="ConnectPhone" id=""></p>
		<p>企业名称：<input type="text" name="ServiceName" id=""></p>
		<p>企业简介：<textarea name="ServiceIntroduction" id="" cols="30" rows="10"></textarea></p>
		<p>企业所在地：<input type="text" name="ServiceLocation" id=""></p>
		<p>服务地区：<input type="text" name="ServiceArea" id=""></p>
		<p>服务类型：<input type="text" name="ServiceType" id=""></p>
		<p>凭证上传：<input type="file" name="ConfirmationP1" value=""></p>
		<p style="display:none">凭证上传：<input type="file" name="ConfirmationP2" value=""></p>
		<p style="display:none">凭证上传：<input type="file" name="ConfirmationP3" value=""></p>
		<p><input type="hidden" name="access_token" value="token"></p>
		<p><input type="hidden" name="token" id="token" value=""></p>
	</form>
	<p><button id="pub">提交</button></p>
</div>
<script>
$(function () {
	var token = $.session.get('token');
	if(!token){
		window.location = "{{url('/login')}}";
		return false;
	}

	$('.container').show();
});

	$('#pub').click(function(){
		var token = $.session.get('token');
		// var TypeID = getNum(window.location.pathname);
		$('#token').val(token);
	 	var data = $('form').serialize();
	 	console.log(data);
// return false;
		$.ajax({
			url:"http://api.ziyawang.com/api/service/confirm?token="+token,
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