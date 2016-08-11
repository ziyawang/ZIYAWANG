@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/release.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>发布信息</h2>
        <div class="mr_para">
            <p>为维护您的合法权益，您发布的信息中涉及姓名、企业名称以及所有证件等隐私信息，系统将作模糊处理, 只有服务方可查看，请放心填写。</p>
            <!-- <p>为维护您的合法权益，您发布的信息中涉及姓名、企业名称以及所有证件、电话号码等，系统将作模糊处理, 双方确认后方可查看，请放心填写。</p> -->
            <p class="warning">提示：发布信息后方可查看处置机构</p>
        </div>
        <h2>选择类型</h2>
        <div class="icon_menu">
            <a href="{{url('/ucenter/pubpro/1')}}"><span class="sp1"></span>资产包转让</a>
            <a href="{{url('/ucenter/pubpro/14')}}"><span class="sp2"></span>债权转让</a>
            <a href="{{url('/ucenter/pubpro/12')}}"><span class="sp3"></span>固产转让</a>
            <a href="{{url('/ucenter/pubpro/4')}}"><span class="sp4"></span>商业保理</a>
            <a href="{{url('/ucenter/pubpro/13')}}"><span class="sp5"></span>资产求购</a>
            <!-- <a href="{{url('/ucenter/pubpro/6')}}"><span class="sp6"></span>融资借贷</a> -->
            <a href="{{url('/ucenter/pubpro/3')}}"><span class="sp7"></span>法律服务</a>
            <a href="{{url('/ucenter/pubpro/9')}}"><span class="sp8"></span>悬赏信息</a>
            <a href="{{url('/ucenter/pubpro/10')}}"><span class="sp9"></span>尽职调查</a>
            <a href="{{url('/ucenter/pubpro/2')}}"><span class="sp10"></span>委外催收</a>
            <a href="{{url('/ucenter/pubpro/5')}}"><span class="sp11"></span>典当担保</a>
        </div>
    </div>
</div>

@endsection