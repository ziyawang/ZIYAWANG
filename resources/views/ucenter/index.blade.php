@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/issue_home.css')}}?v=1.0.5" />
    <!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon">
            <h2>发布信息</h2>
            <div class="ucrightTop">
                <p class="infoText">为维护您的合法权益，保证您的隐私安全，您发布的信息中涉及姓名、企业名称及所有证件等隐私信息，系统将做模糊处理，处理后的信息，只有在资芽认证的服务方才可查看，请您放心填写。<span>提示：发布信息后，服务方会联系您，您也可以主动查看服务方相关信息。</span></p>
            </div>
            <h3 class="selectiveType"><span>选择类型</span></h3>
            <div class="ucrightBottom">
                <a href="http://ziyawang.com/ucenter/pubpro/1"><span class="ucIcons1"></span>资产包</a>
                <a href="http://ziyawang.com/ucenter/pubpro/17"><span class="ucIcons2"></span>融资信息</a>
                <a href="http://ziyawang.com/ucenter/pubpro/16"><span class="ucIcons3"></span>固定资产</a>
                <a href="http://ziyawang.com/ucenter/pubpro/18"><span class="ucIcons4"></span>企业商账</a>
                <a href="http://ziyawang.com/ucenter/pubpro/19"><span class="ucIcons5"></span>个人债权</a>
                <a href="http://ziyawang.com/ucenter/pubpro/21"><span class="ucIcons6"></span>法拍资产</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        //左侧边栏通栏
        var ucRighthei1 = $('.ucRight').height();//初始高度
        $('.ucLeft').css('height',ucRighthei1 + 'px');
        $(window).resize(function() {
            var ucRighthei2 = $('.ucRight').height();
            $('.ucLeft').css('height',ucRighthei2 + 'px');
        });
        var role = $.cookie('role');
        if(role != 1) {
            $('.extra').click(function(){
                layer.msg('该信息需要认证服务方');
                $(this).attr('href', 'javascript:;');
            });
        }
    })
</script>
@endsection