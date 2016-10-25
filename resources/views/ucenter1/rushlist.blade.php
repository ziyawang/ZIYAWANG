@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/look.css')}}?v=1.0.4" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>查看抢单人<a href="#">时间</a></h2>
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
<script>
    $(function(){
        var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
        var token = $.cookie('token');

        $.ajax({  
            url: 'http://api.ziyawang.com/v1/project/rushlist/' + ProjectID + '?pagecount=6&startpage=1&access_token=token&token=' + token,  
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
            // console.log(json);
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
// console.log(data);
            
            var html = '';
            var state = 0;

            $.each(data, function (index, item) {
                var CooperateFlag = ('CooperateFlag' in data[index]) ? data[index].CooperateFlag: null;
                // console.log(CooperateFlag);
                if( CooperateFlag == '1' ) {
                    state = 1;
                }
            })

            if(state == 1) {
                $.each(data, function (index, item) {
                    var UserPicture   = ('UserPicture' in data[index]) ? data[index].UserPicture: null;
                    var ConnectPhone  = ('ConnectPhone' in data[index]) ? data[index].ConnectPhone: null;
                    var ServiceNumber = ('ServiceNumber' in data[index]) ? data[index].ServiceNumber: null;
                    var ServiceName   = ('ServiceName' in data[index]) ? data[index].ServiceName: null;
                    var ConnectPerson = ('ConnectPerson' in data[index]) ? data[index].ConnectPerson: null;
                    var ServiceID     = ('ServiceID' in data[index]) ? data[index].ServiceID: null;
                    var RushTime      = ('RushTime' in data[index]) ? data[index].RushTime: null;
                    var CooperateFlag = ('CooperateFlag' in data[index]) ? data[index].CooperateFlag: null;
                    var wenzi = "<a href='javascript:;' class='cancel' sid='" + ServiceID + "'>未合作</a>";

                    if(CooperateFlag == '1') {
                        wenzi = "<a href='javascript:;' class='confirm' sid='" + ServiceID + "'>已合作</a>";
                    }
                    html = html + "<li><div class='myorder'><span class='myorder_icon'><img src='http://images.ziyawang.com" + UserPicture + "' height='60' width='60' alt='' /></span><a href='http://ziyawang.com/service/" + ServiceID + "' class='myorder_abstr'><span>编号：" + ServiceNumber + "</span><span>公司：" + ServiceName + "</span><span class='blue'>联系人：" + ConnectPerson + "</span><span class='blue'>手机：" + ConnectPhone + "</span></a></div><div class='lo_collect'><a href='javascript:;' class='star collect' sid='" + ServiceID + "'></a><a href='javascript:;' class='chat'></a></div><p class='time'>" + RushTime + "</p>" + wenzi + "</li>"
                });
            } else if (state == 0) {
                $.each(data, function (index, item) {
                    var UserPicture   = ('UserPicture' in data[index]) ? data[index].UserPicture: null;
                    var ConnectPhone  = ('ConnectPhone' in data[index]) ? data[index].ConnectPhone: null;
                    var ServiceNumber = ('ServiceNumber' in data[index]) ? data[index].ServiceNumber: null;
                    var ServiceName   = ('ServiceName' in data[index]) ? data[index].ServiceName: null;
                    var ConnectPerson = ('ConnectPerson' in data[index]) ? data[index].ConnectPerson: null;
                    var ServiceID     = ('ServiceID' in data[index]) ? data[index].ServiceID: null;
                    var RushTime      = ('RushTime' in data[index]) ? data[index].RushTime: null;

                    html = html + "<li><div class='myorder'><span class='myorder_icon'><img src='http://images.ziyawang.com" + UserPicture + "' height='60' width='60' alt='' /></span><a href='http://ziyawang.com/service/" + ServiceID + "' class='myorder_abstr'><span>编号：" + ServiceNumber + "</span><span>公司：" + ServiceName + "</span><span class='blue'>联系人：" + ConnectPerson + "</span><span class='blue'>手机：" + ConnectPhone + "</span></a></div><div class='lo_collect'><a href='javascript:;' class='star collect' sid='" + ServiceID + "'></a><a href='javascript:;' class='chat'></a></div><p class='time'>" + RushTime + "</p><a href='javascript:;' class='confirm cooperate' sid='" + ServiceID + "'>确认合作</a></li>"
                });
            }
            if(counts == 0){
                html = "抱歉，您发布的信息还没有人抢单！"
            }
            $('#list').html(html);

            $('.cooperate').click(function(){
                var ServiceID = $(this).attr('sid');
                $.ajax({
                    url:'http://api.ziyawang.com/v1/project/cooperate?access_token=token&token=' + token,
                    type:'POST',
                    dataType:'json',
                    data:{'ServiceID':ServiceID,'ProjectID':ProjectID},
                    success:function(msg){
                        window.location = "http://ziyawang.com/ucenter/mycoo"
                    }
                })
            });

            $('.collect').click(function(){
                var ServiceID = $(this).attr('sid');
                token = token.replace(/\'/g,"");
                $.ajax({
                    url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
                    type:'POST',
                    data:'itemID=' + ServiceID + '&type=4',
                    dataType:'json',
                    success:function(msg){
                        alert(msg.msg);
                    }
                });
            })
        }

    })

var startpage = 1;
var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
var token = $.cookie('token');
function ajax() {
    $.ajax({  
            url: 'http://api.ziyawang.com/v1/project/rushlist/' + ProjectID + '?pagecount=6&startpage=' + startpage + '&access_token=token&token=' + token,  
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
            // console.log(json);
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
// console.log(data);
            
            var html = '';
            var state = 0;

            $.each(data, function (index, item) {
                var CooperateFlag = ('CooperateFlag' in data[index]) ? data[index].CooperateFlag: null;
                // console.log(CooperateFlag);
                if( CooperateFlag == '1' ) {
                    state = 1;
                }
            })

            if(state == 1) {
                $.each(data, function (index, item) {
                    var UserPicture   = ('UserPicture' in data[index]) ? data[index].UserPicture: null;
                    var ConnectPhone  = ('ConnectPhone' in data[index]) ? data[index].ConnectPhone: null;
                    var ServiceNumber = ('ServiceNumber' in data[index]) ? data[index].ServiceNumber: null;
                    var ServiceName   = ('ServiceName' in data[index]) ? data[index].ServiceName: null;
                    var ConnectPerson = ('ConnectPerson' in data[index]) ? data[index].ConnectPerson: null;
                    var ServiceID     = ('ServiceID' in data[index]) ? data[index].ServiceID: null;
                    var RushTime      = ('RushTime' in data[index]) ? data[index].RushTime: null;
                    var CooperateFlag = ('CooperateFlag' in data[index]) ? data[index].CooperateFlag: null;
                    var wenzi = "<a href='javascript:;' class='cancel' sid='" + ServiceID + "'>未合作</a>";

                    if(CooperateFlag == '1') {
                        wenzi = "<a href='javascript:;' class='confirm' sid='" + ServiceID + "'>已合作</a>";
                    }
                    html = html + "<li><div class='myorder'><span class='myorder_icon'><img src='http://images.ziyawang.com" + UserPicture + "' height='60' width='60' alt='' /></span><a href='http://ziyawang.com/service/" + ServiceID + "' class='myorder_abstr'><span>编号：" + ServiceNumber + "</span><span>公司：" + ServiceName + "</span><span class='blue'>联系人：" + ConnectPerson + "</span><span class='blue'>手机：" + ConnectPhone + "</span></a></div><div class='lo_collect'><a href='javascript:;' class='star collect' sid='" + ServiceID + "'></a><a href='javascript:;' class='chat'></a></div><p class='time'>" + RushTime + "</p>" + wenzi + "</li>"
                });
            } else if (state == 0) {
                $.each(data, function (index, item) {
                    var UserPicture   = ('UserPicture' in data[index]) ? data[index].UserPicture: null;
                    var ConnectPhone  = ('ConnectPhone' in data[index]) ? data[index].ConnectPhone: null;
                    var ServiceNumber = ('ServiceNumber' in data[index]) ? data[index].ServiceNumber: null;
                    var ServiceName   = ('ServiceName' in data[index]) ? data[index].ServiceName: null;
                    var ConnectPerson = ('ConnectPerson' in data[index]) ? data[index].ConnectPerson: null;
                    var ServiceID     = ('ServiceID' in data[index]) ? data[index].ServiceID: null;
                    var RushTime      = ('RushTime' in data[index]) ? data[index].RushTime: null;

                    html = html + "<li><div class='myorder'><span class='myorder_icon'><img src='http://images.ziyawang.com" + UserPicture + "' height='60' width='60' alt='' /></span><a href='http://ziyawang.com/service/" + ServiceID + "' class='myorder_abstr'><span>编号：" + ServiceNumber + "</span><span>公司：" + ServiceName + "</span><span class='blue'>联系人：" + ConnectPerson + "</span><span class='blue'>手机：" + ConnectPhone + "</span></a></div><div class='lo_collect'><a href='javascript:;' class='star collect' sid='" + ServiceID + "'></a><a href='javascript:;' class='chat'></a></div><p class='time'>" + RushTime + "</p><a href='javascript:;' class='confirm cooperate' sid='" + ServiceID + "'>确认合作</a></li>"
                });
            }
            if(counts == 0){
                html = "抱歉，您发布的信息还没有人抢单！"
            }
            $('#list').html(html);

            $('.cooperate').click(function(){
                var ServiceID = $(this).attr('sid');
                $.ajax({
                    url:'http://api.ziyawang.com/v1/project/cooperate?access_token=token&token=' + token,
                    type:'POST',
                    dataType:'json',
                    data:{'ServiceID':ServiceID,'ProjectID':ProjectID},
                    success:function(msg){
                        window.location = "http://ziyawang.com/ucenter/mycoo"
                    }
                })
            });

            $('.collect').click(function(){
                var ServiceID = $(this).attr('sid');
                token = token.replace(/\'/g,"");
                $.ajax({
                    url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
                    type:'POST',
                    data:'itemID=' + ServiceID + '&type=4',
                    dataType:'json',
                    success:function(msg){
                        alert(msg.msg);
                    }
                });
            })
        }
}
</script>
@endsection