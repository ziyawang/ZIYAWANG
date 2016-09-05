@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/myorder.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>我合作的<a href="#">时间</a></h2>
        <ul id="list">
            
        </ul>
        <!-- 公共分页/start -->
        <div class="pages">
            <div id="Pagination"></div>
            <div class="searchPage">
              <span class="page-sum">共<strong class="allPage"></strong>页</span>
            </div>
        </div>
        <!-- 公共分页/end -->
    </div>
</div>
<div class="reason_cov"></div>
<div class="reason">
    <form action="">
        <h3>取消原因</h3>
        <span class="sel_reason">选择取消原因</span>
        <p class="rea_p"><span>双方协商达成一致</span><input type="checkbox" /></p>
        <p><span>临时有事，无法参加</span><input type="checkbox" /></p>
        <p><span>不小心点错了，重新进行合作</span><input type="checkbox" /></p>
        <p><span>不想合作了</span><input type="checkbox" /></p>
        <p><span>其他</span><input type="checkbox" /></p>
        <textarea name="" id="" placeholder="输入其他原因..." ></textarea>
        <input type="button" class="reason_btn" value="提交" />
    </form>
    <a href="javascript:;" class="rea_close">×</a>
</div>
<script>
     $(function () {
        var token = $.cookie('token');
        if(!token){
            window.location = "http://ziyawang.com/login";
            return false;
        }
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/project/coolist?pagecount=6&startpage=1&access_token=token&token=' + token,  
            type: 'GET',  
            dataType: 'json',  
            timeout: 5000,  
            cache: false,  
            asycn: false,  
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
            console.log(json);
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
            var data = json.data;  

            $.each(data, function (index, item) {

                var TypeID = data[index].TypeID;
                var ProjectID = data[index].ProjectID;
                var TypeName = data[index].TypeName;
                var ViewCount = data[index].ViewCount;
                var ProjectNumber = data[index].ProjectNumber;
                var ProArea = data[index].ProArea;
                var PublishState = data[index].PublishState;
                if(PublishState == '2'){
                    PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='cancel'>合作取消中</a>";
                } else if ( PublishState == '1') {
                    PublishState = "<a href='javascript:;' id='cooperate' pid='" + ProjectID + "' class='cancel'>取消合作</a>";
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
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><h3>资产包转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                    case "2":
                        var html = "<li><h3>委外催收</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                    case "3":
                        var html = "<li><h3>法律服务</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "4":
                        var html = "<li><h3>商业保理</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "5":
                        var html = "<li><h3>典当担保</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "6":
                        var html = "<li><h3>融资需求</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "9":
                        var html = "<li><h3>悬赏信息</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "元</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "10":
                        var html = "<li><h3>尽职调查</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "12":
                        var html = "<li><h3>固产转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>标的物：" + Corpore + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "13":
                        var html = "<li><h3>资产求购</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "14":
                        var html = "<li><h3>资产求购</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                }
                $("#list").html($("#list").html() + html);  
            });
            if(counts == 0){
                $("#list").html('抱歉，您还没有合作信息！');
            }
    // $('.cancel').click(function(event) {
    //     $('.reason_cov,.reason').show();
    // });
    $('.rea_close').click(function(event) {
        $('.reason_cov,.reason').hide();
    });
    $('.reason_btn').click(function(){
        $('.reason_cov,.reason').hide();
    })
            $('#cooperate').click(function(){
                var ProjectID = $(this).attr('pid');
                $.ajax({
                    url:'http://api.ziyawang.com/v1/project/cancel?access_token=token&token=' + token,
                    type:'POST',
                    dataType:'json',
                    data:{'ProjectID':ProjectID},
                    success:function(msg){
                        window.location = "{{url('/ucenter/mycoo')}}"
                    }
                })
            });
          
        }  
    });  
var startpage = 1;
function ajax() {
    var data = '&startpage=' + startpage;
    console.log(data);

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
                var ViewCount = data[index].ViewCount;
                var ProjectNumber = data[index].ProjectNumber;
                var ProArea = data[index].ProArea;
                var PublishState = data[index].PublishState;
                if(PublishState == '2'){
                    PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"'>合作取消中</a>";
                } else if ( PublishState == '1') {
                    PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='combine'>已合作</a>";
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
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><h3>资产包转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                    case "2":
                        var html = "<li><h3>委外催收</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;
                    case "3":
                        var html = "<li><h3>法律服务</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "4":
                        var html = "<li><h3>商业保理</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "5":
                        var html = "<li><h3>典当担保</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "6":
                        var html = "<li><h3>融资需求</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "9":
                        var html = "<li><h3>悬赏信息</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "元</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "10":
                        var html = "<li><h3>尽职调查</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "12":
                        var html = "<li><h3>固产转让</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>标的物：" + Corpore + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "13":
                        var html = "<li><h3>资产求购</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                        break;

                    case "14":
                        var html = "<li><h3>资产求购</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img066.png' height='40' width='40' alt='' /></span><a href='http://ziyawang.com/ucenter/mypro/"+ ProjectID +"' class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
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

// $('.cancel').click(function(event) {
//         $('.reason_cov,.reason').show();
//     });
    $('.rea_close').click(function(event) {
        $('.reason_cov,.reason').hide();
    });
    $('.reason_btn').click(function(){
        $('.reason_cov,.reason').hide();
    })
            $('#cooperate').click(function(){
                var ProjectID = $(this).attr('pid');
                $.ajax({
                    url:'http://api.ziyawang.com/v1/project/cancel?access_token=token&token=' + token,
                    type:'POST',
                    dataType:'json',
                    data:{'ProjectID':ProjectID},
                    success:function(msg){
                        window.location = "http://ziyawang.com/ucenter/mycoo"
                    }
                })
            });
          
</script>
@endsection