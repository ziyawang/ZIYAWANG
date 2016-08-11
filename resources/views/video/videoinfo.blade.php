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
            <a href="{{url('/video')}}">推荐</a>
            <a href="{{url('/video/homemade')}}">自制剧</a>
            <a href="{{url('/video/profession')}}">行业说</a>
            <a href="{{url('/video/star')}}">大咖秀</a>
            <a href="{{url('/video/oneminu')}}">资芽一分钟</a>
        </div>
    </div>
    <!-- video视频 -->
    <div class="wrap video_details">
        <div class="vids_left">
            <!-- 面包屑导航 -->
            <div class="vids_bread">
                <a href="{{'/'}}">首页</a>&gt;<a href="{{url('/video')}}">资芽视频</a>&gt;<span id="title1"></span>
            </div>
            <!-- 主标题 -->
            <h2 class="vids_title" id="title2"></h2>
            <!-- 视频video -->
            <div class="video_box" id="video1">
            </div>
            <!-- 视频下方小icon -->
            <div class="video_btn clearfix">
                <a href="javascript:;" class="collect"><i></i><span>收藏</span></a>
                <a href="javascript:;" class="phone"><i></i><span>手机看</span></a>
                <span></span>
                <span></span>
                <a href="javascript:;" class="playcount"><i></i>万播放</a>
            </div>
            <!-- 视频简介 -->
            <div class="brief">  
                <div class="brief_content" id="videoDes">
                </div>
            </div>
<!-- 多说评论框 -->
<div id="duoshuo"></div>
<!-- 多说评论框 -->
            <!-- 视频填写评论 -->
        <!--     <div class="comment">
                <h4>发表评论</h4>
                <textarea name="" id=""></textarea>
                <button>发表评论</button>
            </div> -->
            <!-- 查看评论 -->
   <!--          <div class="review">
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
            </div> -->
            <!-- 评论end -->
        </div>
        <div class="vids_right">
            <!-- 视频列表 -->
            <div class="vr_first">
                <h3>播放列表</h3>
                <ul id="video2">
                    
                </ul>
                <span class="white_span"></span>
            </div>
            <!-- 热播列表 -->
            <div class="vr_first">
                <h3>视频热播榜
                    <!-- <span class="list_video">
                        <a href="javascript:;" class="current">1小时</a>|<a href="javascript:;">24小时</a>|<a href="javascript:;">本周</a>
                    </span> -->
                </h3>
                <div class="time_choice">
                    <ul class="current" id="video3">
                       
                    </ul>
                </div>
                <span class="white_span"></span>
            </div>
            <!-- 原创作品 -->
            <div class="vr_first">
                <h3>原创作品推荐
                    <!-- <span class="list_video">
                        <a href="javascript:;" class="current">1小时</a>|<a href="javascript:;">24小时</a>|<a href="javascript:;">本周</a>
                    </span> -->
                </h3>
                <div class="time_choice">
                    <ul class="current" id="video4">
                        
                    </ul>
                </div>
                <span class="white_span"></span>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
    var ViodeID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.session.get('token');

    function checkLogin(){
        if(!token){
            window.location = "{{url('/login')}}";
        }
    }

    function collect() {
        token = token.replace(/\'/g,"");
        $.ajax({
            url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
            type:'POST',
            data:'itemID=' + ViodeID + '&type=2',
            dataType:'json',
            success:function(msg){
                alert(msg.msg);
            }
        });
    }

    $('.collect').click(function(){
        checkLogin();  
        collect();
    })
    function LoadFunction() {  
        $("#spec01").html('加载中...');  
    }  
    function erryFunction() {  
        // alert("error");  
    }  
    function _queryVideo(data) {
        var html = '';
        $.each(data, function (index, item) {  
            //循环获取数据    
            var VideoTitle = data[index].VideoTitle;       //视频标题
            var VideoLogo  = data[index].VideoLogo;     //视频图片
            var VideoID    = data[index].VideoID;       //视频ID
            var ViewCount  = data[index].ViewCount;       //播放次数
            html = html + "<li><img src='http://images.ziyawang.com/" + VideoLogo + "' /><a href='http://test.ziyawang.com/video/" + ViodeID + "' class='vr_title'>" + VideoTitle + "</a><p class='bofang'><span>" + ViewCount + "次</span>播放</p></li>";
        });
        return html;
    }

    //视频 4个ajax
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list/' + ViodeID + '?access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: video //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=5&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: video1 //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=4&order=1&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: video2 //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=3&VideoLabel=资芽一分钟&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: video3 //成功执行方法    
    })

    function video1(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var html = _queryVideo(data);
        console.log(html)
        $('#video2').html(html);
    }

    function video2(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var html = _queryVideo(data);
        $('#video3').html(html);
    }

    function video3(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var html = _queryVideo(data);
        $('#video4').html(html);
    }

    function video(tt) {
        var json = eval(tt); //数组 
        var VideoTitle = json.VideoTitle;
        var VideoDes = json.VideoDes;
        var VideoLogo = json.VideoLogo;
        var VideoLabel = json.VideoLabel;
        var VideoAuthor = json.VideoAuthor;
        var PublishTime = json.PublishTime;      
        var ViewCount = json.ViewCount;      
        var CollectionCount = json.CollectionCount;      
        var VideoLink = json.VideoLink;  
        var ViodeID = window.location.pathname.replace(/[^0-9]/ig,"");    

        html = "<video poster='http://images.ziyawang.com" + VideoLogo + "' src='http://videos.ziyawang.com" + VideoLink + "' controls></video>"

        $('#title1').html(VideoLabel);
        $('#title2').html(VideoTitle);
        $('#video1').html(html);
        $('.playcount').html("<i></i>" + ViewCount + "播放");
        $('#videoDes').html("<h3>视频简介</h3>" + VideoDes);
    }
});

$('#video1').bind('contextmenu',function() { return false; }); 
</script>

<!-- 多说公共JS代码 end -->
@endsection