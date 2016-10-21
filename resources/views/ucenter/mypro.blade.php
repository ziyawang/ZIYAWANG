@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=1.0.4" />
<!-- 右侧详情 -->
    <div class="ucRight">
        <div class="ucRightCon ucRightList">
            <h3 class="selectiveType"><span>查看信息列表</span></h3>
            <div class="publishList">
                <ul id="list">
                    
                </ul>
                <!-- 公共分页/start -->
                <div class="pages">
                    <div id="Pagination"></div>
                    <div class="searchPage">
                      <span class="page-sum">共<strong class="allPage">0</strong>页</span>
                    </div>
                </div>
                <!-- 公共分页/end -->
            </div>
        </div>
    </div>
</div>

<script>
     $(function () {
        var token = $.cookie('token');
        // token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIxNyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0ODgyOTk3IiwiZXhwIjoiMTQ3NTQ4Nzc5NyIsIm5iZiI6IjE0NzQ4ODI5OTciLCJqdGkiOiI2YzFiYTA4M2MwZDFhYzA0MmYwYzNiNTc4ODYwNDEwNiJ9.TPz3TBRtlIL2I2eMzwUbPOGvdZ1We3S5Qs-Q7Xg3wDY";
        if(!token){
            window.location = "http://ziyawang.com/login";
        }
        function getQueryString(key){
            var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
            var result = window.location.search.substr(1).match(reg);
            return result?decodeURIComponent(result[2]):null;
        }

        var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/project/mypro?pagecount=6&startpage=' + urlpage + '&access_token=token&token=' + token,  
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
                var url = "http://ziyawang.com/ucenter/mypro?startpage=" + urlpage;
                url = encodeURI(url);
                window.location.href= url;
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
                var WordDes = data[index].WordDes;
                var url = "http://ziyawang.com/ucenter/mypro/"+ ProjectID;
                var wait = '';
                if(CertifyState == '0'){
                    PublishState = "<a href='javascript:;' class='cancel wait'>待审核</a>"; 
                    url = "javascript:;"
                    wait = 'class="wait"';
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
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef1'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span>地区：<strong>" + ProArea + "</strong></span><span>来源：<strong>" + FromWhere + "</strong></span><span class='spanTag'>资产包类型：<strong>" + AssetType + "</strong></span><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>转让金额：</strong>" + TransferMoney + "万</span><span></span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li> ";
                        break;
                    case "2":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef2'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span class='spanTags'>债务人所在地：<strong>" + ProArea + "</strong></span><span class='spanTags1'>状态：<strong>" + Status + "</strong></span><span class='spanTag'>类型：<strong>" + AssetType + "</strong></span><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>金额：</strong>" + TotalMoney + "万</span><span></span><span><strong>佣金比例：</strong>" + Rate + "</span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;
                    case "3":
                        var html = "<li class='clearfix black'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef3'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>类型：</strong>" + AssetType + "</span><span></span><span><strong>需求：</strong>" + Requirement + "</span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;

                    case "4":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef4'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span>地区：<strong>" + ProArea + "</strong></span><span>买方性质：<strong>" + BuyerNature + "</strong></span><span class='spanTag'></span><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>合同金额：</strong>" + TotalMoney + "万</span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;

                    // case "5":
                    //     var html = "<li><h3>典当担保</h3><div class='myorder'><span class='myorder_icon'><img src='/img/img088.png' /></span><a href='" + url + "'" + wait + " class='myorder_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></a><div class='myorder_info'><span class='ed'><em class='blue'>" + RushCount + "人</em>已抢单</span><span class='many'>浏览数：<i>" + ViewCount + "</i>人</span></div></div><p class='time'>" + PublishTime + "</p>" + PublishState + "</li>";
                    //     break;

                    case "6":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef6'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span>方式：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span class='spanTag'></span><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>金额：</strong>" + TotalMoney + "万</span><span></span><span><strong>回报率：</strong>" + Rate + "%</span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;

                    case "9":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef9'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span>类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span class='spanTag'></span><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>悬赏金额：</strong>" + TotalMoney + "万</span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;

                    case "10":
                        var html = "<li class='clearfix black'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef10'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>地区：</strong>" + ProArea + "</span><span><strong>类型：</strong>" + AssetType + "</span><span><strong>被调查方：</strong>" + Informant + "</span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;

                    case "12":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef12'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span>标的物：<strong>" + Corpore + "</strong></span><span>地区：<strong>" + ProArea + "万</strong></span><span class='spanTag'>类型：<strong>" + AssetType + "</strong></span><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>转让金额：</strong>" + TransferMoney + "万</span><span></span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;

                    case "13":
                        var html = "<li class='clearfix black'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef13'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>地区：</strong>" + ProArea + "</span><span class='spanTag'><strong>类型：</strong>" + AssetType + "</span><span><strong>求购方：</strong>" + Buyer + "</span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;

                    case "14":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef14'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span>地区：<strong>" + ProArea + "</strong></span><span>类型：<strong>" + AssetType + "</strong></span><span class='spanTag'></span><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>转让金额：</strong>" + TransferMoney + "万</span><span></span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li> ";
                        break;

                    case "15":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef15'></span>" + ProjectNumber + "</div><div class='pblMiddle'><span>地区：<strong>" + ProArea + "</strong></span><span>投资类型：<strong>" + AssetType + "</strong></span><span class='spanTag'>投资方式：<strong>" + InvestType + "</strong></span><span class='spanTagDet'>详情：" + WordDes + "</span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>预期回报率：</strong>" + Rate + "%</span><span></span><span><strong>投资期限：</strong>" + Year + "年</span></div></div></a><span class='uniqueTime'>" + PublishTime + "</span></li>";
                        break;
                }
                $("#list").html($("#list").html() + html);  
            });
            if(counts == 0){
                $("#list").html('抱歉，您还没有发布信息！');
            }
          
            //左侧边栏通栏
            var ucRighthei1 = $('.ucRight').height();//初始高度
            $('.ucLeft').css('height',ucRighthei1 + 'px');
            //窗口size改变
            $(window).resize(function() {
                var ucRighthei2 = $('.ucRight').height();
                $('.ucLeft').css('height',ucRighthei2 + 'px');
            }); 

            $('.wait').click(function(){
                layer.msg('信息审核中，请等待！');
            })      
        }  
    });  
</script>
@endsection