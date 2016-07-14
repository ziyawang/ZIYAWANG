@extends('layouts.home')
@section('content')
<div class="container">
	<form action="">
		<p>债务人所在地：<input type="text" name="ProArea" id=""></p>
		<p>金额：<input type="text" name="TotalMoney" id=""></p>
		<p>状态：<input type="text" name="Status" id=""></p>
		<p>类型：<input type="text" name="AssetType" id=""></p>
		<p>佣金比例：<input type="text" name="Rate" id=""></p>
		<p>文字描述：<input type="text" name="WordDes" id=""></p>
		<p>语音描述：<input type="text" name="VoiceDes" id=""></p>
		<p>凭证上传：<input type="text" name="PictureDes" id=""></p>
		<p><input type="hidden" name="TypeID" id="TypeID" value=""></p>
		<p><input type="hidden" name="access_token" value="token"></p>
		<p><input type="hidden" name="token" id="token" value=""></p>
	</form>
	<p><button id="pub">确认上传</button></p>
</div>
<script>
	function getNum(text){
		var value = text.replace(/[^0-9]/ig,"");
		return value;
	}

	$('#pub').click(function(){
		var token = $.session.get('token');
		// var TypeID = getNum(window.location.pathname);
		token = token.replace(/\'/g,"");
		$('#TypeID').val(getNum(window.location.pathname));
		$('#token').val(token);
	 	var data = $('form').serialize();
	 	console.log(data);

		$.ajax({
			url:"http://api.ziyawang.com/api/project/create?token="+token,
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