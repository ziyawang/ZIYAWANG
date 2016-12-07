@extends('layouts.home')
@section('content')
        <link type="text/css" rel="stylesheet" href="{{asset('/css/findservice.css')}}?v=1.0.4" />
<!-- 二级banner -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/course')}}"></a></li>
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
<div class="description">
    <div class="wrap">
    <div class="service_type">
        <span>服务方类型：</span><a type="null" class="current" href="javascript:;">不限</a><a type="01" href="javascript:;">资产包收购</a><a type="02" href="javascript:;">催收机构</a><a type="03" href="javascript:;">律师事务所</a><a type="04" href="javascript:;">保理公司</a><a type="05" href="javascript:;">典当担保</a><a type="06" href="javascript:;">投融资服务</a><a type="10" href="javascript:;">尽职调查</a><a type="12" href="javascript:;">资产收购</a><a type="14" href="javascript:;">债权收购</a>
    </div>
    <div class="area">
        <span>服务地区：</span><a href="javascript:;" class="current" area="null">全国</a><a href="javascript:;" area="北京">北京</a><a href="javascript:;" area="上海">上海</a><a href="javascript:;" area="广东">广东</a><a href="javascript:;" area="江苏">江苏</a><a href="javascript:;" area="山东">山东</a><a href="javascript:;" area="浙江">浙江</a><a href="javascript:;" area="河南">河南</a><a href="javascript:;" area="河北">河北</a><a href="javascript:;" area="辽宁">辽宁</a><a href="javascript:;" area="四川">四川</a><a href="javascript:;" area="湖北">湖北</a><a href="javascript:;" area="湖南">湖南</a><a href="javascript:;" area="福建">福建</a><a href="javascript:;" area="安徽">安徽</a><a href="javascript:;" area="陕西">陕西</a>
    </div>
    <div class="zhedie">
        <div class="hs_change">
            <span href="#" class="more m1 active">更多></span>
            <span href="#" class="more m2">收起</span>
        </div>
        <div class="hide">
            <a href="javascript:;" area="天津">天津</a>
            <a href="javascript:;" area="江西">江西</a>
            <a href="javascript:;" area="广西">广西</a>
            <a href="javascript:;" area="重庆">重庆</a>
            <a href="javascript:;" area="吉林">吉林</a>
            <a href="javascript:;" area="云南">云南</a>
            <a href="javascript:;" area="山西">山西</a>
            <a href="javascript:;" area="新疆">新疆</a>
            <a href="javascript:;" area="贵州">贵州</a>
            <a href="javascript:;" area="甘肃">甘肃</a>
            <a href="javascript:;" area="海南">海南</a>
            <a href="javascript:;" area="宁夏">宁夏</a>
            <a href="javascript:;" area="青海">青海</a>
            <a href="javascript:;" area="西藏">西藏</a>
            <a href="javascript:;" area="黑龙江">黑龙江</a>
            <a href="javascript:;" area="内蒙古">内蒙古</a>
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
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/service/list?pagecount=10&startpage=1&access_token=token',  
            type: 'GET',  
            dataType: 'json',  
            timeout: 5000, 
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: succFunction //成功执行方法    
        });  
        function LoadFunction() {  
            $(".service_ul").html('加载中...');  
        }  
        function erryFunction() {  
             $(".service_ul").html('加载异常，请刷新重试！');  
        }  
        function succFunction(tt) {  
            $(".service_ul").html('');

            var json = eval(tt); //数组 
            // console.log(json)
            var counts = json.counts;
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax();
                $("html,body").animate({scrollTop:0},200); 
                
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
                $(".service_ul").html($(".service_ul").html() + "<li><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"' class='head_pic'><img src='http://images.ziyawang.com" + UserPicture + "' alt='' /></a><div class='company_info company_name'><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"' class='blue_color'>" + ServiceName + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='company_info company_details'><dl><dt>编号：</dt><dd>" + ServiceNumber + "</dd><dt>所在地：</dt><dd>" + ServiceLocation + "</dd><dt>服务等级：</dt><dd class='yellow_color'>" + ServiceLevel + "</dd></dl><p class='service_area'>服务地区：" + ServiceArea + "</p><p class='service_classify'>服务类型：" + ServiceType + "</p></div><div class='orders'><a>已接" + CoNumber + "单</a></div></li>"); 
            });
            
            if(counts == 0){
                $(".service_ul").html('抱歉没有找到您想要的结果！');
            }          
        }  
     }); 
var startpage = 1;
var ServiceArea = null;
var ServiceType = null;
function ajax() {
    var data = 'startpage=' + startpage + '&ServiceType=' + ServiceType + '&ServiceArea=' + ServiceArea;

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/service/list?access_token=token&pagecount=10&' + data,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000, 
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
                $("html,body").animate({scrollTop:0},200); 
                
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
                 $(".service_ul").html($(".service_ul").html() + "<li><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"' class='head_pic'><img src='http://images.ziyawang.com" + UserPicture + "' alt='' /></a><div class='company_info company_name'><a target='_blank' href='http://ziyawang.com/service/"+ ServiceID +"' class='blue_color'>" + ServiceName + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='company_info company_details'><dl><dt>编号：</dt><dd>" + ServiceNumber + "</dd><dt>所在地：</dt><dd>" + ServiceLocation + "</dd><dt>服务等级：</dt><dd class='yellow_color'>" + ServiceLevel + "</dd></dl><p class='service_area'>服务地区：" + ServiceArea + "</p><p class='service_classify'>服务类型：" + ServiceType + "</p></div><div class='orders'><a>已接" + CoNumber + "单</a></div></li>");

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