@extends('layouts.home')
@section('content')
        <link type="text/css" rel="stylesheet" href="{{asset('/css/findservice.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
    <div class="prompt_text">
        <div class="wrap bg">
        <div class="wrap prompt_text_content">
            <div class="enter_input"><input type="text" id="content" placeholder="处置机构  搜索引擎" /><span><img src="/img/search_yel.png" id="search"/></span></div>
            <input id="pubpro" class="free_issue" type="button" value="免费发布信息" />
        </div>
        </div>
    </div>
</div>

<div class="selected_serve wrap">
    <div class="service_info">
        <h2><i></i>优质服务方<span></span></h2>
        <ul class="service_ul">

        </ul>
        <!-- 公共分页/start -->
        <div class="pages">
            <div id="Pagination"></div>
            <div class="searchPage">
              <span class="page-sum">共<strong class="allPage">xxx</strong>页</span>
            </div>
        </div>
        <!-- 公共分页/end -->
    </div>
    <div class="pic_info">
        <h2><em></em>重点服务推荐</h2>
        <ul>
            <li>
                <img src="http://images.ziyawang.com/user/14699301003368.png">
                <div class="picinfo_content">
                    <h3>北京市华沛德权律师事务所</h3>
                    <h4>服务等级：VIP1</h4>
                    <div class="picon_intro">
                        <p>所在地：北京市-朝阳区</p>
                        <p>服务地区：北京</p>
                        <p>服务类型：律师事务所</p>
                    </div>
                    <a href="{{url('/service/31')}}" class="look">查看内容</a>
                    <span class="white_cube"></span>
                </div>
            </li>
            <li>
                <img src="http://images.ziyawang.com/user/14699313516562.jpg">
                <div class="picinfo_content">
                    <h3>北京市中金量子投资管理咨询有限公司</h3>
                    <h4>服务等级：VIP1</h4>
                    <div class="picon_intro">
                        <p>所在地：北京市-昌平区</p>
                        <p>服务地区：北京</p>
                        <p>服务类型：资产包收购...</p>
                    </div>
                    <a href="{{url('/service/37')}}" class="look">查看内容</a>
                    <span class="white_cube"></span>
                </div>
            </li>
            <li>
                <img src="http://images.ziyawang.com/user/14699300031379.jpg">
                <div class="picinfo_content">
                    <h3>四川云汇诚信用服务有限公司</h3>
                    <h4>服务等级：VIP1</h4>
                    <div class="picon_intro">
                        <p>所在地：四川省-成都市</p>
                        <p>服务地区：四川</p>
                        <p>服务类型：催收机构</p>
                    </div>
                    <a href="{{url('/service/30')}}" class="look">查看内容</a>
                    <span class="white_cube"></span>
                </div>
            </li>
        </ul>
    </div>
</div>


<script>
    $(function () {
        function getQueryString(key){
            var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
            var result = window.location.search.substr(1).match(reg);
            return result?decodeURIComponent(result[2]):null;
        }
        var content = getQueryString("content");
        $('#content').val(content);
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/search?access_token=token',  
            type: 'POST',  
            dataType: 'json',  
            data: {'type':'4', 'content': content},
            timeout: 1000,  
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: succFunction //成功执行方法    
        });  
        function LoadFunction() {  
            $("#list").html('加载中...');  
        }  
        function erryFunction() {  
            // alert("error");  
        }  
        function succFunction(tt) {  
            $(".service_ul").html('');

            var json = eval(tt); //数组 
            var counts = json.counts;
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax();

            });

            $('.service_info h2 span').html('共有' + counts + '条信息');

            var data = json.data;    
            $.each(data, function (index, item) {  
                //循环获取数据
                var UserPicture = data[index].UserPicture;   //服务方名称 
                var ServiceName = data[index].ServiceName;   //服务方头像 
                var ViewCount = data[index].ViewCount;    //浏览次数
                var ServiceNumber = data[index].ServiceNumber;    //编号
                var ServiceLocation = data[index].ServiceLocation;    //公司所在地 
                var ServiceLevel = data[index].ServiceLevel;    //服务等级 
                var ServiceArea = data[index].ServiceArea;    //服务地区
                var ServiceType = data[index].ServiceType;    //服务类型
                var CoNumber = data[index].CoNumber;    //已接单数
                var ServiceID = data[index].ServiceID;    //服务商ID
                $(".service_ul").html($(".service_ul").html() + "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + UserPicture + "' alt='' /></a><div class='company_info company_name'><a href='http://ziyawang.com/service/"+ ServiceID +"' class='blue_color'>" + ServiceName + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='company_info company_details'><dl><dt>编号：</dt><dd>" + ServiceNumber + "</dd><dt>所在地：</dt><dd>" + ServiceLocation + "</dd><dt>服务等级：</dt><dd class='yellow_color'>" + ServiceLevel + "</dd></dl><p class='service_area'>服务地区：" + ServiceArea + "</p><p class='service_classify'>服务类型：" + ServiceType + "</p></div><div class='orders'><a href='#'>已接" + CoNumber + "单</a></div></li>"); 
            });
            
            if(counts == 0){
                $(".service_ul").html('抱歉没有找到您想要的结果！');
            }
        }
    })

