@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=1.0.4" />
<!-- 右侧详情 -->
    <div class="ucRight">
        <div class="ucRightCon ucRightSafe systemInformation">
            <h3 class="selectiveType security"><span>系统消息</span></h3>
            <div class="info_bar">
                <input class="all check check_all" type="checkbox" id="checkAll" state='1'/><button class="sign_read">标记所选为已读</button><button class="empty" id="delete">删除所选</button>
                <span class="sys_time">时间</span>
            </div>
        <div class="info_list">
            <ul id="list">
                <li>
                    <div class="line_info have_read">
                        <span class="td_check"><input type="checkbox" /></span><span class="td_email"></span><a class="td_word"></a><span class="td_time" id="time"></span>
                    </div>
                    <div class="system_details">
                    </div>
                </li>
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
<!-- 底部 -->
<script type="text/javascript" src="{{url('/js/system.js')}}"></script>

<script>
$(function(){
    var token = $.cookie('token');
    // token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIxIiwiaXNzIjoiaHR0cDpcL1wvYXBpdGVzdC56aXlhd2FuZy5jb21cL3YxXC9hdXRoXC9sb2dpbiIsImlhdCI6IjE0NzQ4OTQ3MzYiLCJleHAiOiIxNDc1NDk5NTM2IiwibmJmIjoiMTQ3NDg5NDczNiIsImp0aSI6ImQ2MGJkMmRjY2UxYWIyYTZmZmMxMjllZGI1ZGFlMGVlIn0.cVvgdg_iHlmIxRp4C3VTt5Dbw-tvJSLaEKUMAKpptMY";
        if(!token){
            window.location = "http://ziyawang.com/login";
            return false;
        }
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/getmessage?pagecount=6&startpage=1&access_token=token&token=' + token,  
            type: 'POST',  
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
            var json = eval(tt); //数组 
            // console.log(json)
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
            var counts = json.counts;
            var readcounts = json.readcounts;
            $('#counts').html(counts);
            $('#readcounts').html(readcounts);

            var html = "抱歉，暂时还没有系统消息！";
            if(data != undefined){
                html = "";
                $.each(data, function (index, item) {
                    var Title = data[index].Title;
                    var TextID = data[index].TextID;
                    var Time = data[index].Time;
                    Time = Time.substr(5,5);
                    var Content = data[index].Text;
                    var Status = data[index].Status;
                    var className = '';
                    if(Status == '0') {
                        className = "line_info";
                    } else if(Status == '1'){
                        className = "line_info haveread";
                    } 
                    html = html + "<li><div class='" + className + "'><span class='td_check'><input type='checkbox' class='msgbox' name='TextID[]' value='" + TextID + "'/></span><span class='td_email'></span><a class='td_word'>" + Title + "</a><span class='td_time' id='time'>" + Time + "</span></div><div class='system_details'>" + Content + "</div></li>"
                })
            }

            $('#list').html(html);

            $(".msgbox").click(function(event){
                event.stopPropagation();//阻止冒泡
            });
            $(".line_info").not(".msgbox").click(function() {
                if(!$(this).hasClass('haveread')){
                    var readcounts = $('#readcounts').html();
                    readcounts = readcounts - 1;
                    $('#readcounts').html(readcounts);
                }
                var TextID = $(this).find('input').val();
                $.ajax({
                    url: 'http://api.ziyawang.com/v1/readmessage?access_token=token&token=' + token,
                    type: 'POST',
                    data: {'TextID':TextID},
                    dataType: 'json',
                    success: function(msg){
                        // console.log(msg);
                    }
                });
                $(this).addClass('haveread');
                $(this).closest('li').children('.system_details').stop().slideToggle();
            })
        }
})


var token = $.cookie('token');
var startpage = 1;

function ajax(){
    var data = '&startpage=' + startpage;
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/getmessage?pagecount=6&access_token=token&token=' + token + data,  
        type: 'POST',  
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
            var json = eval(tt); //数组 
            // console.log(json)
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
            var counts = json.counts;
            var readcounts = json.readcounts;
            $('#counts').html(counts);
            $('#readcounts').html(readcounts);

            var html = "抱歉，暂时还没有系统消息！";
            if(data != undefined){
                html = "";
                $.each(data, function (index, item) {
                    var Title = data[index].Title;
                    var TextID = data[index].TextID;
                    var Time = data[index].Time;
                    Time = Time.substr(5,5);
                    var Content = data[index].Text;
                    var Status = data[index].Status;
                    var className = '';
                    if(Status == '0') {
                        className = "line_info";
                    } else if(Status == '1'){
                        className = "line_info haveread";
                    } 
                    html = html + "<li><div class='" + className + "'><span class='td_check'><input type='checkbox' class='msgbox' name='TextID[]' value='" + TextID + "'/></span><span class='td_email'></span><a class='td_word'>" + Title + "</a><span class='td_time' id='time'>" + Time + "</span></div><div class='system_details'>" + Content + "</div></li>"
                })
            }

            $('#list').html(html);

            $(".msgbox").click(function(event){
                event.stopPropagation();//阻止冒泡
            });
            $(".line_info").not(".msgbox").click(function() {
                if(!$(this).hasClass('haveread')){
                    var readcounts = $('#readcounts').html();
                    readcounts = readcounts - 1;
                    $('#readcounts').html(readcounts);
                }
                var TextID = $(this).find('input').val();
                $.ajax({
                    url: 'http://api.ziyawang.com/v1/readmessage?access_token=token&token=' + token,
                    type: 'POST',
                    data: {'TextID':TextID},
                    dataType: 'json',
                    success: function(msg){
                        // console.log(msg);
                    }
                });
                $(this).addClass('haveread');
                $(this).closest('li').children('.system_details').stop().slideToggle();
            })

        }
}

$('#delete').click(function(){
    var check = $('.msgbox:checked');
    var TextID = [];
    for (var i = check.length - 1; i >= 0; i--) {
        TextID[i] = check[i].value;
    };
    
     $.ajax({
        url: 'http://api.ziyawang.com/v1/delmessage?access_token=token&token=' + token,
        type: 'POST',
        data: {'TextID':TextID},
        dataType: 'json',
        success: function(msg){
            // console.log(msg);
            // for (var i = check.length - 1; i >= 0; i--) {
            //     check[i].closest('li').remove();
            // };
            // var counts = $('#counts').html();
            // counts = counts - check.length;
            // $('#counts').html(counts);
            window.location.reload();
        }
    });
})

$('#read').click(function(){
    var check = $('.msgbox:checked');
    var TextID = [];
    for (var i = check.length - 1; i >= 0; i--) {
        TextID[i] = check[i].value;
    };
     $.ajax({
        url: 'http://api.ziyawang.com/v1/readmessage?access_token=token&token=' + token,
        type: 'POST',
        data: {'TextID':TextID},
        dataType: 'json',
        success: function(msg){
            // console.log(msg);
            for (var i = check.length - 1; i >= 0; i--) {
                $(check[i].closest('li')).addClass('haveread');
            };
            var readcounts = msg.readcounts;
            $('#readcounts').html(readcounts);
        }
    });
})


            $('#checkAll').click(function(){
                var state = parseInt($(this).attr('state')); //0是全选1是取消
                if(state == 0){
                    $(".msgbox").prop("checked", false); 
                    $(this).attr('state', '1');
                } else {
                    $(".msgbox").prop("checked", true); 
                    $(this).attr('state', '0');
                }
            })


</script>
@endsection