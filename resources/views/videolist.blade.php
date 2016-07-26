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
    <div class="wrap vs_type">
        <div class="video_content on">
        <!-- 推荐 -->
            <div class="vc">
                <h2 class="tuijian">精品推荐<a href="javascript:;">更多&gt;&gt;</a></h2>
                <ul>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video1.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">房屋不动产处置</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video2.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">银行中的不良资产...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video3.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video4.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video1.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">房屋不动产处置</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video2.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">银行中的不良资产...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video3.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video4.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                </ul>
            </div>
        <!-- 热播 -->
            <div class="vc">
                <h2 class="tuijian hot">热播排行<a href="javascript:;">更多&gt;&gt;</a></h2>
                <ul>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video1.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">房屋不动产处置</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video2.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">银行中的不良资产...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video3.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video4.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video1.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">房屋不动产处置</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video2.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">银行中的不良资产...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video3.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video4.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                </ul>
            </div>
        <!-- 最新 -->
            <div class="vc">
                <h2 class="tuijian new">最新发布<a href="javascript:;">更多&gt;&gt;</a></h2>
                <ul>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video1.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">房屋不动产处置</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video2.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">银行中的不良资产...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video3.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video4.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video1.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">房屋不动产处置</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video2.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">银行中的不良资产...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video3.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="hover_img">
                            <img src="img/video4.png" /><span class="zhezhao"></span>
                        </a>
                        <p class="vc_title"><a href="javascript:;">赖账行为屡见不鲜我们该如...</a></p>
                        <p class="vc_condition">已播放1234次&nbsp;|&nbsp;22次评论</p>
                        <a href="javascript:;" class="vc_icon"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="video_content"></div>
        <div class="video_content"></div>
    </div>
</div>
@endsection