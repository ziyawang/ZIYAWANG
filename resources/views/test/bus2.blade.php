@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/assess.css')}}?v=1.0.4" />
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
                    <div class="subject" id='P6'>
                        <div class="questions">
                            <span>6、国家政策对债务方所处行业的支持情况：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="鼓励行业1"><input type="radio" class="radios" id="sustain01" /></div>
                                <label for="sustain01" class="f14">鼓励行业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="限制行业1"><input type="radio" class="radios" id="sustain02" /></div>
                                <label for="sustain02" class="f14">限制行业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="淘汰行业1"><input type="radio" class="radios" id="sustain03" /></div>
                                <label for="sustain03" class="f14">淘汰行业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清除0"><input type="radio" class="radios" id="sustain04" /></div>
                                <label for="sustain04" class="f14">不清除</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P7'>
                        <div class="questions">
                            <span>7、债务方企业新产品开发及技术创新能力：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="好1"><input type="radio" class="radios" id="create01" /></div>
                                <label for="create01" class="f14">好</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="一般1"><input type="radio" class="radios" id="create02" /></div>
                                <label for="create02" class="f14">一般</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="较差0"><input type="radio" class="radios" id="create03" /></div>
                                <label for="create03" class="f14">较差</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清除0"><input type="radio" class="radios" id="create04" /></div>
                                <label for="create04" class="f14">不清除</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P8'>
                        <div class="questions">
                            <span>8、是否清楚债务方实际经营地址：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="清楚1"><input type="radio" class="radios" id="clear01" /></div>
                                <label for="clear01" class="f14">清楚</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="unclear01" /></div>
                                <label for="unclear01" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P9'>
                        <div class="questions">
                            <span>9、债务方企业负责人性别：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业，企业负责人是指对该企业有实际控制能力的人，如：法定代表人、大股东等）</span>
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
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="unclear02" /></div>
                                <label for="unclear02" class="f14">不清楚</label>
                            </div>
                        </div>    
                    </div>
                    <div class="subject" id='P10'>
                        <div class="questions">
                            <span>10、债务方企业负责人年龄：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业，企业负责人是指对该企业有实际控制能力的人，如：法定代表人、大股东等）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="小于25岁0"><input type="radio" class="radios" id="age01" /></div>
                                <label for="age01" class="f14">小于25岁</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="25岁至35岁1"><input type="radio" class="radios" id="age02" /></div>
                                <label for="age02" class="f14">25岁至35岁</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="36岁至50岁1"><input type="radio" class="radios" id="age03" /></div>
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
                    <a href="{{url('/test/page').'?type=bus&page=1'}}" class="assess-btn">返&nbsp;回</a>
                    <a id="next" href="javascript:;" class="assess-btn">下&nbsp;一&nbsp;页</a>
                </div>
                <span class="page-num">2/5</span>
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
        });

        var answer = $.cookie('answer');
        if(answer != undefined){
            answer = eval('(' + answer + ')');
        }
        if(answer['6']){
            var P6 = answer['6'][0];
            var P7 = answer['7'][0];
            var P8 = answer['8'][0];
            var P9 = answer['9'][0];
            var P10 = answer['10'][0];
            $('#P6').find('div[answer="'+ P6 +'"]').addClass('checked');
            $('#P7').find('div[answer="'+ P7 +'"]').addClass('checked');
            $('#P8').find('div[answer="'+ P8 +'"]').addClass('checked');
            $('#P9').find('div[answer="'+ P9 +'"]').addClass('checked');
            $('#P10').find('div[answer="'+ P10 +'"]').addClass('checked');
        }

    })
    $('#next').click(function(){
        var P6 = $('#P6').find('div[class="status checked"]').attr('answer');
        var P7 = $('#P7').find('div[class="status checked"]').attr('answer');
        var P8 = $('#P8').find('div[class="status checked"]').attr('answer');
        var P9 = $('#P9').find('div[class="status checked"]').attr('answer');
        var P10 = $('#P10').find('div[class="status checked"]').attr('answer');
        
        if( P6 == undefined || P7 == undefined || P8 == undefined || P9 == undefined || P10 == undefined ){
            layer.alert('您还没答完！');
            return false;
        }
        var json = $.cookie('answer');
        if(json != undefined){
            json = eval('(' + json + ')');
        }
        json["6"] = [P6];
        json["7"] = [P7];
        json["8"] = [P8];
        json["9"] = [P9];
        json["10"] = [P10];
        var str = JSON.stringify(json);
        var date = new Date();
        date.setTime(date.getTime() + (120 * 60 * 1000));
        $.cookie('answer', str, { expires: date, path: '/', domain: '.ziyawang.com' });
        window.location.href = "{{url('/test/page')}}" + '?type=bus&page=3';
    })
</script>
@endsection