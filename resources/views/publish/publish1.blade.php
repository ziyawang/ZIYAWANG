@extends('layouts.publish')
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
        <!-- <h2>资产包转让</h2>
        <div class="ucrightTop">
            <p class="infoText"><span>请认真阅读以下文字：</span>服务方需要全面了解您发布的信息，请您务必认真填写。我们会保护您的隐私，关键信息我们会做模糊处理。<span>提示：带星号（*）的为必填项；您的信息填写越完整，将会吸引更多服务方和您约谈，为您服务！</span></p>
        </div>
        <h3 class="selectiveType re_title"><span>介绍说明</span></h3> -->
            <div class="asset">
                <div class="asset-con">
                    <h2 class="asset-title"><span>资产包</span><a href="javascript:;" class="depute">委托发布</a></h2>
                    <div class="asset-main txtleft">
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>请选择身份：</span>
                            <select name="Identity" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="项目持有者">项目持有者</option>
                                <option value="FA（中介）">FA（中介）</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>卖家类型：</span>
                            <select name="FromWhere" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="银行">银行</option>
                                <option value="非银行机构">非银行机构</option>
                                <option value="企业">企业</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>资产包类型：</span>
                            <select name="AssetType" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="抵押">抵押</option>
                                <option value="信用">信用</option>
                                <option value="综合">综合</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>地区：</span>
                            <span class="region">
                                <select class="row-select bitian" id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                                <select class="row-select bitian" id="seachcity"></select>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>总金额：</span>
                            <input name="TotalMoney" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="intrest(this,this.value)" /><span class="tag">万元（本加利）</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>本金：</span>
                            <input name="Money" type="text" class="inps" placeholder="请输入数字" onkeyup="intrest(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>利息：</span>
                            <input name="Rate" type="text" class="inps zllintrest" readonly="readonly"/><span class="tag">万元</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>意向转让价：</span>
                            <input name="TransferMoney" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        
@endsection
@section('list')
<!-- 资产包清单上传 -->
<input type="hidden" name="AssetList" id="qd">
<input type="hidden" id="year" name="Time">
            <div class="row">
                <span class="row-left"><em class="must">*</em>上传清单：</span>
                <div class="upload">
                    <span class="fileinput-button">
                                    <em id="listname">选择资料</em>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="list_upload" type="file" name="files[]" data-url="{{url('/ucenter/uploadfile')}}" multiple >
                    </span>               
                </div>
                <p class="dib">支持word文档和excel表格格式，文件大小不超过5M，如果有多个文件，请上传压缩包</p>
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
</div>
</div>

@endsection

@section('tips')
注：请上传部分清单复印件或照片，1-5张，每张大小限制2M
@endsection


@section('qingdan')
    $("#noqd").html('');
    if($('#qd').val() == ''){
        $("#noqd").html('你还没有上传清单呢~');
        return;
    }
@endsection

@section('pingzheng')
    $("#nopz").html('');
    if($('#pz').val() == ''){
        $("#nopz").html('你还没有上传凭证呢~');
        return;
    }
@endsection
