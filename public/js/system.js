
$(document).ready(function(){
    // var all = $('.all')
    // var checkbox = $('.td_check input');
    // function getAll(){
    //     for(var i = 0; i < checkbox.length; i++ ){
    //         checkbox[i].onclick = function () {
    //             if (this.className.indexOf('check-all') >= 0) { //如果是全选，则吧所有的选择框选中
    //                 for (var j = 0; j < checkbox.length; j++) {
    //                     checkbox[j].checked = this.checked;
    //                 }
    //             }
    //             if (!this.checked) { //只要有一个未勾选，则取消全选框的选中状态
    //                 for (var i = 0; i < all.length; i++) {
    //                     all[i].checked = false;
    //                 }
    //             }
                
    //         }
    //     }
    // }
    $('.td_word').click(function(event) {
        $(this).parent().addClass('haveread');
    });
});