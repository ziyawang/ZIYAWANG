@extends('layouts.home')

@section('seo')
<title>找服务_不良资产处置服务机构-资芽网</title>
        <meta name="Keywords" content="资产收购,投融资服务,法律服务,催收公司,不良资产处置服务机构,资芽网" />
        <meta name="Description" content="资芽网找服务，海量处置服务机构任你选，保理公司，认证资质；投融资服务，解你资金之急；资产债权收购方，诚心交易；急着催收没途径？催收公司，尽职调查，法律服务，三管齐下，保你债务无忧。" />
@endsection

@section('content')
<link type="text/css" rel="stylesheet" href="{{asset('/css/servelist.css')}}">
    <!-- 二级banner -->
    <div class="find_service">
        <ul>
            <li></li>
        </ul>
        <div class="prompt_text">
        <div class="wrap bg">
        <div class="wrap prompt_text_content">
            <div class="enter_input"><input type="text" id="sercontent" placeholder="处置机构  搜索引擎" /><span id="searchser"><img src="img/search_yel.png" /></span></div>
            <input id="pubpro" class="free_issue" type="button" value="免费发布信息" />
        </div>
        </div>
    </div>
    </div>
    <!-- 条件筛选 -->
    <div class="conditionalFilter">
        <div class="wrap">
            <div class="service_type">
                <span>服务方类型：</span>
                <div class="des_ser">
                    <a ServiceType="null" class="current" href="javascript:;">不限</a>
                    <a ServiceType="01" href="javascript:;">资产包收购</a>
                    <a ServiceType="02" href="javascript:;">催收机构</a>
                    <a ServiceType="03" href="javascript:;">律师事务所</a>
                    <a ServiceType="04" href="javascript:;">保理公司</a>
                    <a ServiceType="05" href="javascript:;">典当担保</a>
                    <a ServiceType="06" href="javascript:;">投融资服务</a>
                    <a ServiceType="10" href="javascript:;">尽职调查</a>
                    <a ServiceType="12" href="javascript:;">资产收购</a>
                    <a ServiceType="14" href="javascript:;" class="special">债权收购</a>
                </div>
            </div>
            <div class="area">
                <span>服务地<em>区</em>：</span>
                <div class="showArea">
                    <a href="javascript:;" class="current" ServiceArea="null">全国</a><a href="javascript:;" ServiceArea="北京">北京</a><a href="javascript:;" ServiceArea="上海">上海</a><a href="javascript:;" ServiceArea="广东">广东</a><a href="javascript:;" ServiceArea="江苏">江苏</a><a href="javascript:;" ServiceArea="山东">山东</a><a href="javascript:;" ServiceArea="浙江">浙江</a><a href="javascript:;" ServiceArea="河南">河南</a><a href="javascript:;" ServiceArea="河北">河北</a><a href="javascript:;" ServiceArea="辽宁">辽宁</a><a href="javascript:;" ServiceArea="四川">四川</a><a href="javascript:;" ServiceArea="湖北">湖北</a><a href="javascript:;" ServiceArea="湖南">湖南</a><a href="javascript:;" ServiceArea="福建">福建</a>
                </div>
            </div>
            <div class="hs_change">
                <span href="#" class="m1 active infomore">更多></span>
                <span href="#" class="m2 infomore">收起</span>
            </div>
            <div class="zhedie">
                <div class="hide">
                    <a href="javascript:;" ServiceArea="安徽">安徽</a>
                    <a href="javascript:;" ServiceArea="陕西">陕西</a>
                    <a href="javascript:;" ServiceArea="天津">天津</a>
                    <a href="javascript:;" ServiceArea="江西">江西</a>
                    <a href="javascript:;" ServiceArea="广西">广西</a>
                    <a href="javascript:;" ServiceArea="重庆">重庆</a>
                    <a href="javascript:;" ServiceArea="吉林">吉林</a>
                    <a href="javascript:;" ServiceArea="云南">云南</a>
                    <a href="javascript:;" ServiceArea="山西">山西</a>
                    <a href="javascript:;" ServiceArea="新疆">新疆</a>
                    <a href="javascript:;" ServiceArea="贵州">贵州</a>
                    <a href="javascript:;" ServiceArea="甘肃">甘肃</a>
                    <a href="javascript:;" ServiceArea="海南">海南</a>
                    <a href="javascript:;" ServiceArea="宁夏">宁夏</a>
                    <a href="javascript:;" ServiceArea="青海">青海</a>
                    <a href="javascript:;" ServiceArea="西藏">西藏</a>
                    <a href="javascript:;" ServiceArea="黑龙江">黑龙江</a>
                    <a href="javascript:;" ServiceArea="内蒙古">内蒙古</a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="xTitle">
        <!-- <span>优质服务方</span>共0条信息 -->
    </div>
    <!-- waterfall -->
    <div class="infomation">
        <div class="waterfull clearfloat" id="waterfull">
            <ul id="list">
                
            </ul>
        </div>
        <!-- loading按钮 -->
        <div id="imloading">
        资芽正在给力加载中.....
        </div>
        <!-- 公共分页/start -->
        <div class="pageCon">
            <div class="pages">
                <div id="Pagination"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage">0</strong>页</span>
                </div>
            </div>
        </div>
        <!-- 公共分页/end -->
    </div>
    <script type="text/javascript" src="{{asset('/js/fs.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.masonry.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jQeasing.js')}}"></script>
