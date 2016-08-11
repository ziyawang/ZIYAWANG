@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/safe.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right perfect_info">
        <h2>完善资料</h2>
        <form action="">
        <div class="mr_perfect">
            <div class="su_pic">
                <span><em>*</em>我的头像：</span>
                <a href="javascript:;"><img src="/img/toux.jpg" id="avatar" /></a><span style="width:130px;color:#999;">注：点击头像上传</span>
<script src="{{asset('/org/uploadifive/jquery.uploadifive.min.js')}}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/org/uploadifive/uploadifive.css')}}">
<!-- 头像上传 -->
<style>
    .uploadifive-button{top: 0px;left: -208px;opacity: 0;}
    .perfect_info .mr_perfect span em{color: #f00;margin-right: 4px;}
    #uploadifive-list_upload-queue{display: none;}
</style>
            <div class="ec clearfix">
                <div class="ec_right upload">
                    <input id="list_upload" name="list_upload" type="file" multiple="true">
                    <!-- <a style="position: relative; top: 8px;" href="javascript:$('#list_upload').uploadifive('upload')"></a> -->
                </div>
            </div>

    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#list_upload').uploadifive({
                'buttonText'       : '上传头像',
                'removeCompleted'  : false,
                'auto'             : true,
                'fileSizeLimit'    : 6144,
                'uploadScript'     : "{{url('/ucenter/upload')}}",
                'onUploadComplete' : function(file, data) {
                    console.log(data); 
                    $('input[name=UserPicture]').val(data);
                    $('#avatar').attr('src', 'http://images.ziyawang.com'+data);
                }
            });
        });
    </script>
<!-- 头像上传 -->
            </div>
            <div class="linkman">
                <span><em>*</em>联系人姓名：</span>
                <input type="text" value="" name="ConnectPerson" id="ConnectPerson" />
            </div>
            <div class="linktel">
                <span><em>*</em>联系人电话：</span>
                <input type="text" value="" name="ConnectPhone" id="ConnectPhone" />
            </div>
            <div class="perfect">
                <span><em>*</em>企业名称：</span>
                <input type="text" value="" name="ServiceName" id="ServiceName" />
            </div>
            <div class="perfect_illu">
                <span><em>*</em>企业简介：</span>
                <textarea name="ServiceIntroduction" id="ServiceIntroduction"></textarea>
            </div>
            <div class="linkaddr">
                <span><em>*</em>企业所在地：</span>
                <div class="sel_city" id="ServiceLocation">
                    <select id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                    <select id="seachcity"></select>
                </div>
            </div>
            <div class="service_zone">
                <span><em>*</em>服务地区：</span>
                <div class="zone" id="ServiceArea">
                    <div class="select_box">
                        <div class="please">请选择</div>
                        
                    </div>
                    <div class="province">
                        <div class="choicebtn">
                            <a href="javascript:;" class="sure">确定</a>
                            <a href="javascript:;" class="revoke">取消</a>
                        </div>
                        <div class="prov">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><label for=""><input type="checkbox" id="quanguo" value="全国" />全国</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="北京" />北京</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="天津" />天津</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="上海" />上海</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="重庆" />重庆</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="河北" />河北</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="辽宁" />辽宁</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="吉林" />吉林</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="黑龙江" />黑龙江</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="江苏" />江苏</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="浙江" />浙江</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="安徽" />安徽</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="福建" />福建</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="江西" />江西</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="山东" />山东</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="河南" />河南</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="湖北" />湖北</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="湖南" />湖南</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="广东" />广东</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="海南" />海南</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="四川" />四川</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="贵州" />贵州</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="云南" />云南</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="陕西" />陕西</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="甘肃" />甘肃</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="青海" />青海</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="台湾" />台湾</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="内蒙古" />内蒙古</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="广西" />广西</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="西藏" />西藏</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="宁夏" />宁夏</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="新疆" />新疆</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="香港" />香港</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="澳门" />澳门</label></td>
                                        <td><label for=""><input type="checkbox" class="chengshi" value="山西" />山西</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_type" id="ServiceType">
                <span><em>*</em>服务类型：</span>
                <div class="st_details">
                    <label for=""><input type="checkbox" name="ServiceType[]" value="01" />资产包收购</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="02" />催收机构</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="03" />律师事务所</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="04" />保理公司</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="06" />投资贷款</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="10" />尽职调查</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="12" />固产收购</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="05" />典当担保</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="14" />债权收购</label>
                </div>
            </div>
            <div class="up_ceti clearfix">
                <span><em>*</em>上传相关凭证：</span>
                <style>
                    .upload1 .uploadifive-button{top: -5px;left: -5px;border-radius: 25px;background: #e48013;color: #fff;opacity: 1;height: 30px!important;line-height: 30px!important;}
                </style>
                <div class="ec_right upload upload1">
                    <input id="picture_upload" name="picture_upload" type="file" multiple="true">
                    <a style="position: relative; top: 8px;" href="javascript:$('#picture_upload').uploadifive('upload')"></a>
                    <style>
                        .preview {float: left;margin-right: 20px;}
                    </style>   
                    <div class="image_container">
                        <img class="preview" width="60" height="60">
                    </div>
                </div>
                <p class="ec_pleft ecp_word">合同/协议、借条/欠条、判决书原件的扫描件或照片</p>
            </div>
<!-- 图片上传 -->
            <div class="ec clearfix">
                <img class="preview" id="ConfirmationP1" src="" style="width:150px;height:150px;display:none">
                <img class="preview" id="ConfirmationP2" src="" style="width:150px;height:150px;display:none">
                <img class="preview" id="ConfirmationP3" src="" style="width:150px;height:150px;display:none">
            </div>
<div id="queue"></div>

    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#picture_upload').uploadifive({
                'buttonText'       : '选择图片',
                'removeCompleted'  : true,
                'auto'             : true,
                'fileSizeLimit'    : 2048,
                'uploadLimit'      : 3,
                'queueID'          : 'queue',
                'uploadScript'     : "{{url('/ucenter/upload')}}",
                'onUploadComplete' : function(file, data) {
                    console.log(data); 
                    var name = $(".preview[src='']:first").attr('id');
                    $("input[name='" + name + "']").val(data);
                    $(".preview[src='']:first").attr('src', 'http://images.ziyawang.com'+data).show();
                }
            });
        });
    </script>
