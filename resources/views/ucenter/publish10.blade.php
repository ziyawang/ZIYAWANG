@extends('layouts.ucenter')
@section('title')
<title>尽职调查</title>
@endsection
@section('content')
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>尽职调查</h2>
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
	        			<option value="法律">法律</option>
	        			<option value="财务">财务</option>
                        <option value="税务">税务</option>
                        <option value="商业">商业</option>
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
                    <em>*</em>被调查方：
                </span>
                <div class="ec_right">
                    <select name="Informant" id="">
                        <option value="null">请选择</option>
                        <option value="企业">企业</option>
                        <option value="个人">个人</option>
                    </select>
                </div>
            </div>
@endsection

@section('tips')
相关凭证或照片，请上传图片，大小限制2M
@endsection