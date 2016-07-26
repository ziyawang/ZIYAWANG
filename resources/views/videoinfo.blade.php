@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/video.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="search_bar">
    <div class="wrap">
        <input type="text" placeholder="输入你想选择的视频，快来试试吧..." /><button class="search_btn"></button>
    </div>
</div>
<!-- tab切换 -->
<div class="video_tab">
    <div class="wrap video_sel">
        <div class="vs_a">
            <a href="javascript:;" class="current">推荐</a>
            <a href="javascript:;">自制剧</a>
            <a href="javascript:;">行业说</a>
            <a href="javascript:;">大咖秀</a>
            <a href="javascript:;">资芽一分钟</a>        
        </div>
    </div>
    <!-- video视频 -->
    <div class="wrap video_details">
        <div class="vids_left">
            <!-- 面包屑导航 -->
            <div class="vids_bread">
                <a href="javascript:;">首页</a>&gt;<a href="javascript:;">行业说</a>&gt;<span>什么是资产包转让？</span>
            </div>
            <!-- 主标题 -->
            <h2 class="vids_title">什么是资产包转让？<span>原创</span></h2>
            <!-- 视频video -->
            <div class="video_box">
                <video poster="/img/zhanwei1.jpg" src="{{url('/videos/movie.mp4')}}" controls></video>
            </div>
            <!-- 视频下方小icon -->
            <div class="video_btn clearfix">
                <a href="javascript:;" class="collect"><i></i><span>收藏</span></a>
                <a href="javascript:;" class="phone"><i></i><span>手机看</span></a>
                <span></span>
                <div class="video_share">
                    <ul>
                        <li><a href="javascript:;" class="qq"></a></li>
                        <li><a href="javascript:;" class="sina"></a></li>
                        <li><a href="javascript:;" class="weixin"></a></li>
                    </ul>
                    <span>分享给好友</span>
                </div>
                <span></span>
                <a href="javascript:;" class="revcount"><i></i>1,927评论</a>
                <a href="javascript:;" class="playcount"><i></i>1996.6万播放</a>
            </div>
            <!-- 视频简介 -->
            <div class="brief">  
                <div class="brief_content">
                    <h3>视频简介</h3>资产包转让是一种神他们持续优化信贷期限，对符合条件的企业发放固定资产贷款、技改贷款，拉长信贷期限。今年1至5月全市累计处置不良贷款112.2亿元，比去年同期多处置25.9亿元，增长30%，处置速度快于新发生速度，“风险突围”成效得到进一步巩固。逾期贷款占比6.80%，同比下降2.5个百分点，不良风险从源头上得到有效控制。
                </div>
            </div>
            <!-- 视频填写评论 -->
            <div class="comment">
                <h4>发表评论</h4>
                <textarea name="" id=""></textarea>
                <button>发表评论</button>
            </div>
            <!-- 查看评论 -->
            <div class="review">
                <div class="review_btn">
                    <a href="javascript:;">全部评论</a>
                    <a href="javascript:;">我的牛评</a>
                </div>
                <div class="review_content">
                    <div class="rc_con">
                        <ul>
                            <li>
                                <img src="" alt="" />
                                <a href="javascript:;">天赋神力</a><span>12小时前</span>
                                <p>视频很精彩，讲解的很深刻，对我的帮助很大，大力支持...</p>
                                <a href="javascript:;">128</a>
                                <a href="javascript:;">0</a>
                                <a href="javascript:;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 评论end -->
        </div>
        <div class="vids_right">
            <!-- 视频列表 -->
            <div class="vr_first">
                <h3>播放列表</h3>
                <ul>
                    <li>
                        <img src="/img/zhanwei11.png" />
                        <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                        <p class="bofang"><span>1092次</span>播放</p>
                    </li>
                    <li>
                        <img src="/img/zhanwei12.png" />
                        <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                        <p class="bofang"><span>1092次</span>播放</p>
                    </li>
                    <li>
                        <img src="/img/zhanwei13.png" />
                        <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                        <p class="bofang"><span>1092次</span>播放</p>
                    </li>
                    <li>
                        <img src="/img/zhanwei14.png" />
                        <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                        <p class="bofang"><span>1092次</span>播放</p>
                    </li>
                    <li>
                        <img src="/img/zhanwei15.png" />
                        <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                        <p class="bofang"><span>1092次</span>播放</p>
                    </li>
                </ul>
                <span class="white_span"></span>
            </div>
            <!-- 热播列表 -->
            <div class="vr_first">
                <h3>视频热播榜
                    <span class="list_video">
                        <a href="javascript:;" class="current">1小时</a>|<a href="javascript:;">24小时</a>|<a href="javascript:;">本周</a>
                    </span>
                </h3>
                <div class="time_choice">
                    <ul class="current">
                        <li>
                            <img src="/img/zhanwei11.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei13.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei14.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei13.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei14.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="/img/zhanwei11.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei13.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei14.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                    </ul>
                </div>
                <span class="white_span"></span>
            </div>
            <!-- 原创作品 -->
            <div class="vr_first">
                <h3>原创作品推荐
                    <span class="list_video">
                        <a href="javascript:;" class="current">1小时</a>|<a href="javascript:;">24小时</a>|<a href="javascript:;">本周</a>
                    </span>
                </h3>
                <div class="time_choice">
                    <ul class="current">
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei13.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="/img/zhanwei11.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei13.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei12.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                        <li>
                            <img src="/img/zhanwei13.png" />
                            <a href="javascript:;" class="vr_title">什么是“资产包转让”？</a>
                            <p class="bofang"><span>1092次</span>播放</p>
                        </li>
                    </ul>
                </div>
                <span class="white_span"></span>
            </div>
        </div>
    </div>
</div>
@endsection