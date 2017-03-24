@extends('layouts.uhome')
@section('content')
<script src="http://ziyawang.com/js/YMDClass.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=2.1.7.1.1" />
<!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon ucRightSafe perfectInfo">
            <h3 class="selectiveType security"><span>完善资料</span></h3>
            <form action="">
            <div class="mr_perfect">
                <div class="perfect">
                    <span><em>*</em>企业名称<i>：</i></span>
                    <input type="text" value="" name="ServiceName" id="ServiceName"  diy='1' />
                </div>
                <div class="linkaddr">
                    <span><em>*</em>企业所在地<i>：</i></span>
                    <div class="sel_city" id="ServiceLocation">
                        <select id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                        <select id="seachcity"></select>
                    </div>
                </div>
                <div class="company-scale">
                    <span><em>*</em>企业规模<i>：</i></span>
                    <input type="text" value="" placeholder="请输入员工人数" name="Size" id="Size"  diy='1'  onkeyup="numLimit(this,this.value)"/>&nbsp;人
                </div>
                <div class="register-capital">
                    <span><em>*</em>注册资金<i>：</i></span>
                    <input type="text" value=""  name="Founds" id="Founds"  diy='1' onkeyup="numLimit(this,this.value)"/>&nbsp;万元
                </div>
                <div class="register-time">
                    <span><em>*</em>注册时间<i>：</i></span>
                    <div class="register-time-sel">
                        <select name="year" class="select-time"></select>
                        <select name="month" class="select-time"></select>
                    </div>
                </div>
                <div class="linkman">
                    <span><em>*</em>联系人姓名<i>：</i></span>
                    <input type="text" value="" name="ConnectPerson" id="ConnectPerson"  diy='1' />
                </div>
                <div class="linktel">
                    <span><em>*</em>联系人电话<i>：</i></span>
                    <input type="text" value="" name="ConnectPhone" id="ConnectPhone"  diy='1' />
                </div>
                <div class="perfect_illu">
                    <span><em>*</em>企业简介<i>：</i></span>
                    <textarea name="ServiceIntroduction" id="ServiceIntroduction"></textarea>
                </div>
                <div class="service_zone">
                    <span><em>*</em>服务地区<i>：</i></span>
                    <div class="zone" id="ServiceArea">
                        <div class="select_box">
                            <input type="text" value="请点击选择" class="please" readonly="readonly">
                            
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
                                            <td><label for="quanguo"><input type="checkbox" id="quanguo" value="全国">全国</label></td>
                                            <td><label for="s01"><input type="checkbox" id="s01" class="chengshi" value="北京">北京</label></td>
                                            <td><label for="s02"><input type="checkbox" id="s02" class="chengshi" value="天津">天津</label></td>
                                            <td><label for="s03"><input type="checkbox" id="s03" class="chengshi" value="上海">上海</label></td>
                                            <td><label for="s04"><input type="checkbox" id="s04" class="chengshi" value="重庆">重庆</label></td>
                                            <td><label for="s05"><input type="checkbox" id="s05" class="chengshi" value="河北">河北</label></td>
                                        </tr>
                                        <tr>
                                            <td><label for="s06"><input type="checkbox" id="s06" class="chengshi" value="辽宁">辽宁</label></td>
                                            <td><label for="s07"><input type="checkbox" id="s07" class="chengshi" value="吉林">吉林</label></td>
                                            <td><label for="s08"><input type="checkbox" id="s08" class="chengshi" value="黑龙江">黑龙江</label></td>
                                            <td><label for="s09"><input type="checkbox" id="s09" class="chengshi" value="江苏">江苏</label></td>
                                            <td><label for="s10"><input type="checkbox" id="s10" class="chengshi" value="浙江">浙江</label></td>
                                            <td><label for="s11"><input type="checkbox" id="s11" class="chengshi" value="安徽">安徽</label></td>
                                        </tr>
                                        <tr>
                                            <td><label for="s12"><input type="checkbox" id="s12" class="chengshi" value="福建">福建</label></td>
                                            <td><label for="s13"><input type="checkbox" id="s13" class="chengshi" value="江西">江西</label></td>
                                            <td><label for="s14"><input type="checkbox" id="s14" class="chengshi" value="山东">山东</label></td>
                                            <td><label for="s15"><input type="checkbox" id="s15" class="chengshi" value="河南">河南</label></td>
                                            <td><label for="s16"><input type="checkbox" id="s16" class="chengshi" value="湖北">湖北</label></td>
                                            <td><label for="s17"><input type="checkbox" id="s17" class="chengshi" value="湖南">湖南</label></td>
                                        </tr>
                                        <tr>
                                            <td><label for="s18"><input type="checkbox" id="s18" class="chengshi" value="广东">广东</label></td>
                                            <td><label for="s19"><input type="checkbox" id="s19" class="chengshi" value="海南">海南</label></td>
                                            <td><label for="s20"><input type="checkbox" id="s20" class="chengshi" value="四川">四川</label></td>
                                            <td><label for="s21"><input type="checkbox" id="s21" class="chengshi" value="贵州">贵州</label></td>
                                            <td><label for="s22"><input type="checkbox" id="s22" class="chengshi" value="云南">云南</label></td>
                                            <td><label for="s23"><input type="checkbox" id="s23" class="chengshi" value="陕西">陕西</label></td>
                                        </tr>
                                        <tr>
                                            <td><label for="s24"><input type="checkbox" id="s24" class="chengshi" value="甘肃">甘肃</label></td>
                                            <td><label for="s25"><input type="checkbox" id="s25" class="chengshi" value="青海">青海</label></td>
                                            <td><label for="s26"><input type="checkbox" id="s26" class="chengshi" value="台湾">台湾</label></td>
                                            <td><label for="s27"><input type="checkbox" id="s27" class="chengshi" value="内蒙古">内蒙古</label></td>
                                            <td><label for="s28"><input type="checkbox" id="s28" class="chengshi" value="广西">广西</label></td>
                                            <td><label for="s29"><input type="checkbox" id="s29" class="chengshi" value="西藏">西藏</label></td>
                                        </tr>
                                        <tr>
                                            <td><label for="s30"><input type="checkbox" id="s30" class="chengshi" value="宁夏">宁夏</label></td>
                                            <td><label for="s31"><input type="checkbox" id="s31" class="chengshi" value="新疆">新疆</label></td>
                                            <td><label for="s32"><input type="checkbox" id="s32" class="chengshi" value="香港">香港</label></td>
                                            <td><label for="s33"><input type="checkbox" id="s33" class="chengshi" value="澳门">澳门</label></td>
                                            <td><label for="s34"><input type="checkbox" id="s34" class="chengshi" value="山西">山西</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service_type">
                    <span><em>*</em>服务类型<i>：</i></span>
                    <div class="st_details">
                        <label for="server1"><input type="checkbox" name="ServiceType[]" value="01" id="server1" />收购资产包</label>
                        <label for="server2"><input type="checkbox" name="ServiceType[]" value="02" id="server2" />委外催收</label>
                        <label for="server3"><input type="checkbox" name="ServiceType[]" value="03" id="server3" />法律服务</label>
                        <label for="server4"><input type="checkbox" name="ServiceType[]" value="12" id="server4" />收购固产</label>
                        <label for="server5"><input type="checkbox" name="ServiceType[]" value="06" id="server5" />投融资服务</label>
                        <!-- <label for=""><input type="checkbox" name="ServiceType[]" value="01" />资产包收购</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="02" />催收机构</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="03" />律师事务所</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="04" />保理公司</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="06" />投融资服务</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="10" />尽职调查</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="12" />资产收购</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="05" />典当公司</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="05" />担保公司</label>
                        <label for=""><input type="checkbox" name="ServiceType[]" value="14" />债权收购</label> -->
                    </div>
                </div>                
                <!-- 头像上传 -->
                <script src="{{asset('/org/jqupload/js/jquery.ui.widget.js')}}"></script>
                <script src="{{asset('/org/jqupload/js/jquery.fileupload.js')}}"></script>
                <script src="{{asset('/org/jqupload/js/jquery.iframe-transport.js')}}"></script>
                <script src="{{asset('/org/jqupload/js/jquery.fileupload-process.js')}}"></script>
                <script src="{{asset('/org/jqupload/js/jquery.fileupload-validate.js')}}"></script>
                <!-- <div class="ec clearfix"> -->
                <style>
                    .error1{color: #f00;padding-left: 116px;}
                    .img_box{padding:28px 0 0 128px;}
                    .pictures{float: left;margin-right: 20px;display: none;position: relative;margin-bottom: 8px;}
                    .pictures img{width: 150px;height: 150px;border: 1px solid #ccc;}
                    .deleteImg{position: absolute;width: 22px; height: 22px; background: #b8b8b8 url(/img/zhifu.png) no-repeat -147px -46px;cursor: pointer;right: 0;top: 0;display: none;}
                </style>
                    <div class="up_ceti clearfix">
                    <span class="ucSpan"><em>*</em>上传相关凭证：</span>
                    <div class="ec_right upload">
                        <span class="fileinput-button">
                        <span>选择图片</span>
                        <!-- The file input field used as target for the file upload widget -->
                        <input id="fileupload" type="file" name="files[]" data-url="{{url('/ucenter/upload')}}" multiple accept="image/png, image/gif, image/jpg, image/jpeg">
                        </span>                  
                    </div>
                    <p class="ec_pleft ecp_word">注：营业执照、执业证及相关资质的扫描件或照片，请上传图片，（图片大小限制２Ｍ）</p>
                    </div>
                    <p id="nopz" style="margin-left:170px;" class="error"></p>
                    <div class="clearfix img_box">
                        <div class="pictures"><img class="preview" id="ConfirmationP1" src="" picname=''><span class="deleteBtn1 deleteImg" title="删除"></span></div>
                        <div class="pictures"><img class="preview" id="ConfirmationP2" src="" picname='' ><span class="deleteBtn2 deleteImg" title="删除"></span></div>
                        <div class="pictures"><img class="preview" id="ConfirmationP3" src="" picname='' ><span class="deleteBtn3 deleteImg" title="删除"></span></div>
                    </div>
                <!-- </div> -->
                <script type="text/javascript">
                $(function () {

                    $('#fileupload').fileupload({
                        dataType: 'json',
                        formAcceptCharset :'utf-8',
                        maxNumberOfFiles : 3,
                        done: function (e, data) {
                            $.each(data.result.files, function (index, file) {
                                // console.log(file.name);
                                $('input[name=PictureDes]').val(data);
                                var name = $(".preview[src='']:first").attr('id');
                                $("input[name='" + name + "']").val('/user/' + file.name);
                                $(".preview[src='']:first").attr({'src':encodeURI('http://images.ziyawang.com/user/'+file.name), 'picname':file.name}).parent().show();
                                $('#nopz').html('');
                            });
                        }
                    });
                    $('.pictures').hover(function(){
                        $(this).children('.deleteImg').stop().toggle();
                    })
                    $('.deleteImg').click(function(){
                        $(this).prev().attr('src','');
                        $(this).parent().hide();
                        layer.msg('删除成功，请重新上传',{time:2000,icon:2});
                        var url = "http://ziyawang.com/ucenter/upload?file=" + $(this).prev().attr('picname');
                        $.ajax({
                            'url':url,
                            'type': 'DELETE',
                            'success':function(msg){
                            }
                        });
                    })
                })
                </script>
                <!-- 头像上传 -->


            </div>
            <div class="btnBox">
                <button class="fabu" id="pub" type="button"><span>确认提交</span><i class="iconfont grab">&#xe607;</i></button>
            </div>
            <p><input type="hidden" name="ServiceLocation" id="ServiceLocation1" value=""></p>
            <p><input type="hidden" name="token" id="token" value=""></p>
            <p><input type="hidden" name="access_token" value="token"></p>
            <p><input type="hidden" name="ServiceArea" id="ServiceArea1" value=""></p>
            <p><input type="hidden" name="ConfirmationP1" id="pz" value=""></p>
            <p><input type="hidden" name="ConfirmationP2" value=""></p>
            <p><input type="hidden" name="ConfirmationP3" value=""></p>
            <p><input type="hidden" name="UserPicture" value=""></p>
            <p><input type="hidden" id="year" name="RegTime"></p>
            </form>
        </div>
    </div>
</div>
<div class="coverpop"></div>
<script type="text/javascript" src="{{url('/js/select.js')}}"></script>
<script src="{{url('/js/Area.js')}}" type="text/javascript"></script>
<script src="{{url('/js/AreaData_min.js')}}" type="text/javascript"></script>
<script>
    $(function(){
        new YMDselect('year','month');

        var role = $.cookie('role');
        if(role == 2) {
            // $('#pub').css('disabled',true).val('资料审核中');
            $('#pub').hide();
            $('.ucSpan').html('<em>*</em>已传相关凭证：');
            $('.upload').remove();
            // $('.ecp_word').remove();
            $(".btnBox").append("<a class='fabu' href='http://ziyawang.com/ucenter/reconfirm' type='button'><span>重新填写</span><i class='iconfont grab'>&#xe607;</i></a>")
        }

        if(role == 1){
            $('.btnBox').remove();
            $('.upload').remove();
        }

        var token = $.cookie('token');
        if(role == 1 || role == 2 ){
            $.ajax({
                url:"https://apis.ziyawang.com/zll/auth/me?access_token=token&token="+token,
                type:"POST",
                dataType:'json',
                success:function(msg){
                    var service = msg.service;
                    var user = msg.user;
                    // console.log(msg);
                    var UserPicture = user.UserPicture;
                    var ConnectPerson = service.ConnectPerson;
                    var ConnectPhone = service.ConnectPhone;
                    var ServiceName = service.ServiceName
                    var ServiceIntroduction = service.ServiceIntroduction;
                    var ServiceLocation = service.ServiceLocation;
                    var ServiceType = service.ServiceType;
                    var ServiceArea = service.ServiceArea;
                    var ConfirmationP1 = service.ConfirmationP1;
                    var ConfirmationP2 = service.ConfirmationP2;
                    var ConfirmationP3 = service.ConfirmationP3;
                    var Size = service.Size;
                    var Founds = service.Founds;
                    if(Size <= 0){
                        Size = "未填写";
                    }
                    if(Founds <= 0){
                        Founds = "未填写";
                    }
                    var RegTime = service.RegTime;
                    if(ConfirmationP1.length >1 ) {
                        $('#ConfirmationP1').attr('src', 'http://images.ziyawang.com'+ConfirmationP1).show().siblings().remove();
                        $('#ConfirmationP1').parent().show();
                    }

                    if(ConfirmationP2.length >1 ) {
                        $('#ConfirmationP2').attr('src', 'http://images.ziyawang.com'+ConfirmationP2).show().siblings().remove();
                        $('#ConfirmationP1').parent().show();
                    }

                    if(ConfirmationP3.length >1 ) {
                        $('#ConfirmationP3').attr('src', 'http://images.ziyawang.com'+ConfirmationP3).show().siblings().remove();
                        $('#ConfirmationP1').parent().show();
                    }

                    $('#avatar').attr('src','http://images.ziyawang.com'+UserPicture);
                    $('#ConnectPerson').val(ConnectPerson);
                    $('#ConnectPhone').val(ConnectPhone);
                    $('#ServiceName').val(ServiceName);
                    $('#ServiceIntroduction').html(ServiceIntroduction);
                    $('#ServiceLocation').html(ServiceLocation);
                    $('.st_details').html(ServiceType);
                    $('#ServiceArea').html(ServiceArea);
                    $('#Size').val(Size);
                    $('#Founds').val(Founds);
                }
            })
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
            return false;
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
            return false;
        }
    })
    
    if(stop){
        return;
    }

    if($('.please').val() == '请点击选择' ){
        $('.select_box').find("p").remove();
        $('.select_box').append("<p class='error1' id='err'>您还没选呢~</p>");
        stop = true;
        return false;
    }

    if(stop){
        return;
    }

    var type = $('.service_type');
    var lent = type.find('input:checked').length;
    if(lent == 0){
        $('.service_type').append("<p class='error1'>您还没选呢~</p>");
        stop = true;
        return false;
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

        var token = $.cookie('token');
        // var TypeID = getNum(window.location.pathname);
        $('#token').val(token);
        var areaID = getAreaID();
        var ServiceLocation =  getAreaNamebyID(areaID);
        $('#ServiceLocation1').val(ServiceLocation);
        var year = $("select[name='year']").val();
        var month = $("select[name='month']").val();
        if(year != 0 && month != 0 ){
            $('#year').val(year+"年"+month+"月");
        }
        var data = $('form').serialize();

        $(this).attr('disabled', true);
        // var token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIzMyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0Nzk0NTQyIiwiZXhwIjoiMTQ3NTM5OTM0MiIsIm5iZiI6IjE0NzQ3OTQ1NDIiLCJqdGkiOiJmNmFhNDRhODA4ODBlZjAxNzE3NWJmYTZhNDczMWJiZCJ9.ho521A0Prh6LcNAPNcmQEF2H_VTQBXstSwf2m4yeXpA";
        // console.log(data);
        $.ajax({
            url:"https://apis.ziyawang.com/zll/service/confirm?token="+ token + "&" + data,
            type:"POST",
            data:data,
            dataType:"json",
            success:function(msg){
                var date = new Date();
                date.setTime(date.getTime() + (120 * 60 * 1000));
                if(msg.role){
                layer.alert('提交成功，后台会在24小时内对您所填资料进行审核，请耐心等待！', {icon: 1,title:0,closeBtn:0,yes:function(){
                    $.removeCookie('role', { path: '/', domain: '.ziyawang.com' });
                    // $.cookie('role', '', { expires: -1 , path: '/', domain: '.ziyawang.com' });
                    $.cookie('role', 2, { expires: date, path: '/', domain: '.ziyawang.com' });
                    window.location = "{{url('/ucenter/index')}}";}});
                }
            }
        });
    });
</script>
<div class="coverpop"></div>
@endsection