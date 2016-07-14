@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">登录</div>
        </div>

        <p>手机：<input type="text" name="phonenumber" id=""></p>
        <p>验证码：<input type="text" name="smscode" id=""><button style="width:30px" id="getSmscode">获取验证码</button></p>
        <p><button id="smslogin">登录</button></p>
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

    	$('#smslogin').click(function(){
    		var phonenumber = $("input[name='phonenumber']").val();
    		var smscode = $("input[name='smscode']").val();

    		$.ajax({
    			url:"http://api.ziyawang.com/api/auth/smslogin",
    			type:"POST",
    			data:"phonenumber=" + phonenumber + "&smscode=" + smscode + "&access_token=token",
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


