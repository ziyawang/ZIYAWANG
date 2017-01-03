@extends('layouts.home')

@section('seo')
<title>资芽网-全球不良资产超级综服平台</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection

@section('content')
        <link type="text/css" rel="stylesheet" href="{{asset('/css/findservice.css')}}?v=2.0.3" />
<!-- 二级banner -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/ucenter/index')}}"></a></li>
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
        var startpage = getQueryString("startpage")?getQueryString("startpage"):'1';
        $('#content').val(content);
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/search?access_token=token',  
            type: 'POST',  
            dataType: 'json',  
            data: {'type':'4', 'content': content, 'startpage': startpage},
            timeout: 5000,  
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
            console.log(json)
            var counts = json.counts;
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax(startpage);
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

    function ajax(startpage){
        var content = $('#content').val();
        window.open("http://ziyawang.com/search/service?type=4&startpage=" + startpage + "&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
    }

     $('#pubpro').click(function(){
        var token = $.cookie('token');
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
        $('#content').bind('keydown', function (e) {
            var key = e.which;
            if (key == 13) {
                var content = $('#content').val();
                window.location = "{{url('/search/service')}}?type=4&content=" + content;
            }
        });
    </script>
@endsection