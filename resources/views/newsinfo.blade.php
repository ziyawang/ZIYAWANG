@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/news.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="news wrap">
<!-- 左侧 -->
    <div class="news_left1">
        <div class="news_bread"><a href="{{url('/')}}">首页</a>&gt;<a href="{{url('/news')}}">新闻中心</a>&gt;<span id="title"></span></div>
        <div class="news_details">
        </div>
        <div class="think clearfix">
            <span class="th_right">
                <a href="javascript:;" id="collect" class="collect"><em></em><span>收藏</span></a>
                <a href="javascript:;" class="tr_share"><em></em>分享</a>
            </span>
        </div>
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
            var NewsTitle = json.NewsTitle;       //新闻标题
            var NewsLogo  = json.NewsLogo;        //新闻图片
            var NewsBrief = json.NewsBrief;       //新闻简介
            var NewsID    = json.NewsID;          //新闻ID

            html = html + "<li><a href='http://test.ziyawang.com/news/" + NewsID + "'>" + NewsTitle + "</a></li>"
        });
        return html;
    }

    //新闻 4个ajax
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list/' + NewsID + '?access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=5&NewsLabel=资芽新闻&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news1 //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=5&NewsLabel=行业动态&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news2 //成功执行方法    
    }) 

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=5&NewsLabel=财经资讯&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news3 //成功执行方法    
    })

    function news(tt) {
        var json = eval(tt); //数组 
        var NewsTitle = json.NewsTitle;
        var PublishTime = json.PublishTime;
        var NewsAuthor = json.NewsAuthor;
        var NewsBrief = json.Brief;
        var NewsID = json.NewsID;
        var NewsLogo = json.NewsLogo;      
        var ViewCount = json.ViewCount;      
        var NewsContent = json.NewsContent;      

        html = "<h2 class='nd_title'>" + NewsTitle + "</h2><p class='nd_info'>发表于：" + PublishTime + "<span>作者：<a href='javascript:;'>" + NewsAuthor + "</a></span><span>阅读：" + ViewCount + "</span></p><div class='nd_abstr'>" + NewsBrief + "</div><p class='nd_content'>" + NewsContent + "</p>"

        $('#title').html(NewsTitle);
        $('.news_details').html(html);

    }  

    function news1(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(5);        

        var html1 = "<img src='http://images.ziyawang.com" + data1.NewsLogo + "' class='nrc_img' /><h2 class='nlc_title'><a href='http://test.ziyawang.com/news/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#ziya1').html(html1);
        $('#ziya2').html(html2);
    }  

    function news2(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(5);        

        var html1 = "<img src='http://images.ziyawang.com" + data1.NewsLogo + "' class='nrc_img' /><h2 class='nlc_title'><a href='http://test.ziyawang.com/news/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#hangye1').html(html1);
        $('#hangye2').html(html2);
    }  

    function news3(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(5);        

        var html1 = "<img src='http://images.ziyawang.com" + data1.NewsLogo + "' class='nrc_img' /><h2 class='nlc_title'><a href='http://test.ziyawang.com/news/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#caijing1').html(html1);
        $('#caijing2').html(html2);
    }
});
</script>
@endsection