@extends('layouts.ucenter')
@section('title')
<title>资产求购</title>
@endsection
@section('content')
<!-- 右侧详情 -->
    <div class="ucRight">
        <div class="ucRightCon re_ucright_con">
        <h2>资产求购</h2>
        <div class="ucrightTop">
            <p class="infoText"><span>请认真阅读以下文字：</span>服务方需要全面了解您发布的信息，请您认真填写。我们会保护您的隐私，关键信息我们会做模糊处理。带星号（*）的为必填项；您的信息填写越完整， 将会吸引更多服务方为您服务！</p>
        </div>
        <h3 class="selectiveType re_title"><span>介绍说明</span></h3>
        <div class="ucrightBottom">
        <div class="explain_choices">
        	<!-- 状态 -->
            <form action="">
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>求购类型：
        		</span>
        		<div class="ec_right">
        			<select name="AssetType" id="">
	        			<option value="null">请选择</option>
	        			<option value="土地">土地</option>
	        			<option value="房产">房产</option>
                        <option value="汽车">汽车</option>
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
                    <em>*</em>求购方：
                </span>
                <div class="ec_right">
                    <select name="Buyer" id="">
                        <option value="null">请选择</option>
                        <option value="个人">个人</option>
                        <option value="企业">企业</option>
                    </select>
                </div>
            </div>
@endsection


@section('tips')
合同/协议、借条/欠条、判决书原件的扫描件或照片，请上传图片，大小限制2M
@endsection