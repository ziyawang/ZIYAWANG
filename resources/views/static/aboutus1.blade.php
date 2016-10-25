@extends('layouts.home')

@section('seo')
<title>资芽网-全球不良资产超级综服平台</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection

@section('content')
        <link rel="stylesheet" type="text/css" href="{{url('/css/us.css')}}?v=1.0.4" />
    <!-- 二级banner -->
    <div class="find_service">
        <ul>
            <li></li>
        </ul>
    </div>
    <!-- 主体 -->
    <div class="us wrap">
        <div class="us_left">
            <h2 class="ul_title">
                资芽网
            </h2>
            <ul class="ul_nav">
                <li class="current"><a href="{{url('/aboutus')}}">关于我们</a></li>
                <li><a href="{{url('/connectus')}}">联系我们</a></li>
                <li><a href="javascript:;">人才招聘</a></li>
                <li><a href="javascript:;">商务合作</a></li>
                <li><a href="{{url('/legal')}}">法律声明</a></li>
                <li><a href="javascript:;">意见反馈</a></li>
            </ul>
        </div>
        <div class="us_right">
            <h2>关于我们</h2>
            <div class="about_us">
                <p>资芽（北京）网络科技有限公司座落在北京中关村国际创客中心，旗下资芽网（www.ziyawang.com）于2016年7月31日上线，资芽网吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求，整合海量相关处置服务机构与投资方，搭建多样化处置通道和不良资产综服生态产业体系，嵌入移动社交与视频直播，兼具媒体属性，实现大数据搜索引擎和人工智能，打造共享开放的全球不良资产超级综服平台。</p>
            </div>
        </div>
    </div>
@endsection