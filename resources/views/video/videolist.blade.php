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
<!-- <div class="search_bar">
    <div class="wrap">
        <input type="text" placeholder="输入你想选择的视频，快来试试吧..." /><button class="search_btn"></button>
    </div>
</div> -->
<div class="wrap videobg">
    <div class="video_search">
        <div class="video_searchinp"><input type="text" placeholder="输入你想选择的视频，快来试试吧..." /><span><img src="/img/search_yel.png" /></span></div>
        <input class="video_searchbtn" type="button" value="搜索视频" />
    </div>
</div>
<!-- tab切换 -->
<div class="video_tab">
    <div class="wrap video_sel">
        <div class="vs_a">
            <a href="{{url('/video')}}" class="current">推荐</a>
            <a href="{{url('/video/homemade')}}">自制剧</a>
            <a href="{{url('/video/profession')}}">行业说</a>
            <a href="{{url('/video/star')}}">大咖秀</a>
            <a href="{{url('/video/omeminu')}}">资芽一分钟</a>      
        </div>
    </div>
    <div class="wrap vs_type">
        <div class="video_content1 on">
        <!-- 推荐 -->
            <div class="vc">
                <h2 class="tuijian">精品推荐</h2>
                <ul id="weight">
                   
                </ul>
            </div>
        <!-- 热播 -->
            <div class="vc">
                <h2 class="tuijian hot">热播排行</h2>
                <ul id="hot">
                    
                </ul>
            </div>
        <!-- 最新 -->
            <div class="vc">
                <h2 class="tuijian new">最新发布</h2>
                <ul id="latest">
                    
                </ul>
            </div>
        </div>
        <div class="video_content1"></div>
        <div class="video_content1"></div>
    </div>
</div>

<script>
$(function(){

    document.title = '资芽视频';

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
            html = html + "<li class='videoli" + index + "'><a href='http://ziyawang.com/video/" + VideoID + "' class='hover_img'><img src='http://images.ziyawang.com" + VideoLogo + "' /><span class='zhezhao'></span></a><p class='vc_title'><a href='http://ziyawang.com/video/" + VideoID + "'>" + VideoTitle + "</a></p><p class='vc_condition'>已播放" + ViewCount + "次</p><a href='http://ziyawang.com/video/" + VideoID + "' class='vc_icon'></a></li>";
        });
        return html;
    }
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=8&weight=1&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000, 
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: weight //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=8&order=1&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000, 
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: hot //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=8&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000, 
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: latest //成功执行方法    
    })

    function weight(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        console.log(json)
        var html = _queryVideo(data);
        $('#weight').html(html);
        //视频划过
        $('.vc ul li').hover(function(){
            $(this).find('.zhezhao').stop().fadeIn(500);
            $(this).children('.vc_icon').stop().fadeIn(500);
            $(this).stop().animate({'top':'-5px'},300);
        },function(){
            $(this).find('.zhezhao').stop().fadeOut(500);
            $(this).children('.vc_icon').stop().fadeOut(500);
            $(this).stop().animate({'top':'0px'},300);
        })
    }

    function hot(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var html = _queryVideo(data);
        $('#hot').html(html);
        //视频划过
        $('.vc ul li').hover(function(){
            $(this).find('.zhezhao').stop().fadeIn(500);
            $(this).children('.vc_icon').stop().fadeIn(500);
            $(this).stop().animate({'top':'-5px'},300);
        },function(){
            $(this).find('.zhezhao').stop().fadeOut(500);
            $(this).children('.vc_icon').stop().fadeOut(500);
            $(this).stop().animate({'top':'0px'},300);
        })
    }

    function latest(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var html = _queryVideo(data);
        $('#latest').html(html);
        //视频划过
        $('.vc ul li').hover(function(){
            $(this).find('.zhezhao').stop().fadeIn(500);
            $(this).children('.vc_icon').stop().fadeIn(500);
            $(this).stop().animate({'top':'-5px'},300);
        },function(){
            $(this).find('.zhezhao').stop().fadeOut(500);
            $(this).children('.vc_icon').stop().fadeOut(500);
            $(this).stop().animate({'top':'0px'},300);
        })
    }
})


</script>
@endsection