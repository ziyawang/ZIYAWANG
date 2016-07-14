@extends('layouts.home')
@section('content')
<div class="container">
    <div class="content">
        <div class="title">我是首页</div>
    </div>

	<h2>优质信息</h2>
    <div>
        <div style="float:left">
        	<ul>
        		<li>
        			<span>资产包转让</span>
        			<a href=""><span>更多</span></a>
        		</li>
        		<li>
        			<table id="spec01">
        				<td>
        					<tr>编号：10001</tr>
        					<tr>地区：北京</tr>
        					<tr>转让金额：8888</tr>
        				</td>
        			</table>
        		</li>
        	</ul>
        </div>

        <div style="float:left">
        	<ul>
        		<li>
        			<span>委外催收</span>
        			<a href=""><span>更多</span></a>
        		</li>
        		<li>
        			<table id="spec02">
        				<td>
        					<tr>编号：10001</tr>
        					<tr>地区：北京</tr>
        					<tr>转让金额：8888</tr>
        				</td>
        			</table>
        		</li>
        	</ul>
        </div>
        
        <div style="float:left">
        	<ul>
        		<li>
        			<span>悬赏信息</span>
        			<a href=""><span>更多</span></a>
        		</li>
        		<li>
        			<table id="spec03">
        				<td>
        					<tr>编号：10001</tr>
        					<tr>地区：北京</tr>
        					<tr>转让金额：8888</tr>
        				</td>
        			</table>
        		</li>
        	</ul>
        </div>
    	
    </div>
</div>

<script>
// $(document).ready(function(){
// 	$.ajax({
// 		url:"http://api.ziyawang.com/api/project/list?TypeID=1&access_token=token",
// 		type:"GET",
// 		dataType:"json",
// 		success:function(msg){
// 			console.log(msg);
// 		}
// 	});
// });

     $(function () {  
         $.ajax({  
             url: 'http://api.ziyawang.com/api/project/list?TypeID=1&access_token=token',  
             type: 'GET',  
             dataType: 'json',  
             timeout: 1000,  
             cache: false,  
             beforeSend: LoadFunction, //加载执行方法    
             error: erryFunction,  //错误执行方法    
             success: succFunction //成功执行方法    
         })  
         function LoadFunction() {  
             $("#spec01").html('加载中...');  
         }  
         function erryFunction() {  
             alert("error");  
         }  
         function succFunction(tt) {  
             $("#spec01").html('');
  
             var json = eval(tt); //数组 
             console.log(json);        
             $.each(json, function (index, item) {  
                 //循环获取数据    
                 var ProjectID = "编号：1000" + json[index].ProjectID;  
                 var ProArea = "地区：" + json[index].ProArea;  
                 var TotalMoney = "转让金额：" + json[index].TotalMoney;  
                 $("#spec01").html($("#spec01").html() + "<a href='http://ziyawang.com/project/" + json[index].ProjectID + "'>aaa<tr><td>" + ProjectID + "</td><td>" + ProArea + "</td><td>" + TotalMoney + "</td></tr></a>");  
             });
             console.log($("#spec01"));  
         }  
     });  
</script>
@endsection
