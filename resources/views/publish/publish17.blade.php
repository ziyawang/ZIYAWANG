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
                    var area = (getQueryString("area") && getQueryString("area")!=null)?getQueryString("area"):"0";
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
                                    <span class="inp-radio opts checked"><input name="AssetType" value="债权融资" type="radio" class="radios bitian" id="land" /></span>
                                    <label for="land" class="inp-label">债权融资</label>
                                </div>
                                <div class="house">
                                    <span class="inp-radio opts" id="guquan"><input name="AssetType" value="股权融资" type="radio" class="radios bitian" id="house" /></span>
                                    <label for="house" class="inp-label">股权融资</label>
                                </div>
                            </span>
                            <script>
                                $(function(){
                                    $('#guquan').click(function(){
                                        var identity = $('#identity').val();
                                        var areaID = getAreaID();
                                        window.location.href = "{{url('http://ziyawang.com/ucenter/pubpro/6')}}" + "?identity=" + identity + "&area=" + areaID;
                                    })
                                })
                            </script>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>担保方式：</span>
                            <select name="Type" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="抵押">抵押</option>
                                <option value="质押">质押</option>
                                <option value="担保人">担保人</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>融资金额：</span>
                            <input name="Money" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>使用期限：</span>
                            <input name="Month" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">月</span>
                        </div>
                        <h3 class="subtitle">项目亮点</h3>
                        <div class="spot">
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="抵押物足值" type="checkbox" class="radios" id="check01" /></span>
                                <label class="inp-label" for="check01">抵押物足值</label>
                            </div>
                            <div class="spot-row">
                                <span class="inp-radio"><input name="ProLabel[]" value="回报率高" type="checkbox" class="radios" id="check02" /></span>
                                <label class="inp-label" for="check02">回报率高</label>
                            </div>
                        </div>
            <!-- right / end -->
@endsection
@section('tips')
注：请上传企业相关凭证或商业计划书图片，1-5张，每张大小限制2M
@endsection
@section('pingzheng')
    $("#nopz").html('');
    if($('#pz').val() == ''){
        $("#nopz").html('你还没有上传凭证呢~');
        return;
    }
@endsection