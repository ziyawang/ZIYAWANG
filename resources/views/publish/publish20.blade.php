@extends('layouts.publish')
@section('title')
<title>法拍资产</title>
@endsection
@section('content')
<!-- 右侧详情 -->
<style>
    #uploadifive-list_upload{height: 30px!important;line-height: 30px!important;border-radius: 25px;background: #e48013;color: #fff;}
</style>
            <!-- right / start -->
            <div class="fore">
                <div class="fore-con">
                    <h2 class="fore-title"><span>法拍资产</span><a href="javascript:;" class="depute">委托发布</a></h2>
                    <div class="fore-main">
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>资产类型：</span>
                            <span class="row-right">
                            <p><input type="hidden" name="AssetType" value="房产"></p>
                                <a class="land" href="{{url('/ucenter/pubpro/21')}}">
                                    <span class="inp-radio"></span>
                                    <span class="inp-label">土地</span><em class="wem2"></em>
                                </a>
                                <a class="house" href="{{url('/ucenter/pubpro/20')}}">
                                    <span class="inp-radio checked"></span>
                                    <span for="house" class="inp-label">房产</span><em class="wem2"></em>
                                </a>
                                <a class="car" href="{{url('/ucenter/pubpro/22')}}">
                                    <span class="inp-radio"></span>
                                    <span for="car" class="inp-label">汽车</span>
                                </a>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>面积：</span>
                            <input name="Area" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">平米</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>性质：</span>
                            <select name="Nature" class="row-select bitian">
                                <option value="0">请选择</option>
                                <option value="工业">工业</option>
                                <option value="商业">商业</option>
                                <option value="住宅">住宅</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>起拍价：</span>
                            <input name="Money" type="text" class="inps bitian" placeholder="请输入数字" onkeyup="numLimit(this,this.value)" /><span class="tag">万元</span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>拍卖地点：</span>
                            <span class="region">
                                <select class="row-select bitian" id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                                <select class="row-select bitian" id="seachcity"></select>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>拍卖时间：</span>
                            <select name="year1" class="row-select select-time bitian"></select>
                            <select name="month1" class="row-select select-time bitian"></select>
                            <select name="day1" class="row-select select-time bitian"></select>
                        </div>
                        <div class="row" id="cwts">
                            <span class="row-left"><em class="must">*</em>拍卖阶段：</span>
                            <span class="row-right">
                                <div class="land">
                                    <span class="inp-radio opts bitian"><input name="State" value="一拍" type="radio" class="radios" id="firstPa" /></span>
                                    <label for="firstPa" class="inp-label">一拍</label><em class="wem2"></em>
                                </div>
                                <div class="house">
                                    <span class="inp-radio opts bitian"><input name="State" value="二拍" type="radio" class="radios" id="secondPa" /></span>
                                    <label for="secondPa" class="inp-label">二拍</label><em class="wem2"></em>
                                </div>
                                <div class="car">
                                    <span class="inp-radio opts bitian"><input name="State" value="三拍" type="radio" class="radios" id="thirdPa" /></span>
                                    <label for="thirdPa" class="inp-label">三拍</label>
                                </div>
                            </span>
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>处置单位：</span>
                            <input name="Court" type="text" class="inps bitian" placeholder="请输入" /><span class="tag">（××法院）</span>
                        </div>
                        <input type="hidden" id="year" name="Year">
                        <script>
                            $(function(){
                                 new YMDselect('year1','month1','day1');
                            })
                        </script>
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
var state = $('input:radio[name="State"]:checked').val();
$('#cwts').find('p').remove();
if(!state){
    $('#cwts').append("<p class='error'>您还没选呢~</p>");
    stop = true;
    return false;
}
if(stop){
    return;
}
    
@endsection
@section('shijian')
var year = $("select[name='year1']").val();
var month = $("select[name='month1']").val();
var day = $("select[name='day1']").val();
$('#year').val(year+"年"+month+"月"+day+"日");
@endsection