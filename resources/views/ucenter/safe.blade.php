@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/safe.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right safe_center">
        <h2>安全中心</h2>
        <div class="safe_user">
            <div class="su_pic">
                <span>我的头像：</span>
                <a href="javascript:;"><img src="http://images.ziyawang.com/user/defaltoux.jpg" /></a>
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
        var phone = $.session.get('phonenumber');
        phone = phone.replace(/\'/g,"");
        $('#phonenumber').html(phone);
    })
</script>
<!-- 底部 -->
@endsection