@extends('layouts.ucenter')
@section('title')
<title>投资需求</title>
@endsection
@section('content')
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>投资需求</h2>
        <p class="illustrate">
        	<span>请认真阅读以下文字：</span><br>服务方需要全面了解您发布的信息，请您认真填写。我们会保护您的隐私，关键信息我们会做模糊处理。带星号（*）的为必填项；您的信息填写越完整， 将会吸引更多服务方为您服务！<br>
        <h2 class="explain">介绍说明</h2>
        <div class="explain_choices">
        	<!-- 投资方式 -->
            <form action="">
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>投资方式：
        		</span>
        		<div class="ec_right">
        			<select name="InvestType" id="">
	        			<option value="null">请选择</option>
	        			<option value="债权">债权</option>
                        <option value="股权">股权</option>
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
        	<!-- 投资类型 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>投资类型：
                </span>
                <div class="ec_right">
                    <select name="AssetType" id="">
                        <option value="null">请选择</option>
                        <option value="个人">个人</option>
                        <option value="企业">企业</option>
                        <option value="机构">机构</option>
                        <option value="其他">其他</option>
                    </select>
                </div>
            </div>
        	<!-- 回报率 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>预期回报率：
                </span>
                <div class="ec_right">
                    <input name="Rate" type="number" placeholder="单位：%" class="ec_input">
                </div>
                <span class="ec_pleft">
                    注：年化
                </span>
            </div>
            <!-- 投资期限 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>投资期限
                </span>
                <div class="ec_right">
                    <select name="Year" id="">
                        <option value="null">请选择</option>
                        <option value="1">1年</option>
                        <option value="2">2年</option>
                        <option value="3">3年</option>
                        <option value="4">4年</option>
                        <option value="5">5年</option>
                        <option value="6">6年</option>
                        <option value="7">7年</option>
                        <option value="8">8年</option>
                        <option value="9">9年</option>
                        <option value="10">10年</option>
                    </select>
                </div>
            </div>
@endsection

@section('tips')
相关凭证或照片，请上传图片，大小限制2M
@endsection
