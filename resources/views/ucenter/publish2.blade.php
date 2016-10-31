@extends('layouts.ucenter')
@section('title')
<title>委外催收</title>
@endsection
@section('content')
<!-- 右侧详情 -->
    <div class="ucRight">
        <div class="ucRightCon re_ucright_con">
        <h2>委外催收</h2>
        <div class="ucrightTop">
            <p class="infoText"><span>请认真阅读以下文字：</span>服务方需要全面了解您发布的信息，请您务必认真填写。我们会保护您的隐私，关键信息我们会做模糊处理。<span>提示：带星号（*）的为必填项；您的信息填写越完整，将会吸引更多服务方和您约谈，为您服务！</span></p>
        </div>
        <h3 class="selectiveType re_title"><span>介绍说明</span></h3>
        <div class="ucrightBottom">
        <div class="explain_choices">
            <form action="">
        	<!-- 类型 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>类型：
                </span>
                <div class="ec_right">
                    <select name="AssetType" id="sel" onChange="getCity()">
                        <option value="null">请选择</option>
                        <option value="个人债权">个人债权</option>
                        <option value="银行贷款">银行贷款</option>
                        <option value="企业商帐">企业商帐</option>
                        <option value="其他">其他</option>
                    </select>
                </div>
            </div>
        	<!-- 城市二级联动 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>债务人所在地：
        		</span>
        		<div class="ec_right city">
                    <select id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                    <select id="seachcity"></select>
                </div>
        	</div>
        	<!-- 二级联动 / end -->
        	<!-- 状态 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>状态：
                </span>
                <div class="ec_right">
                    <select name="Status" id="">
                        <option value="null">请选择</option>
                        <option value="未诉讼">未诉讼</option>
                        <option value="已诉讼">已诉讼</option>
                    </select>
                </div>
            </div>
            
            <!-- 佣金比例 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>佣金比例：
                </span>
                <div class="ec_right">
                    <select name="Rate" id="choose">
                        <option value="1">请选择</option>
                    </select>
                </div>
                <span class="ec_pleft">
                    注：支付服务方费用
                </span>
            </div>

        	<!-- 金额 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>金额：
        		</span>
        		<div class="ec_right">
        			<input type="number" name="TotalMoney" placeholder="单位：万元" class="ec_input">
        		</div>
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

@section('must')
<em>*</em>
@endsection