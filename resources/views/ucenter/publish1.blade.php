@extends('layouts.ucenter')
@section('title')
<title>资产包转让</title>
@endsection
@section('content')
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>资产包转让</h2>
        <p class="illustrate">
        	请认真阅读以下文字：<br>
			处置方需要全面了解您的资产情况，请您认真填写。我们会保护您的隐私，关键信息我们会做模糊处理。带星号（*）的为必填项；您的信息填写越完整，系统模拟评级越高，将会吸引更多处置方为您服务！<br>
			<span>建议：根据对处置方式的不同需求进行分类或分地域打包</span><br>
			请认真阅读以下文字：<br>
			<span>资产包信息 ( 选择处置方时，如被要求支付前期费用，请慎重 )</span>
        </p>
        <h2 class="explain">介绍说明</h2>
        <div class="explain_choices">
            <form action="">
        	<!-- 类型 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>资产包类型：
        		</span>
        		<div class="ec_right">
        			<select name="AssetType" id="">
	        			<option value="null">请选择</option>
	        			<option value="抵押">抵押</option>
	        			<option value="信用">信用</option>
	        			<option value="综合类">综合类</option>
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
        			<input type="number" class="ec_input" name="TotalMoney">
        		</div>
        	</div>
        	<!-- 转让价 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>转让价：
        		</span>
                <div class="ec_right">
                    <input type="number" class="ec_input" name="TransferMoney">
                </div>
                <span class="ec_pleft ecp_last">
                    注：请输入具体价格
                </span>
        	</div>
@endsection

@section('list')

        	<!-- 上传资产包清单 -->
        	<div class="ec clearfix">
        		<span class="ec_left">
        			<em>*</em>上传资产包清单：
        		</span>
        		<div class="ec_right upfile">
        			<input type="text" class="enter_box">
        			<input type="button" value="浏览..." class="uf_file" />
        			<input type="file" class="uf_file2 uf_file" >
        		</div>
        		<p class="ec_pleft ecp_last">文件要求：<br>支持word 文档和excel 表格格式，文件大小不超过6M</p>
        	</div>

@endsection

@section('tips')
合同/协议、借条/欠条、判决书原件的扫描件或照片
@endsection