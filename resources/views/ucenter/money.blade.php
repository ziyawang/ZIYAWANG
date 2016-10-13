@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=1.0.4" />
    <!-- 右侧 -->
    <div class="ucRight">
        <div class="ucRightCon recharge">
            <h3 class="selectiveType">
                <a href="myyabi.html" class="current">我的芽币</a><a href="{{url('/ucenter/money/detail')}}">芽币明细</a>
                <em class="grayLine"></em>
            </h3>
            <div class="ucrightTop">
                <div class="infoText"><strong>公告：</strong><b>【通知】</b>如您在支付过程中出现意外情况，请联系资芽客服，充值金额不可转账到退款或兑换为现金。<p><b style="margin-left:0;">联系电话：</b>010-56230557</p></div>
            </div>
            <div class="amount">
                <div class="amountTitle">
                    <span class="amtLeft">充值金额：<strong>（1元可换10芽币）</strong></span>
                    <span class="amtRight">芽币余额：<strong id='accounts'></strong></span>
                </div>
                <div class="diffPrice">
                    <ul class="firstStage clearfix">
                        <li class="stage1 current">
                            <a href="javascript:;"><span class="differentYabi1"><em></em>10芽币</span><span>充值：<strong>1</strong>元</span><i></i></a>
                        </li>
                        <li class="stage1">
                            <a href="javascript:;"><span class="differentYabi2"><em></em>120芽币</span><span>充值：<strong>12</strong>元</span><i></i></a>
                        </li>
                        <li class="stage1">
                            <a href="javascript:;"><span class="differentYabi3"><em></em>500芽币</span><span>充值：<strong>50</strong>元</span><i></i></a>
                        </li>
                        <li class="stage1">
                            <a href="javascript:;"><span class="differentYabi4"><em></em>1080芽币</span><span>充值：<strong>108</strong>元</span><i></i></a>
                        </li>
                        <li class="stage1">
                            <a href="javascript:;"><span class="differentYabi5"><em></em>3880芽币</span><span>充值：<strong>388</strong>元</span><i></i></a>
                        </li>
                        <li class="stage1">
                            <a href="javascript:;"><span class="differentYabi6"><em></em>5880芽币</span><span>充值：<strong>588</strong>元</span><i></i></a>
                        </li>
                        <li class="stage1">
                            <a href="javascript:;"><span class="differentYabi7"><em></em>12980芽币</span><span>充值：<strong>1298</strong>元</span><i></i></a>
                        </li>
                        <li class="stage1">
                            <a href="javascript:;"><span class="differentYabi8"><em></em>39980芽币</span><span>充值：<strong>3998</strong>元</span><i></i></a>
                        </li>
                        <li class="stage1">
                            <a href="javascript:;"><span class="differentYabi9"><em></em>64980芽币</span><span>充值：<strong>6498</strong>元</span><i></i></a>
                        </li>
                    </ul>
                </div>
                <div class="paymode">
                    <div class="paymodeTitle">
                        <span class="payTips">支付方式：</span>
                        <span class="pmdTips"><i></i>请选择支付平台进行支付</span>
                    </div>
                    <div class="paymodeCon">
                        <div class="paymodeDetails cur">
                            
                            <div class="pmdTwo">
                                <a href="javascript:;" class="payweixin current" channel="wx_pub_qr"></a>
                                <a href="javascript:;" class="payalipay" channel="alipay_pc_direct"></a>
                                <a href="javascript:;" class="netBank" channel="upacp_pc"></a>
                            </div>
                            <button class="rechargeConfirm"></button>
                            <div class="payProto">
                                <a href="javascript:;" class="paycheked"></a><span>我已阅读同意《资芽充值服务协议》</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="poplayer">
    <div class="popWx">
        <div class="changeWeixin">
            <div class="popWeixin" id="code"></div>
        </div>
        <span class="weixinLittle"></span>
        <div class="weixinTips"><strong>扫瞄二维码完成支付</strong>支付完成后请关闭二维码</div>
        <a href="javascript:;" class="closePop" title="关闭"></a>
    </div>
    <!-- 协议 -->
    <div class="rechargeProto">
        <div class="rechargeCaption">
            <h3>资芽充值服务协议</h3>
            <p>充值芽币前，请您仔细阅读以下条款，你需要理解并同意以下条款所述事项才能完成充值、享受资芽网的芽币服务功能。本协议是《资芽网芽币使用协议》的有效组成部分，本协议未涉及的事项依照《资芽网芽币使用协议》处理。资芽网的芽币不适用于业务的充值和款项结算。</p>
            <h4>一、资芽网的权利义务：</h4>
            <p>1、芽币服务的运作权由资芽（北京）网络科技有限公司享有并行使。资芽网按照《资芽网芽币服务协议》及芽币管理页面其他相关操作规则为广大用户提供服务。</p>
            <p>2、资芽网有权根据市场需求、内部管理需要修改《资芽网芽币服务协议》及相关操作规则。上述协议及规则等发生变更的，资芽网会提前在芽币管理页面向用户发布公告。公告一旦发布，则视为用户已经完全知悉并需要遵守新的服务协议或使用规则。</p>
            <p>3、资芽网将尽力维护芽币服务的安全性和方便性，但对用户使用芽币的过程中出现的信息删除或储存失败等不承担任何责任（如：用户手动自主删除信息，芽币不予返还）。</p>
            <p>4、资芽网保留判定用户的行为是否符合资芽网芽币服务条款要求的权利，如果用户违背了芽币服务条款的规定，资芽网有权终止提供芽币服务。</p>
            <p>5、资芽网不提供用户间的芽币互转服务。特殊情况下经资芽网认定可以转芽币的情况下，用户有责任出示原账户内芽币的来源证明，并由用户自身承担芽币互转可能引发的任何风险。</p>
            <p>6、对于任何用户从非资芽网官方渠道获得的芽币，资芽网不予承认，并保持随时清零的权利。资芽网官方渠道指：用户在资芽网上进行的在线充值。</p>
            <h4>二、用户的权利与义务：</h4>
            <p>1、资芽用户单独承担发布内容的责任。用户保证对芽币服务的使用是符合所有适用于服务的地方法律、国家法律和国际法律标准的。用户承诺：</p>
            <p>(1)在资芽网的网页上发布信息或者使用资芽网的芽币服务时必须遵守中国有关法律法规，不得在资芽网的网页上或者使用资芽网的芽币服务制作、复制、发布、传播以下信息：</p>
            <p>(a) 反对宪法所确定的基本原则的；</p>
            <p>(b) 危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；</p>
            <p>(c) 损害国家荣誉和利益的；</p>
            <p>(d) 煽动民族仇恨、民族歧视，破坏民族团结的；</p>
            <p>(e) 破坏国家宗教政策，宣扬邪教和封建迷信的；</p>
            <p>(f) 散布谣言，扰乱社会秩序，破坏社会稳定的；</p>
            <p>(g) 散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；</p>
            <p>(h) 侮辱或者诽谤他人，侵害他人合法权益的；</p>
            <p>(I) 含有法律、行政法规禁止的其他内容的。</p>
            <p>(2)在资芽网的网页上发布信息或者使用资芽网的芽币服务时还必须符合其他有关国家和地区的法律规定以及国际法的有关规定。</p>
            需要特别说明的是，本隐私权政策不适用于其他第三方向您提供的服务，例如资芽网上的服务方依托资芽网平台向您提供服务时，您向卖家提供的个人信息不适用于本隐私权政策。</p>
            <p>(3)不利用资芽网的芽币服务从事以下活动：</p>
            <p>(a) 未经允许，进入计算机信息网络或者使用计算机信息网络资源的；</p>
            <p>(b) 未经允许，对计算机信息网络功能进行删除、修改或者增加的；</p>
            <p>(c) 未经允许，对进入计算机信息网络中存储、处理或者传输的数据和应用程序进行删除、修改或者增加的；</p>
            <p>(d) 故意制作、传播计算机病毒等破坏性程序的；</p>
            <p>(e) 其他危害计算机信息网络安全的行为。</p>
            <p>(4)不以任何方式干扰资芽网的芽币服务。</p>
            <p>(5)遵守资芽网的所有其他规定和程序。</p>
            <p>1、用户使用资芽网的芽币服务属于自愿行为，用户明确同意不管以何种方式购买芽币后均不可要求退款，也不可兑换成现金，只能用于资芽网产品的消费抵扣。特殊情况下芽币兑换成现金的，资芽网有权收取合理的手续费。</p>
            <p>2、用户需及时向资芽网提供准确、有效的个人信息。因用户提供信息失实或违反以上规定的，资芽网有权终止提供芽币服务。</p>
            <p>3、用户对芽币账户负有妥善保管的义务，因用户自身的不当行为，如对登陆密码保护不善，将自己账户交由他人使用等情况造成芽币损失的，用户应当自行承担损失。</p>
            <p>用户的不当行为包括但不限于以下行为：</p>
            <p>(1)用户不正当使用芽币产品服务的行为；</p>
            <p>(2)用户私自进行芽币交易的行为；</p>
            <p>(3)用户非法使用芽币服务的行为等。</p>
            <p>4、为了保证用户使用资芽网的芽币的便捷性和安全性，用户在使用网上银行的充值方式时，资芽网可能会随机提供不同的第三方支付平台完成充值，用户对此表示同意和接受。</p>
        </div>
        <div class="xy_btn2">
            <button type="button" class="approveButton">确定</button>
        </div>
        <a href="javascript:;" class="closePop closeProto" title="关闭"></a>
    </div>
