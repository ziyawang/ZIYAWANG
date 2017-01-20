@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/assess.css')}}?v=2.1.0" />
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
                    <div class="subject" id='P11'>
                        <div class="questions">
                            <span>11、债务方企业负责人婚姻状况：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业，企业负责人是指对该企业有实际控制能力的人，如：法定代表人、大股东等）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="已结婚且有孩子1"><input type="radio" class="radios" id="marry01" /></div>
                                <label for="marry01" class="f14">已结婚且有孩子</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="已结婚且无孩子1"><input type="radio" class="radios" id="marry02" /></div>
                                <label for="marry02" class="f14">已结婚且无孩子</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="未结婚或离异1"><input type="radio" class="radios" id="marry03" /></div>
                                <label for="marry03" class="f14">未结婚或离异</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="marry04" /></div>
                                <label for="marry04" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P12'>
                        <div class="questions">
                            <span>12、债务方企业负责人遵纪守法、诚实守信情况：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业，企业负责人是指对该企业有实际控制能力的人，如：法定代表人、大股东等）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="好2"><input type="radio" class="radios" id="faith01" /></div>
                                <label for="faith01" class="f14">好</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="一般1"><input type="radio" class="radios" id="faith02" /></div>
                                <label for="faith02" class="f14">一般</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="较差0"><input type="radio" class="radios" id="faith3" /></div>
                                <label for="faith03" class="f14">较差</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="faith04" /></div>
                                <label for="faith04" class="f14">不清楚</label>
                            </div>
                        </div>                       
                    </div>
                    <div class="subject" id='P13'>
                        <div class="questions">
                            <span>13、债务方企业负责人行业经验：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业，企业负责人是指对该企业有实际控制能力的人，如：法定代表人、大股东等）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="5年以上1"><input type="radio" class="radios" id="exper01" /></div>
                                <label for="exper01" class="f14">5年以上</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="2年至5年1"><input type="radio" class="radios" id="exper02" /></div>
                                <label for="exper02" class="f14">2年至5年</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="2年以下1"><input type="radio" class="radios" id="exper03" /></div>
                                <label for="exper03" class="f14">2年以下</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="exper04" /></div>
                                <label for="exper04" class="f14">不清楚</label>
                            </div>
                        </div>   
                    </div>
                    <div class="subject" id='P14'>
                        <div class="questions">
                            <span>14、债务方企业负责人学历状况：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业，企业负责人是指对该企业有实际控制能力的人，如：法定代表人、大股东等）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="研究生及以上1"><input type="radio" class="radios" id="educate01" /></div>
                                <label for="educate01" class="f14">研究生及以上</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="本科1"><input type="radio" class="radios" id="educate02" /></div>
                                <label for="educate02" class="f14">本科</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="大专1"><input type="radio" class="radios" id="educate03" /></div>
                                <label for="educate03" class="f14">大专</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="其他1"><input type="radio" class="radios" id="educate04" /></div>
                                <label for="educate04" class="f14">其他</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="educate05" /></div>
                                <label for="educate05" class="f14">不清楚</label>
                            </div>
                        </div>
                    </div>
                    <div class="subject" id='P15'>
                        <div class="questions">
                            <span>15、本笔债权是否为企业商账：</span><span class="assess-tips"><em class="c-red">*</em>（企业商账是指企业在日常经营过程中因销售、提供服务等形成的应收账款）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="是1"><input type="radio" class="radios" id="yes01" /></div>
                                <label for="yes01" class="f14">是</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="否0"><input type="radio" class="radios" id="no01" /></div>
                                <label for="no01" class="f14">否</label>
                            </div>
                        </div>                       
                    </div>
                </div>
                <div class="assess-btn2">
                    <a href="{{url('/test/page').'?type=bus&page=2'}}" class="assess-btn">上&nbsp;一&nbsp;页</a>
                    <a id="next" href="javascript:;" class="assess-btn">下&nbsp;一&nbsp;页</a>
                </div>
                <span class="page-num">3/5</span>
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
        // radio
        $('.status').click(function() {
            $(this).toggleClass('checked');
            $(this).parent().siblings().children('.status').removeClass('checked');
        });

        var answer = $.cookie('answer');
        if(answer != undefined){
            answer = eval('(' + answer + ')');
        }
        if(answer['11']){
            var P11 = answer['11'][0];
            var P12 = answer['12'][0];
            var P13 = answer['13'][0];
            var P14 = answer['14'][0];
            var P15 = answer['15'][0];
            $('#P11').find('div[answer="'+ P11 +'"]').addClass('checked');
            $('#P12').find('div[answer="'+ P12 +'"]').addClass('checked');
            $('#P13').find('div[answer="'+ P13 +'"]').addClass('checked');
            $('#P14').find('div[answer="'+ P14 +'"]').addClass('checked');
            $('#P15').find('div[answer="'+ P15 +'"]').addClass('checked');
        }

    })
    $('#next').click(function(){
        var P11 = $('#P11').find('div[class="status checked"]').attr('answer');
        var P12 = $('#P12').find('div[class="status checked"]').attr('answer');
        var P13 = $('#P13').find('div[class="status checked"]').attr('answer');
        var P14 = $('#P14').find('div[class="status checked"]').attr('answer');
        var P15 = $('#P15').find('div[class="status checked"]').attr('answer');
        if( P11 == undefined || P12 == undefined || P13 == undefined || P14 == undefined || P15 == undefined ){
            layer.alert('您还没答完！');
            return false;
        }
        var json = $.cookie('answer');
        if(json != undefined){
            json = eval('(' + json + ')');
        }
        json["11"] = [P11];
        json["12"] = [P12];
        json["13"] = [P13];
        json["14"] = [P14];
        json["15"] = [P15];
        var str = JSON.stringify(json);
        var date = new Date();
        date.setTime(date.getTime() + (120 * 60 * 1000));
        $.cookie('answer', str, { expires: date, path: '/', domain: '.ziyawang.com' });
        window.location.href = "{{url('/test/page')}}" + '?type=bus&page=4';
    })
</script>
@endsection