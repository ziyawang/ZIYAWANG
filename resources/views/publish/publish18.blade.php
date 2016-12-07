@extends('layouts.publish')
@section('title')
<title>企业商帐</title>
@endsection
@section('content')
<!-- 右侧详情 -->
<style>
    #uploadifive-list_upload{height: 30px!important;line-height: 30px!important;border-radius: 25px;background: #e48013;color: #fff;}
</style>
            <!-- right / start -->
            <div class="enterprise">
                <div class="eprise-con">
                    <h2 class="eprise-title"><span>企业商账</span><a href="javascript:;" class="depute">委托发布</a></h2>
                    <div class="eprise-main">
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>请选择身份：</span>
                            <select name="Identity" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="项目持有者">项目持有者</option>
                                <option value="FA（中介）">FA（中介）</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>商账类型：</span>
                            <select name="AssetType" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="货款">货款</option>
                                <option value="工程款">工程款</option>
                                <option value="违约金">违约金</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>债权金额：</span>
                            <input name="Money" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元（本加利）</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>逾期时间：</span>
                            <input name="Month" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">月</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>处置方式及佣金：</span>
                            <div class="lawsuit judicial">
                                <span class="inp-radio"><input type="checkbox" class="radios bitian" id="lawradio" /></span>
                                <label for="lawradio" class="inp-label">诉讼</label>
                                <span class="ratio">佣金比例</span>
                                <select class="row-select hire" disabled="disabled" name="Law">
                                    <option value="0">请选择</option>
                                    <option value="10%-20%">10%-20%</option>
                                    <option value="20%-30%">20%-30%</option>
                                    <option value="30%-40%">30%-40%</option>
                                    <option value="40%以上">40%以上</option>
                                </select>
                            </div>
                            <div class="nonlaw judicial">
                                <span class="inp-radio"><input type="checkbox" class="radios bitian" id="nonradio" /></span>
                                <label for="nonradio" class="inp-label">非诉催收</label>
                                <span class="ratio">佣金比例</span>
                                <select class="row-select hire" disabled="disabled" name="UnLaw">
                                    <option value="0">请选择</option>
                                    <option value="10%-20%">10%-20%</option>
                                    <option value="20%-30%">20%-30%</option>
                                    <option value="30%-40%">30%-40%</option>
                                    <option value="40%以上">40%以上</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>债务方地区：</span>
                            <span class="region">
                                <select class="row-select bitian" id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                                <select class="row-select bitian" id="seachcity"></select>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>债务方企业性质：</span>
                            <select name="Nature" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="国企">国企</option>
                                <option value="央企">央企</option>
                                <option value="民营">民营</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>债务方经营情况：</span>
                            <select name="Status" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="正常运营">正常运营</option>
                                <option value="濒临倒闭">濒临倒闭</option>
                                <option value="倒闭">倒闭</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <h3 class="subtitle">其他</h3>
                        <div class="sub-row">
                            <span class="row-left">债权相关凭证：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Guaranty" value="有" type="radio" class="radios" id="yes01" /></span>
                                    <label for="yes01" class="inp-label">有</label><em class="wem1"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Guaranty" value="无" type="radio" class="radios" id="no01" /></span>
                                    <label for="no01" class="inp-label">无</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">债权涉诉情况：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="State" value="已诉" type="radio" class="radios" id="yes02" /></span>
                                    <label for="yes02" class="inp-label">已诉</label>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="State" value="未诉" type="radio" class="radios" id="no02" /></span>
                                    <label for="no02" class="inp-label">未诉</label>
                                </div>
                                <div class="judged">
                                    <span class="inp-radio"><input name="State" value="已判决" type="radio" class="radios" id="done" /></span>
                                    <label for="done" class="inp-label">已判决</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">债务方行业：</span>
                            <select name="Industry" class="row-select">
                                <option value="0">请选择</option>
                                <option value="IT|通信|电子|互联网">IT|通信|电子|互联网</option>
                                <option value="金融业">金融业</option>
                                <option value="房地产|建筑业">房地产|建筑业</option>
                                <option value="商业服务">商业服务</option>
                                <option value="贸易|批发|零售|租赁业">贸易|批发|零售|租赁业</option>
                                <option value="文体教育|工艺美术">文体教育|工艺美术</option>
                                <option value="生产|加工|制造">生产|加工|制造</option>
                                <option value="交通|运输|物流|仓储">交通|运输|物流|仓储</option>
                                <option value="服务业">服务业</option>
                                <option value="文化|传媒|娱乐|体育">文化|传媒|娱乐|体育</option>
                                <option value="能源|矿产|环保">能源|矿产|环保</option>
                                <option value="政府|非盈利机构">政府|非盈利机构</option>
                                <option value="农|林|牧|渔|其他">农|林|牧|渔|其他</option>
                            </select>
                        </div>
                        <h3 class="subtitle">项目亮点</h3>
                        <div class="spot">
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="债务方有偿还能力" type="checkbox" class="radios" id="check01" /></span>
                                <label class="inp-label" for="check01">债务方有偿还能力</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="法律关系明确" type="checkbox" class="radios" id="check02" /></span>
                                <label class="inp-label" for="check02">法律关系明确</label>
                            </div>
                        </div>
            <!-- right / end -->
@endsection
@section('tips')
部分清单复印件或照片，请上传图片，大小限制2M
@endsection
@section('pingzheng')
    $("#nopz").html('');
    if($('#pz').val() == ''){
        $("#nopz").html('你还没有上传凭证呢~');
        return;
    }
@endsection
@section('radio')
var susong = $('input:checkbox[id="lawradio"]:checked').val();
var feisus = $('input:checkbox[id="nonradio"]:checked').val();
var lawrate = $('select[name="Law"]').val();
var unlawrate = $('select[name="UnLaw"]').val();
if(susong == undefined){
    susong = false;
}
if(feisus == undefined){
    feisus = false;
}
if(lawrate == 0){
    lawrate = false;
}
if(unlawrate == 0){
    unlawrate = false;
}
console.log(susong+feisus+lawrate+unlawrate);
$('.nonlaw').find('p').remove();
if(!( (susong&&lawrate) || (feisus&&unlawrate) || (susong&&lawrate&&unlawrate&&lawrate) )){
    $('.nonlaw').append("<p class='error'>您还没填呢~</p>");
    stop = true;
    return false;
}
if(stop){
    return;
}

@endsection
