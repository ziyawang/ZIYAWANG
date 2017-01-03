@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/myorder.css')}}?v=2.0.3" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>我的发布<a href="#">时间</a></h2>
        <ul id="list">
            
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
</div>

<script>
     $(function () {
        var token = $.cookie('token');
        if(!token){
            window.location = "http://ziyawang.com/login";
            return false;
        }
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/project/mypro?pagecount=6&startpage=1&access_token=token&token=' + token,  
            type: 'GET',  
            dataType: 'json',  
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
            $("#list").html('加载异常，请刷新重试！');  
        }  
        function succFunction(tt) {  
            $("#list").html('');
            var json = eval(tt); //数组 
            var counts = json.counts;
            $('.service_info h2 span').html('共有' + counts + '条信息');
            var pages = json.pages;var current = json.currentpage-1;
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
                var ViewCount = data[index].ViewCount;
                var ProjectNumber = data[index].ProjectNumber;
                var ProArea = data[index].ProArea;
                var PublishState = data[index].PublishState;
                var CertifyState = data[index].CertifyState;
                var url = "http://ziyawang.com/ucenter/mypro/"+ ProjectID;
                if(CertifyState == '0'){
                    PublishState = "<a href='javascript:;' class='cancel'>待审核</a>"; 
                    url = "javascript:;"
                } else if(CertifyState == '2'){
                    PublishState = "<a href='javascript:;' class='cancel'>拒审核</a>"; 
                    url = "javascript:;"
                } else {
                    if(PublishState == '0'){
                        PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='cancel'>抢单中</a>";
                    } else if ( PublishState == '1') {
                        PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='cancel'>已合作</a>";
                    } else if ( PublishState == '2') {
                        PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='cancel'>合作取消中</a>"; 
                    }
                }
                var PublishTime = data[index].PublishTime;

                var FromWhere     = ('FromWhere' in data[index])     ? data[index].FromWhere : null;
                var TotalMoney    = ('TotalMoney' in data[index])    ? data[index].TotalMoney : null;
                var Corpore       = ('Corpore' in data[index])       ? data[index].Corpore : null;
                var TransferMoney = ('TransferMoney' in data[index]) ? data[index].TransferMoney : null;
                var AssetType     = ('AssetType' in data[index])     ? data[index].AssetType : null;
                var AssetList     = ('AssetList' in data[index])     ? data[index].AssetList : null;
                var Status        = ('Status' in data[index])        ? data[index].Status : null;
                var Rate          = ('Rate' in data[index])          ? data[index].Rate : null;
                var Requirement   = ('Requirement' in data[index])   ? data[index].Requirement : null;
                var BuyerNature   = ('BuyerNature' in data[index])   ? data[index].BuyerNature : null;
                var Informant     = ('Informant' in data[index])     ? data[index].Informant : null;
                var Buyer         = ('Buyer' in data[index])         ? data[index].Buyer : null;
                var RushCount     = ('RushCount' in data[index])     ? data[index].RushCount : null;
                var InvestType    = ('InvestType' in data[index])    ? data[index].InvestType : null;
                var Year          = ('Year' in data[index])          ? data[index].Year : null;
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><h3>资产包转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                    case "2":
                        var html = "<li><h3>委外催收</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                    case "3":
                        var html = "<li><h3>法律服务</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "4":
                        var html = "<li><h3>商业保理</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "5":
                        var html = "<li><h3>典当担保</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "6":
                        var html = "<li><h3>融资需求</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "9":
                        var html = "<li><h3>悬赏信息</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "元</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "10":
                        var html = "<li><h3>尽职调查</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "12":
                        var html = "<li><h3>固产转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>标的物：" + Corpore + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "13":
                        var html = "<li><h3>资产求购</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "14":
                        var html = "<li><h3>债权转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "15":
                        var html = "<li><h3>投资需求</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>投资方式：" + AssetType + "</span><span>投资类型：" + InvestType + "</span><span>地区：" + ProArea + "</span><span>预期回报率：" + Rate + "%</span><span>投资期限：" + Year + "年</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                }
                $("#list").html($("#list").html() + html);  
            });
            if(counts == 0){
                $("#list").html('抱歉，您还没有发布信息！');
            }
          
    var hei = $('.main_right').height();
    $('.main_left').css('height',hei+'px');
        }  
    });  
