
$(function(){
	//banner轮播
	var myFn = function(){
		olKey++;
		if( olKey > 2){
			olKey = 0;
		}
		$('.banner ol li').eq(olKey).addClass('current').siblings().removeClass('current');
		imgKey++;
		if(imgKey > 3){
			imgKey = 1;
			$('.banner ul').css('left','0');
		}
		var move = imgKey * -100;
		$('.banner ul').stop().animate({'left':move + '%'},500);
	}
		
	var timer01 = null;
	timer01 = setInterval(myFn,2000);
	
	$('.banner').hover(function(e) {
	          clearInterval(timer01);
	},function(){
		timer01 = setInterval(myFn,2000);
	});
		
		
	var myLi = $('.banner ul li:eq(0)').clone(true);
	var myTag = $(myLi)
	$('.banner ul').append(myTag);
	var olKey = 0;
	var imgKey = 0;
	$('.banner .rightBtn').click(function(e) {
		myFn();
    		});
	$('.banner .leftBtn').click(function(e) {
        		olKey--;
		if(olKey < 0){
			olKey = 2;
		}
		$('.banner ol li').eq(olKey).addClass('current').siblings().removeClass('current');
		imgKey--;
		if(imgKey < 0){
			imgKey = 2;
			$('.banner ul').css('left','-300%');
		}
		var move = imgKey * -100;
		$('.banner ul').stop().animate({'left':move + '%'},500);
   	});
	$('.banner ol li').click(function(e) {
        		$(this).addClass('current').siblings().removeClass('current');
		
		var move = $(this).index() * -100;
		$('.banner ul').stop().animate({'left':move + '%'},500);
		imgKey = $(this).index();
		olKey = $(this).index();
    	});
	//登录注册切换
	$('.login_tab ul li').click(function(){
		var index = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$('.login_tab_content').eq(index).addClass('ltc_show').siblings().removeClass('ltc_show');
	})
	//
	$('.close').click(function() {
		$(this).prev('.findinp').val('');
	})
	//视频轮播
	var num = 0;
	$('.db_rightBtn').click(function(e) {
		num++;
		if(num > 2){
			num = 0;
		}
		$('.bar ol li').eq(num).addClass('current').siblings().removeClass('current');
		
		var move = num * -930;
		$('.video_content ul').stop().animate({'left':move + 'px'},1000)
    });
	$('.db_leftBtn').click(function(e) {
        		num--;
		if(num < 0){
			num = 2;
		}
		
		//ol的li
		$('.bar ol li').eq(num).addClass('current').siblings().removeClass('current');
		
		//控制ul移动
		var move = num * -930;
		$('.video_content ul').animate({'left': move + 'px'},1000);
		
    });
    //
	$('.acl').click(function(){
		$(this).toggleClass('on');
	})
	//左侧边栏高度
	var hei = $('.main_right').height();
	$('.main_left').css('height',hei+'px');
	//收藏点击切换
	$('.collect').click(function(event) {
		if($(this).children('span').html()=='收藏'||$(this).children('span').html()=='取消收藏'){
			$(this).children('em').addClass('star_cl');
			$(this).children('span').html('已收藏');
		}else{
			$(this).children('em').removeClass('star_cl');
			$(this).children('span').html('取消收藏');
		}
		
	});
	$('.star').click(function(event) {
		$(this).toggleClass('star_cl');
	});
	//视频划过
    $('.vc ul li').hover(function(){
    	$(this).find('.zhezhao').stop().fadeIn(500);
    	$(this).children('.vc_icon').stop().fadeIn(500);
    	$(this).stop().animate({'top':'-5px'},300);
    },function(){
    	$(this).find('.zhezhao').stop().fadeOut(500);
    	$(this).children('.vc_icon').stop().fadeOut(500);
    	$(this).stop().animate({'top':'0px'},300);
    })
//视频种类切换
	$('.vs_a a').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		var cont = $(this).index();
		$('.video_content').eq(cont).addClass('on').siblings().removeClass('on');
	})
// 视频时间切换
	$('.list_video a').click(function(event) {
		$(this).addClass('current').siblings().removeClass('current');
		var ind = $(this).index();

		$(this).closest('h3').next('.time_choice').children('ul').eq(ind).addClass('current').siblings().removeClass('current');
	});
})