var startpage = 1;
var ServiceArea = null;
var ServiceType = null;
function ajax() {
    var data = 'startpage=' + startpage + '&ServiceType=' + ServiceType + '&ServiceArea=' + ServiceArea;

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/service/list?access_token=token&pagecount=10&' + data,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: function(){$("#list").html('加载中...');}, //加载执行方法    
        error: function(){alert("error");},  //错误执行方法    
        success: function(msg){
            $(".service_ul").html('');

            var json = eval(msg); //数组 
            var counts = json.counts;
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax();

            });
            $('.service_info h2 span').html('共有' + counts + '条信息');
            var data = json.data;        
            $.each(data, function (index, item) {  
                //循环获取数据
                var UserPicture = data[index].UserPicture;   //服务方名称 
                var ServiceName = data[index].ServiceName;   //服务方头像 
                var ViewCount = data[index].ViewCount;    //浏览次数
                var ServiceNumber = data[index].ServiceNumber;    //编号
                var ServiceLocation = data[index].ServiceLocation;    //公司所在地 
                var ServiceLevel = data[index].ServiceLevel;    //服务等级 
                var ServiceArea = data[index].ServiceArea;    //服务地区
                var ServiceType = data[index].ServiceType;    //服务类型
                var CoNumber = data[index].CoNumber;    //已接单数
                var ServiceID = data[index].ServiceID;    //服务商ID
                 $(".service_ul").html($(".service_ul").html() + "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + UserPicture + "' alt='' /></a><div class='company_info company_name'><a href='http://ziyawang.com/service/"+ ServiceID +"' class='blue_color'>" + ServiceName + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='company_info company_details'><dl><dt>编号：</dt><dd>" + ServiceNumber + "</dd><dt>所在地：</dt><dd>" + ServiceLocation + "</dd><dt>服务等级：</dt><dd class='yellow_color'>" + ServiceLevel + "</dd></dl><p class='service_area'>服务地区：" + ServiceArea + "</p><p class='service_classify'>服务类型：" + ServiceType + "</p></div><div class='orders'><a href='#'>已接" + CoNumber + "单</a></div></li>");

            });

            if(counts == 0){
                $(".service_ul").html('抱歉没有找到您想要的结果！');
            }
        }   
    });
}
$('.page').click(function(){
    startpage = $(this).html();
    ajax();
});
$('.service_type a').click(function(){
    startpage = 1;
    ServiceType = $(this).attr('type');
    ajax();
});
$('.area a, .zhedie a').click(function(){
    startpage = 1;
    ServiceArea = $(this).attr('area');
    ajax();
});


     $('#pubpro').click(function(){
        var token = $.session.get('token');
        if(!token){
            window.location = "{{url('/login')}}";
            return false;
        }

        window.location = "{{url('/ucenter/pubpro')}}";
    }) 
    </script>

    <script>
        $('#search').click(function(){
            var content = $('#content').val();
            window.location = "{{url('/search/service')}}?type=4&content=" + content;
        })
    </script>
@endsection