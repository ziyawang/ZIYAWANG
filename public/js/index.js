$(function() {

	//新闻tab栏切换

	// $('.home_title a').click(function(){

	// 	var index = $(this).index();

	// 	$(this).addClass('current').siblings().removeClass('current');

	// 	$('.company_news').eq(index).addClass('current').siblings().removeClass('current');

	// })

        //盒子居中

        var nbwid = $('.news_box').width();

        //alert(nbwid);

        var win = $(window).width();

        //alert(win);

        var leftP = -(nbwid - win)/2

        $('.news_box').css('left',leftP+'px');



});	