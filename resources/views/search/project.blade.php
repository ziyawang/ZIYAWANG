@extends('layouts.home')
@section('content')
        <link type="text/css" rel="stylesheet" href="{{asset('/css/findservice.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/findinfo.css')}}" />
        <script type="text/javascript" src="{{asset('/js/fs.js')}}"></script>
    <!-- 二级banner -->
    <div class="find_service">
        <ul>
            <li></li>
        </ul>
        <div class="prompt_text">
            <div class="wrap bg">
            <div class="wrap prompt_text_content">
                <div class="enter_input"><input type="text" id="content" placeholder="不良资产  搜索引擎" /><span><img id="search" src="/img/search_yel.png" /></span></div>
                <input id="confirm" class="free_issue" type="button" value="申请成为服务方" />
            </div>
        </div>
        </div>
    </div>
    <!-- 列表 -->
    <div class="selected_serve wrap">
        <div class="service_info">
            <h2><i></i>精选信息<span></span></h2>
            <ul id="list" class="service_ul info_ul">
                <!-- ajax -->
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
            <h2><em></em>重点推荐信息</h2>
            <ul>
                <li>
                    <img src="/img/pic01.png">
                    <div class="picinfo_content">
                        <h3><span class="pc_title">融资借贷</span><span class="dot"></span></h3>
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
                    <img src="/img/pic01.png">
                    <div class="picinfo_content">
                        <h3><span class="pc_title">融资借贷</span><span class="dot"></span></h3>
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
                    <img src="/img/pic01.png">
                    <div class="picinfo_content">
                        <h3><span class="pc_title">融资借贷</span><span class="dot"></span></h3>
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
            data: {'type':'1', 'content': content},
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
            $("#list").html('');
            var json = eval(tt); //数组 
            console.log(json);
            var counts = json.counts;
            $('.service_info h2 span').html('共有' + counts + '条信息');
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax();

            });
            var data = json.data;        
            $.each(data, function (index, item) {

                var TypeID = data[index].TypeID;
                var ProjectID = data[index].ProjectID;
                var TypeName = data[index].TypeName;
                var ViewCount = data[index].TypeID;
                var ProjectNumber = data[index].ProjectNumber;
                var ProArea = data[index].ProArea;
                var PublishState = data[index].PublishState;
                if(PublishState == '0'){
                    PublishState = "<a href='http://test.ziyawang.com/project/"+ ProjectID +"'>抢单中</a>";
                } else if ( PublishState == '1') {
                    PublishState = "<a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='much applyorder'>已合作</a>";
                }
                var PublishTime = data[index].PublishTime;

                var FromWhere     = ('FromWhere' in data[index])     ? data[index].FromWhere : null;
                var TotalMoney    = ('TotalMoney' in data[index])    ? data[index].TotalMoney : null;
                var TransferMoney = ('TransferMoney' in data[index]) ? data[index].TransferMoney : null;
                var AssetType     = ('AssetType' in data[index])     ? data[index].AssetType : null;
                var AssetList     = ('AssetList' in data[index])     ? data[index].AssetList : null;
                var Status        = ('Status' in data[index])        ? data[index].Status : null;
                var Rate          = ('Rate' in data[index])          ? data[index].Rate : null;
                var Requirement   = ('Requirement' in data[index])   ? data[index].Requirement : null;
                var BuyerNature   = ('BuyerNature' in data[index])   ? data[index].BuyerNature : null;
                var Informant     = ('Informant' in data[index])     ? data[index].Informant : null;
                var Buyer         = ('Buyer' in data[index])         ? data[index].Buyer : null;
                var PictureDes1   = ('PictureDes1' in data[index])   ? data[index].PictureDes1 : null;
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产包转让</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "2":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>委外催收</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>债权人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "3":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>法律服务</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "4":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>商业保理</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "5":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>典当担保</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "6":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>融资借贷</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "9":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>悬赏信息</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "10":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>尽职调查</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "12":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>固产转让</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "13":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产求购</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "14":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产求购</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                }
                $("#list").html($("#list").html() + html);  
            });
            if(counts == 0){
                $("#list").html('抱歉没有找到您想要的结果！');
            }
        };   
    });


