<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<script src="{{asset('/js/jquery.js')}}"></script>
<style type="text/css">
    .problem{width: 400px;min-height: 30px;line-height: 28px;display: block;border: 1px solid #ccc;padding: 2px 5px;margin: 10px 0;}
    .opts{margin-top: 10px;}
    .opts li{margin-bottom: 10px;}
    .opts em{display: inline-block;width: 2em;}
    .opts .inp{border: 1px solid #ccc;width: 310px;margin-right: 20px;padding: 2px 5px;}
    .opts .score{border: 1px solid #ccc;width: 35px;padding: 2px 5px;margin-right: 3px;}
    .opts .add{margin-left: 5px;color:#00b307;}
    .opts .delete{color:#c10000;margin-left: 5px;}
    .opts a:hover{color:#ffa000;}
</style>
</head>
<body>
    <div class="form">
        <select name="" id="" class="mold">
            <option value="1">个人债权</option>
            <option value="2">企业商账</option>
        </select>
        <div class="question">
            <span class="cap">请选择题目类型</span>
            <input type="radio" id="single" name="choice" value="0" /><label for="single">单选</label>
            <input type="radio" id="multi" name="choice" value="2" /><label for="multi">多选</label>
            <input type="radio" id="fill" name="choice" value="1" /><label for="fill">填空</label>
        </div>
        题目：<div><input type="text" name="" id="question"></div>
        答案：
        <ul class="opts">
            <li><em>1</em><input type="text" class="inp" placeholder="请输入" />分值：<input type="text" class="score" />分<a href="javascript:;" class="add">+添加</a></li>
        </ul>
    </div>
    <button id="pub">提交</button>
</body>
</html>
<script type="text/javascript">
    $(function(){
        var num = 1;
        $('.add').click(function() {
            var liNode = $('<li><em></em><input type="text" class="inp" placeholder="请输入" />分值：<input type="text" class="score" />分<a href="javascript:;" class="delete" value='+num+'>- 删除</a></li>');
            num++;
            $('.opts').append(liNode);
            liNode.children('em').html(num);
            $('.delete').on('click', function(event) {
                $(this).parent().remove();
                $('.opts li').each(function(index, el) {
                    $(this).children('em').html((index+1));
                });
                var ind = $('.opts li:last').index();
                num = ind + 1;
            });
        });
    })
    $('#pub').click(function(){
        var question = $('#question').val();
        var paper = $('.mold').val();
        var type = $('input[name="choice"]:checked').val();
        var choice = $('.opts').find('li');
        var choices = '';
        choice.each(function(index,value){
            choices += $(this).find('input[class="inp"]').val() + $(this).find('input[class="score"]').val() + ";";
        });
        choices = choices.substring(0,choices.length-1);
        var data = {'Question':question,'Choices':choices,'Type':type,'Paper':paper,'access_token':'token'};
        $.ajax({
            "url":"http://apitest.ziyawang.com/v1/temp/addquestion",
            "type":"POST",
            "data":data,
            "dataType":"json",
            "success":function(msg){
                if(msg.status_code == "200"){
                    alert('ok!');
                    window.location.reload();
                }
            }
        });
    })
</script>