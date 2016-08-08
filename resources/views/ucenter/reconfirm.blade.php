@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/safe.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right perfect_info">
        <h2>重新完善信息</h2>
        <form action="">
        <div class="mr_perfect">
            <div class="su_pic">
                <span><em>*</em>我的头像：</span>
                <a href="javascript:;"><img src="http://images.ziyawang.com/user/defaltoux.jpg" id="avatar" /></a><span style="width:130px;color:#999;">注：点击头像上传</span>
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
                <input type="text" value="" name="ConnectPerson" id="ConnectPerson"  diy='1' />
            </div>
            <div class="linktel">
                <span><em>*</em>联系人电话：</span>
                <input type="text" value="" name="ConnectPhone" id="ConnectPhone"  diy='1' />
            </div>
            <div class="perfect">
                <span><em>*</em>企业名称：</span>
                <input type="text" value="" name="ServiceName" id="ServiceName"  diy='1' />
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
                        <input type="text" value="请点击选择" class="please">
                        
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
                                        <td><label for="quanguo"><input type="checkbox" id="quanguo" value="全国" />全国</label></td>
                                        <td><label for="s01"><input type="checkbox" id="s01" class="chengshi" value="北京" />北京</label></td>
                                        <td><label for="s02"><input type="checkbox" id="s02" class="chengshi" value="天津" />天津</label></td>
                                        <td><label for="s03"><input type="checkbox" id="s03" class="chengshi" value="上海" />上海</label></td>
                                        <td><label for="s04"><input type="checkbox" id="s04" class="chengshi" value="重庆" />重庆</label></td>
                                        <td><label for="s05"><input type="checkbox" id="s05" class="chengshi" value="河北" />河北</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="s06"><input type="checkbox" id="s06" class="chengshi" value="辽宁" />辽宁</label></td>
                                        <td><label for="s07"><input type="checkbox" id="s07" class="chengshi" value="吉林" />吉林</label></td>
                                        <td><label for="s08"><input type="checkbox" id="s08" class="chengshi" value="黑龙江" />黑龙江</label></td>
                                        <td><label for="s09"><input type="checkbox" id="s09" class="chengshi" value="江苏" />江苏</label></td>
                                        <td><label for="s10"><input type="checkbox" id="s10" class="chengshi" value="浙江" />浙江</label></td>
                                        <td><label for="s11"><input type="checkbox" id="s11" class="chengshi" value="安徽" />安徽</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="s12"><input type="checkbox" id="s12" class="chengshi" value="福建" />福建</label></td>
                                        <td><label for="s13"><input type="checkbox" id="s13" class="chengshi" value="江西" />江西</label></td>
                                        <td><label for="s14"><input type="checkbox" id="s14" class="chengshi" value="山东" />山东</label></td>
                                        <td><label for="s15"><input type="checkbox" id="s15" class="chengshi" value="河南" />河南</label></td>
                                        <td><label for="s16"><input type="checkbox" id="s16" class="chengshi" value="湖北" />湖北</label></td>
                                        <td><label for="s17"><input type="checkbox" id="s17" class="chengshi" value="湖南" />湖南</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="s18"><input type="checkbox" id="s18" class="chengshi" value="广东" />广东</label></td>
                                        <td><label for="s19"><input type="checkbox" id="s19" class="chengshi" value="海南" />海南</label></td>
                                        <td><label for="s20"><input type="checkbox" id="s20" class="chengshi" value="四川" />四川</label></td>
                                        <td><label for="s21"><input type="checkbox" id="s21" class="chengshi" value="贵州" />贵州</label></td>
                                        <td><label for="s22"><input type="checkbox" id="s22" class="chengshi" value="云南" />云南</label></td>
                                        <td><label for="s23"><input type="checkbox" id="s23" class="chengshi" value="陕西" />陕西</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="s24"><input type="checkbox" id="s24" class="chengshi" value="甘肃" />甘肃</label></td>
                                        <td><label for="s25"><input type="checkbox" id="s25" class="chengshi" value="青海" />青海</label></td>
                                        <td><label for="s26"><input type="checkbox" id="s26" class="chengshi" value="台湾" />台湾</label></td>
                                        <td><label for="s27"><input type="checkbox" id="s27" class="chengshi" value="内蒙古" />内蒙古</label></td>
                                        <td><label for="s28"><input type="checkbox" id="s28" class="chengshi" value="广西" />广西</label></td>
                                        <td><label for="s29"><input type="checkbox" id="s29" class="chengshi" value="西藏" />西藏</label></td>
                                    </tr>
                                    <tr>
                                        <td><label for="s30"><input type="checkbox" id="s30" class="chengshi" value="宁夏" />宁夏</label></td>
                                        <td><label for="s31"><input type="checkbox" id="s31" class="chengshi" value="新疆" />新疆</label></td>
                                        <td><label for="s32"><input type="checkbox" id="s32" class="chengshi" value="香港" />香港</label></td>
                                        <td><label for="s33"><input type="checkbox" id="s33" class="chengshi" value="澳门" />澳门</label></td>
                                        <td><label for="s34"><input type="checkbox" id="s34" class="chengshi" value="山西" />山西</label></td>
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
                    <label for=""><input type="checkbox" name="ServiceType[]" value="12" />资产收购</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="05" />典当公司</label>
                    <label for=""><input type="checkbox" name="ServiceType[]" value="05" />担保公司</label>
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
                <p class="ec_pleft ecp_word"></p>
            </div>
