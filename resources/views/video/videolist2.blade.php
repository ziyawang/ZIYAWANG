@extends('layouts.home')

@section('seo')
<title>资芽视频-不良资产领域第一视频平台</title>
        <meta name="Keywords" content="资芽视频,不良资产视频,不良资产行业视频,资芽网视频" />
        <meta name="Description" content="资芽视频是资芽网第一视频,行业专家释疑解惑,分享经验,培训学习,剖析热点话题;线上线下活动,同业互动,探索分析,交流共享,协作共赢,鼓励创新,普及法律常识,降低法律风险.推动不良资产行业,金融领域健康有序发展." />
@endsection
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/videos.css')}}?v=2.1.7.1.1" />
<style type="text/css">
    .layerRecharge{width: 500px; height: 212px;}
    .layerTop{background:#fdd000;overflow: hidden;padding:25px 0 25px 25px;}
    .coverBg{float: left;width: 145px;height: 145px;background:url(img/coverpop.png) no-repeat;padding-right: 15px;}
    .captionTip{float: left;}
    .captionTip h3{font-size: 24px;color:#000;}
    .needMoney{font-size: 20px;color:#434343;margin-top: 5px;}
    .custom{font-size: 18px;color:#000;margin-top: 5px;}
    .custom strong{font-size: 24px;color:#fff;margin-right: 10px;}
    .custom span{font-weight: bold;color:#000;}
    .btn3{background:#fff;height: 60px;text-align: center;padding-top: 20px;}
    .btn3 a{display: inline-block;width: 108px;background:#f4f4f4;box-shadow: 0 -5px 0 #bababa inset;padding:5px 0 10px;text-align: center;font-size: 20px;color:#464646;margin:0 20px;position: relative;text-decoration: none;}
    .btn3 .btnCert,.btn3 a:hover{background:#fdd000;box-shadow: 0 -5px 0 #b69600 inset;color:#000;}
    .btn3 a:active{top: 1px;}

    .layerNo{width: 322px;}
    .layerNotop{background:#fdd000;padding-top: 22px;}
    .nocoverBg{width: 145px;height: 145px;background:url(img/coverpop.png) no-repeat;margin:0 auto;display: block;}
    .noFree{font-size: 24px;color:#333;font-weight: bold;display: block;text-align: center;padding: 8px 0 20px;}
    /*.layui-layer-title{display: none;}*/
    .layui-layer-title{height: 0;border-bottom: 0;}
    .layui-layer-btn{padding-top: 20px!important;text-align: center;height: 60px;background: #fff;}
    .layui-layer-btn a{width: 108px;padding: 6px 0px 10px; background: #f4f4f4; border-radius: 5px; border-right: 2px; color: #000; box-shadow: 0 -5px 0 #bababa inset; position: relative;border: 0 none;margin: 0;font-size: 20px;margin: 0 20px;text-align: center;}
    .layui-layer-btn .layui-layer-btn1{}
    .layui-layer-btn .layui-layer-btn0,.layui-layer-btn a:hover{background: #fdd000;box-shadow: 0 -5px 0 #b69600 inset;color: #000;}
    .layui-layer-btn a:active{top: 1px;}

    /*列表li样式*/
    .item{cursor: pointer;}
</style>
<!-- 二级banner -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/ucenter/index')}}"></a></li>
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
                <li><a href="http://ziyawang.com/video/course">付费课程</a><span></span></li>
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
    <!-- 公共分页/start -->
    <div class="pages">
        <div id="Pagination"></div>
            <div class="searchPage">
            <span class="page-sum">共<strong class="allPage">0</strong>页</span>
        </div>
    </div>
    <!-- 公共分页/end -->
</div>
<script type="text/javascript">
    $(function(){
        var token = $.cookie("token");

        function rush(Price, VideoID, Account) {
            var isenough = '';
            if(Price > Account){
                isenough = "(余额不足)";
            }
            layer.open({
                type: 1,
                area: ['500px'], //宽高
                content: '<div class="layerRecharge"> <div class="layerTop"> <span class="coverBg"></span> <div class="captionTip"> <h3>该视频为付费视频</h3> <p class="needMoney">消耗芽币可观看视频</p> <p class="custom">消耗 ：<strong>' + Price + '</strong>芽币</p> <p class="custom">余额 ：<strong>' + Account + '</strong>芽币<span>' + isenough + '</span></p> </div> </div> </div>',
                btn: ['确定','充值','取消'], btn1:function(){
                $.ajax({
                    url:'https://apis.ziyawang.com/zll/video/consume?access_token=token&VideoID=' + VideoID + '&token=' + token,
                    type:'POST',
                    dataType:'json',
                    success:function(msg){
                        if(msg.status_code == 200 || msg.status_code == 417){
                            window.location.href="http://ziyawang.com/video/" + VideoID;
                            // window.open("http://ziyawang.com/video/" + VideoID);
                        } else if(msg.status_code == 418) {
                            layer.open({
                                type: 1,
                                area: ['322px'], //宽高
                                content: '<div class="layerNo"> <div class="layerNotop"> <span class="nocoverBg"></span> <span class="noFree">余额不足请充值！</span> </div></div>', btn: ['充值','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/money"; }, but2:function(){}});
                        }
                    }
                });
            }, btn2:function(){
                window.open("http://ziyawang.com/ucenter/money");
            }, close:function(){

            }});
            return;
        }

        function beforeRush(obj) {
            var price = parseInt($(obj).attr('price'));
            var videoid = $(obj).attr('videoid');
            var member = $(obj).attr('member');
            var right = $(obj).attr('right');
            var account = $(obj).attr('account');
            var payflag = $(obj).attr('payflag');

            if(member != 0){
                if(!token){
                    window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes");
                    return false;
                } else {
                    if(right != "0" || payflag == "1"){
                        window.location.href="http://ziyawang.com/video/" + videoid;
                        // window.open("http://ziyawang.com/video/" + videoid);
                        return false;
                    } else {
                        rush(price,videoid,account)
                        return false;
                    }
                }
            } else {
                window.location.href="http://ziyawang.com/video/" + videoid;
                // window.open("http://ziyawang.com/video/" + videoid);
            }
        }

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
                var Price  = data[index].Price;       
                var Account  = data[index].Account;       
                var PayFlag  = data[index].PayFlag;       
                var Member  = data[index].Member;       
                var right  = data[index].right;       
                var memberhtml = ""
                if(Member == 0){
                    memberhtml = "<span class='free-video'>免费</span>"
                } else {
                    memberhtml = "<span class='video-fee'>" + Price + "芽币</span>"
                }
                var priceattr = " price=" + Price;
                var videoidattr = " videoid=" + VideoID;
                var accountattr = " account=" + Account;
                var payflagattr = " payflag=" + PayFlag;
                var memberattr = " member=" + Member;
                var rightattr = " right=" + right;
                html = html + "<li> <div class='videoLiPic rush' " + priceattr + videoidattr + accountattr + payflagattr + memberattr + rightattr + "> <a href='javascript:;' class='videoLiPicAsign' title='" + VideoTitle + "'><img class='videoImg' title='" + VideoTitle + "' src='http://images.ziyawang.com" + VideoLogo + "' /></a> <a href='javascript:;' class='mask'></a><a href='javascript:;'><span class='s_shadow'></span></a></div> <div class='videoLiTitle'> <a href='javascript:;' title='" + VideoTitle + "'>" + VideoTitle + "</a><div class='video-oh'>" + memberhtml + "<span class='video-played'>已播放" + ViewCount + "次</span></div> </div> </li>";
            });
            return html;
        }

        function _queryVideo2(data) {
            var html = '';
            $.each(data, function (index, item) {  
                //循环获取数据    
                var VideoTitle = data[index].VideoTitle;       //视频标题
                var VideoLogo  = data[index].VideoLogo;     //视频图片
                var VideoID    = data[index].VideoID;       //视频ID
                var ViewCount  = data[index].ViewCount;       //播放次数
                var Price  = data[index].Price;       
                var Account  = data[index].Account;       
                var PayFlag  = data[index].PayFlag;       
                var Member  = data[index].Member;       
                var right  = data[index].right;       
                var memberhtml = ""
                if(Member == 0){
                    memberhtml = "<span class='free-video'>免费</span>"
                } else {
                    memberhtml = "<span class='video-fee'>" + Price + "芽币</span>"
                }
                var priceattr = " price=" + Price;
                var videoidattr = " videoid=" + VideoID;
                var accountattr = " account=" + Account;
                var payflagattr = " payflag=" + PayFlag;
                var memberattr = " member=" + Member;
                var rightattr = " right=" + right;
                html = html + "<li> <div class='videoLiPic rbsh' " + priceattr + videoidattr + accountattr + payflagattr + memberattr + rightattr + "> <a href='javascript:;' class='videoLiPicAsign' title='" + VideoTitle + "'><img class='videoImg' title='" + VideoTitle + "' src='http://images.ziyawang.com" + VideoLogo + "' /></a> <a href='javascript:;' class='mask'></a><a href='javascript:;'><span class='s_shadow'></span></a></div> <div class='videoLiTitle'> <a href='javascript:;' title='" + VideoTitle + "'>" + VideoTitle + "</a><div class='video-oh'>" + memberhtml + "<span class='video-played'>已播放" + ViewCount + "次</span></div> </div> </li>";
            });
            return html;
        }

        $.ajax({  
            url: 'https://apis.ziyawang.com/zll/video/list?pagecount=5&weight=1&access_token=token&token='+token,  
            type: 'GET',  
            dataType: 'json',  
            timeout: 5000, 
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: weight //成功执行方法    
        })

        $.ajax({  
            url: 'https://apis.ziyawang.com/zll/video/list?pagecount=12&order=1&access_token=token&token='+token,  
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
            var counts = json.counts;
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination').children(":not(:first-child):not(:last-child)").click(function(){
                startpage = $(this).html();
                ajax();
            });
            $('.pagination .prev, .pagination .next').click(function(){
                $('.pagination a').each(function(){
                    if($(this).hasClass('current')){
                        startpage = $(this).html();
                        if(!isNaN(startpage)){
                            return false;
                        }
                    }
                })
                ajax();
            })
            var html = _queryVideo(data);
            $('#hot').html(html);
            //视频划过
            
            //mouseover shadow
            $('.hotlistVideo ul li').hover(function() {
                $(this).find('.mask').stop().fadeToggle(500);
            });

            $(".rush").click(function(){
                beforeRush(this);  
            })
        }

        function weight(tt) {
            var json = eval(tt); //数组 
            var data = json.data;
            var data1 = data[0];

            var priceattr = " price=" + data1.Price;
            var videoidattr = " videoid=" + data1.VideoID;
            var accountattr = " account=" + data1.Account;
            var payflagattr = " payflag=" + data1.PayFlag;
            var memberattr = " member=" + data1.Member;
            var rightattr = " right=" + data1.right;

            var memberhtml = ""
            if(data1.Member == 0){
                memberhtml = "<span class='free-video'>免费</span>"
            } else {
                memberhtml = "<span class='video-fee'>" + data1.Price + "芽币</span>"
            }
            var html1 = "<div class='bestVideo rash' " + priceattr + videoidattr + accountattr + payflagattr + memberattr + rightattr + "> <a href='javascript:;' class='bigVideo' title='" + data1.VideoTitle + "'><img class='videoImg' title='" + data1.VideoTitle + "' src='http://images.ziyawang.com" + data1.VideoLogo + "' /></a> <a href='javascript:;' class='mask'></a><a href='javascript:;'><span class='b_shadow'></span></a></div> <div class='bestVideoTitle'> <a href='javascript:;' class='bigVideoTitle' title='" + data1.VideoTitle + "'>" + data1.VideoTitle + "</a><div class='video-oh'>" + memberhtml + "<span class='video-played'>已播放" + data1.ViewCount + "次</span></div></div>";
            $('#bestvideo').html(html1);
            var data2 = data.slice(1);
            var html2 = _queryVideo2(data2);
            $('#weight').html(html2);
            //视频划过
            $('.bestConLeft,.bestConRight ul li').hover(function() {
                $(this).find('.mask').stop().fadeToggle(500);
            });

            $(".rash").click(function(){
                beforeRush(this);  
            })

            $(".rbsh").click(function(){
                beforeRush(this);  
            })
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

function _queryVideo(data) {
    var html = '';
    $.each(data, function (index, item) {  
        //循环获取数据    
        var VideoTitle = data[index].VideoTitle;       //视频标题
        var VideoLogo  = data[index].VideoLogo;     //视频图片
        var VideoID    = data[index].VideoID;       //视频ID
        var ViewCount  = data[index].ViewCount;       //播放次数

        var Price  = data[index].Price;       
        var Account  = data[index].Account;       
        var PayFlag  = data[index].PayFlag;       
        var Member  = data[index].Member;       
        var right  = data[index].right;   
        var memberhtml = ""
        if(Member == 0){
            memberhtml = "<span class='free-video'>免费</span>"
        } else {
            memberhtml = "<span class='video-fee'>" + Price + "芽币</span>"
        }    

        var priceattr = " price=" + Price;
        var videoidattr = " videoid=" + VideoID;
        var accountattr = " account=" + Account;
        var payflagattr = " payflag=" + PayFlag;
        var memberattr = " member=" + Member;
        var rightattr = " right=" + right;
        html = html + "<li> <div class='videoLiPic rush' " + priceattr + videoidattr + accountattr + payflagattr + memberattr + rightattr + "> <a href='javascript:;' class='videoLiPicAsign' title='" + VideoTitle + "'><img class='videoImg' title='" + VideoTitle + "' src='http://images.ziyawang.com" + VideoLogo + "' /></a> <a href='javascript:;' class='mask'></a><a href='javascript:;'><span class='s_shadow'></span></a></div> <div class='videoLiTitle'> <a href='javascript:;' title='" + VideoTitle + "'>" + VideoTitle + "</a><div class='video-oh'>" + memberhtml + "<span class='video-played'>已播放" + ViewCount + "次</span></div></div></li>";
    });
    return html;
}

var token = $.cookie('token');
function rush(Price, VideoID, Account) {
    var isenough = '';
    if(Price > Account){
        isenough = "(余额不足)";
    }
    layer.open({
        type: 1,
        area: ['500px'], //宽高
        content: '<div class="layerRecharge"> <div class="layerTop"> <span class="coverBg"></span> <div class="captionTip"> <h3>该视频为付费视频</h3> <p class="needMoney">消耗芽币可观看视频</p> <p class="custom">消耗 ：<strong>' + Price + '</strong>芽币</p> <p class="custom">余额 ：<strong>' + Account + '</strong>芽币<span>' + isenough + '</span></p> </div> </div> </div>',
        btn: ['确定','充值','取消'], btn1:function(){
        $.ajax({
            url:'https://apis.ziyawang.com/zll/video/consume?access_token=token&VideoID=' + VideoID + '&token=' + token,
            type:'POST',
            dataType:'json',
            success:function(msg){
                if(msg.status_code == 200 || msg.status_code == 417){
                    window.location.href="http://ziyawang.com/video/" + VideoID;
                    // window.open("http://ziyawang.com/video/" + VideoID);
                } else if(msg.status_code == 418) {
                    layer.open({
                        type: 1,
                        area: ['322px'], //宽高
                        content: '<div class="layerNo"> <div class="layerNotop"> <span class="nocoverBg"></span> <span class="noFree">余额不足请充值！</span> </div></div>', btn: ['充值','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/money"; }, but2:function(){}});
                }
            }
        });
    }, btn2:function(){
        window.open("http://ziyawang.com/ucenter/money");
    }, close:function(){

    }});
    return;
}

function beforeRush(obj) {
    var price = parseInt($(obj).attr('price'));
    var videoid = $(obj).attr('videoid');
    var member = $(obj).attr('member');
    var right = $(obj).attr('right');
    var account = $(obj).attr('account');
    var payflag = $(obj).attr('payflag');

    if(member != 0){
        if(!token){
            window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes");
            return false;
        } else {
            if(right != "0" || payflag == "1"){
                window.location.href="http://ziyawang.com/video/" + videoid;
                // window.open("http://ziyawang.com/video/" + videoid);
                return false;
            } else {
                rush(price,videoid,account)
                return false;
            }
        }
    } else {
        window.location.href="http://ziyawang.com/video/" + videoid;
        // window.open("http://ziyawang.com/video/" + videoid);
    }
}
var startpage = 1;
function ajax(){
    var data = 'startpage=' + startpage;
    $.ajax({
        url: 'https://apis.ziyawang.com/zll/video/list?pagecount=12&order=1&access_token=token&token='+ token + "&" + data,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        success: function(tt){
            var json = eval(tt); //数组 
            var data = json.data;
            var counts = json.counts;
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination').children(":not(:first-child):not(:last-child)").click(function(){
                startpage = $(this).html();
                ajax();
            });
            $('.pagination .prev, .pagination .next').click(function(){
                $('.pagination a').each(function(){
                    if($(this).hasClass('current')){
                        startpage = $(this).html();
                        if(!isNaN(startpage)){
                            return false;
                        }
                    }
                })
                ajax();
            })
            var html = _queryVideo(data);
            $('#hot').html(html);
            //视频划过
            //mouseover shadow
            $('.hotlistVideo ul li').hover(function() {
                $(this).find('.mask').stop().fadeToggle(500);
            });

            $(".rush").click(function(){
                beforeRush(this);  
            })
        }
    })
}
</script>
@endsection