@extends('layouts.publish')
@section('title')
<title>融资信息</title>
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
            <div class="finance">
                <div class="finance-con">
                    <h2 class="finance-title"><span>融资信息</span><a href="javascript:;" class="depute">委托发布</a></h2>
                    <div class="finance-main">
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>请选择身份：</span>
                            <select id="identity" name="Identity" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="项目持有者">项目持有者</option>
                                <option value="FA（中介）">FA（中介）</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>项目所在地：</span>
                            <span class="region">
                                <select class="row-select bitian" id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                                <select class="row-select bitian" id="seachcity"></select>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>融资方式：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio opts" id="zhaiquan"><input type="radio" class="radios bitian" id="land" name="AssetType" value="债权融资" /></span>
                                    <label for="land" class="inp-label">债权融资</label>
                                </div>
                                <div class="house">
                                    <span class="inp-radio opts checked"><input type="radio" class="radios bitian" id="house" name="AssetType" value="股权融资" /></span>
                                    <label for="house" class="inp-label">股权融资</label>
                                </div>
                                <script>
                                $(function(){
                                    $('#zhaiquan').click(function(){
                                        var identity = $('#identity').val();
                                        var areaID = getAreaID();
                                        window.location.href = "{{url('http://ziyawang.com/ucenter/pubpro/17')}}" + "?identity=" + identity + "&area=" + areaID;
                                    })
                                })
                            </script>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>融资金额：</span>
                            <input name="TotalMoney" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>出让股权比例：</span>
                            <input name="Rate" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">%</span>
                        </div>
                        <div class="row" id="cwts">
                            <span class="row-left"><em class="must">*</em>企业现状：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio opts"><input name="Status" type="radio" class="radios bitian" id="prim" value="初创期" /></span>
                                    <label for="prim" class="inp-label">初创期</label><em class="wem1"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio opts"><input name="Status" type="radio" class="radios bitian" id="grow" value="成长期" /></span>
                                    <label for="grow" class="inp-label">成长期</label><em class="wem1"></em>
                                </div>
                                <div class="other">
                                    <span class="inp-radio opts"><input name="Status" type="radio" class="radios bitian" id="another" value="其他" /></span>
                                    <label for="another" class="inp-label">其他</label>
                                </div>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>所属行业：</span>
                            <select name="Belong" class="row-select bitian">
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
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>资金用途：</span>
                            <select name="Usefor" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="经营">经营</option>
                                <option value="扩张">扩张</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <h3 class="subtitle">项目亮点</h3>
                        <div class="spot">
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" type="checkbox" class="radios" id="check01" value="大股东兜底" /></span>
                                <label class="inp-label" for="check01">大股东兜底</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" type="checkbox" class="radios" id="check02" value="热门项目" /></span>
                                <label class="inp-label" for="check02">热门项目</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" type="checkbox" class="radios" id="check03" value="成熟市场" /></span>
                                <label class="inp-label" for="check03">成熟市场</label>
                            </div>
                        </div>
            <!-- right / end -->
@endsection
@section('tips')
注：请上传抵押物照片或企业部分图片，1-5张，每张大小限制2M
@endsection
@section('pingzheng')
    $("#nopz").html('');
    if($('#pz').val() == ''){
        $("#nopz").html('你还没有上传凭证呢~');
        return;
    }
@endsection
@section('radio')
var Status = $('input:radio[name="Status"]:checked').val();
$('#cwts').find('p').remove();
if(!Status){
    $('#cwts').append("<p class='error'>您还没填呢~</p>");
    stop = true;
    return false;
}
if(stop){
    return;
}
    
@endsection