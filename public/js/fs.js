$(function(){
	$('.page a,.aa a,.service_type a').click(function(){
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

    
	$('.zhedie .more').click(function(){
		$(this).removeClass('active').siblings().addClass('active');
		$('.hide').stop().slideToggle(300);
	})
	$('.area a').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		$('.hide a').removeClass('current');
	})
	$('.hide a').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		$('.area a').removeClass('current');
	})
	$('.agree_pro').click(function(){
		$(this).toggleClass('on');
	})
})