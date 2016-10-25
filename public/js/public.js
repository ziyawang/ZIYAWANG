
$(function(){
	//banner轮播
	var len =  $('.banner ul li').length + 1;//============li个数
	//alert(len)
	var ulwid = len*100; //================ul的宽度
	var liwid = 100/len; //=================li的宽度

	$('.banner ul').css('width',ulwid+'%');
	$('.banner ul li').css('width',liwid+'%');
	var myFn = function(){
		olKey++;
		if( olKey > len-2){
			olKey = 0;
		}
		$('.banner ol li').eq(olKey).addClass('current').siblings().removeClass('current');
		imgKey++;
		if(imgKey > len-1){
			imgKey = 1;
			$('.banner ul').css('left','0');
		}
		var move = imgKey * -100;
		$('.banner ul').stop().animate({'left':move + '%'},500);
	}
		
	var timerBan = null;
	timerBan = setInterval(myFn,3500);
	
	$('.banner').hover(function(e) {
	          clearInterval(timerBan);
	},function(){
		timerBan = setInterval(myFn,3500);
	});
		
		
	var myLi = $('.banner ul li:eq(0)').clone(true);
	var myTag = $(myLi)
	$('.banner ul').append(myTag);
	var olKey = 0;
	var imgKey = 0;
	//点击右侧按钮
	$('.banner .rightBtn').click(function(e) {
		myFn();
    });
	//点击左侧按钮
	$('.banner .leftBtn').click(function(e) {
        		olKey--;
		if(olKey < 0){
			olKey = len-2;
		}
		$('.banner ol li').eq(olKey).addClass('current').siblings().removeClass('current');
		imgKey--;
		if(imgKey < 0){
			imgKey = len-2;
			var x = (len-1)*-100;
			$('.banner ul').css('left',x+'%');
		}
		var move = imgKey * -100;
		$('.banner ul').stop().animate({'left':move + '%'},500);
   	});
   	//点击ol li
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
		$('.red').html('');
		$(this).addClass('current').siblings().removeClass('current');
		$('.login_tab_content').eq(index).addClass('ltc_show').siblings().removeClass('ltc_show');
	})
	//
	$('.close').click(function() {
		$(this).prev('.findinp').val('');
	})
//==============8.31 new add
//收藏==========start
	$('.collect').click(function(event) {
		var token = $.cookie('token');
    	if(token){
			if($(this).children('span').html()=='收藏'||$(this).children('span').html()=='取消收藏'){
				$(this).children('i').addClass('red');
				$(this).children('span').html('已收藏');
			}else{
				$(this).children('i').removeClass('red');
				$(this).children('span').html('收藏');
			}

    	}
		
	});
//收藏============end
//鼠标滑过头像效果=========start
	// $('.headBox').hover(function() {
	// 	$(this).find('img').css('opacity', '0.7');
	// 	$('.colorful').addClass('colorRot');
	// }, function() {
	// 	$(this).find('img').css('opacity', '1');
	// 	$('.colorful').removeClass('colorRot');
	// });
//================弹出层
	// $('.certain').click(function(event) {
 //        $(this).parent().hide();
 //        $('.poplayer').hide();
 //    });
 //    //声明弹出方法
	// var myFun = function(box){
 //        $('.poplayer').show();
 //        $('.'+box).show();
 //    }
 //    //
 //    // $('.lookConnection').click(function(event) {
 //    // 	myFun('poplayer1');
 //    // });
 //    $('.privateChat').click(function(event) {
 //    	myFun('poplayer2');
 //    });
