@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/system.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2 class="systeminfo">系统消息<span>(共1条，<em>未读消息</em>1条)</span></h2>
        <div class="info_bar">
            <input class="all check-all" type="checkbox" /><button>标记所选为已读</button><button>删除所选</button>
            <span class="sys_time">时间</span>
        </div>
        <div class="info_list">
            <table cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td class="td_check"><input type="checkbox" /></td>
                        <td class="td_email"></td>
                        <td class="td_word"><a href="javascript:;">欢迎注册成为资芽网新用户！</a></td>
                        <td class="td_time" id="time"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- 底部 -->
<script type="text/javascript" src="{{url('/js/system.js')}}"></script>

<script>
$(function(){

    var mydate = new Date();
    var str = ""+ (mydate.getMonth()+1) + "月";
    str += mydate.getDate() + "日";
    $("#time").html(str);
})
</script>
@endsection