@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/member.css')}}?v=2.1.0" />
    <div class="ucRight">
        <h3 class="member-tit"><span class="member-tit-cap">会员中心</span></h3>
        <div class="member-tips">
            <div class="member-tips-cap">注：根据您的需求可同时办理多个类型会员</div>
        </div>
        <div class="member-type">
            <div class="member-type-tit clearfix">
                <div class="member-cur clearfix">
                    <span class="member-cur-cap">您当前会员类型：</span>
                    <div id="showright" style="float:left;">
                    </div>
                </div>
                <a href="{{url('/ucenter/member/detail')}}" class="member-search">【充值查询】</a>
            </div>
            <div class="member-table">
                <table>
                    <thead class="member-head">
                        <tr>
                            <th class="mem1">会员类型</th>
                            <th class="mem2">特权</th>
                            <th class="mem3">收费标准</th>
                            <th class="mem4"></th>
                        </tr>
                    </thead>
                    <tbody class="member-body">
                        <tr>
                            <td class="mem1"><span class="bao member-icon" title="资产包"></span><p>资产包</p></td>
                            <td class="mem2">
                                <span data-title="资产包" data-amount="6498" data-total="70000" data-time="月" class="member-privil">特权了解</span>
                            </td>
                            <td class="mem3">
                                <a url="{{url('/ucenter/member/pay?id=7')}}" href="javacript:;" class="member-fee">月度会员：6498元<i></i></a><a url="{{url('/ucenter/member/pay?id=8')}}" href="javacript:;" class="current member-fee">年度会员：70000元<i></i></a>
                            </td>
                            <td class="mem4"><a href="{{url('/ucenter/member/pay?id=8')}}" class="member-charge">开通</a></td>
                        </tr>
                        <tr>
                            <td class="mem1"><span class="qi member-icon" title="企业商账"></span><p>企业商账</p></td>
                            <td class="mem2">
                                <span data-title="企业商账" data-amount="1498" data-total="4998" data-time="季" class="member-privil">特权了解</span>
                            </td>
                            <td class="mem3">
                                <a url="{{url('/ucenter/member/pay?id=9')}}" href="javacript:;" class="member-fee">季度会员：1498元<i></i></a><a url="{{url('/ucenter/member/pay?id=10')}}" href="javacript:;" class="current member-fee">年度会员：4998元<i></i></a>
                            </td>
                            <td class="mem4"><a href="{{url('/ucenter/member/pay?id=10')}}" class="member-charge">开通</a></td>
                        </tr>
                        <tr>
                            <td class="mem1"><span class="gu member-icon" title="固定资产"></span><p>固定资产</p></td>
                            <td class="mem2">
                                <span data-title="固定资产" data-amount="3998" data-total="12000" data-time="季" class="member-privil">特权了解</span>
                            </td>
                            <td class="mem3">
                                <a url="{{url('/ucenter/member/pay?id=5')}}" href="javacript:;" class="member-fee">季度会员：3998元<i></i></a><a url="{{url('/ucenter/member/pay?id=6')}}" href="javacript:;" class="current member-fee">年度会员：12000元<i></i></a>
                            </td>
                            <td class="mem4"><a href="{{url('/ucenter/member/pay?id=6')}}" class="member-charge">开通</a></td>
                        </tr>
                        <tr>
                            <td class="mem1"><span class="rong member-icon" title="融资信息"></span><p>融资信息</p></td>
                            <td class="mem2">
                                <span data-title="融资信息" data-amount="998" data-total="2998" data-time="季" class="member-privil">特权了解</span>
                            </td>
                            <td class="mem3">
                                <a url="{{url('/ucenter/member/pay?id=3')}}" href="javacript:;" class="member-fee">季度会员：998元<i></i></a><a url="{{url('/ucenter/member/pay?id=4')}}" href="javacript:;" class="current member-fee">年度会员：2998元<i></i></a>
                            </td>
                            <td class="mem4"><a href="{{url('/ucenter/member/pay?id=4')}}" class="member-charge">开通</a></td>
                        </tr>
                        <tr>
                            <td class="mem1"><span class="ge member-icon" title="个人债权"></span><p>个人债权</p></td>
                            <td class="mem2">
                                <span data-title="个人债权" data-amount="998" data-total="2998" data-time="季" class="member-privil">特权了解</span>
                            </td>
                            <td class="mem3">
                                <a url="{{url('/ucenter/member/pay?id=1')}}" href="javacript:;" class="member-fee">季度会员：998元<i></i></a><a url="{{url('/ucenter/member/pay?id=2')}}" href="javacript:;" class="current member-fee">年度会员：2998元<i></i></a>
                            </td>
                            <td class="mem4"><a href="{{url('/ucenter/member/pay?id=2')}}" class="member-charge">开通</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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
        var TypeID   = getQueryString("TypeID")   ? getQueryString("TypeID")  : null;

        //声明input昵称宽度随文字长度而变化
        var textWidth = function(text){ 
            var sensor = $('<pre>'+ text +'</pre>').css({display: 'none'}); 
            $('body').append(sensor); 
            var width = sensor.width()+20;
            sensor.remove(); 
            return width;
        };
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
                window.location.href = "http://ziyawang.com/project/" + TypeID + "/" + ProjectID;
                return false;
            }
            window.location.reload(); 
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
            amount = $(this).find('strong[class="ybsl"]').html();
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
                url:"https://apis.ziyawang.com/zll/pay?access_token=token&amount=" + amount*100 + "&channel=" + channel + "&subject=" + subject + "&ProjectID=" + ProjectID + "&token=" + token,
                type:"POST",
                data:{'amount':amount*100,'channel':channel,'subject':subject,'ProjectID': ProjectID},
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
<script type="text/javascript">
    $(function(){
        $('.member-fee').click(function() {
            $(this).addClass('current').siblings().removeClass('current');
            var url = $(this).attr('url');
            $(this).parent().next().find('a').attr('href',url);
        });

        $('.member-privil').on('click', function() {
            var memberWord   = $(this).attr('data-title');
            var memberAmount = $(this).attr('data-amount');
            var memberTotal  = $(this).attr('data-total');
            var memberTime   = $(this).attr('data-time');
            layer.open({
                type: 1,
                title: false,
                closeBtn: 0,
                area: '900px',
                skin: 'layer-member',
                shadeClose: true,
                content: '<div class="privilege"><div class="privilege-tit">'+ memberWord +'VIP特权</div><ul class="privilege-list"><li><img class="privilege-img" src="/img/member_icon1.png"/><p class="privilege-rt"><strong>查看权限</strong><span>在会员期间内，可免费查看本网站所有'+ memberWord +'类VIP和收费信息。</span></p></li><li><img class="privilege-img" src="/img/member_icon2.png"/><p class="privilege-rt"><strong>赠送芽币</strong><span>按办理会员的价格赠送芽币（例：'+ memberTime +'度会员'+ memberAmount +'元赠送'+ memberAmount +'芽币，年度会员'+ memberTotal +'元赠送'+ memberTotal +'芽币）。可方便您查看其他类型信息。</span></p></li><li><img class="privilege-img" src="/img/member_icon3.png"/><p class="privilege-rt"><strong>定制推送</strong><span>系统会根据您的指定需求帮您筛选指定的'+ memberWord +'信息，并推送到您的系统消息或手机短信中（客服人员会主动联系您录入需求）。</span></p></li><li><img class="privilege-img" src="/img/member_icon4.png"/><p class="privilege-rt"><strong>联系方式展示</strong><span>升级为会员后，您服务方的展示页面联系方式将公开，会有更多用户第一时间主动联系您。</span></p></li></ul></div>',
                btn: ['确 定'],btn0:function(){

                }
            });
        });

    })
</script>
@endsection