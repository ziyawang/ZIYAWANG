@extends('layouts.home')

@section('seo')
<title>资芽新闻-资芽网</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/news.css')}}?v=1.0.4" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="news wrap newsDetails">
<!-- 左侧 -->
    <div class="news_left1">
        <div class="news_bread"><a href="{{url('/')}}">首页</a>&gt;<a href="{{url('/news')}}">新闻中心</a>&gt;<span id="title"></span></div>
        <div class="news_details">
        </div>
        <div class="think clearfix">
            <span class="th_right">
                <a href="javascript:;" id="collect" class="collect"><em></em><span>收藏</span></a>
                <!-- 分享 -->
                <div class="jiathis_style_32x32">
                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank" id="share_asign"></a>
                </div>
                <span class="span_share">分享</span>
                <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                <!-- 分享 -->
            </span>
        </div>
            <p class="prev_essay">上一篇：<a href="javascript:;" id="pre"></a></p>
            <p class="next_essay">下一篇：<a href="javascript:;" id="next"></a></p>
    </div>
    <!-- 右侧新闻 -->
        <div class="news_right1">
        <div class="news_com1">
            <h2 class="nrc_title"><a href="{{url('/zynews')}}">资芽新闻</a><span>COMPANY&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt nrc_height" id="ziya1">
            </div>
            <ul class="nrc_list" id="ziya2">
            </ul>
        </div>
        <div class="news_com1">
            <h2 class="nrc_title"><a href="{{url('/hynews')}}">行业动态</a><span>INDUSTRY&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt nrc_height" id="hangye1">
            </div>
            <ul class="nrc_list" id="hangye2">
            </ul>
        </div>
        <div class="news_com1">
            <h2 class="nrc_title"><a href="{{url('/cjnews')}}">财经资讯</a><span>FINANCIAL&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt nrc_height" id="caijing1">
            </div>
            <ul class="nrc_list" id="caijing2">
            </ul>
        </div>
    </div>
</div>
<script>
$(function(){
    var NewsID = window.location.pathname.replace(/[^0-9]/ig,"");
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
            data:'itemID=' + NewsID + '&type=3',
            dataType:'json',
            success:function(msg){
                // alert(msg.msg);
            }
        });
    }

    $('#collect').click(function(){
        checkLogin();  
        collect();
    })
    function LoadFunction() {  
        $("#spec01").html('加载中...');  
    }  
    function erryFunction() {  
        // alert("error");  
    }  

    function _queryNews(data) {
        var html = '';
        $.each(data, function (index, item) {  
            //循环获取数据    
            var NewsTitle = data[index].NewsTitle;       //新闻标题
            var NewsLogo  = data[index].NewsLogo;        //新闻图片
            var NewsBrief = data[index].NewsBrief;       //新闻简介
            var NewsID    = data[index].NewsID;          //新闻ID

            html = html + "<li><a href='http://ziyawang.com/news/" + NewsID + "'>" + NewsTitle + "</a></li>"
        });
        return html;
    }

    //新闻 4个ajax
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list/' + NewsID + '?access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=5&NewsLabel=zyxw&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news1 //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=5&NewsLabel=hydt&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news2 //成功执行方法    
    }) 

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=5&NewsLabel=cjzx&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news3 //成功执行方法    
    })

    function news(tt) {
        var json = eval(tt); //数组 
        console.log(json)
        var data = json.data;
        var pre = json.pre;
        if(pre){
            var preid = pre.NewsID;
            var pretitle = pre.NewsTitle;
            $('#pre').attr('href','http://ziyawang.com/news/'+preid);
            $('#pre').html(pretitle);
        } else {
            $('#pre').attr('href','javascript:;');
            $('#pre').html('没有上一篇了');
        }
        var next = json.next;
        if(next){
            var nextid = next.NewsID;
            var nexttitle = next.NewsTitle;
            $('#next').attr('href','http://ziyawang.com/news/'+nextid);
            $('#next').html(nexttitle);
        } else {
            $('#next').attr('href','javascript:;');
            $('#next').html('没有下一篇了');
        }
        var NewsTitle = data.NewsTitle;
        var PublishTime = data.PublishTime;
        var NewsAuthor = data.NewsAuthor;
        var NewsBrief = data.Brief;
        var NewsID = data.NewsID;
        var NewsLogo = data.NewsLogo;      
        var ViewCount = data.ViewCount;      
        var NewsContent = data.NewsContent;      
        var NewsLabel = data.NewsLabel; 
        if(NewsLabel == 'zyxw'){
            NewsLabel = '资芽新闻';
        } else if(NewsLabel == 'cjzx'){
            NewsLabel = '财经资讯';
        } else if(NewsLabel == 'hydt'){
            NewsLabel = '行业动态';
        }  

        html = "<h2 class='nd_title'>" + NewsTitle + "</h2><p class='nd_info'>发表于：" + PublishTime + "<span>作者：<a href='javascript:;'>" + NewsAuthor + "</a></span><span>阅读：" + ViewCount + "</span></p><div class='nd_abstr'>" + NewsBrief + "</div><p class='nd_content'>" + NewsContent + "</p>"

        document.title = NewsTitle + "-" + NewsLabel + '-资芽网';
        $('#title').html(NewsTitle);
        $('.news_details').html(html);
    }  

    function news1(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(1);        

        var html1 = "<img src='http://images.ziyawang.com" + data1.NewsLogo + "' class='nrc_img' /><h2 class='nlc_title'><a href='http://ziyawang.com/news/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#ziya1').html(html1);
        $('#ziya2').html(html2);
        console.log(html2)
    }  

    function news2(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(1);        

        var html1 = "<img src='http://images.ziyawang.com" + data1.NewsLogo + "' class='nrc_img' /><h2 class='nlc_title'><a href='http://ziyawang.com/news/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#hangye1').html(html1);
        $('#hangye2').html(html2);
    }  

    function news3(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(1);        

        var html1 = "<img src='http://images.ziyawang.com" + data1.NewsLogo + "' class='nrc_img' /><h2 class='nlc_title'><a href='http://ziyawang.com/news/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#caijing1').html(html1);
        $('#caijing2').html(html2);
    }
});
</script>
@endsection