//弹出层==============end
	$('.acl').click(function(){
		$(this).toggleClass('on');
	})
	//左侧边栏高度
	var hei = $('.main_right').height();
	$('.main_left').css('height',hei+'px');
	//收藏点击切换
	// $('.collect').click(function(event) {
	// 	if($(this).children('span').html()=='收藏'||$(this).children('span').html()=='收藏'){
	// 		$(this).children('em').addClass('star_cl');
	// 		$(this).children('span').html('已收藏');
	// 	}else{
	// 		$(this).children('em').removeClass('star_cl');
	// 		$(this).children('span').html('收藏');
	// 	}
		
	// });
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
	//修改密码
	$('.password').blur(function(event) {
		$parent=$(this).parent();
        $success="输入正确";
		$parent.find("i").remove();
		if($(this).val()==""){
		   $parent.append("<i class='error'>密码不能为空</i>");
	        return;
	    }
	    if(!(/^[a-zA-Z0-9_-]{6,18}$/).test($(this).val())){
		 	$parent.append("<i class='error'>密码只能输入6-18位的数字或者字母</i>");
		   	return;
		}else{
			$parent.append("<i class='success'>恭喜此密码可以用!</i>");  
		}
	})
	//密码验证
	$('.pwagain').blur(function(event) {
		$parent=$(this).parent();
        $success="输入正确";
		$parent.find("i").remove();
		if($(this).val()==""){
		    $parent.append("<i class='error'>密码不能为空</i>");
	        return;
		}
		if($(".password").val()!=$(this).val()){
			$parent.append("<i class='error'>对不起，您两次密码不一致！</i>");
			return;
		}
		else{
			$parent.append("<i class='success'>验证正确！</i>");
			return;
		}
	})
	//点击取消按钮弹出取消原因
	$('.cancel').click(function(event) {
		$('.reason_cov,.reason').show();
	});
	$('.rea_close').click(function(event) {
		$('.reason_cov,.reason').hide();
	});
	//鼠标滑过显示二维码
	$('.weixin1,.weibo1,.ziyaapp').hover(function() {
		$(this).children('span').toggle();
	})
	//表单验证手机号密码
	$('.enter_tel,.keydown_tel').blur(function(event) {
		if($(this).val()==""){
		    $('.red').html('手机号不能为空')
	        return;
		}else{
			$('.red').html('');
		}
	});
	$('.psd,.psd2').blur(function(event) {
		// if($(this).val()==""){
		//     $('.red').html('密码不能为空');
	 //        return;
		// }
		if(!(/^[a-zA-Z0-9_-]{6,18}$/).test($(this).val())){
		 	$('.red').html("密码只能输入6-18位的数字或者字母");
		   	return;
		}
		else{
			$('.red').html('');
		}
	});
	//协议弹出
	$('.prop').click(function(event) {
		$('.xieyi,.xy_law').show();
	});
	//点击关闭协议
	// $('.xy_close').click(function(event) {
	// 	$(this).parent().hide();
	// 	$('.xieyi').hide();
	// });
	$('.xy_close,.approve').click(function(event) {
		$('.xy_law').hide();
		$('.xieyi').hide();

	});
	//评论
	$('.review_txt').focus(function(event) {
		if($(this).html()=='文明上网理性发言...'){
			$(this).html('');
			$(this).css('color','#333');
		}
	});
	$('.review_txt').blur(function(event) {
		if($(this).html()==''){
			$(this).html('文明上网理性发言...');
			$(this).css('color','#999');
		}
	});
	
	//点赞
	(function ($) {
		$.extend({
			tipsBox: function (options) {
				options = $.extend({
					obj: null,  //jq对象，要在那个html标签上显示
					str: "+1",  //字符串，
					startSize: "12px",  //动画开始的文字大小
					endSize: "30px",    //动画结束的文字大小
					interval: 600,  //动画时间间隔
					color: "red",    //文字颜色
					callback: function () { }    //回调函数
				}, options);
				$("body").append("<span class='num'>" + options.str + "</span>");
				var box = $(".num");
				var left = options.obj.offset().left + options.obj.width() / 2;
				var top = options.obj.offset().top - options.obj.height()/2;
				box.css({
					"position": "absolute",
					"left": left + "px",
					"top": top + "px",
					"z-index": 9999,
					"font-size": options.startSize,
					"line-height": options.endSize,
					"color": options.color
				});
				box.animate({
					"font-size": options.endSize,
					"opacity": "0",
					"top": top - parseInt(options.endSize) + "px"
				}, options.interval, function () {
					box.remove();
					options.callback();
				});
			}
		});
	})(jQuery);
})