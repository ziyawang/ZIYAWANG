@extends('layouts.home')
@section('content')
        <link type="text/css" rel="stylesheet" href="{{asset('/css/findservice.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
    <div class="prompt_text">
        <h2 class="wrap pt_word">处置服务&nbsp;&nbsp;搜索引擎</h2>
        <div class="wrap prompt_text_content">
            <div class="enter_input"><input type="text" placeholder="输入你想选择的服务" /><span><img src="img/search_yel.png" /></span></div>
            <input class="free_issue" type="button" value="免费发布信息" />
        </div>
    </div>
</div>
<div class="wrap description">
    <div class="service_type">
        <span>服务方类型：</span>
        <a type="null" href="javascript:;">不限</a>
        <a type="1" href="javascript:;">资产包收购</a>
        <a type="2" href="javascript:;">催收机构</a>
        <a type="3" href="javascript:;">律师事务所</a>
        <a type="4" href="javascript:;">保理公司</a>
        <a type="5" href="javascript:;">典当担保</a>
        <a type="6" href="javascript:;">投资贷款</a>
        <a type="10" href="javascript:;">尽职调查</a>
        <a type="12" href="javascript:;">固产收购</a>
    </div>
    <div class="area">
        <span>服务地区：</span>
        <a href="javascript:;" area="null">全国</a>
        <a href="javascript:;" area="北京">北京</a>
        <a href="javascript:;" area="上海">上海</a>
        <a href="javascript:;" area="广东">广东</a>
        <a href="javascript:;" area="江苏">江苏</a>
        <a href="javascript:;" area="山东">山东</a>
        <a href="javascript:;" area="浙江">浙江</a>
        <a href="javascript:;" area="河南">河南</a>
        <a href="javascript:;" area="河北">河北</a>
        <a href="javascript:;" area="辽宁">辽宁</a>
        <a href="javascript:;" area="四川">四川</a>
        <a href="javascript:;" area="湖北">湖北</a>
        <a href="javascript:;" area="湖南">湖南</a>
    </div>
    <div class="zhedie">
        <div><span href="#" class="more active">更多></span>
        <span href="#" class="more">收起</span></div>
        <div class="hide">
            <a href="javascript:;" area="福建">福建</a>
            <a href="javascript:;" area="安徽">安徽</a>
            <a href="javascript:;" area="陕西">陕西</a>
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
<div class="selected_serve wrap">
    <div class="service_info">
        <h2><i></i>精选服务<span></span></h2>
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
                <img src="img/pic01.png">
                <div class="picinfo_content">
                    <h3>融资借贷</h3>
                    <h4>融资金额6000万元...</h4>
                    <div class="picon_intro">
                        <p>北京某畜牧业扩建项目融资融资</p>
                        <p>金额6000万元-1亿元</p>
                        <p>所在地：北京市</p>
                        <p>所属行业：农林畜牧</p>
                    </div>
                    <a href="#" class="look">查看内容</a>
                    <span class="white_cube"></span>
                </div>
            </li>
            <li>
                <img src="img/pic01.png">
                <div class="picinfo_content">
                    <h3>融资借贷</h3>
                    <h4>融资金额6000万元...</h4>
                    <div class="picon_intro">
                        <p>北京某畜牧业扩建项目融资融资</p>
                        <p>金额6000万元-1亿元</p>
                        <p>所在地：北京市</p>
                        <p>所属行业：农林畜牧</p>
                    </div>
                    <a href="#" class="look">查看内容</a>
                    <span class="white_cube"></span>
                </div>
            </li>
            <li>
                <img src="img/pic01.png">
                <div class="picinfo_content">
                    <h3>融资借贷</h3>
                    <h4>融资金额6000万元...</h4>
                    <div class="picon_intro">
                        <p>北京某畜牧业扩建项目融资融资</p>
                        <p>金额6000万元-1亿元</p>
                        <p>所在地：北京市</p>
                        <p>所属行业：农林畜牧</p>
                    </div>
                    <a href="#" class="look">查看内容</a>
                    <span class="white_cube"></span>
                </div>
            </li>
        </ul>
    </div>
</div>


<script>
    $(function () {
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/service/list?pagecount=6&startpage=1&access_token=token',  
            type: 'GET',  
            dataType: 'json',  
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
            alert("error");  
        }  
        function succFunction(tt) {  
            $(".service_ul").html('');

            var json = eval(tt); //数组 
            var counts = json.counts;
            var pages = json.pages;
            //分页
            $("#Pagination").pagination(pages);
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            console.log(json);

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
                $(".service_ul").html($(".service_ul").html() + "<li><a href='#' class='head_pic'><img src='"+ UserPicture +"' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/service/"+ ServiceID +"' class='blue_color'>" + ServiceName + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p><dl><dt>编号：</dt><dd>" + ServiceNumber + "</dd><dt>所在地：</dt><dd>" + ServiceLocation + "</dd><dt>服务等级：</dt><dd class='yellow_color'>" + ServiceLevel + "</dd></dl><p>服务地区：" + ServiceArea + "</p><p>服务类型：" + ServiceType + "</p></div><div class='orders'><a href='#'>已接" + CoNumber + "单</a></div></li>");  
            });
            
            if(counts == 0){
                $(".service_ul").html('抱歉没有找到您想要的结果！');
            }          
            var startpage = 1;
            var ServiceArea = null;
            var ServiceType = null;
            function ajax() {
                var data = 'startpage=' + startpage + '&ServiceType=' + ServiceType + '&ServiceArea=' + ServiceArea;

                $.ajax({  
                    url: 'http://api.ziyawang.com/v1/service/list?access_token=token&pagecount=6&' + data,  
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
                        //分页
                        $("#Pagination").pagination(pages);
                        $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
                        console.log(json);
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
                            $(".service_ul").html($(".service_ul").html() + "<li><a href='#' class='head_pic'><img src='"+ UserPicture +"' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/service/"+ ServiceID +"' class='blue_color'>" + ServiceName + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p><dl><dt>编号：</dt><dd>" + ServiceNumber + "</dd><dt>所在地：</dt><dd>" + ServiceLocation + "</dd><dt>服务等级：</dt><dd class='yellow_color'>" + ServiceLevel + "</dd></dl><p>服务地区：" + ServiceArea + "</p><p>服务类型：" + ServiceType + "</p></div><div class='orders'><a href='#'>已接" + CoNumber + "单</a></div></li>");  
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
        }  
     });  
    </script>
@endsection