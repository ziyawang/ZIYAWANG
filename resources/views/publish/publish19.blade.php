@extends('layouts.publish')
@section('title')
<title>个人债权</title>
@endsection
@section('content')
<!-- 右侧详情 -->
<style>
    #uploadifive-list_upload{height: 30px!important;line-height: 30px!important;border-radius: 25px;background: #e48013;color: #fff;}
</style>
            <!-- right / start -->
            <div class="individual">
                <div class="indiv-con">
                    <h2 class="indiv-title"><span>个人债权</span><a href="javascript:;" class="depute">委托发布</a></h2>
                    <div class="indiv-main">
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>请选择身份：</span>
                            <select name="Identity" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="项目持有者">项目持有者</option>
                                <option value="FA（中介）">FA（中介）</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>总金额：</span>
                            <input name="TotalMoney" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元（本加利）</span>
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
                            <span class="row-left"><em class="must">*</em>债权人所在地：</span>
                            <span class="region">
                                <select class="row-select bitian" id="seachprov1" onChange="changeComplexProvince(this.value, sub_array, 'seachcity1', 'seachdistrict');"></select>
                                <select class="row-select bitian" id="seachcity1"></select>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>债务人所在地：</span>
                            <span class="region">
                                <select class="row-select bitian" id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                                <select class="row-select bitian" id="seachcity"></select>
                            </span>
                        </div>
                        <h3 class="subtitle">其他</h3>
                        <div class="sub-row">
                            <span class="row-left">是否有担保：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Guaranty" value="是" type="radio" class="radios" id="yes01" /></span>
                                    <label for="yes01" class="inp-label">是</label><em class="wem29"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Guaranty" value="否" type="radio" class="radios" id="no01" /></span>
                                    <label for="no01" class="inp-label">否</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">是否有抵押：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Property" value="是" type="radio" class="radios" id="yes02" /></span>
                                    <label for="yes02" class="inp-label">是</label><em class="wem29"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Property" value="否" type="radio" class="radios" id="no02" /></span>
                                    <label for="no02" class="inp-label">否</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">债务人是否失联：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Connect" value="是" type="radio" class="radios" id="yes03" /></span>
                                    <label for="yes03" class="inp-label">是</label><em class="wem29"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Connect" value="否" type="radio" class="radios" id="no03" /></span>
                                    <label for="no03" class="inp-label">否</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">债务人是否有偿还能力：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Pay" value="是" type="radio" class="radios" id="yes04" /></span>
                                    <label for="yes04" class="inp-label">是</label><em class="wem29"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Pay" value="否" type="radio" class="radios" id="no04" /></span>
                                    <label for="no04" class="inp-label">否</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">相关凭证是否齐全：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Credentials" value="是" type="radio" class="radios" id="yes05" /></span>
                                    <label for="yes05" class="inp-label">是</label><em class="wem29"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Credentials" value="否" type="radio" class="radios" id="no05" /></span>
                                    <label for="no05" class="inp-label">否</label>
                                </div>
                            </span>
                        </div>
                        <h3 class="subtitle">项目亮点</h3>
                        <div class="spot">
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="佣金比例高" type="checkbox" class="radios" id="check01" /></span>
                                <label class="inp-label" for="check01">佣金比例高</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="法律关系明确" type="checkbox" class="radios" id="check02" /></span>
                                <label class="inp-label" for="check02">法律关系明确</label>
                            </div>
                        </div>
<input type="hidden" name="DebteeLocation" id="zqr">

                        <script>
                            $(function(){
                                initComplexArea('seachprov1', 'seachcity1', area_array, sub_array, '0', '0', '0');
                            })
                        </script>
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

@section('zqr')
var areaIDtwo = getAreaIDtwo();
var DebteeLocation =  getAreaNamebyID(areaIDtwo);
$('#zqr').val(DebteeLocation);
@endsection