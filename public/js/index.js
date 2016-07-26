$(function() {
	//新闻tab栏切换
	$('.home_title a').click(function(){
		var index = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$('.company_news').eq(index).addClass('current').siblings().removeClass('current');
	})
	//新闻移动
	var num = 0;
	var func1=function(box1,box2){
		var w1=$('.'+box1 + ' li').width();
		var w2=$('.'+box2 +' ul').width();
			num++;
			if(num > 2){
				num = 0;
			}
			$('.ol li').eq(num).addClass('cur').siblings().removeClass('cur');
			var move = num * -w1+0.5;
			var move2 = num * -w2;
			$('.'+box1).stop().animate({'left':move + 'px'},500);
			$('.'+box2).stop().animate({'left':move2 + 'px'},500);

	};


	var func2 = function(box1,box2){
		var w1=$('.'+box1 + ' li').width();
		var w2=$('.'+box2 +' ul').width();
		num--;
		if(num < 0){
			num = 2;
		}
		
		//ol的li
		$('.ol li').eq(num).addClass('cur').siblings().removeClass('cur');
		
		//控制ul移动
		var move = num * -w1+0.5;
		var move2 = num * -w2;
		$('.'+box1).animate({'left': move + 'px'},500);
		$('.'+box2).animate({'left': move2 + 'px'},500);
	};
	$('.right').click(function(event) {
		func1('ul1','ul2');
	});
	$('.left').click(function(event) {
		func1('ul1','ul2');
	});
	$('.ol li').click(function(){
		$(this).addClass('cur').siblings().removeClass('cur');
		var count = $(this).index();
		//alert(count);
		var w1=$('.ul1 li').width();
		var w2=$('.ul2 ul').width();
		var move = count * -w1+0.5;
		var move2 = count * -w2;
		$('.ul1').animate({'left': move + 'px'},500);
		$('.ul2').animate({'left': move2 + 'px'},500);
	})

	//视频定时器轮播
		var myFn = function(){
			olKey++;
			if( olKey > 2){
				olKey = 0;
			}
			$('.bar ol li').eq(olKey).addClass('current').siblings().removeClass('current');
			imgKey++;
			if(imgKey > 3){
				imgKey = 1;
				$('.video_content ul').css('left','0');
			}
			var move = imgKey * -930;
			$('.video_content ul').stop().animate({'left':move + 'px'},300);
		}
		
		var timer01 = null;
		timer01 = setInterval(myFn,2000);
		
		$('.video_content').hover(function(e) {
            clearInterval(timer01);
        },function(){
			timer01 = setInterval(myFn,2000);
		});
			
			
		var myClone = $('.video_content ul li:eq(0),.video_content ul li:eq(1),.video_content ul li:eq(2),.video_content ul li:eq(3)').clone(true);
		var myTag = $(myClone);
		$('.video_content ul').append(myTag);
		// var myTag = $(myLi)
		// $('.con ul').append(myTag);
		var olKey = 0;
		var imgKey = 0;
		$('.db_rightBtn').click(function(e) {
			myFn();
        });
		$('.db_leftBtn').click(function(e) {
            olKey--;
			if(olKey < 0){
				olKey = 2;
			}
			$('.bar ol li').eq(olKey).addClass('current').siblings().removeClass('current');
			imgKey--;
			if(imgKey < 0){
				imgKey = 2;
				$('.video_content ul').css('left','-2790px');
			}
			var move = imgKey * -930;
			$('.video_content ul').stop().animate({'left':move + 'px'},300);

        });
		$('.bar ol li').click(function(e) {
            $(this).addClass('current').siblings().removeClass('current');
			
			var move = $(this).index() * -930;
			$('.video_content ul').stop().animate({'left':move + 'px'},300);
			imgKey = $(this).index();
			olKey = $(this).index();
        });
		//$(".bar_line p").css("width", "0px");


});	