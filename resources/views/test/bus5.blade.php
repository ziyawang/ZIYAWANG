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
                    <div class="subject" id='P21'>
                        <div class="questions">
                            <span>21、约定的债务方最后还款日或最后付款日至今的时长：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="少于3个月2"><input type="radio" class="radios" id="appoint01" /></div>
                                <label for="appoint01" class="f14">少于3个月</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="3个月至6个月（不包括6个月）1"><input type="radio" class="radios" id="appoint02" /></div>
                                <label for="appoint02" class="f14">3个月至6个月（不包括6个月）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="6个月至1年（不包括1年）1"><input type="radio" class="radios" id="appoint03" /></div>
                                <label for="appoint03" class="f14">6个月至1年（不包括1年）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="1年至2年（不包括2年）1"><input type="radio" class="radios" id="appoint04" /></div>
                                <label for="appoint04" class="f14">1年至2年（不包括2年）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="2年及以上0"><input type="radio" class="radios" id="appoint05" /></div>
                                <label for="appoint05" class="f14">2年及以上</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P22'>
                        <div class="questions">
                            <span>22、您是否电话催收，以及催收次数：</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="未催收2"><input type="radio" class="radios" id="call01" /></div>
                                <label for="call01" class="f14">未催收</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数少于5次1"><input type="radio" class="radios" id="call02" /></div>
                                <label for="call02" class="f14">催收，次数少于5次</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数5次至10次1"><input type="radio" class="radios" id="call03" /></div>
                                <label for="call03" class="f14">催收，次数5次至10次</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数超过10次0"><input type="radio" class="radios" id="call04" /></div>
                                <label for="call04" class="f14">催收，次数超过10次</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P23'>
                        <div class="questions">
                            <span>23、您是否实地催收，以及催收的次数：</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="未催收2"><input type="radio" class="radios" id="indeed01" /></div>
                                <label for="indeed01" class="f14">未催收</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数少于2次1"><input type="radio" class="radios" id="indeed02" /></div>
                                <label for="indeed02" class="f14">催收，次数少于2次</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数2次至4次1"><input type="radio" class="radios" id="indeed03" /></div>
                                <label for="indeed03" class="f14">催收，次数2次至4次</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数超过4次0"><input type="radio" class="radios" id="indeed04" /></div>
                                <label for="indeed04" class="f14">催收，次数超过4次</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P24'>
                        <div class="questions">
                            <span>24、是否委托他人或律师事务所催收，以及催收次数：</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="未催收2"><input type="radio" class="radios" id="urge01" /></div>
                                <label for="urge01" class="f14">未催收</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数1次1"><input type="radio" class="radios" id="urge02" /></div>
                                <label for="urge02" class="f14">催收，次数1次</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数2次1"><input type="radio" class="radios" id="urge03" /></div>
                                <label for="urge03" class="f14">催收，次数2次</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="催收，次数3次及以上0"><input type="radio" class="radios" id="urge04" /></div>
                                <label for="urge04" class="f14">催收，次数3次及以上</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P25'>
                        <div class="questions">
                            <span>25、您是否已经提起诉讼，以及诉讼情况：</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="未提起诉讼1"><input type="radio" class="radios" id="lawsuit01" /></div>
                                <label for="lawsuit01" class="f14">未提起诉讼</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="诉讼进行中1"><input type="radio" class="radios" id="lawsuit02" /></div>
                                <label for="lawsuit02" class="f14">诉讼进行中</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="判决已生效，尚未执行1"><input type="radio" class="radios" id="lawsuit03" /></div>
                                <label for="lawsuit03" class="f14">判决已生效，尚未执行</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="判决已生效，且强制执行中0"><input type="radio" class="radios" id="lawsuit04" /></div>
                                <label for="lawsuit04" class="f14">判决已生效，且强制执行中</label>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="assess-btn2">
                    <a href="{{url('/test/page').'?type=bus&page=4'}}" class="assess-btn">上&nbsp;一&nbsp;页</a>
                    <a id="next" href="javascript:;" class="assess-btn">提&nbsp;交</a>
                </div>
                <span class="page-num">5/5</span>
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

        $('.status').click(function() {
            $(this).toggleClass('checked');
            $(this).parent().siblings().children('.status').removeClass('checked');
        });

        var answer = $.cookie('answer');
        if(answer != undefined){
            answer = eval('(' + answer + ')');
        }
        if(answer['21']){
            var P21 = answer['21'][0];
            var P22 = answer['22'][0];
            var P23 = answer['23'][0];
            var P24 = answer['24'][0];
            var P25 = answer['25'][0];
            $('#P21').find('div[answer="'+ P21 +'"]').addClass('checked');
            $('#P22').find('div[answer="'+ P22 +'"]').addClass('checked');
            $('#P23').find('div[answer="'+ P23 +'"]').addClass('checked');
            $('#P24').find('div[answer="'+ P24 +'"]').addClass('checked');
            $('#P25').find('div[answer="'+ P25 +'"]').addClass('checked');
        }

    })
    $('#next').click(function(){
        var P21 = $('#P21').find('div[class="status checked"]').attr('answer');
        var P22 = $('#P22').find('div[class="status checked"]').attr('answer');
        var P23 = $('#P23').find('div[class="status checked"]').attr('answer');
        var P24 = $('#P24').find('div[class="status checked"]').attr('answer');
        var P25 = $('#P25').find('div[class="status checked"]').attr('answer');
        if( P21 == undefined || P22 == undefined || P23 == undefined || P24 == undefined || P25 == undefined ){
            layer.alert('您还没答完！');
            return false;
        }
        var json = $.cookie('answer');
        if(json != undefined){
            json = eval('(' + json + ')');
        }
        json["21"] = [P21];
        json["22"] = [P22];
        json["23"] = [P23];
        json["24"] = [P24];
        json["25"] = [P25];
        var str = JSON.stringify(json);
        var date = new Date();
        date.setTime(date.getTime() + (120 * 60 * 1000));
        $.cookie('answer', str, { expires: date, path: '/', domain: '.ziyawang.com' });
        window.location.href = "{{url('/test/end')}}";
    })
</script>
@endsection