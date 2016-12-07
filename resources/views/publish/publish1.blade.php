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
                    <div class="asset-main">
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>请选择身份：</span>
                            <select name="Identity" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="项目持有者">项目持有者</option>
                                <option value="FA（中介）">FA（中介）</option>
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
                            <span class="row-left"><em class="must">*</em>来源：</span>
                            <select name="FromWhere" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="银行">银行</option>
                                <option value="非银行机构">非银行机构</option>
                                <option value="企业">企业</option>
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
                            <input name="TotalMoney" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元（本加利）</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>转让价：</span>
                            <input name="TransferMoney" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <h3 class="subtitle">其他</h3>
                        <div class="row">
                            <span class="row-left">本金：</span>
                            <input name="Money" type="text" class="inps" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <div class="row">
                            <span class="row-left">利息：</span>
                            <input name="Rate" type="text" class="inps" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">户数：</span>
                            <input name="Counts" type="text" class="inps" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">户</span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">有无尽调报告：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input type="radio" class="radios" id="yes01" value="有" name="Report" /></span>
                                    <label for="yes01" class="inp-label">有</label><em class="wem1"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input type="radio" class="radios" id="no01" value="无" name="Report" /></span>
                                    <label for="no01" class="inp-label">无</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">出表时间：</span>
                            <select name="year1" class="row-select select-time"></select>
                            <select name="month1" class="row-select select-time"></select>
                            <select name="day1" class="row-select select-time"></select>
                        </div>
                        <div class="row clearfix mb0">
                            <span class="row-left fl">抵押物类型：</span>
                            <div class="mortge">
                                <div class="mortge-row">
                                    <span class="inp-radio"><input type="checkbox" class="radios" id="check01" value="土地" name="Pawn[]"  /></span>
                                    <label class="inp-label" for="check01">土地</label>
                                </div>
                                <div class="mortge-row">
                                    <span class="inp-radio"><input type="checkbox" class="radios" id="check02" value="住宅" name="Pawn[]" /></span>
                                    <label class="inp-label" for="check02">住宅</label>
                                </div>
                                <div class="mortge-row">
                                    <span class="inp-radio"><input type="checkbox" class="radios" id="check03" value="商业" name="Pawn[]" /></span>
                                    <label class="inp-label" for="check03">商业</label>
                                </div>
                                <div class="mortge-row">
                                    <span class="inp-radio"><input type="checkbox" class="radios" id="check04" value="厂房" name="Pawn[]" /></span>
                                    <label class="inp-label" for="check04">厂房</label>
                                </div>
                                <div class="mortge-row">
                                    <span class="inp-radio"><input type="checkbox" class="radios" id="check05" value="设备" name="Pawn[]" /></span>
                                    <label class="inp-label" for="check05">设备</label>
                                </div>
                                <div class="mortge-row">
                                    <span class="inp-radio"><input type="checkbox" class="radios" id="check06" value="其他" name="Pawn[]" /></span>
                                    <label class="inp-label" for="check06">其他</label>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="subtitle">项目亮点</h3>
                        <div class="spot">
                            <div class="spot-row">
                                <span class="inp-radio"><input type="checkbox" class="radios" id="check07" value="抵押足值" name="ProLabel[]" /></span>
                                <label class="inp-label" for="check07">抵押足值</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input type="checkbox" class="radios" id="check08" value="可拆包" name="ProLabel[]" /></span>
                                <label class="inp-label" for="check08">可拆包</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input type="checkbox" class="radios" id="check09" value="一手包" name="ProLabel[]" /></span>
                                <label class="inp-label" for="check09">一手包</label>
                            </div>
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
         new YMDselect('year1','month1','day1');

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
@section('shijian')
var year = $("select[name='year1']").val();
var month = $("select[name='month1']").val();
var day = $("select[name='day1']").val();
if(year != 0 && month != 0 && day != 0){
    $('#year').val(year+"年"+month+"月"+day+"日");
}
@endsection