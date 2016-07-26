@extends('layouts.home')
@section('content')
<div class="container" style="display:none">
	<div style="float:left">
		<p><a href="{{url('/ucenter')}}">系统消息</a></p>
		<p><a href="{{url('/ucenter/pubpro')}}">发布消息</a></p>
		<p><a href="{{url('/ucenter/published')}}">已发布消息</a></p>
		<p><a href="{{url('/ucenter/cooperated')}}">已合作</a></p>
		<p><a href="{{url('/ucenter/myrush')}}">我的抢单</a></p>
		<p><a href="{{url('/ucenter/rushlist')}}">查看抢单详情</a></p>
		<p><a href="{{url('/ucenter/safe')}}">安全中心</a></p>
		<p><a href="{{url('/ucenter/confirm')}}">完善资料</a></p>
	</div>
	<div style="float:right">
		<p><a href="{{url('/ucenter/pubpro/1')}}">资产包转让</a></p>
		<p><a href="{{url('/ucenter/pubpro/2')}}">委外催收</a></p>
		<p><a href="{{url('/ucenter/pubpro/3')}}">法律服务</a></p>
		<p><a href="{{url('/ucenter/pubpro/4')}}">商业保理</a></p>
		<p><a href="{{url('/ucenter/pubpro/5')}}">典当担保</a></p>
		<p><a href="{{url('/ucenter/pubpro/6')}}">融资借贷</a></p>
		<p><a href="{{url('/ucenter/pubpro/7')}}">资金过桥</a></p>
		<p><a href="{{url('/ucenter/pubpro/8')}}">资产拍卖</a></p>
		<p><a href="{{url('/ucenter/pubpro/9')}}">悬赏信息</a></p>
		<p><a href="{{url('/ucenter/pubpro/10')}}">尽职调查</a></p>
		<p><a href="{{url('/ucenter/pubpro/11')}}">评估审计</a></p>
		<p><a href="{{url('/ucenter/pubpro/12')}}">固产转让</a></p>
		<p><a href="{{url('/ucenter/pubpro/13')}}">资产求购</a></p>
	</div>
</div>
<script>
$(function () {
	var token = $.session.get('token');
	if(!token){
		window.location = "{{url('/login')}}";
		return false;
	}

	$('.container').show();
});

	$('#pub').click(function(){
		var token = $.session.get('token');
		// var TypeID = getNum(window.location.pathname);
		$('#token').val(token);
	 	var data = $('form').serialize();
	 	console.log(data);
// return false;
		$.ajax({
			url:"http://api.ziyawang.com/api/service/confirm?token="+token,
			type:"POST",
			data:data,
			dataType:"json",
			success:function(msg){
				console.log(msg);
			}
		});
	});
</script>
@endsection