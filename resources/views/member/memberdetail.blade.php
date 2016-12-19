@extends('layouts.uhome')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{url('/css/releasehome.css')}}?v=2.0.4" />
    <div class="ucRight">
        <div class="ucRightCon member-sys">
            <h3 class="member-title">
                <a href="javascript:;">充值记录</a>
            </h3>
            <div class="ucrightTop member-record">
                <div class="member-rec-top">
                    <span class="member-rec-lt">会员开通记录</span>
                    <a href="{{url('/ucenter/member')}}" class="member-back"></a>
                </div>
                <div class="tradeList">
                    <div class="tradeTitle">
                        <span class="td1">编号</span><span class="td2">操作记录</span><span class="td3">会员开通时间</span><span class="td3">会员到期时间</span>
                    </div>
                    <ul class="tradeUl" id="billlist">
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
    </div>
</div>
<script>
    $(function(){
        var token = $.cookie('token');
        if(!token){
            window.location = "{{url('/login')}}";
            return false;
        }

        function getQueryString(key){
            var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
            var result = window.location.search.substr(1).match(reg);
            return result?decodeURIComponent(result[2]):null;
        }

        var urlpage   = getQueryString("startpage") ? getQueryString("startpage") : 1;

        $.ajax({  
            url: 'http://api.ziyawang.com/v1/v2/pay/member/list?pagecount=8&startpage=' + urlpage + '&access_token=token&token=' + token,
            type: 'POST',  
            dataType: 'json',  
            timeout: 5000,  
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: succFunction //成功执行方法    
        }); 

        function LoadFunction() {  
            $("#billlist").html('加载中...');  
        }  
        function erryFunction() {  
            $("#billlist").html('加载异常，请重新刷新页面！'); 
        }
        function succFunction(tt) {
            $("#billlist").html('');
            var json = eval(tt); //数组
            var data = json.data;  
            var counts = json.counts;
            var pages = json.pages;
            var current = json.currentpage-1;
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
                var url = 'http://ziyawang.com/ucenter/member/detail?pagecount=8&startpage=' + urlpage;
                url = encodeURI(url);
                window.location.href= url;
            });
            var html = '';
            $.each(data, function (index, item) {
                var OrderNumber  = data[index].OrderNumber;
                var Operates     = data[index].Operates;
                var EndTime   = data[index].EndTime.substr(0,10);
                var StartTime   = data[index].StartTime.substr(0,10);
                html = html + "<li><span class='td1'>" + OrderNumber + "</span><span class='td2'>" + Operates + "</span><span class='td3'>" + StartTime + "</span><span class='td3'>" + EndTime + "</span></li>";
            })

            $("#billlist").html(html);
        }
    })
</script>
@endsection