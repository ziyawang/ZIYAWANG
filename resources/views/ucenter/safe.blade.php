@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/safe.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>安全中心</h2>
        <div class="safe_user">
            <div class="su_pic">
                <span>我的头像：</span>
                <a href="javascript:;"><img src="img/toux.jpg" /></a>
            </div>
            <div class="linkman">
                <span>联系人姓名：</span>
                <span>张扬</span>
                <span class="authen">实名认证：<em>已认证</em></span>
            </div>
            <div class="linktel">
                <span>联系人电话：</span>
                <span>13534564321<a href="javascript:;">修改</a></span>
                <span class="authen">手机认证：<em>已认证</em></span>
            </div>
            <div class="linkaddr">
                <span>所在地：</span>
                <span>北京市海淀区</span>
                <span class="authen">所在地：<em>已认证</em></span>
            </div>
            <div class="changepwd">
                <span>登录密码：</span>
                <a href="javascript:;">修改</a>
            </div>
        </div>
    </div>
</div>
<!-- 底部 -->
@endsection