var token = $.cookie('token');
var startpage = 1;
function ajax() {
    var data = '&startpage=' + startpage;
    // console.log(data);

    $.ajax({              
        url: 'http://api.ziyawang.com/v1/project/mypro?pagecount=6&access_token=token&token=' + token + data,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,  
        beforeSend: function(){$("#list").html('加载中...');}, //加载执行方法    
        error: function(){
                // alert("error");
            },  //错误执行方法    
        success: function(msg){
            $("#list").html('');
            var json = eval(msg); //数组 
            // console.log(json);
            var counts = json.counts;
            $('.service_info h2 span').html('共有' + counts + '条信息');
            var pages = json.pages;var current = json.currentpage-1;
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
                var ViewCount = data[index].ViewCount;
                var ProjectNumber = data[index].ProjectNumber;
                var ProArea = data[index].ProArea;
                var CertifyState = data[index].CertifyState;
                var PublishState = data[index].PublishState;
                var url = "http://ziyawang.com/ucenter/mypro/"+ ProjectID;
                if(CertifyState == '0'){
                    PublishState = "<a href='javascript:;' class='cancel'>待审核</a>"; 
                    url = "javascript:;"
                } else if(CertifyState == '2'){
                    PublishState = "<a href='javascript:;' class='cancel'>拒审核</a>"; 
                    url = "javascript:;"
                } else {
                    if(PublishState == '0'){
                        PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='cancel'>抢单中</a>";
                    } else if ( PublishState == '1') {
                        PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='cancel'>已合作</a>";
                    } else if ( PublishState == '2') {
                        PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='cancel'>订单取消中</a>"; 
                    }
                }
                var PublishTime = data[index].PublishTime;

                var FromWhere     = ('FromWhere' in data[index])     ? data[index].FromWhere : null;
                var TotalMoney    = ('TotalMoney' in data[index])    ? data[index].TotalMoney : null;
                var Corpore       = ('Corpore' in data[index])       ? data[index].Corpore : null;
                var TransferMoney = ('TransferMoney' in data[index]) ? data[index].TransferMoney : null;
                var AssetType     = ('AssetType' in data[index])     ? data[index].AssetType : null;
                var AssetList     = ('AssetList' in data[index])     ? data[index].AssetList : null;
                var Status        = ('Status' in data[index])        ? data[index].Status : null;
                var Rate          = ('Rate' in data[index])          ? data[index].Rate : null;
                var Requirement   = ('Requirement' in data[index])   ? data[index].Requirement : null;
                var BuyerNature   = ('BuyerNature' in data[index])   ? data[index].BuyerNature : null;
                var Informant     = ('Informant' in data[index])     ? data[index].Informant : null;
                var Buyer         = ('Buyer' in data[index])         ? data[index].Buyer : null;
                var RushCount     = ('RushCount' in data[index])         ? data[index].RushCount : null;
                var InvestType    = ('InvestType' in data[index])    ? data[index].InvestType : null;
                var Year          = ('Year' in data[index])          ? data[index].Year : null;
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><h3>资产包转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                    case "2":
                        var html = "<li><h3>委外催收</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                    case "3":
                        var html = "<li><h3>法律服务</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "4":
                        var html = "<li><h3>商业保理</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "5":
                        var html = "<li><h3>典当担保</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "6":
                        var html = "<li><h3>融资需求</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "9":
                        var html = "<li><h3>悬赏信息</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "元</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "10":
                        var html = "<li><h3>尽职调查</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "12":
                        var html = "<li><h3>固产转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>标的物：" + Corpore + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "13":
                        var html = "<li><h3>资产求购</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "14":
                        var html = "<li><h3>资产求购</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "15":
                        var html = "<li><h3>投资需求</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>投资方式：" + AssetType + "</span><span>投资类型：" + InvestType + "</span><span>地区：" + ProArea + "</span><span>预期回报率：" + Rate + "%</span><span>投资期限：" + Year + "年</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                }
                $("#list").html($("#list").html() + html);  
            });
            if(counts == 0){
                $("#list").html('抱歉，您还没有发布信息！');
            }
        }
    })
};
</script>
@endsection