<script type="text/javascript">
$(function(){

    var token = $.cookie('token');

    function getQueryString(key){
        var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
        var result = window.location.search.substr(1).match(reg);
        return result?decodeURIComponent(result[2]):null;
    }
    var urlobj = {};
    var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;
    var startpage   = ( urlpage - 1 ) * 4 + 1;
    urlobj['ServiceArea'] = getQueryString("ServiceArea") ? getQueryString("ServiceArea") :undefined;
    urlobj['ServiceType'] = getQueryString("ServiceType") ? getQueryString("ServiceType") :undefined;
    function query(obj) {
        var string = '';
        $.each(obj,function(n,value) {
            if(n == 'ServiceArea') {
                $('a[' + n + '=' + value + ']').parent().show();
                $('.showArea a').removeClass('current');
            }
            if(value != undefined) {
                string = string + '&' + n + '=' + value;
                $('a[' + n + '=' + value + ']').addClass('current').siblings().removeClass('current');
            }
        });
        return string;      
    };
    var urldata = query(urlobj);
    if(urlobj['ServiceArea'] == undefined){
        $('a[ServiceArea=null]').addClass('current');
    }
    
    function querydata(data,index){
        var UserPicture = data[index].UserPicture;   //服务方头像 
        var ServiceName = data[index].ServiceName;   //服务方名称 
        var ViewCount = data[index].ViewCount;    //浏览次数
        var ServiceNumber = data[index].ServiceNumber;    //编号
        var ServiceLocation = data[index].ServiceLocation;    //公司所在地 
        var ServiceLevel = data[index].ServiceLevel;    //服务等级 
        var ServiceArea = data[index].ServiceArea;    //服务地区
        var ServiceType = data[index].ServiceType;    //服务类型
        var ServiceIntroduction = data[index].ServiceIntroduction;    //服务简介
        var CoNumber = data[index].CoNumber;    //已接单数
        var ServiceID = data[index].ServiceID;    //服务商ID 
        var ConfirmationP1 = data[index].ConfirmationP1;    //服务商认证资料
        var CollectCount  = data[index].CollectCount;   //收藏人数
        var CollectFlag  = data[index].CollectFlag;   //收藏人数
        var PubTime = data[index].created_at.substr(0,10);    //发布时间

        if(ServiceIntroduction.length > 36){
            ServiceIntroduction       = ServiceIntroduction.substr(0,33) + '...';
        }

        var collectinfo = "<i class='iconfont heart' title='收藏' ServiceID='" + ServiceID + "'>&#xe601;</i>"
        if(CollectFlag == 1){
            collectinfo = "<i class='iconfont heart red' title='已收藏' ServiceID='" + ServiceID + "'>&#xe601;</i>"
        }
        var html = "<li class='item'><div class='itemTop'><div class='itemTopLeft'><span><img src='http://images.ziyawang.com" + UserPicture + "' /></span><b>" + ServiceNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"'>" + ServiceName + "</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"' class='cetification'><img src='http://images.ziyawang.com" + ConfirmationP1 + "' /></a><div class='illustration'><span class='createTime'>" + PubTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"' class='descriptionInwords'>" + ServiceIntroduction + "</a><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"' class='serviceType'>服务类型</a><p class='concreteTypes'><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"'>" + ServiceType + "</a></p><p class='remarks'><span>所在地：" + ServiceLocation + "</span></p><p class='remarks'><span>服务地区：" + ServiceArea + "</span></p><p class='servicerInfo'><span class='already'><i class='iconfont'>&#xe60d;</i><em>已接" + CoNumber + "单</em></span><span class='levels'><i class='iconfont'>&#xe60e;</i><em>" + ServiceLevel + "</em></span></p></div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
        return html;
    }
// console.log(urldata)
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/service/list?pagecount=6&access_token=token&startpage='+ startpage + urldata + '&token=' + token,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000, 
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: succFunction //成功执行方法    
    }); 

    function LoadFunction() {  
        // $("#list").html('加载中...');  
    }  

    function erryFunction() {  
        // alert("error");  
    }  

    function succFunction(tt) {
        $("#list").html('');
        var json = eval(tt); //数组 
        // console.log(json);
        var counts = json.counts;
        $(".xTitle").html('<span>优质服务方</span>共' + counts + '条信息');

        var pages = json.pages;
        pages = Math.ceil(pages/4);
        var current = Math.ceil(json.currentpage/4) - 1;
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
            // startpage = $(this).html();

            // var stop = false;
            var fenyepage = $(this).html();
            urlpage = parseInt(urlpage);
            if(fenyepage == '上一页') {
                urlpage -= 1;
            } else if(fenyepage == '下一页') {
                urlpage += 1;
            } else {
                urlpage = fenyepage;
            }
            // var urlpage = undefined;

            // $.each($('.pagination a'),function(){
            //     if($(this).hasClass('current')){
            //         urlpage = $(this).html();
            //     }
            // })
            ajax(urlpage);
            $("html,body").animate({scrollTop:0},200); 

        });
        var data = json.data;    
        $.each(data, function (index, item) {
            var html = querydata(data, index);

            $("#list").html($("#list").html() + html);  
        });

        if(counts == 0){
            $("#list").html('抱歉没有找到您想要的结果！');
        }

        /*瀑布流开始*/
        var container = $('.waterfull ul');
        var loading=$('#imloading');
        var pageCon = $('.pageCon');
        // 初始化loading状态
        loading.data("on",true);
        /*判断瀑布流最大布局宽度，最大为1232*/
        function tores(){
            var tmpWid=$(window).width();
            if(tmpWid>1232){
                tmpWid=1232;
            }else{
                var column=Math.floor(tmpWid/308);
                tmpWid=column*308;
            }
            $('.waterfull').width(tmpWid);
        }
        tores();
        $(window).resize(function(){
            tores();
        });
        container.imagesLoaded(function(){
            container.masonry({
                columnWidth: 308,
                itemSelector : '.item',
                isFitWidth: false,//是否根据浏览器窗口大小自动适应默认false
                isAnimated: true,//是否采用jquery动画进行重拍版
                isRTL:false,//设置布局的排列方式，即：定位砖块时，是从左向右排列还是从右向左排列。默认值为false，即从左向右
                isResizable: false,//是否自动布局默认true
                animationOptions: {
                duration: 600,
                easing: 'easeInOutBack',//如果你引用了jQeasing这里就可以添加对应的动态动画效果，如果没引用删除这行，默认是匀速变化
                queue: false//是否队列，从一点填充瀑布流
                }
            });
        });
        /*模拟从后台获取到的数据*/

        /*本应该通过ajax从后台请求过来类似sqljson的数据然后，便利，进行填充，这里我们用sqlJson来模拟一下数据*/
        $(window).scroll(function(){
            var sqlJson=null;
            if(!loading.data("on")) return;
            // 计算所有瀑布流块中距离顶部最大，进而在滚动条滚动时，来进行ajax请求，方法很多这里只列举最简单一种，最易理解一种
            var itemNum=$('#waterfull').find('.item').length;
            var itemArr=[];
            itemArr[0]=$('#waterfull').find('.item').eq(itemNum-1).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
            itemArr[1]=$('#waterfull').find('.item').eq(itemNum-2).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
            itemArr[2]=$('#waterfull').find('.item').eq(itemNum-3).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
            var maxTop=Math.max.apply(null,itemArr);
            if(maxTop<$(window).height()+$(document).scrollTop()){
                //加载更多数据
                startpage += 1;
                $.ajax({
                    url: 'http://api.ziyawang.com/v1/service/list?pagecount=6&access_token=token&startpage='+ startpage + urldata + '&token=' + token,   
                    type: 'GET',  
                    dataType: 'json',  
                    timeout: 5000, 
                    asycn: false,
                    cache: false,  
                    beforeSend: LoadFunction, //加载执行方法    
                    error: erryFunction,  //错误执行方法    
                    success: function(tt){
                        var json = eval(tt);

                        sqlJson = json.data;
                        waterload(sqlJson);

                    } //成功执行方法  
                });
                loading.data("on",false).fadeIn(600);
                function waterload(sqlJson){
                    /*根据后台返回的数据来判断是否你进行分页或者数据加载完毕*/
                    if(itemNum>18 || sqlJson.length < 1){
                        //loading.text('没有更多了哦！');
                        loading.hide();
                        pageCon.show();
                    }else{
                        var html="";
                        $.each(sqlJson, function (index, item) {
                            var queryhtml = querydata(sqlJson, index);
                            html = html + queryhtml 
                        });
                        /*模拟ajax请求数据时延时600毫秒*/
                        var time=setTimeout(function(){
                            $(html).find('img').each(function(index){
                                loadImage($(this).attr('src'));
                            })
                            var $newElems = $(html).css({ opacity: 0}).appendTo(container);
                            $newElems.imagesLoaded(function(){
                                $newElems.animate({ opacity: 1},600);
                                container.masonry( 'appended', $newElems,true);
                                loading.data("on",true).fadeOut();
                                clearTimeout(time);
                            });

                            //收藏按钮切换
                            $('.storeup i').click(function() {
                                var title = $(this).attr("title");
                                if(title == '收藏'){
                                    $(this).attr('title', '已收藏');
                                    $(this).addClass('red');
                                }else{
                                    $(this).attr('title', '收藏');
                                    $(this).removeClass('red');
                                }
                            });
                            
                            //鼠标滑过li
                            $('.item').hover(function() {
                                $(this).children('.storeup').stop().animate({'bottom':'0px'}, 200);
                            }, function() {
                                $(this).children('.storeup').stop().animate({'bottom':'-42px'}, 300);
                            });  

                            function checkLogin(){
                                var token = $.cookie('token');
                                if(!token){
                                    // window.location = "{{url('/login')}}";
                                     window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes"); 
                                    stop = true;
                                    return false;
                                }
                                stop = false;
                            }

                            function collect(ServiceID) {
                                var token = $.cookie('token');
                                $.ajax({
                                    url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
                                    type:'POST',
                                    data:'itemID=' + ServiceID + '&type=4',
                                    dataType:'json',
                                    success:function(msg){
                                        alert(msg.msg)
                                    }
                                });
                            }

                            $(".heart").click(function(){
                                checkLogin();
                                if(stop){
                                    return false;
                                }
                                var ServiceID = $(this).attr('ServiceID');
                                collect(ServiceID);
                            });
                        },600)
                    }
                };
            }
        });
        function loadImage(url) {
            var img = new Image(); 
            //创建一个Image对象，实现图片的预下载
            img.src = url;
            if (img.complete) {
                return img.src;
            }
            img.onload = function () {
                return img.src;
            };
        };




        //收藏按钮切换
        $('.storeup i').click(function() {
            var title = $(this).attr("title");
            if(title == '收藏'){
                $(this).attr('title', '已收藏');
                $(this).addClass('red');
            }else{
                $(this).attr('title', '收藏');
                $(this).removeClass('red');
            }
        });
        
        //鼠标滑过li
        $('.item').hover(function() {
            $(this).children('.storeup').stop().animate({'bottom':'0px'}, 200);
        }, function() {
            $(this).children('.storeup').stop().animate({'bottom':'-42px'}, 300);
        });  

        function checkLogin(){
            var token = $.cookie('token');
            if(!token){
                // window.location = "{{url('/login')}}";
                 window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes"); 
                stop = true;
                return false;
            }
            stop = false;
        }

        function collect(ServiceID) {
            var token = $.cookie('token');
            $.ajax({
                url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
                type:'POST',
                data:'itemID=' + ServiceID + '&type=4',
                dataType:'json',
                success:function(msg){
                    alert(msg.msg)
                }
            });
        }

        $(".heart").click(function(){
            checkLogin();
            if(stop){
                return false;
            }
            var ServiceID = $(this).attr('ServiceID');
            collect(ServiceID);
        });
    }  
})

