@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/assess.css')}}?v=2.1.4.1" />
    <!-- banner / start -->
    <div class="banner-assess">
        <ul>
            <li></li>
        </ul>
    </div>
    <!-- banner / end -->
    <!-- 债权信息填写 /start -->
    <div class="assess">
        <h2 class="assess-title">风险评估</h2>
        <div class="assess-start clearfix">
            <div class="assess-l">
                <div class="hint">（根据您债权实际情况的不同，本测评共25-30题不等）</div>
                <div class="mixture">
                    <div class="subject" id='P1'>
                        <div class="questions">
                            <span>1、债务方是否能联系：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="能5"><input type="radio" class="radios" id="can01" /></div>
                                <label for="can01" class="f14">能</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不能1"><input type="radio" class="radios" id="cant01" /></div>
                                <label for="cant01" class="f14">不能</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P2'>
                        <div class="questions">
                            <span>2、债务方姓名：</span><input type="text" class="inps" id="name"/><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="不清楚"><input type="radio" class="radios" id="unclear01" /></div>
                                <label for="unclear01" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P3'>
                        <div class="questions">
                            <span>3、债务方身份证号：</span><input type="text" class="inps idnumber" id="idcard"/><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="不清楚"><input type="radio" class="radios" id="unclear02" /></div>
                                <label for="unclear02" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P4'>
                        <div class="questions">
                            <span>4、债务方的性别：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="男1"><input type="radio" class="radios" id="male" /></div>
                                <label for="male" class="f14">男</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="女1"><input type="radio" class="radios" id="female" /></div>
                                <label for="female" class="f14">女</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="unclear03" /></div>
                                <label for="unclear03" class="f14">不清楚</label>
                            </div>
                        </div>    
                    </div>
                    <div class="subject" id='P5'>
                        <div class="questions">
                            <span>5、债务方的年龄：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="小于25岁1"><input type="radio" class="radios" id="age01" /></div>
                                <label for="age01" class="f14">小于25岁</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="25岁至35岁2"><input type="radio" class="radios" id="age02" /></div>
                                <label for="age02" class="f14">25岁至35岁</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="36岁至50岁2"><input type="radio" class="radios" id="age03" /></div>
                                <label for="age03" class="f14">36岁至50岁</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="大于50岁1"><input type="radio" class="radios" id="age04" /></div>
                                <label for="age04" class="f14">大于50岁</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="age05" /></div>
                                <label for="age05" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="assess-btn2">
                    <a href="{{url('/test/index')}}" class="assess-btn">返&nbsp;回</a>
                    <a class="assess-btn" id="next">下&nbsp;一&nbsp;页</a>
                </div>
                <span class="page-num">1/5</span>
            </div>
            <div class="assess-r">
                <a href="javascript:;" id="pub" class="assess-btn ma24">免&nbsp;费&nbsp;发&nbsp;布</a>
                <a href="javascript:;" class="assess-btn ma24 online-serv">在&nbsp;线&nbsp;客&nbsp;服</a>
                <span class="ma24 assess-hot">400-898-8557</span>
                <div class="assess-img">
                    <img src="/img/footer.png" />
                    <span>APP下载</span>
                </div>
            </div>
        </div>
    </div>
    <!-- 债权信息填写 /end -->
<script type="text/javascript">
    function numLimit(id,str) {
        id.value = str.replace(/[^\d.]/g,'');
    }
    $('#pub').click(function(){
        var token = $.cookie('token');
        if(!token){
            window.open("{{url('/login')}}","status=yes,toolbar=yes, menubar=yes,location=yes"); 
            return false;
        }

        window.location = "{{url('/ucenter/index')}}";
    })
    $(function(){
        $('.online-serv').click(function() {
            window.open('http://p.qiao.baidu.com/cps2/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%229573093%22%2C%22userId%22%3A%2221573996%22%7D','_blank','width=600,height=600');
        });

        $('.status').click(function() {
            $(this).toggleClass('checked');
            $(this).parent().siblings().children('.status').removeClass('checked');
            if($(this).hasClass('checked')){
                $(this).closest('.opts').siblings().children('.inps').attr('readonly', 'readonly');
                $(this).closest('.opts').siblings().children('.inps').css('color', '#999');
            }else{
                $(this).closest('.opts').siblings().children('.inps').removeAttr('readonly');
                $(this).closest('.opts').siblings().children('.inps').css('color', '#333');
            }
        });

        var answer = $.cookie('answer');
        if(answer != undefined){
            answer = eval('(' + answer + ')');
            
            var P1 = answer['1'][0];
            var P2 = answer['2'][0];
            var P3 = answer['3'][0];
            var P4 = answer['4'][0];
            var P5 = answer['5'][0];
            $('#P1').find('div[answer="'+ P1 +'"]').addClass('checked');
            if(P2 == "不清楚"){
                $('#P2').find('div[answer="'+ P2 +'"]').addClass('checked');
                $('#name').attr('readonly', 'readonly');
            } else {
                $('#name').val(P2)
            }
            if(P3 == "不清楚"){
                $('#P3').find('div[answer="'+ P3 +'"]').addClass('checked');
                $('#idcard').attr('readonly', 'readonly');
            } else {
                $('#idcard').val(P3)
            }
            $('#P3').find('div[answer="'+ P3 +'"]').addClass('checked');
            $('#P4').find('div[answer="'+ P4 +'"]').addClass('checked');
            $('#P5').find('div[answer="'+ P5 +'"]').addClass('checked');
        }
    })

    $('#next').click(function(){
        var P1 = $('#P1').find('div[class="status checked"]').attr('answer');
        var P2 = $('#P2').find('div[class="status checked"]').attr('answer');
        if(P2 == undefined){
            P2 = $('#name').val();
        }
        var P3 = $('#P3').find('div[class="status checked"]').attr('answer');
        if(P3 == undefined){
            P3 = $('#idcard').val();
        }
        var P4 = $('#P4').find('div[class="status checked"]').attr('answer');
        var P5 = $('#P5').find('div[class="status checked"]').attr('answer');
        if( P1 == undefined || P2 == undefined || P3 == undefined || P4 == undefined || P5 == undefined ){
            layer.alert('您还没答完！');
            return false;
        }
        var json = $.cookie('answer');
        if(json != undefined){
            json = eval('(' + json + ')');
        } else {
            json = {};
        }
        json["1"] = [P1];
        json["2"] = [P2];
        json["3"] = [P3];
        json["4"] = [P4];
        json["5"] = [P5];
        var str = JSON.stringify(json);
        var date = new Date();
        date.setTime(date.getTime() + (120 * 60 * 1000));
        $.cookie('answer', str, { expires: date, path: '/', domain: '.ziyawang.com' });
        window.location.href = "{{url('/test/page')}}" + '?type=per&page=2';
    })
</script>
@endsection