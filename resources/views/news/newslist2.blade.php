@extends('layouts.home')

@section('seo')
<title>资芽新闻-资芽网</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection
@section('content')
    <link type="text/css" rel="stylesheet" href="{{url('/css/newsinfo.css')}}""css/newsinfo.css" />

<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="content clearfix">
<!-- 左侧 -->
    <div class="conLeft">
        <div class="news_bread"><span class="newsIcon"></span>新闻中心</div>
        <div class="nl_content">
            <ul id="newslist">
                <li><a href="javascript:;" class="nlc_img" title="温州银行业不良贷款首现“双降”"><img src="img/news1.png" /></a><h2 class="nlc_title"><a href="javascript:;" title="温州银行业不良贷款首现“双降”">温州银行业不良贷款首现“双降”</a></h2><span class="nlc_time">发表于：2016-7-1&nbsp;&nbsp;10:03<i></i></span><p class="nlc_abstr">近两年来，温州面对2011年9月份以来受宏观经济环境和民间借贷风波影响，银行业不良贷款迅猛攀升的状况，通过“细、强、优、深、净”五化促进新常态下信用风险化解，有效遏制不良上升势头。据温 ...</p></li>
                <li>
                    <a href="javascript:;" class="nlc_img" title="温州银行业不良贷款首现“双降”"><img src="img/news1.png" /></a>
                    <h2 class="nlc_title"><a href="javascript:;" title="温州银行业不良贷款首现“双降”">温州银行业不良贷款首现“双降”</a></h2>
                    <span class="nlc_time">发表于：2016-7-1&nbsp;&nbsp;10:03<i></i></span>
                    <p class="nlc_abstr">近两年来，温州面对2011年9月份以来受宏观经济环境和民间借贷风波影响，银行业不良贷款迅猛攀升的状况，通过“细、强、优、深、净”五化促进新常态下信用风险化解，有效遏制不良上升势头。据温 ...</p>
                </li>
                <li>
                    <a href="javascript:;" class="nlc_img" title="温州银行业不良贷款首现“双降”"><img src="img/news1.png" /></a>
                    <h2 class="nlc_title"><a href="javascript:;" title="温州银行业不良贷款首现“双降”">温州银行业不良贷款首现“双降”</a></h2>
                    <span class="nlc_time">发表于：2016-7-1&nbsp;&nbsp;10:03<i>作者：admin</i></span>
                    <p class="nlc_abstr">近两年来，温州面对2011年9月份以来受宏观经济环境和民间借贷风波影响，银行业不良贷款迅猛攀升的状况，通过“细、强、优、深、净”五化促进新常态下信用风险化解，有效遏制不良上升势头。据温 ...</p>
                </li>
            </ul>
            <!-- 公共分页/start -->
            <div class="pages">
                <div id="Pagination"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage">15</strong>页</span>
                </div>
            </div>
            <!-- 公共分页/end -->
        </div>
    </div>
    <div class="conRight">
        <div class="newsCom">
            <h2 class="nrc_title"><a href="{{url('/zynews')}}">资芽新闻</a><span>COMPANY&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt" id="ziya1">
            <a href="javascript:;" class="nrc_img" title="温州银行业不良贷款首现“双降”"><img src="img/news4.png" /></a><h2 class="nlc_title"><a href="javascript:;" title="温州银行业不良贷款首现“双降”">温州银行业不良贷款首现“双降”</a></h2><p class="nrc_abstr">近两年来，温州面对2011年9月份以来受宏观经济环境和民间借贷风波影响，银行业不良贷款迅猛攀 ...</p>
            </div>
            <ul class="nrc_list" id="ziya2">
                <li><a href="javascript:;" title="信托公司争相布局资产证券化">信托公司争相布局资产证券化</a></li>
                <li><a href="javascript:;" title="甘肃省成立丝绸之路大数据公司，三星投...">甘肃省成立丝绸之路大数据公司，三星投...</a></li>
                <li><a href="javascript:;" title="信托公司争相布局资产证券化">信托公司争相布局资产证券化</a></li>
                <li><a href="javascript:;" title="甘肃省成立丝绸之路大数据公司，三星投...">甘肃省成立丝绸之路大数据公司，三星投...</a></li>
            </ul>
        </div>
        <div class="newsCom">
            <h2 class="nrc_title"><a href="{{url('/hynews')}}">行业动态</a><span>INDUSTRY&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt" id="hangye1">
                <a href="javascript:;" class="nrc_img" title="温州银行业不良贷款首现“双降”"><img src="img/news4.png" /></a>
                <h2 class="nlc_title"><a href="javascript:;" title="温州银行业不良贷款首现“双降”">温州银行业不良贷款首现“双降”</a></h2>
                <p class="nrc_abstr">近两年来，温州面对2011年9月份以来受宏观经济环境和民间借贷风波影响，银行业不良贷款迅猛攀 ...</p>
            </div>
            <ul class="nrc_list" id="hangye2">
                <li><a href="javascript:;" title="信托公司争相布局资产证券化">信托公司争相布局资产证券化</a></li>
                <li><a href="javascript:;" title="甘肃省成立丝绸之路大数据公司，三星投...">甘肃省成立丝绸之路大数据公司，三星投...</a></li>
                <li><a href="javascript:;" title="信托公司争相布局资产证券化">信托公司争相布局资产证券化</a></li>
                <li><a href="javascript:;" title="甘肃省成立丝绸之路大数据公司，三星投...">甘肃省成立丝绸之路大数据公司，三星投...</a></li>
            </ul>
        </div>
        <div class="newsCom">
            <h2 class="nrc_title"><a href="{{url('/cjnews')}}">财经资讯</a><span>FINANCIAL&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt" id="caijing1">
                <a href="javascript:;" class="nrc_img" title="温州银行业不良贷款首现“双降”"><img src="img/news4.png" /></a>
                <h2 class="nlc_title"><a href="javascript:;" title="温州银行业不良贷款首现“双降”">温州银行业不良贷款首现“双降”</a></h2>
                <p class="nrc_abstr">近两年来，温州面对2011年9月份以来受宏观经济环境和民间借贷风波影响，银行业不良贷款迅猛攀 ...</p>
            </div>
            <ul class="nrc_list" id="caijing2">
                <li><a href="javascript:;" title="信托公司争相布局资产证券化">信托公司争相布局资产证券化</a></li>
                <li><a href="javascript:;" title="甘肃省成立丝绸之路大数据公司，三星投...">甘肃省成立丝绸之路大数据公司，三星投...</a></li>
                <li><a href="javascript:;" title="信托公司争相布局资产证券化">信托公司争相布局资产证券化</a></li>
                <li><a href="javascript:;" title="甘肃省成立丝绸之路大数据公司，三星投...">甘肃省成立丝绸之路大数据公司，三星投...</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- 底部 -->
@endsection