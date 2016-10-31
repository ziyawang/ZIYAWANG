@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=1.0.4" />
    <!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon">
            <h2>发布信息</h2>
            <div class="ucrightTop">
                <p class="infoText">为维护您的合法权益，保证您的隐私安全，您发布的信息中涉及姓名、企业名称及所有证件等隐私信息，系统将做模糊处理，处理后的信息，只有在资芽认证的服务方才可查看，请您放心填写。<span>提示：发布信息后，服务方会联系您，您也可以主动查看服务方相关信息。</span></p>
            </div>
            <h3 class="selectiveType"><span>选择类型</span></h3>
            <div class="ucrightBottom">
                <a href="{{url('/ucenter/pubpro/1')}}"><span class="ucIcons1"></span>资产包转让</a>
                <a href="{{url('/ucenter/pubpro/14')}}"><span class="ucIcons2"></span>债权转让</a>
                <a href="{{url('/ucenter/pubpro/12')}}"><span class="ucIcons3"></span>固产转让</a>
                <a href="{{url('/ucenter/pubpro/4')}}"><span class="ucIcons4"></span>商业保理</a>
                <a href="{{url('/ucenter/pubpro/13')}}" class="extra"><span class="ucIcons5"></span>资产求购</a>
                <a href="{{url('/ucenter/pubpro/6')}}"><span class="ucIcons6"></span>融资需求</a>
                <a href="{{url('/ucenter/pubpro/3')}}"><span class="ucIcons7"></span>法律服务</a>
                <a href="{{url('/ucenter/pubpro/9')}}"><span class="ucIcons8"></span>悬赏信息</a>
                <a href="{{url('/ucenter/pubpro/10')}}"><span class="ucIcons9"></span>尽职调查</a>
                <a href="{{url('/ucenter/pubpro/2')}}"><span class="ucIcons10"></span>委外催收</a>
                <a href="{{url('/ucenter/pubpro/15')}}" class="extra"><span class="ucIcons11"></span>投资需求</a>
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