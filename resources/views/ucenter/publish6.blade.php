@extends('layouts.ucenter')
@section('title')
<title>融资需求</title>
@endsection
@section('content')
<!-- 右侧详情 -->
    <div class="ucRight">
        <div class="ucRightCon re_ucright_con">
        <h2>融资需求</h2>
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
        			<em>*</em>方式：
        		</span>
        		<div class="ec_right">
        			<select name="AssetType" id="">
	        			<option value="null">请选择</option>
	        			<option value="抵押">抵押</option>
                        <option value="质押">质押</option>
                        <option value="租赁">租赁</option>
                        <option value="过桥">过桥</option>
                        <option value="信用">信用</option>
                        <option value="股权">股权</option>
                        <option value="担保">担保</option>
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
        			<input name="TotalMoney" type="number" placeholder="单位：万元" class="ec_input">
        		</div>
        	</div>
        	<!-- 回报率 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>回报率：
                </span>
                <div class="ec_right">
                    <input name="Rate" type="number" placeholder="单位：%" class="ec_input">
                </div>
                <span class="ec_pleft">
                    注：可接受的月化利息
                </span>
            </div>
@endsection

@section('tips')
相关凭证或照片，请上传图片，大小限制2M
@endsection