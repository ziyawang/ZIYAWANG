@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/safe.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right safe_center">
        <h2>安全中心</h2>
        <div class="safe_user">
            <div class="su_pic">
                <span>我的头像：</span>
                <a href="javascript:;"><img src="http://images.ziyawang.com/user/defaltoux.jpg" id="avatar" /></a><span style="width:130px;color:#999;width:185px;">注：点击头像上传(小于1M)</span>
<script src="{{asset('/org/uploadifive/jquery.uploadifive.min.js')}}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/org/uploadifive/uploadifive.css')}}">
<!-- 头像上传 -->
<style>
    .uploadifive-button{top: 0px;left: -208px;opacity: 0;}
    .perfect_info .mr_perfect span em{color: #f00;margin-right: 4px;}
    #uploadifive-list_upload-queue{display: none;}
    #uploadifive-list_upload{left: -280px;}
    #repub{display: block;background: #e48013;width: 120px;text-align: center;height: 30px;line-height: 30px;border-radius: 20px;color: #fff;margin: 35px 0 0 350px;}
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

            var token = $.cookie('token');

            $.ajax({
                url: 'http://api.ziyawang.com/v1/auth/me?access_token=token&token=' + token,
                type: 'POST',
                success:function(msg){
                    var data = eval(msg);
                    var picture = data.user.UserPicture;
                    $('#avatar').attr('src', 'http://images.ziyawang.com'+picture);
                }
            });

            $('#list_upload').uploadifive({
                'buttonText'       : '上传头像',
                'removeCompleted'  : false,
                'auto'             : true,
                'fileSizeLimit'    : 1024,
                'uploadScript'     : "{{url('/ucenter/upload')}}",
                'onUploadComplete' : function(file, data) {
                    console.log(data); 
                    $('#avatar').attr('src', 'http://images.ziyawang.com'+data);
                    $.ajax({
                        url: 'http://api.ziyawang.com/v1/auth/chpicture?access_token=token&token=' + token,
                        data: {'UserPicture':data},
                        type: 'POST',
                        dataType:'json',
                        success:function(msg){
                            console.log(msg)
                        }
                    });
                }
            });

        });
    </script>
<!-- 头像上传 -->
            </div>
            <div class="linktel">
                <span>联系人电话：</span>
                <span id="phonenumber"></span>
                <span class="authen">手机认证：<em>已认证</em></span>
            </div>
            <div class="changepwd">
                <span>登录密码：</span>
                <a href="{{url('/ucenter/safe/resetpwd')}}">修改</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        var phone = $.cookie('phonenumber');
        phone = phone.replace(/\'/g,"");
        $('#phonenumber').html(phone);
    })
</script>
<!-- 底部 -->
@endsection