@extends('layouts.home')

@section('seo')
<title>资芽视频-不良资产领域第一视频平台</title>
        <meta name="Keywords" content="资芽视频,不良资产视频,不良资产行业视频,资芽网视频" />
        <meta name="Description" content="资芽视频是资芽网第一视频,行业专家释疑解惑,分享经验,培训学习,剖析热点话题;线上线下活动,同业互动,探索分析,交流共享,协作共赢,鼓励创新,普及法律常识,降低法律风险.推动不良资产行业,金融领域健康有序发展." />
@endsection
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/videos.css')}}?v=1.0.4" />
<script src="{{asset('/js/fingerprint.js')}}"></script>
<script src="{{asset('/js/jquery.md5.js')}}"></script>
<script src="{{asset('/org/layer/layer.js')}}"></script>
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!--视频导航 search框 -->
<div class="bVideo">
    <div class="bVideoBox clearfix">
        <div class="videoNav">
            <div class="shadowBar"></div>
            <ul>
                <li><a href="http://ziyawang.com/video">推荐</a><span></span></li>
                <li id="zyhhh"><a href="http://ziyawang.com/video/homemade">资芽哈哈哈</a><span></span></li>
                <li id="hys"><a href="http://ziyawang.com/video/profession">行业说</a><span></span></li>
                <li id="zyyfz"><a href="http://ziyawang.com/video/oneminu">资芽一分钟</a><span></span></li>
            </ul> 
        </div>
        <div class="videoSearch">
            <div class="videoSearchinp">
                <input type="text" id="content" placeholder="输入你想选择的视频，快来试试吧..." /><span id='search'><img src="/img/search_yel.png" /></span>
            </div>
        </div>
    </div>
</div>
<!-- video details -->
<div class="viDetails">
    <div class="viDetailsCon">
        <div class="viDetailsConTop clearfix">
            <div class="viDetailsConTopLeft"  id="video1">
            </div>
            <div class="viDetailsConTopRight">
                <span class="relevant">相关视频</span>
                <div class="relevantVideo" id="mainBox">
                    <ul id="content1">
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="viDetailsConBottom clearfix">
            <div class="viDetailsTitle" id="title2"></div>
            <div class="video_btn clearfix">
                <a href="javascript:;" class="dianzan aTags"><i class="iconfont">&#xe615;</i><span id="zancount">0</span></a>
                <a href="javascript:;" class="collect aTags"><i class="iconfont" id="isred">&#xe601;</i><span id="iscollect">收藏</span></a>
                <div class="jiathis_style_32x32 shareBox">
                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis sharevideo" target="_blank" id="share_icon" title="分享"></a>
                    <span class="share_word">分享</span>
                </div>
                <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                <a href="javascript:;" class="phone aTags"><i class="iconfont">&#xe60b;</i><span>手机看</span></a>
                <a href="javascript:;" class="playcount aTags"><i class="iconfont">&#xe616;</i>次播放</a>
            </div>
        </div>
    </div>
