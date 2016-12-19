@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=1.0.4" />
    <!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon recharge">
            <h3 class="selectiveType">
                <a href="{{url('/ucenter/money')}}">我的芽币</a><a href="{{url('/ucenter/money/detail')}}" class="current">芽币明细</a>
                <em class="grayLine"></em>
            </h3>
            <div class="amount ybDetails">
                <div class="ybDetailsTit">
                    <div class="diamond">芽币明细<span>充值交易记录</span></div>
                    <div class="diamond bord2">1元可换10芽币<a href="{{url('/ucenter/money')}}"></a></div>
                    <div class="diamond">芽币余额<strong id='accounts'></strong></div>
                </div>
                <div class="rechargeBox">
                    <div class="paymodeTitle clearfix">
                        <div class="transaction">
                            <span>交易类型：</span><a href="javascript:;" class="current detailtype" Type="" id="all">全部</a><a href="javascript:;" class="detailtype" Type="1" id="pay">充值</a><a href="javascript:;" class="detailtype" Type="2" id="consume">消费</a>
                        </div>
                        <div class="inquiry">
                            <span class="startstop">起止时间：</span>
                            <div class="inline clearfix">
                                <a class="laydate-icon startTm" id="start"><span>起点时间</span></a>
                                <span class="lineae">—</span>
                                <a class="laydate-icon endTm" id="end"><span>止点时间</span></a>
                            </div>
                            <a href="javascript:;" class="today" id="today">今天</a>
                            <button type="button" class="queryResult" id="check"></button>
                        </div>
                    </div>
                    <div class="tradeList">
                        <div class="tradeTitle">
                            <span class="td1">编号</span><span class="td2">操作记录</span><span class="td3">时间</span>
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
</div>
<script type="text/javascript" src="{{url('/js/laydate.js')}}"></script>
<script type="text/javascript">
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
        var Type      = getQueryString("Type")      ? getQueryString("Type")      : '';
        var starttime = getQueryString("starttime") ? getQueryString("starttime") : '';
        var endtime   = getQueryString("endtime")   ? getQueryString("endtime")   : '';

        $(".transaction a").each(function(){
            if($(this).attr('Type') == Type){
                $(this).addClass('current').siblings().removeClass('current');
            }
        })

        if(starttime != ''){
            $('#start').html(starttime.substr(0,10));
        }

        if(endtime != ''){
            $('#end').html(endtime.substr(0,10));
        }

        $.ajax({  
            url: 'http://api.ziyawang.com/v1/mybill?pagecount=8&startpage=' + urlpage + '&access_token=token&Type=' + Type + '&starttime=' + starttime + '&endtime=' + endtime + '&token=' + token,
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
                var url = 'http://ziyawang.com/ucenter/money/detail?pagecount=8&startpage=' + urlpage + '&Type=' + Type + '&starttime=' + starttime + '&endtime=' + endtime;
                url = encodeURI(url);
                window.location.href= url;
            });
            var html = '';
            $.each(data, function (index, item) {
                var OrderNumber  = data[index].OrderNumber;
                var Operates     = data[index].Operates;
                var created_at   = data[index].created_at.substr(0,10);
                html = html + "<li><span class='td1'>" + OrderNumber + "</span><span class='td2'>" + Operates + "</span><span class='td3'>" + created_at + "</span></li>";
            })

            $("#billlist").html(html);
        }


        //声明input昵称宽度随文字长度而变化
        var textWidth = function(text){ 
            var sensor = $('<pre>'+ text +'</pre>').css({display: 'none'}); 
            $('body').append(sensor); 
            var width = sensor.width()+20;
            sensor.remove(); 
            return width;
        };

        $('.transaction a').click(function(event) {
            $(this).addClass('current').siblings().removeClass('current');
        });
        //
        $('.today').click(function(event) {
            $(this).stop().toggleClass('on');
            $('#start').html('<span>起点时间</span>');
            $('#end').html('<span>止点时间</span>')
        });
        
    })
    //日期范围限制
    !function(){
        laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
        //laydate({elem: '#demo'});//绑定元素
    }();
    var start = {
        elem: '#start',
        format: 'YYYY-MM-DD',
        min: '2016-01-01', 
        max: '2099-12-31', 
        istime: true,
        istoday: false,
        choose: function(datas){
             end.min = datas; //开始日选好后，重置结束日的最小日期
             end.start = datas //将结束日的初始值设定为开始日
        }
    };

    var end = {
        elem: '#end',
        format: 'YYYY-MM-DD',
        min: '2016-01-01',
        max: '2099-12-31',
        istime: true,
        istoday: false,
        choose: function(datas){
            start.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(start);
    laydate(end);

    function getQueryString(key){
        var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
        var result = window.location.search.substr(1).match(reg);
        return result?decodeURIComponent(result[2]):null;
    }
    function formatdate(d) {  
        var D=['00','01','02','03','04','05','06','07','08','09']  
        with (d || new Date) return [  
        [getFullYear(), D[getMonth()+1]||getMonth()+1, D[getDate()]||getDate()].join('-'),  
        // [D[getHours()]||getHours(), D[getMinutes()]||getMinutes(), D[getSeconds()]||getSeconds()].join(':')  
        ].join(' ');  
    } 
    function formatDate(d) {  
        var D=['00','01','02','03','04','05','06','07','08','09']  
        with (d || new Date) return [  
        [getFullYear(), D[getMonth()+1]||getMonth()+1, D[getDate()]||getDate()].join('-'),  
        [D[getHours()]||getHours(), D[getMinutes()]||getMinutes(), D[getSeconds()]||getSeconds()].join(':')  
        ].join(' ');  
    }

    var Type      = getQueryString("Type")      ? getQueryString("Type")      : '';
    var starttime = getQueryString("starttime") ? getQueryString("starttime") : '';
    var endtime   = getQueryString("endtime")   ? getQueryString("endtime")   : '';

    $('#check').click(function(){
        $(".transaction a").each(function(){
            if($(this).hasClass('current')){
                Type = $(this).attr('Type');
            }
        })
        starttime = $('#start').html();
        endtime = $('#end').html() + " 23:59:59";
        if($('#today').hasClass('on')){
            starttime = formatdate() + ' 00:00:00';
            endtime = formatDate();
        } else if(( starttime.indexOf('时间') * endtime.indexOf('时间') ) < 0 || (starttime == '' && endtime != '') || (starttime != '' && endtime == '')) {
            layer.tips('时间没选完整', '#check', {
              tipsMore: true
            });
            return;
        } else if(starttime.indexOf('时间') > 0 && endtime.indexOf('时间') > 0 ){
            starttime = '';
            endtime = '';
        }
        var url = 'http://ziyawang.com/ucenter/money/detail?pagecount=1&Type=' + Type + '&starttime=' + starttime + '&endtime=' + endtime;
        url = encodeURI(url);
        window.location.href= url;
    });

    $('.detailtype').click(function(){
        Type = $(this).attr('Type');
        starttime = $('#start').html();
        endtime = $('#end').html() + " 23:59:59";
        if($('#today').hasClass('on')){
            starttime = formatdate() + ' 00:00:00';
            endtime = formatDate();
        } else if(( starttime.indexOf('时间') * endtime.indexOf('时间') ) < 0 || (starttime == '' && endtime != '') || (starttime != '' && endtime == '')) {
            layer.tips('时间没选完整', '#check', {
              tipsMore: true
            });
            return;
        } else if(starttime.indexOf('时间') > 0 && endtime.indexOf('时间') > 0 ){
            starttime = '';
            endtime = '';
        }
        var url = 'http://ziyawang.com/ucenter/money/detail?pagecount=1&Type=' + Type + '&starttime=' + starttime + '&endtime=' + endtime;
        url = encodeURI(url);
        window.location.href= url;
    });

    $('#today').click(function(){
        starttime = formatdate();
        endtime = formatdate() + ' 23:59:59';
        var url = 'http://ziyawang.com/ucenter/money/detail?pagecount=1&Type=' + Type + '&starttime=' + starttime + '&endtime=' + endtime;
        url = encodeURI(url);
        window.location.href= url;
    });
</script>
@endsection