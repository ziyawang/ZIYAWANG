@extends('layouts.home')

@section('seo')
<title>资芽视频-不良资产领域第一视频平台</title>
        <meta name="Keywords" content="资芽视频,不良资产视频,不良资产行业视频,资芽网视频" />
        <meta name="Description" content="资芽视频是资芽网第一视频,行业专家释疑解惑,分享经验,培训学习,剖析热点话题;线上线下活动,同业互动,探索分析,交流共享,协作共赢,鼓励创新,普及法律常识,降低法律风险.推动不良资产行业,金融领域健康有序发展." />
@endsection
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/videos.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- search框 -->
<!-- <div class="wrap videobg">
    <div class="video_search">
        <div class="video_searchinp"><input type="text" id="content" placeholder="输入你想选择的视频，快来试试吧..." /><span id='search'><img src="/img/search_yel.png" /></span></div>
        <input class="video_searchbtn" type="button" value="搜索视频" />
    </div>
</div> -->
<!--视频导航 search框 -->
<div class="bVideo">
    <div class="bVideoBox clearfix">
        <div class="videoNav">
            <div class="shadowBar"></div>
            <ul>
                <li class="current"><a href="http://ziyawang.com/video">推荐</a><span></span></li>
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
    <!-- 精品推荐 -->
    <div class="best">
        <h2 class="bTitle">精品推荐</h2>
        <div class="bestCon clearfix">
            <div class="bestConLeft" id="bestvideo">
            </div>
            <div class="bestConRight">
                <ul id="weight">
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- 热播排行 -->
    <div class="hotlist">
        <h2 class="bTitle">热播排行</h2>
        <div class="hotlistVideo">
            <ul id="hot">
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){

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
                html = html + "<li> <div class='videoLiPic'> <a href='http://ziyawang.com/video/" + VideoID + "' class='videoLiPicAsign' title='" + VideoTitle + "'><img class='videoImg' src='http://images.ziyawang.com" + VideoLogo + "' /></a> <a href='http://ziyawang.com/video/" + VideoID + "' class='mask'></a> <span class='s_shadow'></span> </div> <div class='videoLiTitle'> <a href='http://ziyawang.com/video/" + VideoID + "' title='" + VideoTitle + "'>" + VideoTitle + "</a> <span>已播放" + ViewCount + "次</span> </div> </li>";
            });
            return html;
        }

        $.ajax({  
            url: 'http://api.ziyawang.com/v1/video/list?pagecount=5&weight=1&access_token=token',  
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

        function hot(tt) {
            var json = eval(tt); //数组 
            var data = json.data;
            var html = _queryVideo(data);
            $('#hot').html(html);
            //视频划过
            
            //mouseover shadow
            $('.hotlistVideo ul li').hover(function() {
                $(this).find('.mask').stop().fadeToggle(500);
            });
        }

        function weight(tt) {
            var json = eval(tt); //数组 
            var data = json.data;
            var data1 = data[0];
            var html1 = "<div class='bestVideo'> <a href='http://ziyawang.com/video/" + data1.VideoID + "' class='bigVideo' title='" + data1.VideoTitle + "'><img class='videoImg' src='http://images.ziyawang.com" + data1.VideoLogo + "' /></a> <a href='http://ziyawang.com/video/" + data1.VideoID + "' class='mask'></a> <span class='b_shadow'></span> </div> <div class='bestVideoTitle'> <a href='http://ziyawang.com/video/" + data1.VideoID + "' class='bigVideoTitle' title='" + data1.VideoTitle + "'>" + data1.VideoTitle + "</a> <span>已播放" + data1.ViewCount + "次</span> </div>";
            $('#bestvideo').html(html1);
            var data2 = data.slice(1);
            var html2 = _queryVideo(data2);
            $('#weight').html(html2);
            //视频划过
            $('.bestConLeft,.bestConRight ul li').hover(function() {
                $(this).find('.mask').stop().fadeToggle(500);
            });
        }
        
    });

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
</script>
@endsection