</div>
<div class="content clearfix">
    <div class="conLeft">
        <!-- 视频简介 --> 
        <div class="brief_content" id="videoDes">
            <h3>视频简介</h3>
        </div>
        <!-- 视频填写评论 -->
        <div class="comment">
            <h3>发表评论<span style="font-weight:normal;font-size:14px;color:#666;">（<em id="text-count">字数限制：200</em>/200）</span></h3>
            <textarea name="" id="pinglun" class="review_txt">文明上网理性发言...</textarea>

            <button id="pub"><span>发表评论</span><i class="iconfont">&#xe607;</i></button>
        </div>
        <!-- 查看评论 -->
        <div class="review">
            <div class="review_btn">
                <a href="javascript:;" class="allReviews">全部评论</a>    
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
    </div>
    <div class="conRight">
        <div class="vids_right">
            <!-- 热播列表 -->
            <div class="vr_first">
                <h3>热播排行榜<span>THE HIT LIST</span></h3>
                <div class="time_choice">
                    <ul class="current" id="video3">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
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
        //收藏
        if($(this).children('span').html()=='收藏'){
            $(this).children('i').addClass('red');
            $(this).children('span').html('已收藏');
        }else{
            $(this).children('i').removeClass('red');
            $(this).children('span').html('收藏');
        }
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
            html = html + "<li class='videoli0'><a href='http://ziyawang.com/video/" + VideoID + "' class='imgBox'><img title='" + VideoTitle + "' src='http://images.ziyawang.com/" + VideoLogo + "'></a><a href='http://ziyawang.com/video/" + VideoID + "' class='vr_title'>" + VideoTitle + "</a><p class='bofang'>已播放" + ViewCount + "次</p></li>";
        });
        return html;
    }

    function _queryMatchVideo(data) {
        var html = '';
        $.each(data, function (index, item) {  
            //循环获取数据    
            var VideoTitle = data[index].VideoTitle;       //视频标题
            var VideoThumb  = data[index].VideoThumb;     //视频图片
            var VideoID    = data[index].VideoID;       //视频ID
            var ViewCount  = data[index].ViewCount;       //播放次数
            // html = html + "<li class='videoli0'><a href='http://ziyawang.com/video/" + VideoID + "' class='imgBox'><img src='http://images.ziyawang.com/" + VideoLogo + "'></a><a href='http://ziyawang.com/video/" + VideoID + "' class='vr_title'>" + VideoTitle + "</a><p class='bofang'>已播放" + ViewCount + "次</p></li>";
            html = html + "<li class='listSmall'> <div class='listSmallCon clearfix'> <div class='lscLeft'> <a href='http://ziyawang.com/video/" + VideoID + "' class='lscLeftImg' title='" + VideoTitle + "'> <img title='" + VideoTitle + "' src='http://images.ziyawang.com/" + VideoThumb + "' /> <p class='borderOn'></p> </a> </div> <div class='lscRight'> <h2><a href='http://ziyawang.com/video/" + VideoID + "' title='" + VideoTitle + "'>" + VideoTitle + "</a></h2> <p class='playTimes'>已播放" + ViewCount + "次</p> </div> </div> </li>";
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
        url: 'http://api.ziyawang.com/v1/video/list?pagecount=8&order=1&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: video2 //成功执行方法    
    })

    //视频匹配
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/match/video/' + VideoID + '?pagecount=16&access_token=token',  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: match //成功执行方法    
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

    function match(tt) {
        var json = eval(tt); //数组
        var data = json.data;
        var html = _queryMatchVideo(data);
        $('#content1').html(html);

var doc=document;
    var _wheelData=-1;
    var mainBox=doc.getElementById('mainBox');
    function bind(obj,type,handler){
        var node=typeof obj=="string"?$(obj):obj;
        if(node.addEventListener){
            node.addEventListener(type,handler,false);
        }else if(node.attachEvent){
            node.attachEvent('on'+type,handler);
        }else{
            node['on'+type]=handler;
        }
    }
    function mouseWheel(obj,handler){
        var node=typeof obj=="string"?$(obj):obj;
        bind(node,'mousewheel',function(event){
            var data=-getWheelData(event);
            handler(data);
            if(document.all){
                window.event.returnValue=false;
            }else{
                event.preventDefault();
            }
        });
    //火狐
        bind(node,'DOMMouseScroll',function(event){
            var data=getWheelData(event);
            handler(data);
            event.preventDefault();
        });
        function getWheelData(event){
            var e=event||window.event;
            return e.wheelDelta?e.wheelDelta:e.detail*40;
        }
    }
    function addScroll(){
        this.init.apply(this,arguments);
    }
    addScroll.prototype={
        init:function(mainBox,contentBox,className){
            var mainBox=doc.getElementById(mainBox);
            var contentBox=doc.getElementById(contentBox);
            var scrollDiv=this._createScroll(mainBox,className);
            this._resizeScorll(scrollDiv,mainBox,contentBox);
            this._tragScroll(scrollDiv,mainBox,contentBox);
            this._wheelChange(scrollDiv,mainBox,contentBox);
            this._clickScroll(scrollDiv,mainBox,contentBox);
        },
    //创建滚动条
        _createScroll:function(mainBox,className){
            var _scrollBox=doc.createElement('div')
            var _scroll=doc.createElement('div');
            var span=doc.createElement('span');
            _scrollBox.appendChild(_scroll);
            _scroll.appendChild(span);
            _scroll.className=className;
            mainBox.appendChild(_scrollBox);
            return _scroll;
        },
    //调整滚动条
        _resizeScorll:function(element,mainBox,contentBox){
            var p=element.parentNode;
            var conHeight=contentBox.offsetHeight;
            var _width=mainBox.clientWidth;
            var _height=mainBox.clientHeight;
            var _scrollWidth=element.offsetWidth;
            var _left=_width-_scrollWidth;
            p.style.width=_scrollWidth+"px";
            p.style.height=_height-4+"px";
            p.style.left=_left+"px";
            p.style.position="absolute";
            p.style.background="#252525";
            p.style.borderRadius='10px';
            contentBox.style.width=(mainBox.offsetWidth-_scrollWidth)+"px";
            var _scrollHeight=parseInt(_height*(_height/conHeight));
            if(_scrollHeight>=mainBox.clientHeight){
                element.parentNode.style.display="none";
            }
            element.style.height=_scrollHeight+"px";
        },
    //拖动滚动条
        _tragScroll:function(element,mainBox,contentBox){
            var mainHeight=mainBox.clientHeight;
            element.onmousedown=function(event){
                var _this=this;
                var _scrollTop=element.offsetTop;
                var e=event||window.event;
                var top=e.clientY;
                //this.onmousemove=scrollGo;
                document.onmousemove=scrollGo;
                document.onmouseup=function(event){
                    this.onmousemove=null;
                }
                function scrollGo(event){
                    var e=event||window.event;
                    var _top=e.clientY;
                    var _t=_top-top+_scrollTop;
                    if(_t>(mainHeight-element.offsetHeight-4)){
                        _t=(mainHeight-element.offsetHeight-4);
                    }
                    if(_t<=0){
                        _t=0;
                    }
                    element.style.top=_t+"px";
                    contentBox.style.top=-_t*(contentBox.offsetHeight/mainBox.offsetHeight)+"px";
                    _wheelData=_t;
                }
            }
            element.onmouseover=function(){
                this.style.background="#f97b00";
            }
            element.onmouseout=function(){
                this.style.background="#f99e00";
            }
        },
    //鼠标滚轮滚动，滚动条滚动
        _wheelChange:function(element,mainBox,contentBox){
            var node=typeof mainBox=="string"?$(mainBox):mainBox;
            var flag=0,rate=0,wheelFlag=0;
            if(node){
                mouseWheel(node,function(data){
                    var hasScroll = $('.scrollDiv').css('height');
                    hasScroll = parseInt(hasScroll);
                    if( hasScroll >= 473){
                        return;
                    }
                    wheelFlag+=data;
                    if(_wheelData>=0){
                        flag=_wheelData;
                        element.style.top=flag+"px";
                        wheelFlag=_wheelData*12;
                        _wheelData=-1;
                    }else{
                        flag=wheelFlag/12;
                    }
                    if(flag<=0){
                        flag=0;
                        wheelFlag=0;
                    }
                    if(flag>=(mainBox.offsetHeight-element.offsetHeight-3)){
                        flag=(mainBox.clientHeight-element.offsetHeight-3);
                        wheelFlag=(mainBox.clientHeight-element.offsetHeight)*12;
                    }
                    element.style.top=flag+"px";
                    contentBox.style.top=-flag*(contentBox.offsetHeight/mainBox.offsetHeight)+"px";
                });
            }
        },
        _clickScroll:function(element,mainBox,contentBox){
            var p=element.parentNode;
            p.onclick=function(event){
                var e=event||window.event;
                var t=e.target||e.srcElement;
                var sTop=document.documentElement.scrollTop>0?document.documentElement.scrollTop:document.body.scrollTop;
                var top=mainBox.offsetTop;
                var _top=e.clientY+sTop-top-element.offsetHeight/2;
                if(_top<=0){
                    _top=0;
                }
                if(_top>=(mainBox.clientHeight-element.offsetHeight-3)){
                    _top=(mainBox.clientHeight-element.offsetHeight-3);
                }
                if(t!=element){
                    element.style.top=_top+"px";
                    contentBox.style.top=-_top*(contentBox.offsetHeight/mainBox.offsetHeight)+"px";
                    _wheelData=_top;
                }
            }
        }
    }
    new addScroll('mainBox','content1','scrollDiv');
        
    //li click
    //============li height 92px
    // var rvLen = $('.relevantVideo ul li').length;
    // var rvLen1 = parseInt(rvLen - 2);             
    // var scrollHei = parseInt((466 - $('.scrollDiv').height())/(rvLen - 5));
    //alert(scrollHei);
    // $('.relevantVideo ul li').click(function() {
    //     $(this).addClass('selected').siblings().removeClass('selected');
    //     var rvNum = $(this).index();          //当前序号
    //     if(rvNum <= 2){                       //前3个
    //         $('.scrollDiv').animate({'top': '0px'}, 200);
    //         $('.relevantVideo ul').animate({'top': '0px'}, 200);
    //     }else if(rvNum >= rvLen1){              //大于等于
    //         $('.scrollDiv').animate({'top': 'auto','bottom':'0px'}, 200);
    //     }else{
    //         if(rvLen1 == (rvLen-2)||rvLen1 == (rvLen - 1))
    //         var rvNum1 = rvNum - 2;
    //         //alert(move);
    //         var der = -92 * rvNum1;
    //         var des = scrollHei * rvNum1-4;
    //         $('.relevantVideo ul').animate({'top': der+'px'}, 200);
    //         $('.scrollDiv').animate({'top': des+'px'}, 200);
    //     }
    // });



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
            $('#isred').addClass('red');
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
        var html = "<video title='" + VideoTitle + "' poster='http://images.ziyawang.com" + VideoLogo + "' src='http://videos.ziyawang.com" + VideoLink + "' controls='controls' preload='auto'></video>";
        $('#title1').html(VideoLabel);
        $('#title2').html(VideoTitle);
        $('.viDetailsConTopLeft').html(html);
        $('.playcount').html("<i class='iconfont'>&#xe616;</i>" + ViewCount + "播放");
        $('#zancount').html(ZanCount);
        $('#videoDes').html("<h3>视频简介</h3>" + VideoDes);
        document.title = VideoTitle + '_资芽视频-不良资产领域第一视频平台';

    }
});

$('#video1').bind('contextmenu',function() { return false; }); 

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

    /*字数限制*/  
    $("#pinglun").on("input propertychange", function() {  
        var $this = $(this),  
            _val = $this.val(),  
            count = "";  
        if (_val.length > 200) {  
            $this.val(_val.substring(0, 200));  
        }  
        count = 200 - $this.val().length;  
        $("#text-count").text('字数限制：'+count);  
    });  

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
                    $('#pinglun').val('文明上网理性发言...');
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
                    $('#pinglun').val('文明上网理性发言...');
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
                    } else {
                        // layer.msg('您已经点过赞啦~');
                        layer.tips('您已经点过赞啦~', '.dianzan');
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
                    } else {
                        // layer.msg('您已经点过赞啦~');
                        layer.tips('您已经点过赞啦~', '.dianzan');
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
<script type="text/javascript">
    $(function(){
        //收藏
        $('.collect').click(function() {
            if($(this).children('span').html()=='收藏'){
                $(this).children('i').addClass('red');
                $(this).children('span').html('已收藏');
            }else{
                $(this).children('i').removeClass('red');
                $(this).children('span').html('收藏');
            }
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


    });

</script>
@endsection