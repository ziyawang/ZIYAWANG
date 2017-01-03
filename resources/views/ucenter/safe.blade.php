@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=2.0.3" />
    <!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon ucRightSafe">
            <h3 class="selectiveType security"><span>安全中心</span></h3>
            <div class="ucrightsafeBottom clearfix">
                <div class="ucrbLeft">
                    <p class="myavatar"><b class="label">我的头像：</b><span>注：点击头像<i>上传<span style="color:red;">(小于1M)</span></i></span></p>
                    <div class="nickname clearfix">
                        <b class="label">昵称：</b>
                        <div class="fl"><span id="nickname1">未设置</span><a href="javascript:;" class="nameChange">修改</a></div>
                        <div class="fl textField" style="display:none">
                            <input type="text" class="enterName" value="" /><a href="javascript:;" class="sureBtn">确定</a><a href="javascript:;" class="changeAgain">修改</a>
                            <div class="clr"></div>
                            <div class="prompt"><span id="error"></span></div>
                            <!-- ps：昵称重复时对应文字 -->
                        </div>
                    </div>
                </div>
                <div class="ucrbRight">
                    <div class="b_circle"></div>
                    <div class="uploadAvatar">
                        <span class="fileinput-button3">
                            <span><img id="avatar1" src="" /></span>
<!-- 头像上传 -->
<script src="{{asset('/org/jqupload/js/jquery.ui.widget.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload-process.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload-validate.js')}}"></script>
        <input id="fileupload" type="file" name="files[]" data-url="{{url('/ucenter/upload')}}" multiple accept="image/png, image/gif, image/jpg, image/jpeg">
<script type="text/javascript">
$(function () {
    var token = $.cookie('token');
    $('#fileupload').fileupload({
        dataType: 'json',
        maxFileSize: 1 * 1024 * 1024,
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                // console.log(file.name);
                $("#avatar").attr('src','http://images.ziyawang.com/user/'+file.name).show();
                $("#avatar1").attr('src','http://images.ziyawang.com/user/'+file.name);
                var UserPicture = '/user/'+file.name;
                $.ajax({
                        url: 'http://api.ziyawang.com/v1/auth/chpicture?access_token=token&UserPicture=' + UserPicture + '&token=' + token,
                        data: {'UserPicture':UserPicture},
                        type: 'POST',
                        dataType:'json',
                        success:function(msg){
                            layer.msg(msg.msg);
                        }
                    });
            });
        }
    });
});
</script>
<!-- 头像上传 -->
                        </span>
                    </div>
                    <span class="orange_circle"></span>
                    <span class="blue_circle"></span>
                    <span class="pink_circle"></span>
                    <p class="contactNumber" id="_phonenumber"></p>
                    <p class="changePwd">登录密码：<a href="{{url('/ucenter/safe/resetpwd')}}">修改</a></p>
                    <p class="phoneCert">手机认证：<span>已认证</span></p>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $(function(){
        var token = $.cookie('token');
        // var token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIzMyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0Nzk0NTQyIiwiZXhwIjoiMTQ3NTM5OTM0MiIsIm5iZiI6IjE0NzQ3OTQ1NDIiLCJqdGkiOiJmNmFhNDRhODA4ODBlZjAxNzE3NWJmYTZhNDczMWJiZCJ9.ho521A0Prh6LcNAPNcmQEF2H_VTQBXstSwf2m4yeXpA";
        if(!token){
            window.location = "{{url('/login')}}";
            return false;
        }

        //声明input昵称宽度随文字长度而变化
        var textWidth = function(text){ 
            var sensor = $('<pre>'+ text +'</pre>').css({display: 'none'}); 
            $('body').append(sensor); 
            var width = sensor.width()+20;
            sensor.remove(); 
            return width;
        };
        //nickname 修改
        $('.nameChange').click(function() {
            $(this).parent().hide().next().show();
        });
        //click==============>昵称修改完点击确定
        $('.sureBtn').click(function() {
            if($('.enterName').val()==''){
                $('.prompt span').html('请输入昵称');
            }
            else if($('.enterName').val().length > 16){
                //$('.prompt').addClass('prompt-error');
                $('.prompt span').html('昵称不可超过16个字');
            }
            else{
                var username = $('.enterName').val();
                $.ajax({
                    url : "http://api.ziyawang.com/v1/auth/chusername?access_token=token&username=" + username + "&token=" + token,
                    data : {'username' : username},
                    type : 'POST',
                    dataType : 'json',
                    success : function(msg){
                        var json = eval(msg);
                        if(json.status_code == '419'){
                            $('#error').html('此昵称已被其他用户抢注，请修改');
                        } else if(json.status_code == '200'){
                            $('.sureBtn').hide().next().show();
                            $('.enterName').addClass('active').attr('readonly', 'readonly');
                            $('.prompt span').html('');
                            $('.enterName').width(textWidth($('.enterName').val()));
                            $('#nickname').html(username);
                        } else if(json.status_code == '420'){
                            $('#error').html('未知错误，请稍后重试');
                        }
                    }
                });
            }
        });
        //再次修改昵称
        $('.changeAgain').click(function() {
            $('.enterName').removeClass('active').removeAttr('readonly');
            $(this).hide().prev().show();
            $('.enterName').width(textWidth($('.enterName').val()));
        });
        //获得焦点时昵称框的长度
        $('.enterName').focus(function() {
            if(typeof($(".enterName").attr("readonly"))=="undefined"){
                $('.enterName').width('86px');
            }
        });
    })
</script>
@endsection