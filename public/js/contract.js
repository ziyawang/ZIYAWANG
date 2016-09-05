
$(document).ready(function(){
    var ulen1 = $('.con_first ul').length;
    var ulen2 = $('.con_twith ul').length;
    var ulen3 = $('.con_third ul').length;
    //alert(ulen);
    var wid = $('.cl_lawfile ul').width();
    //alert(wid1);
    var wid1 = wid * ulen1;
    var wid2 = wid * ulen2;
    var wid3 = wid * ulen3;
    var num = 0;
    $('.con_first .cl_lawfile').css('width',wid1+'px');
    $('.con_twith .cl_lawfile').css('width',wid2+'px');
    $('.con_third .cl_lawfile').css('width',wid3+'px');
    $('.con_rightbtn').click(function(e) {
            var ulen = $(this).parent().find('ul').length;
            num++;
            if(num > ulen-1){//大于ul个数就触发了极值情况 这时候 我们应该让num恢复到0
                num = 0;
            }
            var move = num * -wid;
            $(this).parent().find('.cl_lawfile').stop().animate({'left':move + 'px'},500)
        });
        
        
        $('.con_leftbtn').click(function(e) {
            var ulen = $(this).parent().find('ul').length;
            num--;
            if(num < 0){// 触发左边的极值 这时候我们让num恢复到ul个数
                num = ulen-1;
            }
            var move = num * -wid;
            $(this).parent().find('.cl_lawfile').animate({'left': move + 'px'},500);
            
        });

});