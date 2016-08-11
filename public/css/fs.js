$(function(){
	$('.page a').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
	});
	
})