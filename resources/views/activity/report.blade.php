@extends('activity.home')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{url('css/train.css')}}" />
    <script type="text/javascript" src="{{url('js/YMDClass.js')}}"></script>
    <div class="find_service">
        <ul>
            <li></li>
        </ul>
    </div>
    <!-- banner/end -->
    <div class="train">
        <img class="enrollTit" src="img/px_enroll.png" height="163" width="670" />
        <span class="px_bg rubbit1"></span>
        <span class="rubbit2"></span>
        <div class="enroll">
            <form id="formPC" action="" method="">
                <div class="row clearfix">
                    <label class="fl colLeft"><em class="must">*</em>姓名：</label>
                    <span class="fl colRight"><input type="text" class="notNull name" name="name" /></span>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft"><em class="must">*</em>性别：</label>
                    <div class="fl colRight">
                        <span class="radiOpt checkin"><input type="radio" class="notNull sex" name="sex" id="male" value="男" /><label for="male">男</label></span>
                        <span class="radiOpt"><input type="radio"  class="notNull sex" id="female" name="sex" value="女" /><label for="female">女</label></span>
                    </div>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft">出生年月：</label>
                    <div class="fl colRight nowhite">
                        <select name="year" class="row-select row-select1 select-time"></select><span class="ml">年</span>
                        <select name="month" class="row-select row-select2 select-time"></select><span class="ml">月</span>
                        <select name="day" class="row-select row-select3 select-time"></select><span class="ml nomr">日</span>
                    </div>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft"><em class="must">*</em>手机：</label>
                    <span class="fl colRight"><input type="text" class="notNull phone" name="phonenumber" /></span>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft"><em class="must">*</em>微信：</label>
                    <span class="fl colRight"><input type="text" class="notNull wechat" name="wechat" /></span>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft"><em class="must">*</em>邮箱：</label>
                    <span class="fl colRight"><input type="text" class="notNull email" name="email" /></span>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft">居住地：</label>
                    <span class="fl colRight"><input type="text" class="live" name="live" /></span>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft"><em class="must">*</em>工作单位：</label>
                    <span class="fl colRight"><input type="text" class="notNull work"  name="work"/></span>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft">培训目标：</label>
                    <span class="fl colRight"><input type="text" class="goal"  name="goal"/></span>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft">工作经历：</label>
                    <span class="fl colRight"><textarea id="" class="task" name="task"></textarea></span>
                    <p class="cuo"></p>
                </div>
                <div class="row clearfix">
                    <label class="fl colLeft">汇款方式：</label>
                    <div class="fl way">
                        <p>请将培训费汇至以下单位账户：</p>
                        <p>开户行：招商银行北京海淀黄庄支行</p>
                        <p>户名：资芽（北京）网络科技有限公司</p>
                        <p>账号：110922145410201</p>
                    </div>
                </div>
            </form>
                <div class="enrollBtn">
                    <input type="submit" value="提 交" class="btnEnroll" />
                    <input type="reset" value="重 置" class="btnEnroll reset" />
                </div>
        </div>
    </div>

<script type="text/javascript">
    $(function(){
        new YMDselect('year','month','day');
        $('.radiOpt').click(function(event) {
            $(this).addClass('checkin').siblings().removeClass('checkin');
        });
        $('.name').blur(function(event) {
            if($(this).val()==''){
                $(this).closest('.row').children('.cuo').html('姓名不能为空！')
            }else{
                $(this).closest('.row').children('.cuo').html('')
            }
        });
        $('.phone').blur(function(event) {
            var mobile = /^1[3|4|5|7|8][0-9]{9}$/;
            if($(this).val()=='' || !(mobile.test($(this).val()))){
                $(this).closest('.row').children('.cuo').html('手机号不能为空或输入错误！')
            }else{
                $(this).closest('.row').children('.cuo').html('')
            }
        });
        $('.wechat').blur(function(event) {
            if($(this).val()==''){
                $(this).closest('.row').children('.cuo').html('微信不能为空！')
            }else{
                $(this).closest('.row').children('.cuo').html('')
            }
        });
        $('.email').blur(function(event) {
            var email = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.[a-zA-Z0-9_-]{2,3}){1,2})$/;
            if($(this).val()=='' || !(email.test($(this).val()))){
                $(this).closest('.row').children('.cuo').html('邮箱不能为空或输入错误！')
            }else{
                $(this).closest('.row').children('.cuo').html('')
            }
        });
        $('.work').blur(function(event) {
            if($(this).val()==''){
                $(this).closest('.row').children('.cuo').html('工作单位不能为空！')
            }else{
                $(this).closest('.row').children('.cuo').html('')
            }
        });
        $('.reset').click(function(event) {
//            $('.row input').val('');
//            $(".row-select1 option:first").prop("selected", 'selected');
//            $(".row-select2 option:first").prop("selected", 'selected');
//            $(".row-select3 option:first").prop("selected", 'selected');
//            new YMDselect('year','month','day');
            location.reload()
        });
    })
</script>
<script>
    $(function(){
        $(".btnEnroll").on("click",function(){
            var data = $('#formPC').serialize();
            $.ajax({
                url:"http://apitest.ziyawang.com/v1/enroll?access_token=token&" + data,
                data:data,
                dataType:"json",
                type:"POST",
                success:function(msg){
                    if(msg.status_code == 200){
                        layer.confirm(msg.msg, {icon: 1},function(){
                            location.reload()
                        });

                    }
                }

            })
        })

    });
</script>
@endsection