@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=2.0.3" />
    <!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon ucRightSafe lookChat">
            <h3 class="selectiveType security"><span>查看约谈人</span></h3>
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
    $(function(){
        var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
        var token = $.cookie('token');
        // token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIxNyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0ODgyOTk3IiwiZXhwIjoiMTQ3NTQ4Nzc5NyIsIm5iZiI6IjE0NzQ4ODI5OTciLCJqdGkiOiI2YzFiYTA4M2MwZDFhYzA0MmYwYzNiNTc4ODYwNDEwNiJ9.TPz3TBRtlIL2I2eMzwUbPOGvdZ1We3S5Qs-Q7Xg3wDY";

        function getQueryString(key){
            var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
            var result = window.location.search.substr(1).match(reg);
            return result?decodeURIComponent(result[2]):null;
        }

        var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/project/rushlist/' + ProjectID + '?pagecount=6&startpage=' + urlpage + '&access_token=token&token=' + token,  
            type: 'GET',  
            dataType: 'json',  
            timeout: 5000,  
            cache: false,  
            // async: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: succFunction //成功执行方法    
        });  
        function LoadFunction() {  
            $("#list").html('加载中...');  
        }  
        function erryFunction() {  
            $("#list").html('加载异常，请刷新重试！')  
        }  
        function succFunction(tt) {  
            // $(".main_right ul").html('');
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
                var url = "http://ziyawang.com/ucenter/mypro/rushlist/" + ProjectID + "?startpage=" + urlpage;
                url = encodeURI(url);
                window.location.href= url;
            });
            
            var html = '';
            $.each(data, function (index, item) {
                var UserPicture   = ('UserPicture' in data[index]) ? data[index].UserPicture: null;
                var ConnectPhone  = ('ConnectPhone' in data[index]) ? data[index].ConnectPhone: null;
                var ServiceNumber = ('ServiceNumber' in data[index]) ? data[index].ServiceNumber: null;
                var ServiceName   = ('ServiceName' in data[index]) ? data[index].ServiceName: null;
                var ConnectPerson = ('ConnectPerson' in data[index]) ? data[index].ConnectPerson: null;
                var ServiceType   = ('ServiceType' in data[index]) ? data[index].ServiceType: null;
                var ServiceArea   = ('ServiceArea' in data[index]) ? data[index].ServiceArea: null;
                var ServiceLocation   = ('ServiceLocation' in data[index]) ? data[index].ServiceLocation: null;
                var ServiceID     = ('ServiceID' in data[index]) ? data[index].ServiceID: null;
                var RushTime      = ('RushTime' in data[index]) ? data[index].RushTime: null;
                var CooperateFlag = ('CooperateFlag' in data[index]) ? data[index].CooperateFlag: null;
                html = html + "<li class='clearfix black'><a href='http://ziyawang.com/service/" + ServiceID + "'><div class='pblLeft'><span class='pblefImg'><img src='http://images.ziyawang.com" + UserPicture + "' /></span>" + ServiceNumber + "</div><div class='pblMiddle servicer'><h4>" + ServiceName + "</h4><p>" + ServiceType + "</p></div><div class='pblBtn'><span class='verticaLine'></span><div class='pblRight serveZone'><span><strong>服务地区：</strong>" + ServiceArea + "</span><span></span><span><strong>所在地：</strong>" + ServiceLocation + "</span></div></div></a></li></li>"
            });
            
            if(counts == 0){
                html = "抱歉，您发布的信息还没有人约谈！"
            }
            $('#list').html(html);
        }

    })
</script>
@endsection