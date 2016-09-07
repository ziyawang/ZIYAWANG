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
<!-- 头像上传 -->
<script src="{{asset('/org/jqupload/jquery.ui.widget.js')}}"></script>
<script src="{{asset('/org/jqupload/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('/org/jqupload/jquery.fileupload.js')}}"></script>
<div class="ec clearfix">
    <div class="ec_right upload">
        <input id="fileupload" type="file" name="files[]" data-url="{{url('/ucenter/upload')}}" multiple>
        <div id="progress">
            <div class="bar" style="width: 0%;"></div>
        </div>
        <!-- <a style="position: relative; top: 8px;" href="javascript:$('#list_upload').uploadifive('upload')"></a> -->
    </div>
</div>
<style>
    .bar {
        height: 18px;
        background: green;
    }
</style>

<script type="text/javascript">
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo(document.body);
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .bar').css(
                'width',
                progress + '%'
            );
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
        // phone = phone.replace(/\'/g,"");
        $('#phonenumber').html(phone);
    })
</script>
<!-- 底部 -->
@endsection