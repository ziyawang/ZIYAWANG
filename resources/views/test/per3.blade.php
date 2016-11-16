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
                    <div class="subject" id='P11'>
                        <div class="questions">
                            <span>11、债务方工作的性质：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="自己经营企业3"><input type="radio" class="radios" id="nature01" /></div>
                                <label for="nature01" class="f14">自己经营企业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="私营企业员工2"><input type="radio" class="radios" id="nature02" /></div>
                                <label for="nature02" class="f14">私营企业员工</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="国有企业员工2"><input type="radio" class="radios" id="nature03" /></div>
                                <label for="nature03" class="f14">国有企业员工</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="机关事业单位员工2"><input type="radio" class="radios" id="nature04" /></div>
                                <label for="nature04" class="f14">机关事业单位员工</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="自由职业1"><input type="radio" class="radios" id="nature05" /></div>
                                <label for="nature05" class="f14">自由职业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="其他1"><input type="radio" class="radios" id="nature06" /></div>
                                <label for="nature06" class="f14">其他</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="nature07" /></div>
                                <label for="nature07" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P12'>
                        <div class="questions">
                            <span>12、债务方在单位的工作岗位：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="高级管理人员2"><input type="radio" class="radios" id="station01" /></div>
                                <label for="station01" class="f14">高级管理人员</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="部门主管2"><input type="radio" class="radios" id="station02" /></div>
                                <label for="station02" class="f14">部门主管</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="一般职员2"><input type="radio" class="radios" id="station03" /></div>
                                <label for="station03" class="f14">一般职员</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚1"><input type="radio" class="radios" id="station04" /></div>
                                <label for="station04" class="f14">不清楚</label>
                            </div>
                        </div>
                    </div>
                    <div class="subject" id='P13'>
                        <div class="questions">
                            <span>13、债务方在现单位已持续工作的时间：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="3年以上2"><input type="radio" class="radios" id="years01" /></div>
                                <label for="years01" class="f14">3年以上</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="1年至3年2"><input type="radio" class="radios" id="years02" /></div>
                                <label for="years02" class="f14">1年至3年</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="1年以下1"><input type="radio" class="radios" id="years03" /></div>
                                <label for="years03" class="f14">1年以下</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚1"><input type="radio" class="radios" id="years04" /></div>
                                <label for="years04" class="f14">不清楚</label>
                            </div>
                        </div>                       
                    </div>
                    <div class="subject" id='P14'>
                        <div class="questions">
                            <span>14、债务方现在的月工资金额：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="多于20000元3"><input type="radio" class="radios" id="salary01" /></div>
                                <label for="salary01" class="f14">多于20000元</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="10000元至19999元3"><input type="radio" class="radios" id="salary02" /></div>
                                <label for="salary02" class="f14">10000元至19999元</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="5000元至9999元3"><input type="radio" class="radios" id="salary03" /></div>
                                <label for="salary03" class="f14">5000元至9999元</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="3000元至4999元3"><input type="radio" class="radios" id="salary04" /></div>
                                <label for="salary04" class="f14">3000元至4999元</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="1000元至2999元3"><input type="radio" class="radios" id="salary05" /></div>
                                <label for="salary05" class="f14">1000元至2999元</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="少于1000元1"><input type="radio" class="radios" id="salary06" /></div>
                                <label for="salary06" class="f14">少于1000元</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="salary07" /></div>
                                <label for="salary07" class="f14">不清楚</label>
                            </div>
                        </div>   
                    </div>
                    <div class="subject" id='P15'>
                        <div class="questions">
                            <span>15、债务方是否可以正常联系</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="可以联系3"><input type="radio" class="radios" id="touch01" /></div>
                                <label for="touch01" class="f14">可以联系</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="无法联系0"><input type="radio" class="radios" id="touch02" /></div>
                                <label for="touch02" class="f14">无法联系</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="assess-btn2">
                    <a href="{{url('/test/page').'?type=per&page=2'}}" class="assess-btn">上&nbsp;一&nbsp;页</a>
                    <a href="javascript:;" id="next" class="assess-btn">下&nbsp;一&nbsp;页</a>
                </div>
                <span class="page-num">3/5</span>
            </div>
            <div class="assess-r">
                <a href="javascript:;" class="assess-btn ma24">免&nbsp;费&nbsp;发&nbsp;布</a>
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
        $.cookie('answer', str, { expires: date, path: '/', domain: '.test.com' });
        window.location.href = "{{url('/test/page')}}" + '?type=per&page=4';
    })
</script>
@endsection