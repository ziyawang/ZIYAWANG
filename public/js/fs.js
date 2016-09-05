$(function(){
	$('.page a,.aa a,.service_type a,.vip_resource a').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
	});
	//点击展示选项
	$('.service_type a').click(function(event) {
		$(this).addClass('current').siblings().removeClass('current');
		var index = $(this).index();
		$('.cover1').eq(index).show().siblings().hide();
	});

	//
	$('.defa01').click(function(){
        $('#defa01').addClass('bind');
    });
    $('.defa02').click(function(){
    	$('#defa01').removeClass('bind');
    })

    //更多地区展开收起
	$('.hs_change .m1').click(function(){
		$(this).removeClass('active').siblings().addClass('active');
		$('.hide').stop().slideDown(300);
	})
	$('.hs_change .m2').click(function(){
		$(this).removeClass('active').siblings().addClass('active');
		$('.hide').stop().slideUp(300);
	})

	$('.area a').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		$('.hide a').removeClass('current');
	})
	$('.hide a').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		$('.area a').removeClass('current');
	})
	//收藏按钮切换
	$('.storeup i').click(function() {
		var title = $(this).attr("title");
		if(title == '收藏'){
			$(this).attr('title', '已收藏');
			$(this).addClass('red');
		}else{
			$(this).attr('title', '收藏');
			$(this).removeClass('red');
		}
	});
	
	//鼠标滑过li
	$('.item').hover(function() {
		$(this).children('.storeup').stop().animate({'bottom':'0px'}, 200);
	}, function() {
		$(this).children('.storeup').stop().animate({'bottom':'-42px'}, 300);
	});
	// //文字超出截断
	// $('.descriptionInwords').each(function(){
	// 	var maxwidth=36;
	// 	if($(this).text().length>maxwidth){
	// 		$(this).text($(this).text().substring(0,maxwidth));
	// 		$(this).html($(this).html()+'…');
	// 	}
	// });
	// $('.ap_check').click(function(){
	// 	$(this).toggleClass('on');
	// })
		//点击关闭协议
	$('.xy_close,.approve').click(function(event) {
		$('.xy_law').hide();
		$('.xieyi').hide();

	});
	//表单验证
	$('input.sec_tel').blur(function(event) {
		if($(this).val()===""){
			$(this).next().html('手机号不能为空！');
			return;
		}else{
			$(this).next('.error').html('');
		}
	});
	$('input.sec_pwd').blur(function(event) {
		if($(this).val()===""){
			$(this).next().html('密码不能为空！');
			return;
		}else{
			$(this).next('.error').html('');
		}
	});
	$('input.sec_pwd2').blur(function(event) {
		if($(this).val()===""){
			$(this).next().html('密码不能为空！');
			return;
		}else if($(this).val()!==$('input.sec_pwd').val()){
			$(this).next().html('密码不一致！');
		}else{
			$(this).next('.error').html('');
		}
	});
//点击协议弹出层
	$('.prop').click(function(event) {
		$('.xieyi,.xy_law').show();
	});
})