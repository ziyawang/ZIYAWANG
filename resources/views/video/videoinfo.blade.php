@extends('layouts.vhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/video.css')}}" />
<!--[if IE]><script src="http://api.html5media.info/1.1.4/html5media.min.js"></script> <![endif]-->
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<!-- <div class="search_bar">
    <div class="wrap">
        <input type="text" placeholder="输入你想选择的视频，快来试试吧..." /><button class="search_btn"></button>
    </div>
</div> -->
<div class="wrap videobg">
    <div class="video_search">
        <div class="video_searchinp"><input type="text" id="content" placeholder="输入你想选择的视频，快来试试吧..." /><span id='search'><img src="/img/search_yel.png" /></span></div>
        <input class="video_searchbtn" type="button" value="搜索视频" />
    </div>
</div>
<!-- tab切换 -->
<div class="video_tab">
    <div class="wrap video_sel">
        <div class="vs_a">
            <a id="tj" href="{{url('/video')}}">推荐</a>
            <a id="zyhhh" href="{{url('/video/homemade')}}">资芽哈哈哈</a>
            <a id="hys" href="{{url('/video/profession')}}">行业说</a>
            <a id="zyyfz" href="{{url('/video/oneminu')}}">资芽一分钟</a>
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
                <video src="" controls autoplay></video>
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
    var VideoID = window.location.pathname.replace(/[^0-9]/ig,"");
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
            data:'itemID=' + VideoID + '&type=2',
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
        // $("#spec01").html('加载中...');  
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
            html = html + "<li class='videoli" + index + "'><img src='http://images.ziyawang.com/" + VideoLogo + "' /><a href='http://ziyawang.com/video/" + VideoID + "' class='vr_title'>" + VideoTitle + "</a><p class='bofang'><span>" + ViewCount + "次</span>播放</p></li>";
        });
        return html;
    }

    //视频 4个ajax
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list/' + VideoID + '?access_token=token',  
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
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=3&VideoLabel=zyyfz&access_token=token',  
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
        // console.log(html)
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
        console.log(json)
        var VideoTitle = json.VideoTitle;
        var VideoDes = json.VideoDes;
        var VideoLogo = json.VideoLogo;
        var VideoLabel = json.VideoLabel;
        if(VideoLabel == 'zyyfz'){
            VideoLabel = '资芽一分钟';
            $('#zyyfz').addClass('current');
        } else if(VideoLabel == 'hys'){
            VideoLabel = '行业说';
            $('#hys').addClass('current');
        } else if(VideoLabel == 'zyhhh'){
            VideoLabel = '资芽哈哈哈';
            $('#zyhhh').addClass('current');
        } else if(VideoLabel == 'tj'){
            VideoLabel = '推荐';
            $('#tj').addClass('current');
        }
        var VideoAuthor = json.VideoAuthor;
        var PublishTime = json.PublishTime;      
        var ViewCount = json.ViewCount;      
        var CollectionCount = json.CollectionCount;      
        var VideoLink = json.VideoLink;  
        var VideoID = window.location.pathname.replace(/[^0-9]/ig,"");    

        var html = "<video poster='http://images.ziyawang.com" + VideoLogo + "' src='http://videos.ziyawang.com" + VideoLink + "' controls='controls' preload='auto'></video>"
        var duoshuo = "<div class='ds-thread' data-thread-key='" + VideoID + "' data-title='" + VideoTitle + "' data-url='http://ziyawang.com/video/" + VideoID + "'></div>"
        document.title = VideoTitle + '-' + VideoLabel +'-资芽视频';
        $('#title1').html(VideoLabel);
        $('#title2').html(VideoTitle);
        $('#video1').html(html);
        $('.playcount').html("<i></i>" + ViewCount + "播放");
        $('#videoDes').html("<h3>视频简介</h3>" + VideoDes);
        $('#duoshuo').html(duoshuo);
    }
});

$('#video1').bind('contextmenu',function() { return false; }); 
</script>
<!-- 多说评论框 start -->
    
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"ziyawang"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] 
         || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    </script>
<!-- 多说公共JS代码 end -->

<script>
    $('#search,.video_searchbtn').click(function(){
        var content = $('#content').val();
        if(content.length < 1){
            window.open("http://ziyawang.com/video","status=yes,toolbar=yes, menubar=yes,location=yes");
            return false;
        }
        window.open("http://ziyawang.com/search/video?type=2&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
    })
    $('#content').focus(function(event){
        $('#content').bind('keydown', function (e) {
            var key = e.which;
            if (key == 13) {
                var content = $('#content').val();
                if(content.length < 1){
                    window.open("http://ziyawang.com/video","status=yes,toolbar=yes, menubar=yes,location=yes");
                    return false;
                }
                window.open("http://ziyawang.com/search/video?type=2&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
            }
        });
    });
</script>
@endsection