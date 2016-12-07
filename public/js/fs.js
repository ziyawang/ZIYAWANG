$(function(){
    $('.page a,.aa a,.vip_resource a').click(function(){
        $(this).addClass('current').siblings().removeClass('current');
    });
    $('.service_type a').click(function() {
        $(this).addClass('current').siblings().removeClass('current');
        if($(this).hasClass('disposal')){
            $('.vip_resource,.area').addClass('bore');
            $('.hs_change .m1').unbind('click');
            $('.bore a').unbind('click');
            $('.m1').addClass('complain');
        }else{
            $('.vip_resource,.area').removeClass('bore');
            $('.m1').removeClass('complain');
            $('.hs_change .m1').bind('click',function(){
                $(this).removeClass('active').siblings().addClass('active');
                $('.hide').stop().slideDown(300);
            });
            $('.area a').bind('click',function(){
                $(this).addClass('current').siblings().removeClass('current');
                $('.hide a').removeClass('current');
            });
            $('.vip_resource a').bind('click', function() {
                $(this).addClass('current').siblings().removeClass('current');
            });
        }
    });
    //点击展示选项
    $('.service_type a').click(function(event) {
        $(this).addClass('current').siblings().removeClass('current');
        var index = $(this).index();
        $('.cover1').eq(index).show().siblings().hide();
    });

    //
    // $('.defa01').click(function(){
    //     $('#defa01').addClass('bind');
    // });
    // $('.defa02').click(function(){
    //     $('#defa01').removeClass('bind');
    // })

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
    
    
    // //鼠标滑过li
    // $('.item').hover(function() {
    //     $(this).children('.storeup').stop().animate({'bottom':'0px'}, 200);
    // }, function() {
    //     $(this).children('.storeup').stop().animate({'bottom':'-42px'}, 300);
    // });
    
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