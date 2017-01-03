@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/member.css')}}?v=2.0.3" />
        <div class="ucRight">
            <h3 class="member-tit"><span class="member-tit-cap">星级认证</span></h3>
            <div class="member-type">
                <div class="member-type-tit clearfix">
                    <div class="member-cur clearfix">
                        <span class="member-cur-cap">星级认证：</span>
                        <div class="server-star">
                            @if($star[1] == 2)
                            <a href="javacript:;" class="server-jin" title="保证金认证"></a>
                            @else
                            <a href="javacript:;" class="jin" title="保证金认证"></a>
                            @endif
                            @if($star[2] == 2)
                            <a href="javacript:;" class="server-shidi" title="实地认证"></a>
                            @else
                            <a href="javacript:;" class="shidi" title="实地认证"></a>
                            @endif
                            @if($star[3] == 2)
                            <a href="javacript:;" class="server-shipin" title="视频认证"></a>
                            @else
                            <a href="javacript:;" class="shipin" title="视频认证"></a>
                            @endif
                            @if($star[4] == 2)
                            <a href="javacript:;" class="server-nuo" title="承诺书认证"></a>
                            @else
                            <a href="javacript:;" class="nuo" title="承诺书认证"></a>
                            @endif
                            @if($star[5] == 2)
                            <a href="javacript:;" class="server-sanzh" title="三证认证"></a>
                            @else
                            <a href="javacript:;" class="sanzh" title="三证认证"></a>
                            @endif

                            <!--
                                ******认证后状态/start******
                            -->
                            <!-- 
                                ******认证后状态/end******
                            -->
                        </div>
                        <span>（可选择完成以下认证点亮星级）</span>
                    </div>
                </div>
                <div class="member-table">
                    <table>
                        <thead class="member-head">
                            <tr>
                                <th class="ser1">认证类型</th>
                                <th class="ser2">详情说明</th>
                                <th class="ser3">点亮类型</th>
                                <th class="ser4">收费标准</th>
                                <th class="ser5"></th>
                            </tr>
                        </thead>
                        <tbody class="member-body">
                            <tr>
                                <td class="ser1">保证金认证</td>
                                <td class="ser2">
                                    <span class="member-privil" data-title="保证金">详情点击</span>
                                </td>
                                <td class="ser3">
                                    <span class="server-gt-jin" title="保证金认证"></span>
                                </td>
                                <td class="ser4">1998元</td>
                                @if($star[1] == 0)
                                <td class="ser5"><a href="{{url('/ucenter/star/pay?id=1')}}" class="member-charge">去认证</a></td>
                                @elseif($star[1] == 1)
                                <td class="ser5"><a href="javacript:;" class="member-review">审核中</a></td>
                                @elseif($star[1] == 2)
                                <td class="ser5"><a href="javacript:;" class="member-success">已认证</a></td>
                                @elseif($star[1] == 3)
                                <td class="ser5"><a href="{{url('/ucenter/star/pay?id=1')}}" class="member-failed">未通过</a></td>
                                @endif
                            </tr>
                            <tr>
                                <td class="ser1">实地认证</td>
                                <td class="ser2">
                                    <span class="member-privil" data-title="实地">详情点击</span>
                                </td>
                                <td class="ser3">
                                    <span class="server-gt-shidi" title="实地认证"></span>
                                </td>
                                <td class="ser4">1998元</td>
                                @if($star[2] == 0)
                                <td class="ser5"><a href="{{url('/ucenter/star/pay?id=2')}}" class="member-charge">去认证</a></td>
                                @elseif($star[2] == 1)
                                <td class="ser5"><a href="javacript:;" class="member-review">审核中</a></td>
                                @elseif($star[2] == 2)
                                <td class="ser5"><a href="javacript:;" class="member-success">已认证</a></td>
                                @elseif($star[2] == 3)
                                <td class="ser5"><a href="{{url('/ucenter/star/pay?id=2')}}" class="member-failed">未通过</a></td>
                                @endif
                            </tr>
                            <tr>
                                <td class="ser1">视频认证</td>
                                <td class="ser2">
                                    <span class="member-privil" data-title="视频">详情点击</span>
                                </td>
                                <td class="ser3">
                                    <span class="server-gt-shipin" title="视频认证"></span>
                                </td>
                                <td class="ser4">288元</td>
                                @if($star[3] == 0)
                                <td class="ser5"><a href="{{url('/ucenter/star/pay?id=3')}}" class="member-charge">去认证</a></td>
                                @elseif($star[3] == 1)
                                <td class="ser5"><a href="javacript:;" class="member-review">审核中</a></td>
                                @elseif($star[3] == 2)
                                <td class="ser5"><a href="javacript:;" class="member-success">已认证</a></td>
                                @elseif($star[3] == 3)
                                <td class="ser5"><a href="{{url('/ucenter/star/pay?id=3')}}" class="member-failed">未通过</a></td>
                                @endif
                            </tr>
                            <tr>
                                <td class="ser1">承诺书认证</td>
                                <td class="ser2">
                                    <span class="member-privil" data-title="承诺书">详情点击</span>
                                </td>
                                <td class="ser3">
                                    <span class="server-gt-nuo" title="承诺书认证"></span>
                                </td>
                                <td class="ser4">免费</td>
                                @if($star[4] == 0)
                                <td class="ser5"><a href="{{url('/ucenter/star/cns')}}" class="member-charge">去认证</a></td>
                                @elseif($star[4] == 1)
                                <td class="ser5"><a href="javacript:;" class="member-review">审核中</a></td>
                                @elseif($star[4] == 2)
                                <td class="ser5"><a href="javacript:;" class="member-success">已认证</a></td>
                                @elseif($star[4] == 3)
                                <td class="ser5"><a href="{{url('/ucenter/star/cns')}}" class="member-failed">未通过</a></td>
                                @endif
                            </tr>
                            <tr>
                                <td class="ser1">三证认证</td>
                                <td class="ser2">
                                    <span class="member-privil" data-title="三证">详情点击</span>
                                </td>
                                <td class="ser3">
                                    <span class="server-gt-sanzh" title="三证认证"></span>
                                </td>
                                <td class="ser4">免费</td>
                                @if($star[5] == 0)
                                <td class="ser5"><a href="{{url('/ucenter/star/sz')}}" class="member-charge">去认证</a></td>
                                @elseif($star[5] == 1)
                                <td class="ser5"><a href="javacript:;" class="member-review">审核中</a></td>
                                @elseif($star[5] == 2)
                                <td class="ser5"><a href="javacript:;" class="member-success">已认证</a></td>
                                @elseif($star[5] == 3)
                                <td class="ser5"><a href="{{url('/ucenter/star/sz')}}" class="member-failed">未通过</a></td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(function(){
        $('.member-privil').on('click', function() {
            var serCap = ["本认证是针对服务方在注册/使用资芽网过程中的一项行为认证标准，用以保证服务方以合法的操作行为使用本网站，不得盗取本网站的信息从事违法行为、牟取暴利，并保证所填写的相关信息真实有效。开通后将点亮本认证星级，并在服务方展示页面进行展示。" , "本认证是由本网站认证人员前往服务方所在地实地考察，并依据本网站实地认证标准现场取证（如：经营场所拍照、人员拍照、实地访谈等）、材料备档。开通认证成功后将点亮本认证星级，并在服务方展示页面进行展示。" , "本认证是由服务方按资芽网要求自主完成，需由服务方持拍摄设备（摄像机或手机）对服务方的经营场所（如：门头、企业名称、办公环境等）及相关员工，进行视频拍摄（一分钟以内），并同时口述相关拍摄内容（如：这是我们的员工、这是我们的前台或这是我们的会议室等），拍摄完成后，传与资芽网客服人员备档。开通认证成功后将点亮本认证星级，并在服务方展示页面进行展示。" , "本认证不收取任何费用，由服务方点击“开通”按钮，下载承诺书并签字盖章上传至本网站；开通认证成功后将点亮本认证星级，并在服务方展示页面进行展示。" , "本认证不收取任何费用，由服务方点击“开通”按钮，上传三证原件（营业执照、组织机构代码证、税务登记证）或三证合一证件原件；开通认证成功后将点亮本认证星级，并在服务方展示页面进行展示（本网站将做水印和模糊处理，请放心上传）。"];
            var serTips = ["注：保证金认证可在缴纳三个月后随时申请取消（取消认证后本网站将全额退还保证金）" , "注：实地认证成功后不可申请取消及退款（如遇地址变更等特殊原因可致电资芽网）" , "注：视频认证成功后不可申请取消及退款（如遇地址变更等特殊原因可致电资芽网）" , "注：承诺书认证成功后不可申请取消（如遇企业变更等特殊原因可致电资芽网）" , "注：三证认证成功后不可申请取消（如遇企业变更等特殊原因可致电资芽网）"];
            var serTit   = $(this).attr('data-title');
            var index = $(this).closest('tr').index();
            // alert(index)
            layer.open({
                type: 1,
                title: false,
                closeBtn: 0,
                area: '900px',
                skin: 'layer-member',
                shadeClose: true,
                content: '<div class="privilege"><div class="privilege-tit">'+ serTit +'认证</div><p class="server-content">'+ serCap[index] +'</p><p class="server-tips">'+ serTips[index] +'</p></div>',
                btn: ['确 定'],btn0:function(){
                }
            });
        })
    })
</script>
@endsection

<?php 


$arr = ['a'=>['b'=>'1','c'=>'2','d'=>'3'],'b'=>['b'=>'1','c'=>'2','d'=>'3'],'c'=>['b'=>'1','c'=>'2','d'=>'3']];
foreach ($arr as $key => $value) {
    $arr[$key]['d'] = 4;
}

?>