@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">登录</div>
        </div>

        <p>手机：<input type="text" name="phonenumber" id=""></p>
        <p>密码：<input type="password" name="password" id=""></p>
        <p><button id="login">登录</button><a href="{{url('/smslogin')}}"><button>忘记密码</button></a></p>
    </div>
    <script>

    	$('#login').click(function(){
    		var phonenumber = $("input[name='phonenumber']").val();
    		var password = $("input[name='password']").val();
    		var code = $("input[name='code']").val();

    		$.ajax({
    			url:"http://api.ziyawang.com/api/auth/login",
    			type:"POST",
    			data:"phonenumber=" + phonenumber + "&password=" + password  + "&access_token=token",
    			dataType:'json',
    			success:function(msg){
    				if(msg.token){
    					// console.log(msg.token);
    					$.session.set('token', "'"+msg.token+"'");
    					$.session.set('phonenumber', "'"+ phonenumber +"'");
    					window.location = "{{url('/')}}";
    				}
    			}
    		});
    	});
    </script>
@endsection



