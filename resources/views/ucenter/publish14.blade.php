@extends('layouts.ucenter')
@section('title')
<title>债权转让</title>
@endsection
@section('content')
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>债权转让</h2>
        <p class="illustrate">
        	<span>请认真阅读以下文字：</span><br>服务方需要全面了解您发布的信息，请您认真填写。我们会保护您的隐私，关键信息我们会做模糊处理。带星号（*）的为必填项；您的信息填写越完整， 将会吸引更多服务方为您服务！<br>
        </p>
        <h2 class="explain">介绍说明</h2>
        <div class="explain_choices">
        	<!-- 状态 -->
            <form action="">
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>类型：
        		</span>
        		<div class="ec_right">
        			<select name="AssetType" id="">
	        			<option value="null">请选择</option>
	        			<option value="个人">个人债权</option>
	        			<option value="企业">企业商帐</option>
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
            <!-- 金额 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>金额：
                </span>
                <div class="ec_right">
                    <input name="TotalMoney" placeholder="单位：万元" type="number" class="ec_input">
                </div>
            </div>
            <!-- 转让价 -->
            <!-- 金额 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>转让价：
                </span>
                <div class="ec_right">
                    <input name="TransferMoney" placeholder="单位：万元" type="number" class="ec_input">
                </div>
                <span class="ec_pleft">
                    注：请输入具体价格
                </span>
            </div>
@endsection


@section('tips')
合同/协议、借条/欠条、判决书原件的扫描件或照片，请上传图片，大小限制2M
@endsection


@section('pingzheng')
    $("#nopz").html('');
    if($('#pz').val() == ''){
        $("#nopz").html('你还没有上传凭证呢~');
        return;
    }
@endsection