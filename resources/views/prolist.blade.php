@extends('layouts.home')
@section('content')
<style>
    button {
        background: #61c3d0;
    }
</style>
<p>
    精选信息：共有3287条信息
</p>
<p>
    <input type="search" name="" id="" placeholder="找信息"><a href="{{url('/ucenter/confirm')}}">申请成为服务方</a>
</p>
<p id="type">信息类型：
    <button type="01">资产包转让</button>
    <button type="02">债权转让</button>
    <button type="03">委外催收</button>
    <button type="04">法律服务</button>
    <button type="05">商业保理</button>
    <button type="06">典当担保</button>
    <button type="07">融资借贷</button>
    <button type="08">资金过桥</button>
    <button type="09">资产拍卖</button>
    <button type="10">悬赏信息</button>
    <button type="11">尽职调查</button>
    <button type="12">评估审计</button>
    <button type="13">资产求购</button>
</p>
<p id="area">地区：
    <button>北京</button>
    <button>天津</button>
    <button>上海</button>
    <button>江苏</button>
    <button>浙江</button>
    <button>安徽</button>
    <button>江西</button>
    <button>福建</button>
    <button>湖北</button>
    <button>湖南</button>
</p>
<p>
    <div class="more" id="spec01">
        <p>
            来源：<button diy="FromWhere">银行</button><button diy="FromWhere">非银行金融机构</button><button diy="FromWhere">企业</button>
        </p>
        <p>
            资产包类型：<button diy="AssetType">抵押</button><button diy="AssetType">信用</button><button diy="AssetType">综合类</button>
        </p>
    </div>
    <div class="more" id="spec02">
        <p>
            状态：<button diy="Status">未诉讼</button><button diy="Status">已诉讼</button>
        </p>
        <p>
            类型：<button class='defa01' diy="AssetType">个人</button><button class='defa02' diy="AssetType">银行</button><button class='defa01' diy="AssetType">企业</button>
        </p>
        <p>
            佣金比例：<button id='defa01' diy="Rate">5-15%</button><button diy="Rate">15-30%</button><button diy="Rate">30-50%</button><button diy="Rate">50%以上</button>
        </p>
    </div>
    <div class="more" id="spec03">
        <p>
            类型：<button>民事</button><button>经济</button><button>公司</button>
        </p>
    </div>
    <div class="more" id="spec04">
        <p>
            买方性质：<button>国企</button><button>民企</button><button>上市公司</button><button>其他</button>
        </p>
    </div>
    <div class="more" id="spec05">
        <p>
            类型：<button>典当</button><button>担保</button>
        </p>
    </div>
    <div class="more" id="spec06">
        <p>
            方式：<button>抵押</button><button>质押</button><button>租赁</button><button>信用</button>
        </p>
    </div>
    <div class="more" id="spec07">
        <p>
            使用期限：<button>1个月内</button><button>1-3个月</button><button>3-6个月</button><button>6个月以上</button>
        </p>
    </div>
    <div class="more" id="spec08">
        <p>
            类型：<button>固定资产</button><button>其他</button>
        </p>
    </div>
    <div class="more" id="spec09">
        <p>
            类型：<button>找人</button><button>找资产</button>
        </p>
    </div>
    <div class="more" id="spec10">
        <p>
            被调查方：<button>企业</button><button>个人</button>
        </p>
    </div>
    <div class="more" id="spec11">
        <p>
            需求：<button>评估</button><button>审计</button>
        </p>
        <p>
            类型：<button>企业</button><button>资产</button><button>项目</button><button>其他</button>
        </p>
    </div>
    <div class="more" id="spec12">
        <p>
            类型：<button>土地</button><button>房产</button><button>汽车</button><button>项目</button><button>其他</button>
        </p>
    </div>
    <div class="more" id="spec13">
        <p>
            类型：<button>土地</button><button>汽车</button><button>房产</button>
        </p>
    </div>
</p>
<p>
    <table id="list">
        
    </table>
</p>
<div id="pagebar">
    <ul>
    </ul>
</div>
<div style="clear:both"></div>
<style>
    #pagebar ul li {
        float: left;
        padding: 10px;
    }