<!-- 图片上传 -->
            <div class="ec clearfix">
                <img class="preview" id="ConfirmationP1" src="" style="width:150px;height:150px;display:none">
                <img class="preview" id="ConfirmationP2" src="" style="width:150px;height:150px;display:none">
                <img class="preview" id="ConfirmationP3" src="" style="width:150px;height:150px;display:none">
            </div>
            <p id="nopz" style="margin-left:170px;" class="error"></p>
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
        <p><input type="hidden" name="ServiceLocation" id="ServiceLocation1" value=""></p>
        <p><input type="hidden" name="token" id="token" value=""></p>
        <p><input type="hidden" name="access_token" value="token"></p>
        <p><input type="hidden" name="ServiceArea" id="ServiceArea1" value=""></p>
        <p><input type="hidden" name="ConfirmationP1" id="pz" value=""></p>
        <p><input type="hidden" name="ConfirmationP2" value=""></p>
        <p><input type="hidden" name="ConfirmationP3" value=""></p>
        <p><input type="hidden" name="UserPicture" value=""></p>
        </form>
    </div>
</div>
<style>
    .error1{color:#f00;padding-left: 130px;}
    #err{padding-left: 0px;}
    .service_type{width: 900px;}
</style>
<script type="text/javascript" src="{{url('/js/select.js')}}"></script>
<script type="text/javascript" src="{{url('/js/public.js')}}"></script>
<script src="{{url('/js/Area.js')}}" type="text/javascript"></script>
<script src="{{url('/js/AreaData_min.js')}}" type="text/javascript"></script>
<script>
    $(function(){
        var role = $.session.get('role');
        if(role.indexOf('2') < 0){
            // $('#pub').css('disabled',true).val('资料审核中');
            // $('#pub').click(alert('请等待编辑功能的完善！'));
            window.location = "http://ziyawang.com/ucenter"
        }  
    });

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

</script>
<script>
    $('#quanguo').click(function(){
        if($(this).is(':checked')){
            $('.chengshi').attr('disabled',true);
            $('.chengshi').attr('checked',false);
        } else {
            $('.chengshi').attr('disabled',false);
        }
    })

$("input[diy='1']").blur(function(event) {
    $parent=$(this).parent();
    $parent.find("p").remove();
    if($(this).val()==""){
        $parent.append("<p class='error1'>您还没填呢~</p>");
        return;
    }
})

$('textarea').blur(function(envet){
    $parent=$(this).parent();
    $parent.find("p").remove();
    if($(this).val()==""){
        $parent.append("<p class='error1'>您还没填呢~</p>");
        return;
    }
})

$('select').change(function(){
    $(this).parent().find("p").remove();
})


var permission = 0;
function _checkInput(){
var stop = false;

    $("input[diy='1']").each(function(){
        $parent=$(this).parent();
        $parent.find("p").remove();
        if($(this).val()==""){
            $parent.append("<p class='error1'>您还没填呢~</p>");
            stop = true;
        } 
    });

    if(stop){
        return;
    }

    $("textarea").parent().find("p").remove();
    if($("textarea").val() == ''){
        $("textarea").parent().append("<p class='error1'>您还没填呢~</p>");
        return;
    }

    $("select").each(function(){
        $parent=$(this).parent();
        $parent.find("p").remove();
        if($(this).val()=='null' || $(this).val()==0 || $(this).val()==undefined){
            $parent.append("<p class='error1' id='err'>您还没选呢~</p>");
            stop = true;
        }
    })
    
    if(stop){
        return;
    }

    if($('.please').val() == '请点击选择' ){
        $('.select_box').find("p").remove();
        $('.select_box').append("<p class='error1' id='err'>您还没选呢~</p>");
        stop = true;
    }

    if(stop){
        return;
    }

    var type = $('.service_type');
    var lent = type.find('input:checked').length;
    if(lent == 0){
        $('.service_type').append("<p class='error1'>您还没选呢~</p>");
        stop = true;
    }


    if(stop){
        return;
    }
        $('.service_type').find("p").remove();
    

    $("#nopz").html('');
    if($('#pz').val() == ''){
        $("#nopz").html('你还没有上传凭证呢~');
        return;
    }

    permission = 1;
}


    $('#pub').click(function(){
        _checkInput();

        if(permission != 1){
            return;
        }

        var token = $.session.get('token');
        // var TypeID = getNum(window.location.pathname);
        $('#token').val(token);
        var areaID = getAreaID();
        var ServiceLocation =  getAreaNamebyID(areaID);
        $('#ServiceLocation1').val(ServiceLocation);
        
        var data = $('form').serialize();

        $.ajax({
            url:"http://api.ziyawang.com/v1/service/reconfirm?token="+token,
            type:"POST",
            data:data,
            dataType:"json",
            success:function(msg){
                if(msg.role){
                    alert('后台会在24小时内对您所填资料进行审核，请耐心等待！')
                    window.location = "http://ziyawang.com/ucenter"
                }
            }
        });
    });
</script>
<div class="coverpop"></div>
@endsection