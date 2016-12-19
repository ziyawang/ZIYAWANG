@extends('layouts.uhome')
@section('content')
    <link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=1.0.4" />
<!-- 右侧详情 -->
<div class="ucRight">
    <div class="ucRightCon ucRightSafe myCollections">
        <h3 class="selectiveType security"><span>我的收藏</span></h3>
        <div class="publishList">
            <ul id="collectlist">
                 
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
</div>
</div>
<script>
    $(function(){
        var token = $.cookie('token');
        // var token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIzMyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0Nzk0NTQyIiwiZXhwIjoiMTQ3NTM5OTM0MiIsIm5iZiI6IjE0NzQ3OTQ1NDIiLCJqdGkiOiJmNmFhNDRhODA4ODBlZjAxNzE3NWJmYTZhNDczMWJiZCJ9.ho521A0Prh6LcNAPNcmQEF2H_VTQBXstSwf2m4yeXpA";
        if(!token){
            window.location = "{{url('/login')}}";
            return false;
        }

        function getQueryString(key){
            var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
            var result = window.location.search.substr(1).match(reg);
            return result?decodeURIComponent(result[2]):null;
        }

        var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;

        $.ajax({  
            url: 'http://api.ziyawang.com/v1/collect/list?pagecount=6&startpage=' + urlpage + '&access_token=token&token=' + token,  
            type: 'GET',  
            dataType: 'json',  
            timeout: 5000,  
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: succFunction //成功执行方法    
        }); 

        function LoadFunction() {  
            $("#collectlist").html('加载中...');  
        }  
        function erryFunction() {  
            $("#collectlist").html('加载异常，请重新刷新页面！'); 
        }
        function succFunction(tt) {  
            $("#list").html('');
            var json = eval(tt); //数组
            var data = json.data;  
            var counts = json.counts;
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
                var url = "http://ziyawang.com/ucenter/mycollect?startpage=" + urlpage;
                url = encodeURI(url);
                window.location.href= url;
            });
            //默认1：项目，2：视频，3：新闻资讯，4：服务方
            var html = '';
            $.each(data, function (index, item) {
                var TypeID        = data[index].TypeID;
                var ItemID        = data[index].ItemID;
                var CollectTime   = data[index].CollectTime;
                var TypeName      = ('TypeName' in data[index])      ? data[index].TypeName : null;
                var ProArea       = ('ProArea' in data[index])       ? data[index].ProArea : null;
                var WordDes       = ('WordDes' in data[index])       ? data[index].WordDes : null;
                var PictureDes1   = ('PictureDes1' in data[index])   ? data[index].PictureDes1 : null;
                var ProjectNumber = ('ProjectNumber' in data[index]) ? data[index].ProjectNumber : null;
                var ServiceName   = ('ServiceName' in data[index])   ? data[index].ServiceName : null;
                var ServiceType   = ('ServiceType' in data[index])   ? data[index].ServiceType : null;
                var ServiceArea   = ('ServiceArea' in data[index])   ? data[index].ServiceArea : null;
                var ServiceLocation   = ('ServiceLocation' in data[index])   ? data[index].ServiceLocation : null;
                var ServiceNumber = ('ServiceNumber' in data[index]) ? data[index].ServiceNumber : null;
                var UserPicture   = ('UserPicture' in data[index])   ? data[index].UserPicture : null;
                var VideoTitle    = ('VideoTitle' in data[index])    ? data[index].VideoTitle : null;
                var VideoDes      = ('VideoDes' in data[index])      ? data[index].VideoDes : null;
                var VideoLogo     = ('VideoLogo' in data[index])     ? data[index].VideoLogo : null;
                var ViewCount     = ('ViewCount' in data[index])     ? data[index].ViewCount : null;
                var NewsTitle     = ('NewsTitle' in data[index])     ? data[index].NewsTitle : null;
                var Brief         = ('Brief' in data[index])         ? data[index].Brief : null;
                var NewsLogo      = ('NewsLogo' in data[index])      ? data[index].NewsLogo : null;
                var NewsLabel      = ('NewsLabel' in data[index])      ? data[index].NewsLabel : null;
                var PublishTime      = ('PublishTime' in data[index])      ? data[index].PublishTime : null;
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


                var CollectTime   = ('CollectTime' in data[index])   ? data[index].CollectTime : null;
                if(!PictureDes1){
                    PictureDes1 = '/checks/info.jpg';
                }
                switch(TypeID)
                {
                    case 1:
                    ProType = ProType + '';
                        switch(ProType)
                        {
                            case "1":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef1'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>来源：<strong>" + FromWhere + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span><strong>总金额：</strong>" + TotalMoney + "万元</span><span></span><span><strong>转让价：</strong>" + TransferMoney + "万元</span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;
                            case "6":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef3'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>融资方式：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>资金用途：<strong>" + Usefor + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>融资金额：</strong>" + TotalMoney + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;
                            case "12":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef2'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>标的物类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>规划用途：<strong>" + Usefor + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>转让价：</strong>" + TransferMoney + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;

                            case "16":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef2'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>标的物类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>规划用途：<strong>" + Usefor + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>转让价：</strong>" + TransferMoney + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;

                            case "17":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef3'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>融资方式：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>担保方式：<strong>" + Type + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>融资金额：</strong>" + Money + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;

                            case "18":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef4'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>商账类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>逾期时间：<strong>" + Month + "月</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>债权金额：</strong>" + Money + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;

                            case "19":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef5'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>处置方式：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>逾期时间：<strong>" + Month + "月</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>债权金额：</strong>" + TotalMoney + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;

                            case "20":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef6'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>资产类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>面积：<strong>" + Area + "平方米</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>起拍价：</strong>" + Money + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;

                            case "21":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef6'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>资产类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span><span>面积：<strong>" + Area + "平方米</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>起拍价：</strong>" + Money + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;

                            case "22":
                                html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/" + ProType + "/" + ItemID + "'><div class='pblLeft'><span class='pblef6'></span>" + TypeName + "</div><div class='pblMiddle'><span class='spanTagDet'>" + Title + "</span><span class='spanTag'>资产类型：<strong>" + AssetType + "</strong></span><span>地区：<strong>" + ProArea + "</strong></span></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight'><span></span><span><strong>起拍价：</strong>" + Money + "万元</span><span></span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                                break;
                        }
                        break;

                    case 2:
                        html = html + "<li class='clearfix'><a href='http://ziyawang.com/video/" + ItemID + "'><div class='pblLeft colVideo'><span class='pblefNewsImg'><img src='http://images.ziyawang.com" + VideoLogo + "' /></span></div><div class='pblMiddle colVideoInfo'><h4>" + VideoTitle + "</h4><em>已播放" + ViewCount + "次</em><p>" + VideoDes + "</p></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='2'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                        break;

                    case 3:
                        if( NewsLabel == 'czgg'){
                            html = html + "<li class='clearfix'><a href='http://ziyawang.com/project/czgg/" + ItemID + "'><div class='pblLeft colNews'><span class='pblefNewsImg'><img src='http://images.ziyawang.com" + NewsLogo + "' /></span></div><div class='pblMiddle colNewsInfo'><h4>" + NewsTitle + "<span>" + PublishTime + "</span></h4><p>" + Brief + "</p></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='3'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                        } else {
                            html = html + "<li class='clearfix'><a href='http://ziyawang.com/news/" + ItemID + "'><div class='pblLeft colNews'><span class='pblefNewsImg'><img src='http://images.ziyawang.com" + NewsLogo + "' /></span></div><div class='pblMiddle colNewsInfo'><h4>" + NewsTitle + "<span>" + PublishTime + "</span></h4><p>" + Brief + "</p></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='3'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                        }
                        break;

                    case 4:
                        html = html + "<li class='clearfix black'><a href='http://ziyawang.com/service/" + ItemID + "'><div class='pblLeft'><span class='pblefImg'><img src='http://images.ziyawang.com" + UserPicture + "' /></span>" + ServiceNumber + "</div><div class='pblMiddle servicer'><h4>" + ServiceName + "</h4><p>" + ServiceType + "</p></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight serveZone'><span><strong>服务地区：</strong>" + ServiceArea + "</span><span></span><span><strong>所在地：</strong>" + ServiceLocation + "</span></div></div></a><span class='delete' title='取消收藏' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='4'></span><span class='uniqueTime'>" + CollectTime + "</span></li>";
                        break;
                }

            })
            if(counts == 0){
            html = "抱歉，您还没有收藏过信息，快去收藏吧！";
            }
            $('#collectlist').html(html);
            //鼠标滑过li
            $('.myCollections ul li').hover(function() {
                $(this).children('.delete').stop().slideToggle(250);
            });
        }
    });

function cancel(obj){
    var id = $(obj).attr('id');
    var type = $(obj).attr('type');
    layer.confirm('确定删除该收藏吗？', {
        title: '提示',
        btn: ['删除','取消'] //按钮
        }, function(){
            collect(id,type);    
        }, function(){
            
        });

}
function collect(id,type) {
    var token = $.cookie('token');
    // var token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIzMyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0Nzk0NTQyIiwiZXhwIjoiMTQ3NTM5OTM0MiIsIm5iZiI6IjE0NzQ3OTQ1NDIiLCJqdGkiOiJmNmFhNDRhODA4ODBlZjAxNzE3NWJmYTZhNDczMWJiZCJ9.ho521A0Prh6LcNAPNcmQEF2H_VTQBXstSwf2m4yeXpA";

    $.ajax({
        url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
        type:'POST',
        data:'itemID=' + id + '&type=' + type,
        dataType:'json',
        success:function(msg){
            window.location = "{{url('/ucenter/mycollect')}}"
        }
    });
}

</script>
@endsection