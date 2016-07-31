@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/look.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>查看抢单人<a href="#">时间</a></h2>
        <ul id="list">
        </ul>
        <!-- 公共分页/start -->
        <div class="pages">
            <div id="Pagination"></div>
            <div class="searchPage">
              <span class="page-sum">共<strong class="allPage">xxx</strong>页</span>
            </div>
        </div>
        <!-- 公共分页/end -->
    </div>
</div>
<script>
    $(function(){
        var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
        var token = $.session.get('token');

        $.ajax({  
            url: 'http://api.ziyawang.com/v1/project/rushlist/' + ProjectID + '?pagecount=6&startpage=1&access_token=token&token=' + token,  
            type: 'GET',  
            dataType: 'json',  
            timeout: 1000,  
            cache: false,  
            async: false,  
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
            //分页
            $("#Pagination").pagination(pages);
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            var data = json.data;  
console.log(data);
            
            var html = '';
            $.each(data, function (index, item) {
                var UserPicture   = ('UserPicture' in data[index]) ? data[index].UserPicture: null;
                var ConnectPhone  = ('ConnectPhone' in data[index]) ? data[index].ConnectPhone: null;
                var ServiceNumber = ('ServiceNumber' in data[index]) ? data[index].ServiceNumber: null;
                var ServiceName   = ('ServiceName' in data[index]) ? data[index].ServiceName: null;
                var ConnectPerson = ('ConnectPerson' in data[index]) ? data[index].ConnectPerson: null;
                var ServiceID     = ('ServiceID' in data[index]) ? data[index].ServiceID: null;
                var RushTime      = ('RushTime' in data[index]) ? data[index].RushTime: null;

                html = html + "<li><div class='myorder'><span class='myorder_icon'><img src='http://images.ziyawang.com" + UserPicture + "' height='60' width='60' alt='' /></span><a href='#' class='myorder_abstr'><span>编号：" + ServiceNumber + "</span><span>公司：" + ServiceName + "</span><span class='blue'>联系人：" + ConnectPerson + "</span><span class='blue'>手机：" + ConnectPhone + "</span></a></div><div class='lo_collect'><a href='javascript:;' class='star' sid='" + ServiceID + "' id='collect'></a><a href='javascript:;' class='chat'></a></div><p class='time'>" + RushTime + "</p><a href='javascript:;' id='cooperate' class='confirm' sid='" + ServiceID + "'>确认合作</a></li>"
            });
            if(counts == 0){
                html = "抱歉，您发布的信息还没有人抢单！"
            }
            $('#list').html(html);

            $('#cooperate').click(function(){
                var ServiceID = $(this).attr('sid');
                $.ajax({
                    url:'http://api.ziyawang.com/v1/project/cooperate?access_token=token&token=' + token,
                    type:'POST',
                    dataType:'json',
                    data:{'ServiceID':ServiceID,'ProjectID':ProjectID},
                    success:function(msg){
                        alert(1);
                        window.location = "{{url('/ucenter/mycoo')}}"
                    }
                })
            });

            $('#collect').click(function(){
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
</script>
@endsection