function getQuery(key){
    var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
    var result = window.location.search.substr(1).match(reg);
    return result?decodeURIComponent(result[2]):null;
}
var startpage = getQuery('startpage');
var ServiceArea = getQuery('ServiceArea');
var ServiceType = getQuery('ServiceType');

function ajax(fenye) {
    if(fenye != undefined){
        startpage = fenye;
    }
    var data = 'startpage=' + startpage + '&ServiceType=' + ServiceType + '&ServiceArea=' + ServiceArea;
    // console.log(data);
    var url = "http://ziyawang.com/service?" + data;
    url = encodeURI(url);
    window.location.href= url; 
}
$('.pagination a').click(function(){
    var page = $(this).html();
    alert(page);
    return;
    if(page == '上一页') {
        startpage -= 1;
        if(startpage < 1){
            startpage == 1;
        }
    } else if(page == '下一页') {
        startpage += 1;

    } else {
        startpage = page;
    }

    ajax();
});
$('.service_type a').click(function(){
    startpage = 1;
    ServiceType = $(this).attr('ServiceType');
    ajax();
});
$('.area .showArea a, .zhedie .hide a').click(function(){
    startpage = 1;
    ServiceArea = $(this).attr('ServiceArea');
    ajax();
});

$('#pubpro').click(function(){
        var token = $.cookie('token');
        if(!token){
            window.open("{{url('/login')}}","status=yes,toolbar=yes, menubar=yes,location=yes"); 
            return false;
        }

        window.location = "{{url('/ucenter/pubpro')}}";
    }) 

    </script>
<script>
    $('#searchser').click(function(){
        var content = $('#sercontent').val();
        if(content.length < 1){
                window.open("http://ziyawang.com/service","status=yes,toolbar=yes, menubar=yes,location=yes");
                return false;
            }
        window.open("http://ziyawang.com/search/service?type=4&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
        // window.location = "{{url('/search/service')}}?type=4&content=" + content;
    })
        $('#sercontent').focus(function(event){
            $('#sercontent').bind('keydown', function (e) {
                var key = e.which;
                if (key == 13) {
                    var content = $('#sercontent').val();
                    if(content.length < 1){
                            window.open("http://ziyawang.com/service","status=yes,toolbar=yes, menubar=yes,location=yes");
                            return false;
                        }
                    window.open("http://ziyawang.com/search/service?type=4&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                    // window.location = "{{url('/search/service')}}?type=4&content=" + content;
                }
            });
        });
</script>
@endsection

