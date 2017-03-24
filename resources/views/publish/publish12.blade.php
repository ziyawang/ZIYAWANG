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
                    var area = (getQueryString("area") && getQueryString("area")!=null)?getQueryString("area"):"0";
                    $('#seachprov').val(area.substr(0,2));
                    changeComplexProvince(area.substr(0,2), sub_array, 'seachcity', 'seachdistrict');
                    $('#seachcity').val(area);
                    $('#identity').val(identity);
                })
            </script>
            <div class="fixed">
                <div class="fixed-con">
                    <h2 class="fixed-title"><span>固定资产</span><a href="javascript:;" class="depute">委托发布</a></h2>
                    <div class="fixed-main txtleft">
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>请选择身份：</span>
                            <select id="identity" name="Identity" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="项目持有者">项目持有者</option>
                                <option value="FA（中介）">FA（中介）</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>标的物类型：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio opts" id="tudi"><input name="AssetType" value="土地" type="radio" class="radios bitian" id="land" /></span>
                                    <label for="land" class="inp-label">土地</label>
                                </div>
                                <div class="house">
                                    <span class="inp-radio opts checked"><input name="AssetType" value="房产" type="radio" class="radios bitian" id="house" /></span>
                                    <label for="house" class="inp-label">房产</label><em class="wem2"></em>
                                </div>
                            </span>
                            <script>
                                $(function(){
                                    $('#tudi').click(function(){
                                        var identity = $('#identity').val();
                                        var areaID = getAreaID();
                                        window.location.href = "{{url('http://ziyawang.com/ucenter/pubpro/16')}}" + "?identity=" + identity + "&area=" + areaID;
                                    })
                                })
                            </script>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>地区：</span>
                            <span class="region">
                                <select class="row-select bitian" id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                                <select class="row-select bitian" id="seachcity"></select>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>房产类型：</span>
                            <select name="Type" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="住宅">住宅</option>
                                <option value="商业">商业</option>
                                <option value="厂房">厂房</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>面积：</span>
                            <input name="Area" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">平米</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>参考市价：</span>
                            <input name="MarketPrice" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="perprice(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must"></em>市场单价：</span>
                            <span class="inps unit-price" style="display:inline-block;vertical-align:middle;"></span><span class="tag">万元/平米</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>意向转让价：</span>
                            <input name="TransferMoney" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="perprice(this,this.value)" /><span class="tag">万元</span>
                        </div>
            <!-- right / end -->
@endsection
@section('tips')
（标的物图片和相关证照，1-5张，每张大小限制2M）
@endsection
@section('pingzheng')
    $("#nopz").html('');
    if($('#pz').val() == ''){
        $("#nopz").html('你还没有上传凭证呢~');
        return;
    }
@endsection