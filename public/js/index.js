$(function() {
	//新闻tab栏切换
	$('.home_title a').click(function(){
		var index = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$('.company_news').eq(index).addClass('current').siblings().removeClass('current');
	})
	

	//视频定时器轮播
	// var olen = $('.bar ol li').length;
	// var videoUl = (olen+1)*100;
	// $('.video_content ul').css('width',videoUl+'%');

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
			var move = imgKey * -1200;
			$('.video_content ul').stop().animate({'left':move + 'px'},2500);
		}
		
		var timer01 = null;
		timer01 = setInterval(myFn,7000);
		
		$('.video_content').hover(function(e) {
            clearInterval(timer01);
        },function(){
			timer01 = setInterval(myFn,7000);
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
				$('.video_content ul').css('left','-3600px');
			}
			var move = imgKey * -1200;
			$('.video_content ul').stop().animate({'left':move + 'px'},2500);

        });
		$('.bar ol li').click(function(e) {
            $(this).addClass('current').siblings().removeClass('current');
			
			var move = $(this).index() * -1200;
			$('.video_content ul').stop().animate({'left':move + 'px'},2500);
			imgKey = $(this).index();
			olKey = $(this).index();
        });
		//新闻轮播
		var myFn2 = function(){
            olKey2++;
            if( olKey2 > 4){
                olKey2 = 0;
            }
            $('.ol li').eq(olKey2).addClass('current').siblings().removeClass('current');
            imgKey2++;
            if(imgKey2 > 10){
                imgKey2 = 0;
                $('.news_box ul').css('left','0');
            }
            var move2 = imgKey2 * -319;
            $('.news_box ul').stop().animate({'left':move2 + 'px'},300);
        }
        
        var timer02 = null;
        timer02 = setInterval(myFn2,2000);
        
        $('.news_box').hover(function(e) {
            clearInterval(timer02);
        },function(){
            timer02 = setInterval(myFn2,2000);
        });
            
            
        var myClone2 = $('.news_box ul li:eq(0),.news_box ul li:eq(1),.news_box ul li:eq(2),.news_box ul li:eq(3),.news_box ul li:eq(4)').clone(true);
        var myTag2 = $(myClone2);
        $('.news_box ul').append(myTag2);
        // var myTag = $(myLi)
        // $('.con ul').append(myTag);
        var olKey2 = 0;
        var imgKey2 = 0;
        $('.news_right').click(function(e) {
            myFn2();
        });
        $('.news_left').click(function(e) {
            olKey2--;
            if(olKey2 < 0){
                olKey2 = 4;
            }
            $('.ol li').eq(olKey2).addClass('current').siblings().removeClass('current');
            imgKey2--;
            if(imgKey2 < 0){
                imgKey2 = 4;
                $('.news_box ul').css('left','-3190px');
            }
            var move2 = imgKey2 * -319;
            $('.news_box ul').stop().animate({'left':move2 + 'px'},300);

        });
        $('.ol li').click(function(e) {
            $(this).addClass('current').siblings().removeClass('current');
            
            var move2 = $(this).index() * -319;
            $('.news_box ul').stop().animate({'left':move2 + 'px'},300);
            imgKey = $(this).index();
            olKey = $(this).index();
        });
        //盒子居中
        var nbwid = $('.news_box').width();
        //alert(nbwid);
        var win = $(window).width();
        //alert(win);
        var leftP = -(nbwid - win)/2
        $('.news_box').css('left',leftP+'px');

});	