@extends('layouts.home')

@section('seo')
<title>资芽新闻-资芽网</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/newsinfo.css')}}?v=2.0.3" />
<!-- 二级banner -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/ucenter/index')}}"></a></li>
    </ul>
</div>
<!-- 主体 -->
<div class="content clearfix">
<!-- 左侧 -->
    <div class="conLeft">
        <div class="news_bread conLeftTitle" id="label"></div>
        <div class="clNewsBox">
            <div class="news_details">
            </div>
            <div class="think clearfix">
                <span class="th_right">
                    <a href="javascript:;" class="collect" id="collect"><i class="iconfont">&#xe601;</i><span>收藏</span></a>
                    <div class="jiathis_style_32x32">
                        <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank" id="share_asign"></a>
                    </div>
                    <span class="span_share">分享</span>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                </span>
            </div>
        </div>
    </div>
    <!-- 右侧新闻 -->
    <div class="conRight">
        <div class="newsCom">
            <h2 class="nrc_title"><a>处置公告</a><span>DISPOSAL&nbsp;ANNOUNCEMENT</span></h2>
            <div class="nrc_fisrt" id="ziya1">
            </div>
            <ul class="nrc_list" id="ziya2">
            </ul>
        </div>
    </div>
</div>
<!-- 底部 -->
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
            var NewsID    = data[index].NewsID;          //新闻ID

            html = html + "<li><a href='http://ziyawang.com/project/czgg/" + NewsID + "'>" + NewsTitle + "</a></li>"
        });
        return html;
    }

    //新闻 4个ajax
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list/' + NewsID + '?access_token=token&token=' + token,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news //成功执行方法    
    })

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/news/list?pagecount=5&NewsLabel=czgg&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: news1 //成功执行方法    
    })

    function news(tt) {
        var json = eval(tt); //数组 
        console.log(json)
        var data = json.data;
        var pre = json.pre;
        var NewsTitle = data.NewsTitle;
        var PublishTime = data.PublishTime;
        var CollectFlag = data.CollectFlag;
        if(CollectFlag == 1){
            $(".collect").children('i').addClass('red');
            $(".collect").children('span').html('已收藏');
        }
        var NewsAuthor = data.NewsAuthor;
        var NewsID = data.NewsID;
        var NewsLogo = data.NewsLogo;      
        var ViewCount = data.ViewCount;      
        var NewsContent = data.NewsContent;      
        var NewsLabel = data.NewsLabel; 
        var label = "<span class='newsBlue'>处置公告</span>/Disposal Announcement";
        var html = "<h2 class='nd_title'>" + NewsTitle + "</h2> <p class='nd_info'>发表于：" + PublishTime + "&nbsp;&nbsp;&nbsp;&nbsp;阅读：" + ViewCount + "</p> <div class='newsContent'><p class='nd_content'>" + NewsContent + "</p> </div>"

        document.title = NewsTitle + "-处置公告-资芽网";
        $('.news_details').html(html);
        $('#label').html(label);
    }  

    function news1(tt) {
        var json = eval(tt); //数组 
        var data = json.data;
        var data1 = data[0];
        var data2 = data.slice(1); 

        var html1 = "<a href='http://ziyawang.com/project/czgg/" + data1.NewsID + "' class='nrc_img' title='" + data1.NewsTitle + "'><img src='http://images.ziyawang.com" + data1.NewsLogo + "' /></a><h2 class='nlc_title'><a href='http://ziyawang.com/project/czgg/" + data1.NewsID + "'>" + data1.NewsTitle + "</a></h2><p class='nrc_abstr'>" + data1.Brief.substr(0,50) + "...</p>"
        var html2 = _queryNews(data2);
        $('#ziya1').html(html1);
        $('#ziya2').html(html2);
    }  
});
</script>
@endsection