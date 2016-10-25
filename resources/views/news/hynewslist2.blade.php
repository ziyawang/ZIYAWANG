@extends('layouts.home')

@section('seo')
<title>行业动态_新闻中心_全球不良资产超级综服平台-资芽网</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection

@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/newsinfo.css')}}?v=1.0.4" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="content clearfix">
<!-- 左侧 -->
    <div class="conLeft">
        <div class="news_bread"><span class="newsIcon industry"></span>行业动态</div>
        <div class="nl_content">
            <ul id="newslist">
                
            </ul>
            <!-- 公共分页/start -->
            <div class="pages">
                <div id="Pagination"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage">0</strong>页</span>
                </div>
            </div>
            <!-- 公共分页/end -->
        </div>
    </div>
    <div class="conRight">
        <div class="newsCom">
            <h2 class="nrc_title"><a href="{{url('/zynews')}}">资芽新闻</a><span>COMPANY&nbsp;NEWS</span></h2>
            <div class="nrc_fisrt" id="ziya1">
            </div>
            <ul class="nrc_list" id="ziya2">
            </ul>
        </div>
        <div class="newsCom">
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
    function getQueryString(key){
        var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
        var result = window.location.search.substr(1).match(reg);
        return result?decodeURIComponent(result[2]):null;
    }
    var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;
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
            html = html + "<li><a target='_blank' href='http://ziyawang.com/news/" + NewsID + "'>" + NewsTitle + "</a></li>"
        });
        return html;
    }
    //新闻 4个ajax
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=6&NewsLabel=hydt&access_token=token&startpage=' + urlpage,  
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
            var url = "http://ziyawang.com/hynews?startpage=" + urlpage;
            url = encodeURI(url);
            window.location.href= url;
        });
        var html = '';
        $.each(data, function (index, item) {
            var NewsTitle = data[index].NewsTitle;
            var PublishTime = data[index].PublishTime;
            var NewsAuthor = data[index].NewsAuthor;
            var NewsBrief = data[index].Brief;
            NewsBrief     = NewsBrief.substr(0,120) + "...";
            var NewsID = data[index].NewsID;
            var NewsLogo = data[index].NewsThumb;      
            html = html + "<li><a target='_blank' href='http://ziyawang.com/news/" + NewsID + "' class='nlc_img' title='" + NewsTitle + "'><img src='http://images.ziyawang.com" + NewsLogo + "'/></a><h2 class='nlc_title'><a target='_blank' href='http://ziyawang.com/news/" + NewsID + "'>" + NewsTitle + "</a></h2><span class='nlc_time'>发表于：" + PublishTime + "</span><p class='nlc_abstr'>" + NewsBrief.substr(0,100) + "...</p></li>"
        });
        $('#newslist').html(html);
    }  
    function news1(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(1);        
        var html1 = "<a target='_blank' href='http://ziyawang.com/news/" + data1.NewsID + "' class='nrc_img' title='" + data1.NewsTitle + "'><img src='http://images.ziyawang.com" + data1.NewsLogo + "' /></a><h2 class='nlc_title'><a target='_blank' href='http://ziyawang.com/news/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#ziya1').html(html1);
        $('#ziya2').html(html2);
    }  
    function news3(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(1);        
        var html1 = "<a target='_blank' href='http://ziyawang.com/news/" + data1.NewsID + "' class='nrc_img' title='" + data1.NewsTitle + "'><img src='http://images.ziyawang.com" + data1.NewsLogo + "' /></a><h2 class='nlc_title'><a target='_blank' href='http://ziyawang.com/news/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#caijing1').html(html1);
        $('#caijing2').html(html2);
    }  
});
</script>
@endsection