@extends('layouts.vhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/video.css')}}" />
<script src="{{asset('/js/fingerprint.js')}}"></script>
<script src="{{asset('/js/jquery.md5.js')}}"></script>
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
                <a href="javascript:;" class="dianzan"><i></i><span id="zancount">0</span></a>
                <a href="javascript:;" class="collect"><i></i><span id="iscollect">收藏</span></a>

                <div class="jiathis_style_32x32">
                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis sharevideo" target="_blank" id="share_icon" title="分享"><i></i></a>
                    <span class="share_word">分享</span>
                </div>
                <!-- <a href="javascript:;" class="sharevideo"><i></i>分享</a> -->
                <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                
                <a href="javascript:;" class="phone"><i></i><span>手机看</span></a>
                <a href="javascript:;" class="playcount"><i></i>播放</a>
            </div>
            <!-- 视频简介 -->
            <div class="brief">  
                <div class="brief_content" id="videoDes">
                </div>
            </div>
            <!-- 视频填写评论 -->
            <div class="comment">
                <h4>发表评论</h4>
                <textarea name="" id="pinglun" class="review_txt">文明上网理性发言...</textarea>
                <button id="pub">发表评论</button>
            </div>
            <!-- 查看评论 -->
            <div class="review">
                <div class="review_btn">
                    <a href="javascript:;">全部评论</a>    
                </div>
                <div class="review_content">
                    <div class="rc_con">
                        <ul id="list">
                            
                        </ul>
                    </div>
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
    var token = $.cookie('token');
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
                // alert(msg.msg);
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

    //评论 1个ajax
    $.ajax({
        url:'http://api.ziyawang.com/v1/video/comment/list?pagecount=5&access_token=token',
        type:'GET',
        asycn: false,
        data:'VideoID=' + VideoID,
        dataType:'json',
        success:function(msg){
            var json = eval(msg);
            var data = json.data;
            var counts = json.counts;
            var pages = json.pages;var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax();
            });
            var html = '';
            $.each(data, function (index, item) {  
                //循环获取数据    
                var UserPicture = data[index].UserPicture;       //评论头像
                var UserName    = data[index].UserName;       //评论人名
                var Content     = data[index].Content;     //评论内容
                var PubTime     = data[index].PubTime;       //评论时间
                PubTime         = PubTime.substr(5,11);
                html = html + "<li><img src='http://images.ziyawang.com" + UserPicture + "' class='review_obj' /><div class='rc_condetails'><a href='javascript:;' class='review_objname'>" + UserName + "</a><p class='review_cap'>" + Content + "</p><span class='review_time'>" + PubTime + "</span></div></li>";
            });
            if(counts == 0){
                html = "<li style='text-align:center; border-bottom:none'>暂无评论</li>"
            }
            $('#list').html(html);
        }
    })

    //视频 4个ajax
    var url = 'http://api.ziyawang.com/v1/video/list/' + VideoID + '?access_token=token';
    if(token){
        url = 'http://api.ziyawang.com/v1/video/list/' + VideoID + '?access_token=token&token=' + token;
    }
    $.ajax({  
        url: url,  
        type: 'GET',  
        dataType: 'json', 
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: video //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=5&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: video1 //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=4&order=1&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: video2 //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=3&VideoLabel=zyyfz&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
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
        // console.log(json)
        var VideoTitle = json.VideoTitle;
        var VideoDes = json.VideoDes;
        var VideoLogo = json.VideoLogo;
        var VideoLabel = json.VideoLabel;
        var CollectFlag = json.CollectFlag;
        if(CollectFlag == 1){
            $('#iscollect').html('已收藏');
        }
        if(VideoLabel.indexOf('zyyfz') > 0){
            VideoLabel = '资芽一分钟';
            $('#zyyfz').addClass('current');
        } else if(VideoLabel.indexOf('hys') > 0){
            VideoLabel = '行业说';
            $('#hys').addClass('current');
        } else if(VideoLabel.indexOf('zyhhh') > 0){
            VideoLabel = '资芽哈哈哈';
            $('#zyhhh').addClass('current');
        } else if(VideoLabel.indexOf('tj') > 0){
            VideoLabel = '推荐';
            $('#tj').addClass('current');
        }
        var VideoAuthor = json.VideoAuthor;
        var PublishTime = json.PublishTime;      
        var ViewCount = json.ViewCount;      
        var CollectionCount = json.CollectionCount;      
        var ZanCount = json.ZanCount;      
        var VideoLink = json.VideoLink;  
        var VideoID = window.location.pathname.replace(/[^0-9]/ig,"");    

        var html = "<video poster='http://images.ziyawang.com" + VideoLogo + "' src='http://videos.ziyawang.com" + VideoLink + "' controls='controls' preload='auto'></video>";
        $('#title1').html(VideoLabel);
        $('#title2').html(VideoTitle);
        $('#video1').html(html);
        $('.playcount').html("<i></i>" + ViewCount + "播放");
        $('#zancount').html(ZanCount);
        $('#videoDes').html("<h3>视频简介</h3>" + VideoDes);
    }
});

