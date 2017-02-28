@extends('layouts.home')

@section('seo')
<title>资芽视频-不良资产领域第一视频平台</title>
        <meta name="Keywords" content="资芽视频,不良资产视频,不良资产行业视频,资芽网视频" />
        <meta name="Description" content="资芽视频是资芽网第一视频,行业专家释疑解惑,分享经验,培训学习,剖析热点话题;线上线下活动,同业互动,探索分析,交流共享,协作共赢,鼓励创新,普及法律常识,降低法律风险.推动不良资产行业,金融领域健康有序发展." />
@endsection

@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/videos.css')}}?v=2.1.0" />
<!-- 二级banner -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/ucenter/index')}}"></a></li>
    </ul>
</div>
<!-- 主体 -->
<!-- <div class="search_bar">
    <div class="wrap">
        <input type="text" placeholder="输入你想选择的视频，快来试试吧..." /><button class="search_btn"></button>
    </div>
</div> -->
<!--视频导航 search框 -->
<div class="bVideo">
    <div class="bVideoBox clearfix">
        <div class="videoNav">
            <div class="shadowBar"></div>
            <ul>
                <li><a href="http://ziyawang.com/video">推荐</a><span></span></li>
                <li><a href="http://ziyawang.com/video/homemade">资芽哈哈哈</a><span></span></li>
                <li><a href="http://ziyawang.com/video/profession">行业说</a><span></span></li>
                <li><a href="http://ziyawang.com/video/oneminu">资芽一分钟</a><span></span></li>
            </ul> 
        </div>
        <div class="videoSearch">
            <div class="videoSearchinp">
                <input type="text" id="content" placeholder="输入你想选择的视频，快来试试吧..." /><span id='search'><img src="/img/search_yel.png" /></span>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <!-- 搜索结果 -->
    <div class="hotlist hys">
        <h2 class="bTitle">搜索结果</h2>
        <div class="hotlistVideo">
            <ul id="videolist">
            </ul>
        </div>
    </div>
    <!-- 公共分页/start -->
    <div class="pages">
        <div id="Pagination"></div>
            <div class="searchPage">
            <span class="page-sum">共<strong class="allPage">0</strong>页</span>
        </div>
    </div>
    <!-- 公共分页/end -->
</div>

<script>
$(function(){

    document.title = '搜索-资芽视频-不良资产领域第一视频平台';

    function getQueryString(key){
        var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
        var result = window.location.search.substr(1).match(reg);
        return result?decodeURIComponent(result[2]):null;
    }
    var content = getQueryString("content");
    var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;
    $('#content').val(content);
    $.ajax({  
        url: 'http://apis.ziyawang.com/zll/search?access_token=token',  
        type: 'POST',  
        dataType: 'json',  
        data: {'type':'2', 'content': content, 'pagecount': '8', 'startpage': urlpage},
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: succFunction //成功执行方法    
    });  

    function LoadFunction() {  
        $("#list").html('加载中...');  
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
            html = html + "<li> <div class='videoLiPic'> <a href='http://ziyawang.com/video/" + VideoID + "' class='videoLiPicAsign' title='" + VideoTitle + "'><img class='videoImg' src='http://images.ziyawang.com" + VideoLogo + "' /></a> <a href='http://ziyawang.com/video/" + VideoID + "' class='mask'></a> <span class='s_shadow'></span> </div> <div class='videoLiTitle'> <a href='http://ziyawang.com/video/" + VideoID + "' title='" + VideoTitle + "'>" + VideoTitle + "</a> <span>已播放" + ViewCount + "次</span> </div> </li>";
        });
        return html;
    }

    function succFunction(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var counts = json.counts;
        var pages = json.pages;var current = json.currentpage-1;
        //分页
        $("#Pagination").pagination(pages,{current_page:current});
        $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
        if(urlpage == 1){
            $('.prev').remove();
        }
        if(urlpage == pages){
            $('.next').remove();
        }
        $('.pagination a').click(function(){
            urlpage = parseInt(urlpage);
            var fenyepage = $(this).html();
            if(fenyepage == '上一页') {
                urlpage -= 1;
            } else if(fenyepage == '下一页') {
                urlpage += 1;
            } else {
                urlpage = fenyepage;
            }
            var url = "http://ziyawang.com/search/video?type=2&content=" + content + "&startpage=" + urlpage;
            url = encodeURI(url);
            window.location.href= url;
        });
        var html = _queryVideo(data);
        $('#videolist').html(html);
        if(counts == "0"){
            $("#videolist").html('<li style="font-size:16px;">抱歉没有找到您想要的结果！</li>');
        }
        //视频划过
        // mouseover videonav
        $('.videoNav li').hover(function(){
            $('span',this).stop().css('height','5px');
            $('span',this).animate({
                left:'0',
                width:'100%',
                right:'0'
            },200);
        },function(){
            if($(this).hasClass('current')){
                $('span',this).stop().animate({
                    left:'0',
                    width:'100%',
                    right:'0'
                },200);
            }else{
                $('span',this).stop().animate({
                    left:'50%',
                    width:'0'
                },200);
            }
        });
        //mouseover shadow
        $('.bestConLeft,.bestConRight ul li,.hotlistVideo ul li').hover(function() {
            $(this).find('.mask').stop().fadeToggle(500);
        });
    }
})

</script>
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