</style>

    <script>
    $(function () {

        $('.more').hide();

//地址栏获取参数，不用了
// function GetQueryString(name)
// {
//     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
//     var r = window.location.search.substr(1).match(reg);
//     if(r!=null) {
//        return decodeURI(r[2]);
//     }
//     return null;
// }


// var TypeID=GetQueryString("TypeID");
// if(TypeID !=null && TypeID.toString().length>0)
// {
//    console.log(TypeID);
// }

// var ProArea=GetQueryString("ProArea");
// if(ProArea !=null && ProArea.toString().length>1)
// {
//    console.log(ProArea);
// }

// var startpage=GetQueryString("startpage");
// if(startpage !=null && startpage.toString().length>0)
// {
//    console.log(startpage);
// }

        $.ajax({  
            url: 'http://api.ziyawang.com/api/project/list?pagecount=2&startpage=1&access_token=token',  
            type: 'GET',  
            dataType: 'json',  
            timeout: 1000,  
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: succFunction //成功执行方法    
        });  
        function LoadFunction() {  
            $("#list").html('加载中...');  
        }  
        function erryFunction() {  
            alert("error");  
        }  
        function succFunction(tt) {  
            $("#list").html('');

            var json = eval(tt); //数组 
            console.log(json);
            var counts = json.counts;
            var pages = json.pages;
            var data = json.data;        
            $.each(data, function (index, item) {  
                //循环获取数据    
                var ProjectID = "编号：1000" + data[index].ProjectID;  
                var ProArea = "地区：" + data[index].ProArea;  
                var TotalMoney = "转让金额：" + data[index].TotalMoney;  
                $("#list").html($("#list").html() + "<a href='http://ziyawang.com/project/" + data[index].ProjectID + "'>"+ data[index].TypeName +"<tr><td>" + ProjectID + "</td><td>" + ProArea + "</td><td>" + TotalMoney + "</td></tr></a>");  
            });

            for (var i=1;i<=pages;i++) {
                $('#pagebar ul').html($('#pagebar ul').html() + "<li><button class='page'>"+ i +"</button></li>");
            }            
        var startpage = 1;
        var ProArea = null;
        var TypeID = null;
        var diffInfo = {};
        function ajax() {

            var string = query(diffInfo);
            var data = 'startpage=' + startpage + '&TypeID=' + TypeID + '&ProArea=' + ProArea + string;

            console.log(data);
        }
        function query(obj) {
            var string = '';
            $.each(obj,function(n,value) {
                string = string + '&' + n + '=' + value;   
            });
                console.log(string);   
                return string;      
        };
        $('.page').click(function(){
            startpage = $(this).html();
            // var data = 'startpage=' + startpage + '&TypeID=' + TypeID + '&ProArea=' + ProArea + other;
            ajax();
        });
        $('#type button').click(function(){
            startpage = 1;
            TypeID = $(this).attr('type');
            ProArea = null;
            other = null;
            // var data = 'startpage=' + startpage + '&TypeID=' + TypeID + '&ProArea=' + ProArea + other;
            // alert($('pagebar ul li button').html());
            ajax();
        });
        $('#area button').click(function(){
            startpage = 1;
            ProArea = $(this).html();
            other = null;
            // var data = 'startpage=' + startpage + '&TypeID=' + TypeID + '&ProArea=' + ProArea + other;
            ajax();
        });

        $('button[diy]').click(function(){
            startpage = 1;
            // eval("other." + $(this).attr('diy') + "='" + $(this).html() + "'");
            var name = $(this).attr('diy');
            var value = $(this).html();
            // switch (name)
            // {
            //     case "FromWhere":
            //         buhuiba.FromWhere = value;
            //         break;

            //     case "Status":
            //         buhuiba.Status = value;
            //         break;

            //     case "AssetType":
            //         buhuiba.AssetType = value;
            //         break;
            // }
            diffInfo[name] = value;
            ajax();
        });
        $('#type button').click(function(){
            var TypeID = $(this).attr('type');
            var appear = 'spec' + TypeID;
            $('.more').hide();
            $('#'+appear).show();
        });

        $('.defa01').click(function(){
            $('#defa01').attr('disabled',true);
            $('#defa01').css('background', 'white');
        });

        $('.defa02').click(function(){
            $('#defa01').attr('disabled',false);
            $('#defa01').css('background', '#61c3d0');
        });
        }  

     });  
    </script>

    <script>
    </script>

@endsection