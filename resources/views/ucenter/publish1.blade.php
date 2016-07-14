@extends('layouts.home')
@section('content')
<div class="container">
	<form action="">
		<p>地区：<input type="text" name="ProArea" id=""></p>
		<p>来源：<input type="text" name="FromWhere" id=""></p>
		<p>总金额：<input type="text" name="TotalMoney" id=""></p>
		<p>转让价：<input type="text" name="TransferMoney" id=""></p>
		<p>资产包类型：<input type="text" name="AssetType" id=""></p>
		<p>文字描述：<input type="text" name="WordDes" id=""></p>
		<p>语音描述：<input type="text" name="VoiceDes" id=""></p>
		<p>凭证上传：<input type="text" name="PictureDes" id=""></p>
		<p>上传资产包清单：<input type="text" name="AssetList" id=""></p>
		<p><input type="hidden" name="TypeID" id="TypeID" value="1"></p>
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
		// var TypeID = getNum(window.location.pathname);
		// var ProArea = $("input[name = 'ProArea']").val();
		// var FromWhere = $("input[name = 'FromWhere']").val();
		// var TotalMoney = $("input[name = 'TotalMoney']").val();
		// var TransferMoney = $("input[name = 'TransferMoney']").val();
		// var AssetType = $("input[name = 'AssetType']").val();
		// var WordDes = $("input[name = 'WordDes']").val();
		// var VioceDes = $("input[name = 'VioceDes']").val();
		// var PictureDes = $("input[name = 'PictureDes']").val();
		// var AssetList = $("input[name = 'AssetList']").val();
		// var access_token = "token";
		var token = $.session.get('token');
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

		// $.ajax({
		// 	url:"http://api.ziyawang.com/api/auth/me?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS56aXlhd2FuZy5jb21cL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE0NjgzMDg3NTIsImV4cCI6MTQ2ODMxMjM1MiwibmJmIjoxNDY4MzA4NzUyLCJqdGkiOiJiYmYwYzRhMTVjYThiMzA5ZGUzNjE0MTI5ZGYxMmI2YyJ9.JtrCO3-HytabFNd_5EY5KbJCusVtKfMqcMeci7JP5Hw",
		// 	type:"POST",
		// 	data:"access_token=token",
		// 	dataType:"json",
		// 	success:function(msg){
		// 		console.log(msg);
		// 	}
		// });
	});
</script>
@endsection