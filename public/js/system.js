
$(document).ready(function(){
    //
    var deleteAll = $('.delete');
    var selectInputs = $('.check');
    var checkAllInputs = $('.check_all');
    for(var i = 0; i < selectInputs.length; i++ ){
        selectInputs[i].onclick = function () {
            if (this.className.indexOf('check_all') >= 0) { //如果是全选，则吧所有的选择框选中
                for (var j = 0; j < selectInputs.length; j++) {
                    selectInputs[j].checked = this.checked;
                }
            }
            if (!this.checked) { //只要有一个未勾选，则取消全选框的选中状态
                for (var i = 0; i < checkAllInputs.length; i++) {
                    checkAllInputs[i].checked = false;
                }
            }
        }
    }
    //标记为已读===================待完善（数字未变化）
    $('.sign_read').click(function(event) {
        //var num = parseInt($('.systeminfo i').html());
        $('table .check').each(function(index, element) {
            //alert($('.check').length);
            if($(element).is(':checked')){
                $(element).closest('tr').addClass('haveread');
            }
        });
        var len1 = $('.haveread').length;
        //alert(len);
        var len = $('.systeminfo b').html();
        var num = len - len1;
        $('.systeminfo i').html(num);
    });
    //删除=============待完善（数字未变化）
    $('.delete').click(function(event) {
        var con = confirm('确定删除该邮件吗？');
        if(con){
            $('table .check').each(function(index, element) {
                if($(element).is(':checked')){
                    $(element).closest('tr').remove();
                }
            });
            var num1 = $('table tr').length;
            var num2 = $('.haveread').length;
            var num3 = num1 - num2;
            $('.systeminfo b').html(num1);
            $('.systeminfo i').html(num3);

            var day1 = $('.table1 tr').length;
            var day2 = $('.table2 tr').length;
            var day3 = $('.table3 tr').length;
            $('.day .num span').html(day1);
            $('.week .num span').html(day2);
            $('.long .num span').html(day3);
        }else{
            return false;
        }
    });
    //清空所有
    
    $('.td_word').click(function(event) {
        $(this).parent().addClass('haveread');
    });
});