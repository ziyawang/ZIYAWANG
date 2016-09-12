@extends('layouts.home')

@section('seo')
<title>资芽视频-不良资产领域第一视频平台</title>
        <meta name="Keywords" content="资芽视频,不良资产视频,不良资产行业视频,资芽网视频" />
        <meta name="Description" content="资芽视频是资芽网第一视频,行业专家释疑解惑,分享经验,培训学习,剖析热点话题;线上线下活动,同业互动,探索分析,交流共享,协作共赢,鼓励创新,普及法律常识,降低法律风险.推动不良资产行业,金融领域健康有序发展." />
@endsection

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
        <div class="video_searchinp"><input type="text" id="content" placeholder="输入你想选择的视频，快来试试吧..." /><span id='search'><img src="/img/search_yel.png" /></span></div>
        <input class="video_searchbtn" type="button" value="搜索视频" />
    </div>
</div>
<!-- tab切换 -->
<div class="video_tab">
    <div class="wrap vs_type">
        <div class="video_content1 on">
        <!-- 搜索结果 -->
            <div class="vc">
                <h2 class="tuijian new">搜索结果</h2>
                <ul id="list">
                    
                </ul>
            </div>
            <!-- 公共分页/start -->
            <div class="pages">
                <div id="Pagination"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage">X</strong>页</span>
                </div>
            </div>
            <!-- 公共分页/end -->
        </div>
        <div class="video_content1"></div>
        <div class="video_content1"></div>
    </div>
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
    var startpage = getQueryString("startpage")?getQueryString("startpage"):'1';
    $('#content').val(content);
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/search?access_token=token',  
        type: 'POST',  
        dataType: 'json',  
        data: {'type':'2', 'content': content, 'pagecount': '8', 'startpage': startpage},
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
            html = html + "<li><a href='http://ziyawang.com/video/" + VideoID + "' class='hover_img'><img src='http://images.ziyawang.com" + VideoLogo + "' /><span class='zhezhao'></span></a><p class='vc_title'><a href='http://ziyawang.com/video/" + VideoID + "'>" + VideoTitle + "</a></p><p class='vc_condition'>已播放" + ViewCount + "次</p><a href='http://ziyawang.com/video/" + VideoID + "' class='vc_icon'></a></li>";
        });
        return html;
    }

    function succFunction(tt) {
        var json = eval(tt); //数组 
        var counts = json.counts;
        var pages = json.pages;
        var current = json.currentpage-1;
        //分页
        $("#Pagination").pagination(pages,{current_page:current});
        $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
        $('.pagination a').click(function(){
            startpage = $(this).html();
            ajax(startpage);
        });
        var data = json.data;
        console.log(json)
        var html = _queryVideo(data);
        if(counts == 0){
            html = '抱歉，暂时没有你想搜索的视频！'
        }
        $('#list').html(html);
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


    function ajax(startpage){
        var content = $('#content').val();
        window.open("http://ziyawang.com/search/video?type=2&startpage=" + startpage + "&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
    }

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