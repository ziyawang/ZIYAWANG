@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/safe.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>完善资料</h2>
        <div class="mr_perfect">
            <div class="su_pic">
                <span>我的头像：</span>
                <a href="javascript:;"><img src="img/toux.jpg" /></a>
            </div>
            <div class="linkman">
                <span>联系人姓名：</span>
                <span>张扬</span>
            </div>
            <div class="linktel">
                <span>联系人电话：</span>
                <span>13534564321</span>
            </div>
            <div class="perfect">
                <span>企业名称：</span>
                <span>北京资芽网络科技有限公司</span>
            </div>
            <div class="perfect_illu">
                <span>企业简介：</span>
                <textarea name="" id=""></textarea>
            </div>
            <div class="linkaddr">
                <span>企业所在地：</span>
                <div class="sel_city">
                    <select id="seachprov" name="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                    <select id="seachcity" name="homecity" onChange="changeCity(this.value,'seachdistrict','seachdistrict');"></select>
                </div>
            </div>
            <div class="service_zone">
                <span>服务地区：</span>
                <div class="zone">
                    <div class="select_box">
                        <div class="please">请选择</div>
                        
                    </div>
                    <div class="province">
                        <div class="choicebtn">
                            <a href="javascript:;">确定</a>
                            <a href="javascript:;">取消</a>
                        </div>
                        <div class="prov">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><label for=""><input type="checkbox" />北京</label></td>
                                        <td><label for=""><input type="checkbox" />天津</label></td>
                                        <td><label for=""><input type="checkbox" />上海</label></td>
                                        <td><label for=""><input type="checkbox" />重庆</label></td>
                                        <td><label for=""><input type="checkbox" />河北</label></td>
                                        <td><label for=""><input type="checkbox" />山西</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" />辽宁</label></td>
                                        <td><label for=""><input type="checkbox" />吉林</label></td>
                                        <td><label for=""><input type="checkbox" />黑龙江</label></td>
                                        <td><label for=""><input type="checkbox" />江苏</label></td>
                                        <td><label for=""><input type="checkbox" />浙江</label></td>
                                        <td><label for=""><input type="checkbox" />安徽</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" />福建</label></td>
                                        <td><label for=""><input type="checkbox" />江西</label></td>
                                        <td><label for=""><input type="checkbox" />山东</label></td>
                                        <td><label for=""><input type="checkbox" />河南</label></td>
                                        <td><label for=""><input type="checkbox" />湖北</label></td>
                                        <td><label for=""><input type="checkbox" />湖南</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" />广东</label></td>
                                        <td><label for=""><input type="checkbox" />海南</label></td>
                                        <td><label for=""><input type="checkbox" />四川</label></td>
                                        <td><label for=""><input type="checkbox" />贵州</label></td>
                                        <td><label for=""><input type="checkbox" />云南</label></td>
                                        <td><label for=""><input type="checkbox" />陕西</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" />甘肃</label></td>
                                        <td><label for=""><input type="checkbox" />青海</label></td>
                                        <td><label for=""><input type="checkbox" />台湾</label></td>
                                        <td><label for=""><input type="checkbox" />内蒙古</label></td>
                                        <td><label for=""><input type="checkbox" />广西</label></td>
                                        <td><label for=""><input type="checkbox" />西藏</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" />宁夏</label></td>
                                        <td><label for=""><input type="checkbox" />新疆</label></td>
                                        <td><label for=""><input type="checkbox" />香港</label></td>
                                        <td><label for=""><input type="checkbox" />澳门</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_type">
                <span>服务类型：</span>
                <div class="st_details">
                    <label for=""><input type="checkbox" />资产包收购</label>
                    <label for=""><input type="checkbox" />催收机构</label>
                    <label for=""><input type="checkbox" />律师事务所</label>
                    <label for=""><input type="checkbox" />保理公司</label>
                    <label for=""><input type="checkbox" />投资贷款</label>
                    <label for=""><input type="checkbox" />资金过桥</label>
                    <label for=""><input type="checkbox" />尽职调查</label>
                    <label for=""><input type="checkbox" />固产收购</label>
                    <label for=""><input type="checkbox" />典当担保</label>
                </div>
            </div>
            <div class="up_ceti">
                <span>上传相关凭证：</span>

            </div>
        </div>
    </div>
</div>
<!-- 底部 -->
<script src="{{url('/js/Area.js')}}" type="text/javascript"></script>
<script src="{{url('/js/AreaData_min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('/js/select.js')}}"></script>
@endsection