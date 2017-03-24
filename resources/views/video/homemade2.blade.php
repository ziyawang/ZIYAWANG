@extends('layouts.home')

@section('seo')
<title>资芽哈哈哈-资芽视频-不良资产领域第一视频平台</title>
        <meta name="Keywords" content="资芽视频,不良资产视频,不良资产行业视频,资芽网视频" />
        <meta name="Description" content="资芽视频是资芽网第一视频,行业专家释疑解惑,分享经验,培训学习,剖析热点话题;线上线下活动,同业互动,探索分析,交流共享,协作共赢,鼓励创新,普及法律常识,降低法律风险.推动不良资产行业,金融领域健康有序发展." />
@endsection
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/videos.css')}}?v=2.1.7.1.1" />
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
                <li><a href="http://ziyawang.com/video">推荐</a><span></span></li>
                <li class="current"><a href="http://ziyawang.com/video/homemade">资芽哈哈哈</a><span></span></li>
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
    <!-- 资芽哈哈哈 -->
    <div class="hotlist zyh">
        <h2 class="bTitle">资芽哈哈哈</h2>
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

        function getQueryString(key){
            var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
            var result = window.location.search.substr(1).match(reg);
            return result?decodeURIComponent(result[2]):null;
        }
        var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;

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

        $.ajax({  
            url: 'https://apis.ziyawang.com/zll/video/list?pagecount=16&VideoLabel=zyhhh&access_token=token&token=' + token + '&startpage=' + urlpage,  
            type: 'GET',  
            dataType: 'json',  
            timeout: 5000, 
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: hhh //成功执行方法    
        })

        function hhh(tt) {
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
                var url = "http://ziyawang.com/video/homemade?startpage=" + urlpage;
                url = encodeURI(url);
                window.location.href= url;
            });
            var html = _queryVideo(data);
            $('#videolist').html(html);
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

            $(".rush").click(function(){
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
</script>
@endsection