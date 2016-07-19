@extends('layouts.home')
@section('content')
<div class="container">
	<form action="">
<select id="seachprov" name="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>&nbsp;&nbsp;
<select id="seachcity" name="homecity" onChange="changeCity(this.value,'seachdistrict','seachdistrict');"></select>&nbsp;&nbsp;
<span id="seachdistrict_div"><select id="seachdistrict" name="seachdistrict"></select></span>



		<p>来源：<input type="text" name="FromWhere" id=""></p>
		<p>总金额：<input type="text" name="TotalMoney" id=""></p>
		<p>转让价：<input type="text" name="TransferMoney" id=""></p>
		<p>资产包类型：<input type="text" name="AssetType" id=""></p>
		<p>文字描述：<input type="text" name="WordDes" id=""></p>
		<p>语音描述：<input type="text" name="VoiceDes" id=""></p>
<script src="{{asset('/org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/org/uploadify/uploadify.css')}}">
<style>
.uploadify{display:inline-block;}
.uploadify-button{border:none; border-radius:5px; margin-top:8px;}
table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
</style>
<th>上传凭的：</th>
<td>
    <input type="text" class="lg" id="filepath" name="art_thumb">
    <input id="file_upload" name="file_upload" type="file" multiple="true">
</td>
<img src="" id="thumb" alt="">
<script type="text/javascript">
    <?php $timestamp = time();?>
    $(function() {
        $('#file_upload').uploadify({
        	'fileTypeExts' : '*.gif; *.jpg; *.png',
            'buttonText' : '+',
            'formData'     : {
                'timestamp' : '<?php echo $timestamp;?>',
                '_token'     : "{{csrf_token()}}"
            },
            'swf'      : "{{asset('/org/uploadify/uploadify.swf')}}",
            'uploader' : "{{url('/ucenter/upload')}}",
            'onUploadSuccess' : function(file, data, response) {
                $('#filepath').val(data);
                $('#thumb').attr('src', data);
                console.log(data);
            }
        });
    });
</script>



		<p>上传资产包清单：<input type="text" name="AssetList" id=""></p>
		<p><input type="hidden" name="TypeID" id="TypeID" value="1"></p>
		<p><input type="hidden" name="access_token" value="token"></p>
		<p><input type="hidden" name="token" id="token" value=""></p>
	</form>
	<p><button id="pub">确认上传</button></p>
</div>
<script>
$(function (){
	initComplexArea('seachprov', 'seachcity', 'seachdistrict', area_array, sub_array);
});

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