<!-- 图片上传 -->
            <input type="button" id="pub" class="sub_btn" value="" />
        </div>
        <p><input type="hidden" name="ServiceLocation" id="ServiceLocation" value=""></p>
        <p><input type="hidden" name="token" id="token" value=""></p>
        <p><input type="hidden" name="access_token" value="token"></p>
        <p><input type="hidden" name="ServiceArea" id="ServiceArea" value=""></p>
        <p><input type="hidden" name="ConfirmationP1" value=""></p>
        <p><input type="hidden" name="ConfirmationP2" value=""></p>
        <p><input type="hidden" name="ConfirmationP3" value=""></p>
        <p><input type="hidden" name="UserPicture" value=""></p>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{url('/js/select.js')}}"></script>
<script type="text/javascript" src="{{url('/js/public.js')}}"></script>
<script src="{{url('/js/Area.js')}}" type="text/javascript"></script>
<script src="{{url('/js/AreaData_min.js')}}" type="text/javascript"></script>
<script>
    $(function(){
        var role = $.session.get('role');
        if(role == 0){
            // $('#pub').css('disabled',true).val('资料审核中');
        }
        var token = $.session.get('token');
        if(role.indexOf('1') > 0){
            $.ajax({
                url:"http://api.ziyawang.com/v1/auth/me?access_token=token&token="+token,
                type:"POST",
                dataType:'json',
                success:function(msg){
                    var service = msg.service;
                    var user = msg.user;
                    console.log(msg);
                    var UserPicture = user.UserPicture;
                    var ConnectPerson = service.ConnectPerson;
                    var ConnectPhone = service.ConnectPhone;
                    var ServiceName = service.ServiceName
                    var ServiceIntroduction = service.ServiceIntroduction;
                    var ServiceLocation = service.ServiceLocation;
                    var ServiceType = service.ServiceType;
                    var ServiceArea = service.ServiceArea;

                    $('#avatar').attr('src','http://images.ziyawang.com'+UserPicture);
                    $('#ConnectPerson').val(ConnectPerson);
                    $('#ConnectPhone').val(ConnectPhone);
                    $('#ServiceName').val(ServiceName);
                    $('#ServiceIntroduction').html(ServiceIntroduction);
                    $('#ServiceLocation').html(ServiceLocation);
                    $('#ServiceType').html(ServiceType);
                    $('#ServiceArea').html(ServiceArea);
                }
            })
        }
    })

    //得到地区码
    function getAreaID(){
        var area = 0;          
        if ($("#seachcity").val() != "0"){
            area = $("#seachcity").val();
        }else{
            area = $("#seachprov").val();
        }
        return area;
    }

    function getAreaNamebyID(areaID){
        var areaName = "";
        if(!areaID){
            alert('请选择地区！');
            return ;
        } if(areaID.length == 2){
            areaName = area_array[areaID];
        }else if(areaID.length == 4){
            var index1 = areaID.substring(0, 2);
            areaName = area_array[index1] + "-" + sub_array[index1][areaID];
        }
        return areaName;
    }

    function getNum(text){
        var value = text.replace(/[^0-9]/ig,"");
        return value;
    }

    $('#pub').click(function(){
        var token = $.session.get('token');
        // var TypeID = getNum(window.location.pathname);
        $('#token').val(token);
        var areaID = getAreaID();
        var ServiceLocation =  getAreaNamebyID(areaID);
        $('#ServiceLocation').val(ServiceLocation);
        
        var data = $('form').serialize();
        console.log(data);

        $.ajax({
            url:"http://api.ziyawang.com/v1/service/confirm?token="+token,
            type:"POST",
            data:data,
            dataType:"json",
            success:function(msg){
                if(msg.role){
                    alert('后台会在24小时内对您所填资料进行审核，请耐心等待！')
                    window.location = "{{url('/ucenter')}}"
                }
            }
        });
    });
</script>
<script>
    $('#quanguo').click(function(){
        if($(this).is(':checked')){
            $('.chengshi').attr('disabled',true);
        } else {
            $('.chengshi').attr('disabled',false);
        }
    })
</script>
<div class="coverpop"></div>
@endsection