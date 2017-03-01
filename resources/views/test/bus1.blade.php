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
                            <span>1、债务方的企业类型为：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="有限责任公司1"><input type="radio" class="radios" id="genre01" /></div>
                                <label for="genre01" class="f14">有限责任公司</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="非上市股份公司1"><input type="radio" class="radios" id="genre02" /></div>
                                <label for="genre02" class="f14">非上市股份公司</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="上市公司2"><input type="radio" class="radios" id="genre03" /></div>
                                <label for="genre03" class="f14">上市公司</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="国有控股或参股公司1"><input type="radio" class="radios" id="genre04" /></div>
                                <label for="genre04" class="f14">国有控股或参股公司</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="有限合伙企业1"><input type="radio" class="radios" id="genre05" /></div>
                                <label for="genre05" class="f14">有限合伙企业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="普通合伙企业1"><input type="radio" class="radios" id="genre06" /></div>
                                <label for="genre06" class="f14">普通合伙企业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="其他0"><input type="radio" class="radios" id="genre07" /></div>
                                <label for="genre07" class="f14">其他</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P2'>
                        <div class="questions">
                            <span>2、债务方企业名称为：</span><input type="text" class="inps namenumber" id="company" /><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="unclear01" /></div>
                                <label for="unclear01" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="subject" id='P3'>
                        <div class="questions">
                            <span>3、债务方是否有资产，若已用于提供担保，则不计算在内（可多选）：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业）</span>
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
                                <div class="multi" answer="金融债劵、国债2"><input type="checkbox" class="radios" id="asset04" /></div>
                                <label for="asset04" class="f14">金融债劵、国债</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="股票2"><input type="checkbox" class="radios" id="asset05" /></div>
                                <label for="asset05" class="f14">股票</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="其他企业股权2"><input type="checkbox" class="radios" id="asset06" /></div>
                                <label for="asset06" class="f14">其他企业股权</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="其他1"><input type="checkbox" class="radios" id="asset07" /></div>
                                <label for="asset07" class="f14">其他</label>
                            </div>
                            <div class="item">
                                <div class="multi" answer="不清楚0"><input type="checkbox" class="radios" id="asset08" /></div>
                                <label for="asset08" class="f14">不清楚</label>
                            </div>
                        </div>
                    </div>
                    <div class="subject" id='P4'>
                        <div class="questions">
                            <span>4、债务方的经营状况：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="好2"><input type="radio" class="radios" id="run01" /></div>
                                <label for="run01" class="f14">好</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="一般1"><input type="radio" class="radios" id="run02" /></div>
                                <label for="run02" class="f14">一般</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="较差或不能正常经营1"><input type="radio" class="radios" id="run03" /></div>
                                <label for="run03" class="f14">较差或不能正常经营</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="run04" /></div>
                                <label for="run04" class="f14">不清楚</label>
                            </div>
                        </div>    
                    </div>
                    <div class="subject" id='P5'>
                        <div class="questions">
                            <span>5、债务方所处的行业：</span><span class="assess-tips"><em class="c-red">*</em>（债务方是指欠您钱的企业）</span>
                        </div>
                        <div class="opts">
                            <div class="item">
                                <div class="status" answer="新兴行业1"><input type="radio" class="radios" id="trade01" /></div>
                                <label for="trade01" class="f14">新兴行业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="成熟行业1"><input type="radio" class="radios" id="trade02" /></div>
                                <label for="trade02" class="f14">成熟行业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="衰退行业1"><input type="radio" class="radios" id="trade03" /></div>
                                <label for="trade03" class="f14">衰退行业</label>
                            </div>
                            <div class="item">
                                <div class="status" answer="不清楚0"><input type="radio" class="radios" id="trade04" /></div>
                                <label for="trade04" class="f14">不清楚</label>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="assess-btn2">
                    <a href="javascript:;" class="assess-btn">返&nbsp;回</a>
                    <a id="next" href="javascript:;" class="assess-btn">下&nbsp;一&nbsp;页</a>
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
        // checkbox
        $('.multi').click(function() {
            $(this).toggleClass('checked');
        });

        var answer = $.cookie('answer');
        if(answer != undefined){
            answer = eval('(' + answer + ')');
        
            var P1 = answer['1'][0];
            var P2 = answer['2'][0];
            var P3 = answer['3'];
            var P4 = answer['4'][0];
            var P5 = answer['5'][0];
            $('#P1').find('div[answer="'+ P1 +'"]').addClass('checked');
            if(P2 == "不清楚0"){
                $('#P2').find('div[answer="'+ P2 +'"]').addClass('checked');
                $('#company').attr('readonly', 'readonly');
            } else {
                $('#company').val(P2)
            }
            $.each(P3,function(index,value) {  
                $('#much').find('div[class="multi"]').each(function(){
                    if($(this).attr('answer') == value){
                        $(this).addClass('checked');
                    }
                });
            });  
            $('#P4').find('div[answer="'+ P4 +'"]').addClass('checked');
            $('#P5').find('div[answer="'+ P5 +'"]').addClass('checked');
        }
        console.log(answer);
    })

    $('#next').click(function(){
        var P1 = $('#P1').find('div[class="status checked"]').attr('answer');
        var P2 = $('#P2').find('div[class="status checked"]').attr('answer');
        if(P2 == undefined){
            P2 = $('#company').val();
        }
        var P3 = new Array();
        $('#much').find('div[class="multi checked"]').each(function(index){
            P3[index] = $(this).attr('answer');
        });
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
        json["3"] = P3;
        json["4"] = [P4];
        json["5"] = [P5];
        var str = JSON.stringify(json);
        var date = new Date();
        date.setTime(date.getTime() + (120 * 60 * 1000));
        $.cookie('answer', str, { expires: date, path: '/', domain: '.ziyawang.com' });
        window.location.href = "{{url('/test/page')}}" + '?type=bus&page=2';
    })
</script>
@endsection