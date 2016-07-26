@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/system.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2 class="systeminfo">系统消息<span>(共22条，<em>未读消息</em>9条)</span></h2>
        <div class="info_bar">
            <input class="all check-all" type="checkbox" /><button>标记所选为已读</button><button>删除所选</button><button>清空所有</button>
            <span class="sys_time">时间</span>
        </div>
        <div class="info_list">
            <div class="day">今天（<a href="javascript:;">2条</a>）</div>
            <table cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td class="td_check"><input type="checkbox" /></td>
                        <td class="td_email"></td>
                        <td class="td_word"><a href="javascript:;">需求审核未通过被系统关闭 尊敬的“dapeng23847,非常抱歉！您发布的编号为91829128的需求“应用文，因.......</a></td>
                        <td class="td_time">7月25日</td>
                    </tr>
                    <tr class="haveread">
                        <td class="td_check"><input type="checkbox" /></td>
                        <td class="td_email read"></td>
                        <td class="td_word"><a href="javascript:;">需求审核未通过被系统关闭 尊敬的“dapeng23847,非常抱歉！您发布的编号为91829128的需求“应用文，因.......</a></td>
                        <td class="td_time">7月25日</td>
                    </tr>
                </tbody>
            </table>
            <div class="day">上周（<a href="javascript:;">2条</a>）</div>
            <table cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td class="td_check"><input type="checkbox" /></td>
                        <td class="td_email"></td>
                        <td class="td_word"><a href="javascript:;">需求审核未通过被系统关闭 尊敬的“dapeng23847,非常抱歉！您发布的编号为91829128的需求“应用文，因.......</a></td>
                        <td class="td_time">7月25日</td>
                    </tr>
                    <tr class="haveread">
                        <td class="td_check"><input type="checkbox" /></td>
                        <td class="td_email read"></td>
                        <td class="td_word"><a href="javascript:;">需求审核未通过被系统关闭 尊敬的“dapeng23847,非常抱歉！您发布的编号为91829128的需求“应用文，因.......</a></td>
                        <td class="td_time">7月25日</td>
                    </tr>
                </tbody>
            </table>
            <div class="day">更早（<a href="javascript:;">2条</a>）</div>
            <table cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td class="td_check"><input type="checkbox" /></td>
                        <td class="td_email"></td>
                        <td class="td_word"><a href="javascript:;">需求审核未通过被系统关闭 尊敬的“dapeng23847,非常抱歉！您发布的编号为91829128的需求“应用文，因.......</a></td>
                        <td class="td_time">7月25日</td>
                    </tr>
                    <tr class="haveread">
                        <td class="td_check"><input type="checkbox" /></td>
                        <td class="td_email read"></td>
                        <td class="td_word"><a href="javascript:;">需求审核未通过被系统关闭 尊敬的“dapeng23847,非常抱歉！您发布的编号为91829128的需求“应用文，因.......</a></td>
                        <td class="td_time">7月25日</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="page">
            <a href="#" class="first">&lt;</a>
            <a href="javascript:;" class="current">1<span></span></a>
            <a href="javascript:;">2<span></span></a>
            <a href="javascript:;">3<span></span></a>
            <a href="javascript:;">...</a>
            <a href="javascript:;" class="first last">&gt;</a>
        </div>
    </div>
</div>
<!-- 底部 -->
<script type="text/javascript" src="{{url('/js/system.js')}}"></script>
@endsection