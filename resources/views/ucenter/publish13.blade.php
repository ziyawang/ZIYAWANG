@extends('layouts.ucenter')
@section('title')
<title>资产求购</title>
@endsection
@section('content')
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>资产求购</h2>
        <p class="illustrate">
        	请认真阅读以下文字：<br>
			处置方需要全面了解您的资产情况，请您认真填写。我们会保护您的隐私，关键信息我们会做模糊处理。带星号（*）的为必填项；您的信息填写越完整，系统模拟评级越高，将会吸引更多处置方为您服务！<br>
			<span>建议：根据对处置方式的不同需求进行分类或分地域打包</span><br>
			请认真阅读以下文字：<br>
			<span>资产求购( 选择处置方时，如被要求支付前期费用，请慎重 )</span>
        </p>
        <h2 class="explain">介绍说明</h2>
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
合同/协议、借条/欠条、判决书原件的扫描件或照片
@endsection