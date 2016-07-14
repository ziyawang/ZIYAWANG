@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">注册</div>
        </div>

        <p>手机：<input type="text" name="phonenumber" id=""></p>
        <p>密码：<input type="password" name="password" id=""></p>
        <p>验证码：<input type="text" name="smscode" id=""><button style="width:30px" id="getSmscode">获取验证码</button></p>
        <p><button id="register">注册</button></p>
    </div>
    <script>
    	$('#getSmscode').click(function(){
    		var phonenumber = $("input[name='phonenumber']").val();

    		$.ajax({
    			url:"http://api.ziyawang.com/api/auth/getsmscode",
    			type:"POST",
        		data:"phonenumber=" + phonenumber + "&access_token=token",
        		dataType:"json",
        		success:function(msg){
        			console.log(msg);
        		}
    		});
    	});

    	$('#register').click(function(){
    		var phonenumber = $("input[name='phonenumber']").val();
    		var password = $("input[name='password']").val();
    		var smscode = $("input[name='smscode']").val();

    		$.ajax({
    			url:"http://api.ziyawang.com/api/auth/register",
    			type:"POST",
    			data:"phonenumber=" + phonenumber + "&password=" + password + "&smscode=" + smscode + "&access_token=token",
    			dataType:'json',
    			success:function(msg){
    				if(msg.success){
    					// console.log(msg.token);
    					$.session.set('phonenumber', "'"+ phonenumber +"'");
    					$.session.set('token', "'"+msg.token+"'");
    					window.location = "{{url('/')}}";
    				}
    			}
    		});
    	});
    </script>
@endsection


