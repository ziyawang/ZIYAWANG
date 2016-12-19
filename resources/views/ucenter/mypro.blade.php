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
                var url = "http://ziyawang.com/ucenter/mypro/" + TypeID + "/" + ProjectID;
                var wait = '';
                if(CertifyState == '0'){
                    PublishState = "<a href='javascript:;' class='wait'>待审核</a>"; 
                    url = "javascript:;"
                    wait = 'class="wait"';
                } else if(CertifyState == '2'){
                    PublishState = "<a href='javascript:;' >拒审核</a>"; 
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

                var ProType          = ('ProType' in data[index])          ? data[index].ProType : null;
                var Type          = ('Type' in data[index])          ? data[index].Type : null;
                var TypeName          = ('TypeName' in data[index])          ? data[index].TypeName : null;
                var Title          = ('Title' in data[index])          ? data[index].Title : null;
                var AssetType          = ('AssetType' in data[index])          ? data[index].AssetType : null;
                var ProArea          = ('ProArea' in data[index])          ? data[index].ProArea : null;
                var FromWhere          = ('FromWhere' in data[index])          ? data[index].FromWhere : null;
                var TotalMoney          = ('TotalMoney' in data[index])          ? data[index].TotalMoney : null;
                var TransferMoney          = ('TransferMoney' in data[index])          ? data[index].TransferMoney : null;
                var Usefor          = ('Usefor' in data[index])          ? data[index].Usefor : null;
                var Money          = ('Money' in data[index])          ? data[index].Money : null;
                var Month          = ('Month' in data[index])          ? data[index].Month : null;
                var Area          = ('Area' in data[index])          ? data[index].Area : null;
                //循环获取数据
                TypeID = TypeID+"";
                switch(TypeID)
                {
                    case "1":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef1'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>来源：<strong>" + FromWhere + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>总金额：</strong>" + TotalMoney + "万元</span><span></span><span><strong>转让价：</strong>" + TransferMoney + "万元</span></div></div></a></li>";
                        break;
                    case "6":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef3'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>融资方式：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>资金用途：<strong>" + Usefor + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>融资金额：</strong>" + TotalMoney + "万元</span><span></span></div></div></a></li>";
                        break;
                    case "12":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef2'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>标的物类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>规划用途：<strong>" + Usefor + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>转让价：</strong>" + TransferMoney + "万元</span><span></span></div></div></a></li>";
                        break;

                    case "16":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef2'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>标的物类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>规划用途：<strong>" + Usefor + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>转让价：</strong>" + TransferMoney + "万元</span><span></span></div></div></a></li>";
                        break;

                    case "17":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef3'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>融资方式：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>担保方式：<strong>" + Type + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>融资金额：</strong>" + Money + "万元</span><span></span></div></div></a></li>";
                        break;

                    case "18":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef4'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>商账类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>逾期时间：<strong>" + Month + "月</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>债权金额：</strong>" + Money + "万元</span><span></span></div></div></a></li>";
                        break;

                    case "19":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef5'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>处置方式：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>逾期时间：<strong>" + Month + "月</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>债权金额：</strong>" + TotalMoney + "万元</span><span></span></div></div></a></li>";
                        break;

                    case "20":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef6'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>资产类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>面积：<strong>" + Area + "平方米</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>起拍价：</strong>" + Money + "万元</span><span></span></div></div></a></li>";
                        break;

                    case "21":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef6'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>资产类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>面积：<strong>" + Area + "平方米</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>起拍价：</strong>" + Money + "万元</span><span></span></div></div></a></li>";
                        break;

                    case "22":
                        var html = "<li class='clearfix'><a href='" + url + "'" + wait + "><div class='pblLeft'><span class='pblef6'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>资产类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>起拍价：</strong>" + Money + "万元</span><span></span></div></div></a></li>";
                        break;
                }
                $("#list").html($("#list").html() + html);  
            });
            if(counts == 0){
                $("#list").html('抱歉，您还没有发布信息！');
            }

            $('.wait').click(function(){
                layer.msg('信息审核中，请等待！');
            })      
        }  
    });  
</script>
@endsection