</div>
<script type="text/javascript" src="{{url('/js/jquery.qrcode.min.js')}}"></script>
<script type="text/javascript" src="{{url('/js/qrcode.min.js')}}"></script>
<script type="text/javascript" src="{{url('/js/pingpp.js')}}"></script>
<script type="text/javascript">

        var permission = true;
        var token = $.cookie('token');

        function getQueryString(key){
            var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
            var result = window.location.search.substr(1).match(reg);
            return result?decodeURIComponent(result[2]):null;
        }
        var ProjectID   = getQueryString("ProjectID")   ? getQueryString("ProjectID")  : null;

        //声明input昵称宽度随文字长度而变化
        var textWidth = function(text){ 
            var sensor = $('<pre>'+ text +'</pre>').css({display: 'none'}); 
            $('body').append(sensor); 
            var width = sensor.width()+20;
            sensor.remove(); 
            return width;
        };
        //左侧边栏通栏
        var ucRighthei1 = $('.ucRight').height();//初始高度
        $('.ucLeft').css('height',ucRighthei1 + 'px');
        //窗口size改变
        $(window).resize(function() {
            var ucRighthei2 = $('.ucRight').height();
            $('.ucLeft').css('height',ucRighthei2 + 'px');
        });
        //协议同意与否
        $('.paycheked').click(function() {
            $(this).toggleClass('active');
            if($(this).hasClass('active')){
                permission = false;
                return;
            }
            permission = true;
        });
        $('.closePop').click(function() {
            $('.poplayer').hide();
            $('.popWx').hide();
            if(ProjectID){
                window.location.href = "http://ziyawang.com/project/" + ProjectID;
                return false;
            }
            location.reload([true]);
        });
        //协议弹窗
        $('.payProto span').click(function(event) {
            $('.poplayer').show();
            $('.rechargeProto').show();
        });
        $('.approveButton').click(function(event) {
            $('.poplayer').hide();
            $('.rechargeProto').hide();
        });

        var amount = 1;
        var channel = "wx_pub_qr";
        // var token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIzMyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0Nzk0NTQyIiwiZXhwIjoiMTQ3NTM5OTM0MiIsIm5iZiI6IjE0NzQ3OTQ1NDIiLCJqdGkiOiJmNmFhNDRhODA4ODBlZjAxNzE3NWJmYTZhNDczMWJiZCJ9.ho521A0Prh6LcNAPNcmQEF2H_VTQBXstSwf2m4yeXpA";
        //选中前三个价格
        $('.firstStage .stage1').click(function() {
            $(this).addClass('current').siblings().removeClass('current');
            amount = $(this).find('strong').html();
        });
        //点击第四个出来的内容
        $('.selectedPrice li').click(function() {
            var priceNum = $(this).index();
            $('.hidePrice').eq(priceNum).css('display', 'block').siblings().hide();
            $('.hidePrice').eq(priceNum).addClass('current').siblings().removeClass('current');
            $('.stage2').removeClass('current');
            amount = $(this).find('strong').html();
        });
        //微信支付宝切换
        $('.pmdTwo a').click(function() {
            $(this).addClass('current').siblings().removeClass('current');
            channel = $(this).attr('channel');
        });

        $('.rechargeConfirm').click(function(){
            if(!permission){
                return;
            }
            if($('.payweixin').hasClass('current')){              
                $('.rechargeConfirm').attr('disabled', true);
            }
            var subject = '充值金额';
            $.ajax({
                url:"http://api.ziyawang.com/v1/pay?token=" + token,
                type:"POST",
                data:{'amount':amount*100,'channel':channel,'subject':subject,'access_token':'token', 'ProjectID': ProjectID},
                dataType:'json',
                success:function(msg){
                    var charge = eval(msg);
                    $('#code').empty();
                    if(charge.credential.wx_pub_qr){
                        var qrcode = new QRCode('code', {
                          text: charge.credential.wx_pub_qr,
                          width: 200,
                          height: 200,
                          colorDark : '#000000',
                          colorLight : '#ffffff',
                          correctLevel : QRCode.CorrectLevel.H
                        });
                        if($('.payweixin').hasClass('current')){
                            $('.poplayer').show();
                            $('.popWx').show();
                        }
                        return;
                    }
                    // console.log(charge);
                    pingpp.createPayment(charge, function(result, err){
                        // console.log(result);
                        // console.log(err.msg);
                        // console.log(err.extra);
                        if (result == "success") {
                            // 只有微信公众账号 wx_pub 支付成功的结果会在这里返回，其他的支付结果都会跳转到 extra 中对应的 URL。
                        } else if (result == "fail") {
                            // charge 不正确或者微信公众账号支付失败时会在此处返回
                        } else if (result == "cancel") {
                            // 微信公众账号支付取消支付
                        }
                    });
                }
            });
        })



</script>
@endsection