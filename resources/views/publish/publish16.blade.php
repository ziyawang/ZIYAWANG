@extends('layouts.publish')
@section('title')
<title>固定资产</title>
@endsection
@section('content')
<!-- 右侧详情 -->
<style>
    #uploadifive-list_upload{height: 30px!important;line-height: 30px!important;border-radius: 25px;background: #e48013;color: #fff;}
</style>
            <!-- right / start -->
            <script>
                $(function(){
                    function getQueryString(key){
                        var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
                        var result = window.location.search.substr(1).match(reg);
                        return result?decodeURIComponent(result[2]):null;
                    }
                    var identity = getQueryString("identity")?getQueryString("identity"):"0";
                    var area = (getQueryString("area") && getQueryString("area")==null)?getQueryString("area"):"0";
                    $('#seachprov').val(area.substr(0,2));
                    changeComplexProvince(area.substr(0,2), sub_array, 'seachcity', 'seachdistrict');
                    $('#seachcity').val(area);
                    $('#identity').val(identity);
                })
            </script>
            <div class="fixed">
                <div class="fixed-con">
                    <h2 class="fixed-title"><span>固定资产</span><a href="javascript:;" class="depute">委托发布</a></h2>
                    <div class="fixed-main">
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>请选择身份：</span>
                            <select id="identity" name="Identity" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="项目持有者">项目持有者</option>
                                <option value="FA（中介）">FA（中介）</option>
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
                            <span class="row-left"><em class="must">*</em>标的物类型：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio opts" id="fangchan"><input name="AssetType" value="房产" type="radio" class="radios bitian" id="land" /></span>
                                    <label for="land" class="inp-label">房产</label><em class="wem2"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio opts checked"><input name="AssetType" value="土地" type="radio" class="radios bitian" id="house" /></span>
                                    <label for="house" class="inp-label">土地</label>
                                </div>
                            </span>
                            <script>
                                $(function(){
                                    $('#fangchan').click(function(){
                                        var identity = $('#identity').val();
                                        var areaID = getAreaID();
                                        window.location.href = "{{url('http://ziyawang.com/ucenter/pubpro/12')}}" + "?identity=" + identity + "&area=" + areaID;
                                    })
                                })
                            </script>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>规划用途：</span>
                            <select name="Usefor" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="工业">工业</option>
                                <option value="商业">商业</option>
                                <option value="住宅">住宅</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>面积：</span>
                            <input name="Area" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">平米</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>剩余使用年限：</span>
                            <input name="Year" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">年</span>
                        </div>
                        <div class="row" id="cwts">
                            <span class="row-left"><em class="must">*</em>转让方式：</span>
                            <span class="row-right">
                                <div class="property transfer">
                                    <span class="inp-radio"><input name="TransferType" value="产权转让" type="radio" class="radios bitian" id="transfer1" /></span>
                                    <label for="transfer1" class="inp-label">产权转让</label>
                                </div>
                                <div class="stock transfer">
                                    <span class="inp-radio"><input name="TransferType" value="股权转让" type="radio" class="radios bitian" id="transfer2" /></span>
                                    <label for="transfer2" class="inp-label">股权转让</label>
                                </div>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>转让价格：</span>
                            <input name="TransferMoney" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <h3 class="subtitle">其他</h3>
                        <div class="sub-row">
                            <span class="row-left">相关证件：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Credentials" value="有" type="radio" class="radios" id="yes01" /></span>
                                    <label for="yes01" class="inp-label">有</label><em class="wem3"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Credentials" value="无" type="radio" class="radios" id="no01" /></span>
                                    <label for="no01" class="inp-label">无</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">法律纠纷：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Dispute" value="有" type="radio" class="radios" id="yes02" /></span>
                                    <label for="yes02" class="inp-label">有</label><em class="wem3"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Dispute" value="无" type="radio" class="radios" id="no02" /></span>
                                    <label for="no02" class="inp-label">无</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">负债：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Debt" value="有" type="radio" class="radios" id="yes03" /></span>
                                    <label for="yes03" class="inp-label">有</label><em class="wem3"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Debt" value="无" type="radio" class="radios" id="no03" /></span>
                                    <label for="no03" class="inp-label">无</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">抵押担保：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Guaranty" value="有" type="radio" class="radios" id="yes04" /></span>
                                    <label for="yes04" class="inp-label">有</label><em class="wem3"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Guaranty" value="无" type="radio" class="radios" id="no04" /></span>
                                    <label for="no04" class="inp-label">无</label>
                                </div>
                            </span>
                        </div>
                        <div class="sub-row">
                            <span class="row-left">拥有全部产权：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio"><input name="Property" value="是" type="radio" class="radios" id="yes05" /></span>
                                    <label for="yes05" class="inp-label">是</label><em class="wem3"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio"><input name="Property" value="否" type="radio" class="radios" id="no05" /></span>
                                    <label for="no05" class="inp-label">否</label>
                                </div>
                            </span>
                        </div>
                        <h3 class="subtitle">项目亮点</h3>
                        <div class="spot">
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="可议价" type="checkbox" class="radios" id="check01" /></span>
                                <label class="inp-label" for="check01">可议价</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="位置优越" type="checkbox" class="radios" id="check02" /></span>
                                <label class="inp-label" for="check02">位置优越</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="折扣空间大" type="checkbox" class="radios" id="check03" /></span>
                                <label class="inp-label" for="check03">折扣空间大</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="有评估报告" type="checkbox" class="radios" id="check04" /></span>
                                <label class="inp-label" for="check04">有评估报告</label>
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
var transfertype = $('input:radio[name="TransferType"]:checked').val();
$('#cwts').find('p').remove();
if(!transfertype){
    $('#cwts').append("<p class='error'>您还没选呢~</p>");
    stop = true;
    return false;
}
if(stop){
    return;
}
    
@endsection