$('#video1').bind('contextmenu',function() { return false; }); 
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

    var startpage = 1;
    var VideoID = window.location.pathname.replace(/[^0-9]/ig,"");
    function ajax(){
        var data = 'startpage=' + startpage;
        $.ajax({
            url: 'http://api.ziyawang.com/v1/video/comment/list?pagecount=5&VideoID=' + VideoID + '&access_token=token&' + data,  
            type: 'GET',  
            dataType: 'json',  
            timeout: 5000,  
            cache: false,  
            success: function(msg){
                var json = eval(msg);
                var data = json.data;
                var counts = json.counts;
                var pages = json.pages;var current = json.currentpage-1;
                //分页
                $("#Pagination").pagination(pages,{current_page:current});
                $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
                $('.pagination a').click(function(){
                    startpage = $(this).html();
                    ajax();
                });
                var html = '';
                $.each(data, function (index, item) {  
                    //循环获取数据    
                    var UserPicture = data[index].UserPicture;       //评论头像
                    var UserName    = data[index].UserName;       //评论人名
                    var Content     = data[index].Content;     //评论内容
                    var PubTime     = data[index].PubTime;       //评论时间
                    PubTime         = PubTime.substr(5,11);
                    html = html + "<li><img src='http://images.ziyawang.com" + UserPicture + "' class='review_obj' /><div class='rc_condetails'><a href='javascript:;' class='review_objname'>" + UserName + "</a><p class='review_cap'>" + Content + "</p><span class='review_time'>" + PubTime + "</span></div></li>";
                });
                $('#list').html(html);
            }
        })
    }

    $('#pub').click(function(){
        var content = $('#pinglun').val();
        if(content == '' || content == '文明上网理性发言...'){
            return false;
        }
        var token = $.cookie('token');
        var VideoID = window.location.pathname.replace(/[^0-9]/ig,"");
        if(token != undefined){
            $.ajax({
                url:'http://api.ziyawang.com/v1/video/comment/create?access_token=token&token='+token,
                type:'POST',
                data:'VideoID=' + VideoID + '&Content=' + content,
                dataType:'json',
                success:function(msg){
                    // alert(msg.msg);
                }
            });
        } else if( token == undefined){
            $.ajax({
                url:'http://api.ziyawang.com/v1/video/comment/create?access_token=token',
                type:'POST',
                data:'VideoID=' + VideoID + '&Content=' + content,
                dataType:'json',
                success:function(msg){
                    // alert(msg.msg);
                }
            });
        }

        $.ajax({
            url:'http://api.ziyawang.com/v1/video/comment/list?pagecount=5&access_token=token',
            type:'GET',
            asycn: false,
            data:'VideoID=' + VideoID,
            dataType:'json',
            success:function(msg){
                var json = eval(msg);
                var data = json.data;
                var counts = json.counts;
                var pages = json.pages;var current = json.currentpage-1;
                //分页
                $("#Pagination").pagination(pages,{current_page:current});
                $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
                $('.pagination a').click(function(){
                    startpage = $(this).html();
                    ajax();
                });
                var html = '';
                $.each(data, function (index, item) {  
                    //循环获取数据    
                    var UserPicture = data[index].UserPicture;       //评论头像
                    var UserName    = data[index].UserName;       //评论人名
                    var Content     = data[index].Content;     //评论内容
                    var PubTime     = data[index].PubTime;       //评论时间
                    PubTime         = PubTime.substr(5,11);
                    html = html + "<li><img src='http://images.ziyawang.com" + UserPicture + "' class='review_obj' /><div class='rc_condetails'><a href='javascript:;' class='review_objname'>" + UserName + "</a><p class='review_cap'>" + Content + "</p><span class='review_time'>" + PubTime + "</span></div></li>";
                });
                $('#list').html(html);
            }
        })
    })

    $('.dianzan').click(function(){
        var token = $.cookie('token');
        var VideoID = window.location.pathname.replace(/[^0-9]/ig,"");
        if(token != undefined){
            $.ajax({
                url:'http://api.ziyawang.com/v1/video/zan?access_token=token&token='+token,
                type:'POST',
                data:'VideoID=' + VideoID,
                dataType:'json',
                success:function(msg){
                    if(msg.msg != '您已经点过赞了！'){
                        $.tipsBox({
                            obj: $('.dianzan'),
                            str: "+1",
                            callback: function () {
                            }
                        });
                        niceIn($('.dianzan'));
                        var count = parseInt($('.dianzan').children('span').html());
                        count++;
                        $('.dianzan').children('span').html(count);
                    }
                }
            });
        } else if( token == undefined){
            var fingerprint = new Fingerprint({canvas: true}).get();
            var cookie = $.md5(fingerprint + VideoID);
            $.ajax({
                url:'http://api.ziyawang.com/v1/video/zan?access_token=token',
                type:'POST',
                data:'VideoID=' + VideoID + '&Cookie=' + cookie,
                dataType:'json',
                success:function(msg){
                    if(msg.msg != '您已经点过赞了！'){
                        $.tipsBox({
                            obj: $('.dianzan'),
                            str: "+1",
                            callback: function () {
                            }
                        });
                        niceIn($('.dianzan'));
                        var count = parseInt($('.dianzan').children('span').html());
                        count++;
                        $('.dianzan').children('span').html(count);
                    }
                }
            });
        }
    })
  
    function niceIn(prop){
        prop.find('i').addClass('niceIn');
        setTimeout(function(){
            prop.find('i').removeClass('niceIn');   
        },1000);        
    }
</script>
@endsection