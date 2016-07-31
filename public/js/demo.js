    $(function(){
        var myFn = function(){
            olKey++;
            if( olKey > 4){
                olKey = 0;
            }
            $('.ol li').eq(olKey).addClass('current').siblings().removeClass('current');
            imgKey++;
            if(imgKey > 10){
                imgKey = 0;
                $('.news_box ul').css('left','0');
            }
            var move = imgKey * -319;
            $('.news_box ul').stop().animate({'left':move + 'px'},300);
        }
        
        var timer01 = null;
        timer01 = setInterval(myFn,2000);
        
        $('.news_box').hover(function(e) {
            clearInterval(timer01);
        },function(){
            timer01 = setInterval(myFn,2000);
        });
            
            
        var myClone = $('.news_box ul li:eq(0),.news_box ul li:eq(1),.news_box ul li:eq(2),.news_box ul li:eq(3),.news_box ul li:eq(4)').clone(true);
        var myTag = $(myClone);
        $('.news_box ul').append(myTag);
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
                olKey = 4;
            }
            $('.ol li').eq(olKey).addClass('current').siblings().removeClass('current');
            imgKey--;
            if(imgKey < 0){
                imgKey = 4;
                $('.news_box ul').css('left','-3600px');
            }
            var move = imgKey * -319;
            $('.news_box ul').stop().animate({'left':move + 'px'},300);

        });
        $('.ol li').click(function(e) {
            $(this).addClass('current').siblings().removeClass('current');
            
            var move = $(this).index() * -319;
            $('.news_box ul').stop().animate({'left':move + 'px'},300);
            imgKey = $(this).index();
            olKey = $(this).index();
        });
    })