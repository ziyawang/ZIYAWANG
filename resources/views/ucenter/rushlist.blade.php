@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/look.css')}}" />
<!-- 右侧详情 -->
    <div class="main_right">
        <h2>查看抢单人<a href="#">时间</a></h2>
        <ul>
            <li>
                <div class="myorder">
                    <img src="img/zhanwei01.jpg" height="60" width="60" alt="" />
                    <a href="#" class="myorder_abstr">
                        <span>编号：FW1004</span>                                  
                        <span>公司：资芽网</span>
                        <span class="blue">联系人：假大空</span>
                        <span class="blue">手机：13333333333</span>
                    </a>
                </div>
                <div class="lo_collect">
                    <a href="#" class="star star_cl"></a><a href="#" class="chat"></a>
                </div>
                <p class="time">2016-06-29</p>
                <a href="#" class="confirm">确认合作</a>
            </li>
            <li>
                <div class="myorder">
                    <img src="img/zhanwei01.jpg" height="60" width="60" alt="" />
                    <a href="#" class="myorder_abstr">
                        <span>编号：FW1004</span>                                  
                        <span>公司：资芽网</span>
                        <span class="blue">12345678911</span>
                    </a>
                </div>
                <div class="lo_collect">
                    <a href="javascript:;" class="star"></a><a href="javascript:;" class="chat"></a>
                </div>
                <p class="time">2016-06-29</p>
                <a href="#" class="confirm">确认合作</a>
            </li>
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
            url: 'http://api.ziyawang.com/api/project/rushlist/' + ProjectID + '?pagecount=6&startpage=1&access_token=token&token=' + token,  
            type: 'GET',  
            dataType: 'json',  
            timeout: 1000,  
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: succFunction //成功执行方法    
        });  
        function LoadFunction() {  
            // $("#list").html('加载中...');  
        }  
        function erryFunction() {  
            // alert("error");  
        }  
        function succFunction(tt) {  
            // $(".main_right ul").html('');
            var json = eval(tt); //数组 
            console.log(json);
            var counts = json.counts;
            var pages = json.pages;
            //分页
            $("#Pagination").pagination(pages);
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            var data = json.data;  
console.log(data);
return false;
            $.each(data, function (index, item) {
                var UserPicture = data[index].UserPicture;
                var ConnectPhone = data[index].ConnectPhone;
                var ServiceNumber = data[index].ServiceNumber;
                var ServiceName = data[index].TypeID;
                var ConnectPerson = data[index].ConnectPerson;
            });
        }
    })
</script>
@endsection