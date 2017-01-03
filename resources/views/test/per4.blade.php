@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/assess.css')}}?v=2.0.3" />
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
                    <div class="subject" id='P16'>
                        <div class="questions">
                            <span>16、您与债务方是否签订书面合同：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="是2"><input type="radio" class="radios" id="contract1" /></div>
                                <label for="contract1" class="f14">是</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="否0"><input type="radio" class="radios" id="contract2" /></div>
                                <label for="contract2" class="f14">否</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P17'>
                        <div class="questions">
                            <span>17、证明您与债务方所签订或达成的书面或口头合同履行情况的凭证（可多选）</span>
                        </div>
                        <div class="opts" id="much">
                            <div class="item">
                                <div class="multi" answer="交货凭证或收货凭证2"><input type="checkbox" class="radios" id="proof01" /></div>
                                <label for="proof01" class="f14">交货凭证或收货凭证</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="结算单或对账单2"><input type="checkbox" class="radios" id="proof02" /></div>
                                <label for="proof02" class="f14">结算单或对账单</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="还款或付款承诺2"><input type="checkbox" class="radios" id="proof03" /></div>
                                <label for="proof03" class="f14">还款或付款承诺</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="履行情况及违约情况录音2"><input type="checkbox" class="radios" id="proof04" /></div>
                                <label for="proof04" class="f14">履行情况及违约情况录音</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="履行情况及违约情况邮件往来2"><input type="checkbox" class="radios" id="proof05" /></div>
                                <label for="proof05" class="f14">履行情况及违约情况邮件往来</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="其他1"><input type="checkbox" class="radios" id="proof06" /></div>
                                <label for="proof06" class="f14">其他</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="无0"><input type="checkbox" class="radios" id="proof07" /></div>
                                <label for="proof07" class="f14">无</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P18'>
                        <div class="questions">
                            <span>18、您与债务方或第三方是否签订担保合同：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="是2"><input type="radio" class="radios" id="yes01" /></div>
                                <label for="yes01" class="f14">是</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="否0"><input type="radio" class="radios" id="no01" /></div>
                                <label for="no01" class="f14">否</label>
                            </div>
                        </div>                       
                    </div>
                    <div class="subject" id='P19'>
                        <div class="questions">
                            <span>19、您与债务方约定的借款期限，或债务形成日至约定的债务方最后付款日之间的时长：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="少于6个月2"><input type="radio" class="radios" id="duration01" /></div>
                                <label for="duration01" class="f14">少于6个月</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="6个月至1年（不包括1年）1"><input type="radio" class="radios" id="duration02" /></div>
                                <label for="duration02" class="f14">6个月至1年（不包括1年）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="1年至3年（不包括3年）1"><input type="radio" class="radios" id="duration03" /></div>
                                <label for="duration03" class="f14">1年至3年（不包括3年）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="3年至5年（不包括5年）1"><input type="radio" class="radios" id="duration04" /></div>
                                <label for="duration04" class="f14">3年至5年（不包括5年）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="5年及以上0"><input type="radio" class="radios" id="duration05" /></div>
                                <label for="duration05" class="f14">5年及以上</label>
                            </div>
                        </div>   
                    </div>
                    <div class="subject" id='P20'>
                        <div class="questions">
                            <span>20、债务方是否已到最后还款日或最后付款日：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="未到期2"><input type="radio" class="radios" id="repay01" /></div>
                                <label for="repay01" class="f14">未到期</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="已到期1"><input type="radio" class="radios" id="repay02" /></div>
                                <label for="repay02" class="f14">已到期</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="assess-btn2">
                    <a href="{{url('/test/page').'?type=per&page=3'}}" class="assess-btn">上&nbsp;一&nbsp;页</a>
                    <a href="javascript:;" id="next" class="assess-btn">下&nbsp;一&nbsp;页</a>
                </div>
                <span class="page-num">4/5</span>
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
        // checkbox
        $('.multi').click(function() {
            $(this).toggleClass('checked');
        });

        var answer = $.cookie('answer');
        if(answer != undefined){
            answer = eval('(' + answer + ')');
        }
        if(answer['16']){
            var P16 = answer['16'][0];
            var P17 = answer['17'];
            var P18 = answer['18'][0];
            var P19 = answer['19'][0];
            var P20 = answer['20'][0];
            $('#P16').find('div[answer="'+ P16 +'"]').addClass('checked');
            $('#P18').find('div[answer="'+ P18 +'"]').addClass('checked');
            $('#P19').find('div[answer="'+ P19 +'"]').addClass('checked');
            $('#P20').find('div[answer="'+ P20 +'"]').addClass('checked');
            $.each(P17,function(index,value) {  
                $('#much').find('div[class="multi"]').each(function(){
                    if($(this).attr('answer') == value){
                        $(this).addClass('checked');
                    }
                });
            });  
        }

    })
    $('#next').click(function(){
        var P16 = $('#P16').find('div[class="status checked"]').attr('answer');
        var P18 = $('#P18').find('div[class="status checked"]').attr('answer');
        var P19 = $('#P19').find('div[class="status checked"]').attr('answer');
        var P20 = $('#P20').find('div[class="status checked"]').attr('answer');
        var P17 = new Array();
        $('#much').find('div[class="multi checked"]').each(function(index){
            P17[index] = $(this).attr('answer');
        });
        if( P16 == undefined || P17 == undefined || P18 == undefined || P19 == undefined || P20 == undefined ){
            layer.alert('您还没答完！');
            return false;
        }
        var json = $.cookie('answer');
        if(json != undefined){
            json = eval('(' + json + ')');
        }
        json["16"] = [P16];
        json["17"] = P17;
        json["18"] = [P18];
        json["19"] = [P19];
        json["20"] = [P20];
        var str = JSON.stringify(json);
        var date = new Date();
        date.setTime(date.getTime() + (120 * 60 * 1000));
        $.cookie('answer', str, { expires: date, path: '/', domain: '.ziyawang.com' });
        window.location.href = "{{url('/test/page')}}" + '?type=per&page=5';
    })
</script>
@endsection