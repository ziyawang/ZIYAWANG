@extends('layouts.uhome')
@section('content')
    <link type="text/css" rel="stylesheet" href="{{url('/css/findservice.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>我收藏的</h2>
        <div class="collect_page collect_inf">
            <ul id="collectlist">
                 
            </ul>
        </div>
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
<script>
    $(function(){
        var token = $.cookie('token');
        if(!token){
            window.location = "{{url('/login')}}";
            return false;
        }

        $.ajax({  
            url: 'http://api.ziyawang.com/v1/collect/list?pagecount=6&startpage=1&access_token=token&token=' + token,  
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
            //默认1：项目，2：视频，3：新闻资讯，4：服务方
            var html = '';
            $.each(data, function (index, item) {
                var TypeID        = data[index].TypeID;
                var ItemID        = data[index].ItemID;
                var CollectTime   = data[index].CollectTime;
                var TypeName      = ('TypeName' in data[index])     ? data[index].TypeName : null;
                var ProArea       = ('ProArea' in data[index])      ? data[index].ProArea : null;
                var WordDes       = ('WordDes' in data[index])      ? data[index].WordDes : null;
                var PictureDes1   = ('PictureDes1' in data[index])  ? data[index].PictureDes1 : null;
                var ProjectNumber = ('ProjectNumber' in data[index])? data[index].ProjectNumber : null;
                var ServiceName   = ('ServiceName' in data[index])  ? data[index].ServiceName : null;
                var ServiceType   = ('ServiceType' in data[index])  ? data[index].ServiceType : null;
                var ServiceArea   = ('ServiceArea' in data[index])  ? data[index].ServiceArea : null;
                var UserPicture   = ('UserPicture' in data[index])  ? data[index].UserPicture : null;
                var VideoTitle    = ('VideoTitle' in data[index])   ? data[index].VideoTitle : null;
                var VideoDes      = ('VideoDes' in data[index])     ? data[index].VideoDes : null;
                var VideoLogo     = ('VideoLogo' in data[index])    ? data[index].VideoLogo : null;
                var NewsTitle     = ('NewsTitle' in data[index])    ? data[index].NewsTitle : null;
                var Brief         = ('Brief' in data[index])  ? data[index].Brief : null;
                var NewsLogo      = ('NewsLogo' in data[index])     ? data[index].NewsLogo : null;
                if(!PictureDes1){
                    PictureDes1 = '/checks/info.jpg';
                }
                switch(TypeID)
                {
                    case 1:
                        html = html + "<li><a href='http://ziyawang.com/project/" + ItemID + "' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/" + ItemID + "' class='blue_color'>" + TypeName + "</a><p class='change_info'><span>地区：" + ProArea + "</span><span class='changed_con'>文字描述：" + WordDes.substr(0,30) + "...</span></p></div><div class='orders'><span>" + CollectTime + "</span><a href='javascript:;' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'>删除</a></div></li>";
                        break;

                    case 2:
                        html = html + "<li><a href='http://ziyawang.com/video/" + ItemID + "' class='head_pic'><img src='http://images.ziyawang.com" + VideoLogo + "' alt='' /></a><div class='company_info company_name'><a href='http://ziyawang.com/video/" + ItemID + "' class='blue_color'>" + VideoTitle + "</a><p class='playvideo'>" + VideoDes + "</p></div><div class='orders'><span>" + CollectTime + "</span><a href='javascript:;' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='2'>删除</a></div></li>";
                        break;

                    case 3:
                        html = html + "<li class='videos'><a href='http://ziyawang.com/news/" + ItemID + "' class='head_pic'><img src='http://images.ziyawang.com" + NewsLogo + "' alt='' /></a><div class='company_info company_name'><a href='http://ziyawang.com/news/" + ItemID + "' class='blue_color'>" + NewsTitle + "</a><p class='collectnews'>" + Brief.substr(0,30) + "</p></div><div class='orders'><span>" + CollectTime + "</span><a href='javascript:;' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='3'>删除</a></div></li>";
                        break;

                    case 4:
                        html = html + "<li><a href='http://ziyawang.com/service/" + ItemID + "' class='head_pic'><img src='http://images.ziyawang.com" + UserPicture + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/service/" + ItemID + "' class='blue_color'>" + ServiceName + "</a><p class='change_info'><span>服务地区：" + ServiceArea + "</span><span class='changed_con'>服务类型：" + ServiceType + "</span></p></div><div class='orders'><span>" + CollectTime + "</span><a href='javascript:;' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='4'>删除</a></div></li>";
                        break;
                }

            })
            if(counts == 0){
            html = "抱歉，您还没有收藏过信息，快去收藏吧！";
            }
            $('#collectlist').html(html);
            var hei = $('.main_right').height();
    $('.main_left').css('height',hei+'px');

        }

    });

var startpage = 1;
var token = $.cookie('token');
function ajax() {
    var data = '&startpage=' + startpage;
    console.log(data);

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/collect/list?pagecount=6&access_token=token&token=' + token + data,  
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
        //默认1：项目，2：视频，3：新闻资讯，4：服务方
        var html = '';
        $.each(data, function (index, item) {
            var TypeID        = data[index].TypeID;
            var ItemID        = data[index].ItemID;
            var CollectTime   = data[index].CollectTime;
            var TypeName      = ('TypeName' in data[index])     ? data[index].TypeName : null;
            var ProArea       = ('ProArea' in data[index])      ? data[index].ProArea : null;
            var WordDes       = ('WordDes' in data[index])      ? data[index].WordDes : null;
            var PictureDes1   = ('PictureDes1' in data[index])  ? data[index].PictureDes1 : null;
            var ProjectNumber = ('ProjectNumber' in data[index])? data[index].ProjectNumber : null;
            var ServiceName   = ('ServiceName' in data[index])  ? data[index].ServiceName : null;
            var ServiceType   = ('ServiceType' in data[index])  ? data[index].ServiceType : null;
            var ServiceArea   = ('ServiceArea' in data[index])  ? data[index].ServiceArea : null;
            var UserPicture   = ('UserPicture' in data[index])  ? data[index].UserPicture : null;
            var VideoTitle    = ('VideoTitle' in data[index])   ? data[index].VideoTitle : null;
            var VideoDes      = ('VideoDes' in data[index])     ? data[index].VideoDes : null;
            var VideoLogo     = ('VideoLogo' in data[index])    ? data[index].VideoLogo : null;
            var NewsTitle     = ('NewsTitle' in data[index])    ? data[index].NewsTitle : null;
            var Brief         = ('Brief' in data[index])  ? data[index].Brief : null;
            var NewsLogo      = ('NewsLogo' in data[index])     ? data[index].NewsLogo : null;
            if(!PictureDes1){
                PictureDes1 = '/checks/info.jpg';
            }
            switch(TypeID)
            {
                case 1:
                    html = html + "<li><a href='http://ziyawang.com/project/" + ItemID + "' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/" + ItemID + "' class='blue_color'>" + TypeName + "</a><p class='change_info'><span>地区：" + ProArea + "</span><span class='changed_con'>文字描述：" + WordDes.substr(0,30) + "...</span></p></div><div class='orders'><span>" + CollectTime + "</span><a href='javascript:;' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='1'>删除</a></div></li>";
                    break;

                case 2:
                    html = html + "<li><a href='http://ziyawang.com/video/" + ItemID + "' class='head_pic'><img src='http://images.ziyawang.com" + VideoLogo + "' alt='' /></a><div class='company_info company_name'><a href='http://ziyawang.com/video/" + ItemID + "' class='blue_color'>" + VideoTitle + "</a><p class='playvideo'>" + VideoDes + "</p></div><div class='orders'><span>" + CollectTime + "</span><a href='javascript:;' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='2'>删除</a></div></li>";
                    break;

                case 3:
                    html = html + "<li class='videos'><a href='http://ziyawang.com/news/" + ItemID + "' class='head_pic'><img src='http://images.ziyawang.com" + NewsLogo + "' alt='' /></a><div class='company_info company_name'><a href='http://ziyawang.com/news/" + ItemID + "' class='blue_color'>" + NewsTitle + "</a><p class='collectnews'>" + Brief.substr(0,30) + "</p></div><div class='orders'><span>" + CollectTime + "</span><a href='javascript:;' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='3'>删除</a></div></li>";
                    break;

                case 4:
                    html = html + "<li><a href='http://ziyawang.com/service/" + ItemID + "' class='head_pic'><img src='http://images.ziyawang.com" + UserPicture + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/service/" + ItemID + "' class='blue_color'>" + ServiceName + "</a><p class='change_info'><span>服务地区：" + ServiceArea + "</span><span class='changed_con'>服务类型：" + ServiceType + "</span></p></div><div class='orders'><span>" + CollectTime + "</span><a href='javascript:;' onclick='cancel(this)' class='collect' id='" + ItemID + "' type='4'>删除</a></div></li>";
                    break;
            }

        })
        if(counts == 0){
        html = "抱歉，您还没有收藏过信息，快去收藏吧！";
        }
        $('#collectlist').html(html);
    }
}

function collect(id,type) {
    token = token.replace(/\'/g,"");
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

function cancel(obj){
    var id = $(obj).attr('id');
    var type = $(obj).attr('type');
    collect(id,type);
}


$('.page-sum').click(function(){
    console.log($('.collect'));
})


</script>
@endsection