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
        <div class="news_bread"><a href="{{url('/')}}">首页&gt;</a><span>行业动态</span></div>
        <div class="nl_content">
            <ul id="newslist">
            </ul>
<!-- 公共分页/start -->
            <div class="pages">
                <div id="Pagination"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage"></strong>页</span>
                </div>
            </div>
<!-- 公共分页/end -->
        </div>
    </div>
    <div class="news_right1">
        <div class="news_com1">
            <h2 class="nrc_title"><a href="{{url('/zynews')}}">资芽新闻</a><span>COMPANY&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt" id="ziya1">
            </div>
            <ul class="nrc_list" id="ziya2">
            </ul>
        </div>
        <div class="news_com1">
            <h2 class="nrc_title"><a href="{{url('/cjnews')}}">财经资讯</a><span>FINANCIAL&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt" id="caijing1">
            </div>
            <ul class="nrc_list" id="caijing2">
            </ul>
        </div>
    </div>

</div>
<script>
$(function(){
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
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=6&NewsLabel=hydt&access_token=token',  
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

            var NewsTitle = data[index].NewsTitle;
            var PublishTime = data[index].PublishTime;
            var NewsAuthor = data[index].NewsAuthor;
            var NewsBrief = data[index].Brief;
            NewsBrief     = NewsBrief.substr(0,120) + "...";
            var NewsID = data[index].NewsID;
            var NewsLogo = data[index].NewsLogo;      

            html = html + "<li><img src='http://images.ziyawang.com" + NewsLogo + "' class='nlc_img' /><h2 class='nlc_title'><a href='http://ziyawang.com/news/" + NewsID + "'>" + NewsTitle + "</a></h2><span class='nlc_time'>发表于：" + PublishTime + "</span><p class='nlc_abstr'>" + NewsBrief.substr(0.100) + "...</p></li>"
        });
        document.title = '行业动态-资芽网';
        $('#newslist').html(html);

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

var startpage = 1;
function ajax(){
    var data = 'startpage=' + startpage;
    $.ajax({
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=6&NewsLabel=hydt&access_token=token&' + data,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        success: function(tt){
            var json = eval(tt); //数组 
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

                var NewsTitle = data[index].NewsTitle;
                var PublishTime = data[index].PublishTime;
                var NewsAuthor = data[index].NewsAuthor;
                var NewsBrief = data[index].Brief;
                NewsBrief     = NewsBrief.substr(0,120) + "...";
                var NewsID = data[index].NewsID;
                var NewsLogo = data[index].NewsLogo;      

                html = html + "<li><img src='http://images.ziyawang.com" + NewsLogo + "' class='nlc_img' /><h2 class='nlc_title'><a href='http://ziyawang.com/news/" + NewsID + "'>" + NewsTitle + "</a></h2><span class='nlc_time'>发表于：" + PublishTime + "</span><p class='nlc_abstr'>" + NewsBrief.substr(0.100) + "...</p></li>"
            });
            document.title = '行业动态-资芽网';
            $('#newslist').html(html);
        }
    })
}
</script>
@endsection
