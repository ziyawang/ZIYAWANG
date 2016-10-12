@extends('layouts.ucenter')
@section('title')
<title>资产包转让</title>
@endsection
@section('content')
<!-- 右侧详情 -->
<style>
    #uploadifive-list_upload{height: 30px!important;line-height: 30px!important;border-radius: 25px;background: #e48013;color: #fff;}
</style>
<div class="ucRight">
    <div class="ucRightCon re_ucright_con">
        <h2>资产包转让</h2>
        <div class="ucrightTop">
            <p class="infoText"><span>请认真阅读以下文字：</span>服务方需要全面了解您发布的信息，请您认真填写。我们会保护您的隐私，关键信息我们会做模糊处理。带星号（*）的为必填项；您的信息填写越完整， 将会吸引更多服务方为您服务！</p>
        </div>
        <h3 class="selectiveType re_title"><span>介绍说明</span></h3>
        <div class="ucrightBottom">
            <div class="explain_choices">
            <form action="">
        	<!-- 类型 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>资产包类型：
        		</span>
        		<div class="ec_right">
        			<select name="AssetType" id="" >
	        			<option value="null">请选择</option>
	        			<option value="抵押">抵押</option>
	        			<option value="信用">信用</option>
                        <option value="综合类">综合类</option>
	        			<option value="其他">其他</option>
	        		</select>
	        	</div>
        	</div>
        	<!-- 城市二级联动 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>地区：
        		</span>
        		<div class="ec_right city">
					<select id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                    <select id="seachcity"></select>
				</div>
        	</div>
        	<!-- 二级联动 / end -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>来源：
        		</span>
        		<div class="ec_right">
	        		<select name="FromWhere" id="">
	        			<option value="null">请选择</option>
	        			<option value="银行">银行</option>
	        			<option value="非银行金融机构">非银行金融机构</option>
	        			<option value="企业">企业</option>
	        		</select>
        		</div>
        	</div>
        	<!-- 总金额 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>总金额：
        		</span>
        		<div class="ec_right">
        			<input type="number" placeholder="单位：万元" class="ec_input" name="TotalMoney">
        		</div>
        	</div>
        	<!-- 转让价 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>转让价：
        		</span>
                <div class="ec_right">
                    <input type="number" placeholder="单位：万元" class="ec_input" name="TransferMoney">
                </div>
                <span class="ec_pleft">
                    注：请输入具体价格
                </span>
        	</div>
@endsection
@section('list')
<!-- 资产包清单上传 -->
<input type="hidden" name="AssetList" id="qd">
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>上传资产包清单：
                </span>
                <div class="ec_right upload">
                    <span class="btn btn-success fileinput-button">
                    <span id="listname">选择文件</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="list_upload" type="file" name="files[]" data-url="{{url('/ucenter/uploadfile')}}" multiple >
                    </span>               
                </div>
                <p class="ec_pleft ecp_word longWord">文件要求：<br>支持word 文档和excel 表格格式，文件大小不超过5M，如果有多个文件，请上传压缩包</p>
            </div>
            <p id="noqd" style="margin-left:170px;" class="error"></p>

    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#list_upload').fileupload({
                dataType: 'json',
                limitMultiFileUploadSize : 10000,
                maxNumberOfFiles : 1,
                done: function (e, data) {
                    $.each(data.result.files, function (index, file) {
                        if(file.size > 0) {
                            $('input[name=AssetList]').val(file.name);
                            layer.msg('清单上传成功！');
                            $('#listname').html('文件已上传');
                            $('#list_upload').attr('disabled',true);
                        } else {
                            layer.msg('文件大小超过限制,上传失败！');
                        }
                    });
                }
            });
        });
    </script>
<!-- 资产包清单上传 -->

@endsection

@section('tips')
部分清单复印件或照片，请上传图片，大小限制2M
@endsection


@section('qingdan')
    $("#noqd").html('');
    if($('#qd').val() == ''){
        $("#noqd").html('你还没有上传清单呢~');
        return;
    }
@endsection

@section('pingzheng')
    //$("#nopz").html('');
    //if($('#pz').val() == ''){
    //    $("#nopz").html('你还没有上传凭证呢~');
    //    return;
    //}
@endsection