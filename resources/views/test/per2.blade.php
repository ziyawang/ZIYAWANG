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
                            <span>6、债务方的婚姻状况：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="已结婚且有孩子2"><input type="radio" class="radios" id="marry01" /></div>
                                <label for="marry01" class="f14">已结婚且有孩子</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="已结婚且无孩子2"><input type="radio" class="radios" id="marry02" /></div>
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
                    <div class="subject" id='P7'>
                        <div class="questions">
                            <span>7、债务方的学历状况：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="本科2"><input type="radio" class="radios" id="educate01" /></div>
                                <label for="educate01" class="f14">本科</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="大专1"><input type="radio" class="radios" id="educate02" /></div>
                                <label for="educate02" class="f14">大专</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="中专/高中1"><input type="radio" class="radios" id="educate03" /></div>
                                <label for="educate03" class="f14">中专/高中</label>
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
                    <div class="subject" id='P8'>
                        <div class="questions">
                            <span>8、债务方的住房情况：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="自有3"><input type="radio" class="radios" id="lodge01" /></div>
                                <label for="lodge01" class="f14">自有</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="与父母同住2"><input type="radio" class="radios" id="lodge02" /></div>
                                <label for="lodge02" class="f14">与父母同住</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="租赁或其他1"><input type="radio" class="radios" id="lodge03" /></div>
                                <label for="lodge03" class="f14">租赁或其他</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="lodge04" /></div>
                                <label for="lodge04" class="f14">不清楚</label>
                            </div>
                        </div>                       
                    </div>
                    <div class="subject" id='P9'>
                        <div class="questions">
                            <span>9、债务方在现地址居住的时间：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="少于1年0"><input type="radio" class="radios" id="resident1" /></div>
                                <label for="resident1" class="f14">少于1年</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="1年至3年（不包括3年）1"><input type="radio" class="radios" id="resident2" /></div>
                                <label for="resident2" class="f14">1年至3年（不包括3年）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="3年至7年（不包括7年）2"><input type="radio" class="radios" id="resident3" /></div>
                                <label for="resident3" class="f14">3年至7年（不包括7年）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="7年至10年（不包括10年）2"><input type="radio" class="radios" id="resident4" /></div>
                                <label for="resident4" class="f14">7年至10年（不包括10年）</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="10年及以上2"><input type="radio" class="radios" id="resident5" /></div>
                                <label for="resident5" class="f14">10年及以上</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="resident6" /></div>
                                <label for="resident6" class="f14">不清楚</label>
                            </div>
                        </div>   
                    </div>
                    <div class="subject" id='P10'>
                        <div class="questions">
                            <span>10、债务方名下是否有资产，若已用于提供担保，则不计算在内（可多选）</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的人）</span>
                        </div>
                        <div class="opts" id="much">
                            <div class="item">
                                <div class="multi" answer="国有土地使用权2"><input type="checkbox" class="radios" id="asset01" /></div>
                                <label for="asset01" class="f14">国有土地使用权</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="房屋及其他建筑物(带国有土地使用权)2"><input type="checkbox" class="radios" id="asset02" /></div>
                                <label for="asset02" class="f14">房屋及其他建筑物(带国有土地使用权)</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="交通运输工具2"><input type="checkbox" class="radios" id="asset03" /></div>
                                <label for="asset03" class="f14">交通运输工具</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="股权2"><input type="checkbox" class="radios" id="asset04" /></div>
                                <label for="asset04" class="f14">股权</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="股票2"><input type="checkbox" class="radios" id="asset05" /></div>
                                <label for="asset05" class="f14">股票</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="金融债劵、国债2"><input type="checkbox" class="radios" id="asset06" /></div>
                                <label for="asset06" class="f14">金融债劵、国债</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="其他2"><input type="checkbox" class="radios" id="asset07" /></div>
                                <label for="asset07" class="f14">其他</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="不清楚1"><input type="checkbox" class="radios" id="asset08" /></div>
                                <label for="asset08" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="assess-btn2">
                    <a href="{{url('/test/page').'?type=per&page=1'}}" class="assess-btn">上&nbsp;一&nbsp;页</a>
                    <a href="javascript:;" id="next" class="assess-btn">下&nbsp;一&nbsp;页</a>
                </div>
                <span class="page-num">2/5</span>
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
        // checkbox
        $('.multi').click(function() {
            $(this).toggleClass('checked');
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
            var P10 = answer['10'];
            $('#P6').find('div[answer="'+ P6 +'"]').addClass('checked');
            $('#P7').find('div[answer="'+ P7 +'"]').addClass('checked');
            $('#P8').find('div[answer="'+ P8 +'"]').addClass('checked');
            $('#P9').find('div[answer="'+ P9 +'"]').addClass('checked');
            $.each(P10,function(index,value) {  
                $('#much').find('div[class="multi"]').each(function(){
                    if($(this).attr('answer') == value){
                        $(this).addClass('checked');
                    }
                });
            });  
        }

    })
    $('#next').click(function(){
        var P6 = $('#P6').find('div[class="status checked"]').attr('answer');
        var P7 = $('#P7').find('div[class="status checked"]').attr('answer');
        var P8 = $('#P8').find('div[class="status checked"]').attr('answer');
        var P9 = $('#P9').find('div[class="status checked"]').attr('answer');
        var P10 = new Array();
        $('#much').find('div[class="multi checked"]').each(function(index){
            P10[index] = $(this).attr('answer');
        });
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
        json["10"] = P10;
        var str = JSON.stringify(json);
        var date = new Date();
        date.setTime(date.getTime() + (120 * 60 * 1000));
        $.cookie('answer', str, { expires: date, path: '/', domain: '.test.com' });
        window.location.href = "{{url('/test/page')}}" + '?type=per&page=3';
    })
</script>
@endsection