var startpage = 1;
var ProArea = null;
var TypeID = null;
var diffInfo = {};
function ajax() {
    var string = query(diffInfo);
    var data = 'startpage=' + startpage + '&TypeID=' + TypeID + '&ProArea=' + ProArea + string;
    console.log(data);

    $.ajax({              
        url: 'http://api.ziyawang.com/v1/project/list?access_token=token&pagecount=10&' + data,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,  
        beforeSend: function(){$("#list").html('加载中...');}, //加载执行方法    
        error: function(){
                // alert("error");
            },  //错误执行方法    
        success: function(msg){
            $("#list").html('');
            var json = eval(msg); //数组 
            console.log(json);
            var counts = json.counts;
            $('.service_info h2 span').html('共有' + counts + '条信息');
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax();

            });
            var data = json.data;        
            $.each(data, function (index, item) {

                var TypeID = data[index].TypeID;
                var ProjectID = data[index].ProjectID;
                var TypeName = data[index].TypeName;
                var ViewCount = data[index].TypeID;
                var ProjectNumber = data[index].ProjectNumber;
                var ProArea = data[index].ProArea;
                var PublishState = data[index].PublishState;
                if(PublishState == '0'){
                    PublishState = "<a href='http://test.ziyawang.com/project/"+ ProjectID +"'>抢单中</a>";
                } else if ( PublishState == '1') {
                    PublishState = "<a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='much applyorder'>已合作</a>";
                }
                var PublishTime = data[index].PublishTime;

                var FromWhere     = ('FromWhere' in data[index])     ? data[index].FromWhere : null;
                var TotalMoney    = ('TotalMoney' in data[index])    ? data[index].TotalMoney : null;
                var TransferMoney = ('TransferMoney' in data[index]) ? data[index].TransferMoney : null;
                var AssetType     = ('AssetType' in data[index])     ? data[index].AssetType : null;
                var AssetList     = ('AssetList' in data[index])     ? data[index].AssetList : null;
                var Status        = ('Status' in data[index])        ? data[index].Status : null;
                var Rate          = ('Rate' in data[index])          ? data[index].Rate : null;
                var Requirement   = ('Requirement' in data[index])   ? data[index].Requirement : null;
                var BuyerNature   = ('BuyerNature' in data[index])   ? data[index].BuyerNature : null;
                var Informant     = ('Informant' in data[index])     ? data[index].Informant : null;
                var Buyer         = ('Buyer' in data[index])         ? data[index].Buyer : null;
                var PictureDes1   = ('PictureDes1' in data[index])   ? data[index].PictureDes1 : null;
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产包转让</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "2":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>委外催收</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>债权人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "3":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>法律服务</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "4":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>商业保理</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "5":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>典当担保</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "6":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>融资借贷</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "9":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>悬赏信息</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "10":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>尽职调查</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "12":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>固产转让</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "13":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产求购</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "14":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://test.ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产求购</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                }
                $("#list").html($("#list").html() + html);
            });  
            if(counts == 0){
                $("#list").html('抱歉没有找到您想要的结果！');
            };
        }
    })
}
function query(obj) {
    var string = '';
    $.each(obj,function(n,value) {
        string = string + '&' + n + '=' + value;   
    });
    return string;      
};
$('.pagination a').click(function(){
    startpage = $(this).html();
    ajax();
});
$('.des_ser a').click(function(){
    startpage = 1;
    TypeID = $(this).attr('type');
    diffInfo = {};
    ajax();
});
$('.area a, .zhedie a').click(function(){
    startpage = 1;
    ProArea = $(this).attr('area');
    ajax();
});

$('a[diy]').click(function(){
    startpage = 1;
    var name = $(this).attr('diy');
    var value = $(this).html();
    diffInfo[name] = value;
    ajax();
});

$('a[unlimit]').click(function(){
    startpage = 1;
    diff = $(this).next().attr('diy');
    delete diffInfo[diff];
    ajax();
});

    $('#confirm').click(function(){
        var token = $.session.get('token');
        if(!token){
            window.location = "{{url('/login')}}";
            return false;
        }

        window.location = "{{url('/ucenter/confirm')}}";
    })
</script>
<script>
        $('#search').click(function(){
            var content = $('#content').val();
            window.location = "{{url('/search/project')}}?type=1&content=" + content;
        })
</script>
@endsection