<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
@yield('title')
        <link rel="stylesheet" type="text/css" href="{{asset('/css/base.css')}}?v=2.1.0.1" />
        <link rel="stylesheet" type="text/css" href="{{asset('/css/public.css')}}?v=2.1.0" />
        <link rel="stylesheet" type="text/css" href="{{asset('/css/issueinfo.css')}}?v=2.1.0" />
        <script type="text/javascript" src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{url('/js/jquery.cookie.js')}}"></script>
        <script type="text/javascript" src="{{asset('/org/layer/layer.js')}}"></script>
    </head>
    <style type="text/css">
            .layerRecharge{width: 500px; height: 212px;}
            .layerTop{background:#fdd000;overflow: hidden;padding:25px 0 25px 25px;}
            .coverBg{float: left;width: 145px;height: 145px;background:url(/img/coverpop.png) no-repeat;padding-right: 15px;}
            .captionTip{float: left;}
            .captionTip h3{font-size: 24px;color:#000;}
            .needMoney{font-size: 20px;color:#434343;margin-top: 5px;}
            .custom{font-size: 18px;color:#000;margin-top: 5px;}
            .custom strong{font-size: 24px;color:#fff;margin-right: 10px;}
            .custom span{font-weight: bold;color:#000;}
            .btn3{background:#fff;height: 60px;text-align: center;padding-top: 20px;}
            .btn3 a{display: inline-block;width: 108px;background:#f4f4f4;box-shadow: 0 -5px 0 #bababa inset;padding:5px 0 10px;text-align: center;font-size: 20px;color:#464646;margin:0 20px;position: relative;text-decoration: none;}
            .btn3 .btnCert,.btn3 a:hover{background:#fdd000;box-shadow: 0 -5px 0 #b69600 inset;color:#000;}
            .btn3 a:active{top: 1px;}

            .layerNo{width: 322px;}
            .layerNotop{background:#fdd000;padding-top: 22px;}
            .nocoverBg{width: 145px;height: 145px;background:url(/img/coverpop.png) no-repeat;margin:0 auto;display: block;}
            .noFree{font-size: 24px;color:#333;font-weight: bold;display: block;text-align: center;padding: 8px 0 20px;}
            /*.layui-layer-title{display: none;}*/
            /*.layui-layer-title{height: 0;border-bottom: 0;}*/
            .layui-layer-btn{padding-top: 20px!important;text-align: center;height: 60px;background: #fff;}
            .layui-layer-btn a{width: 108px;padding: 6px 0px 10px; background: #f4f4f4; border-radius: 5px; border-right: 2px; color: #000; box-shadow: 0 -5px 0 #bababa inset; position: relative;border: 0 none;margin: 0;font-size: 20px;margin: 0 20px;text-align: center;}
            .layui-layer-btn .layui-layer-btn1{}
            .layui-layer-btn .layui-layer-btn0,.layui-layer-btn a:hover{background: #fdd000;box-shadow: 0 -5px 0 #b69600 inset;color: #000;}
            .layui-layer-btn a:active{top: 1px;}

            /*列表li样式*/
            .item{cursor: pointer;}
            .disposal-par{position: relative;}
            .disposaled{right: 20px;top: 28px;}
            .disposaled,.disposal-state{position: absolute;width: 94px;height: 76px;z-index: 2;}
            .disposal-state{right: -15px;bottom: 10px;}
        </style>
    <body>
        <div class="rec" style="width:0;height:0;overflow:hidden;">
        <img src="/img/rec.jpg" height="420" width="420" alt="" />
        </div>
    <div class="header">
        <div class="wrap">
                <div class="guide">
                    <a target="_blank" href="{{url('/ucenter/index')}}" class="personal">个人中心</a>
                    <a href="" class="ziyaapp">APP下载<span class="ziya_ma"><img src="/img/ziyaapp.png" /></span></a>
                    <a href="javascript:;" class="weixin1">微信<span class="wx_ma"><img src="/img/wx.jpg" /></span></a>
                    <a href="#" class="weibo1">微博<span class="wb_ma"><img src="/img/wb.png" /></span></a>
                    <a target="_blank" href="{{url('/ucenter/mycollect')}}" class="mycol">我的收藏</a>
                </div>
                <div class="brum_login" style="display:none">
                        <a href="{{url('/login')}}" class="viplog" target="_blank">会员登录</a>
                        <a href="{{url('/register')}}" class="freereg" target="_blank">免费注册</a>
                </div>
                <!-- 登录后内容 -->
                <div class="after_login">
                    <a href="{{url('/ucenter/index')}}" class="number" id="phone"></a><a href="javascript:;" id="logout" class="back">退出</a>
                </div>

<!-- 登录退出状态 -->
<script>
    $(document).ready(function(){
        var phonenumber = $.cookie('phonenumber');
        // console.log(typeof(phonenumber));
        if(typeof(phonenumber)!="undefined") {
            phonenumber = phonenumber.replace(/\'/g,"");
            $('#unlogin').hide();
            $('.brum_login').hide();
            $('.personal').show();
            $('.after_login').show();
            $('#phone').text(phonenumber);
            $('.login').addClass('after');
        } else {
            $('#unlogin').show();
            $('.brum_login').show();
            $('.after_login').hide();
            $('.personal').hide();
        }
    });

    $('#logout').click(function(){
        $.removeCookie('token', { path: '/', domain: '.ziyawang.com' });
        $.removeCookie('phonenumber', { path: '/', domain: '.ziyawang.com' });
        $.removeCookie('role', { path: '/', domain: '.ziyawang.com' });
        $.removeCookie('userid', { path: '/', domain: '.ziyawang.com' });
        $('#unlogin').show();
        $('#after_login').hide();
        $('.personal').hide();
        $('.login').removeClass('after');
        $('')
        window.location = "{{url('/')}}";
    });
</script>
<!-- 登录退出状态 -->
                <ul class="nav">
                    <li id="index"><a href="{{url('/')}}">首页</a>|</li>
                    <li class="current" id="project"><a href="{{url('/project')}}">找信息</a>|</li>
                    <li id="service"><a href="{{url('/service')}}">找服务</a>|</li>
                    <li id="video"><a href="{{url('/video')}}">资芽视频</a>|</li>
                    <li id="news"><a href="{{url('/news')}}">新闻中心</a>|</li>
                    <li id="contract"><a href="{{url('/contract')}}">下载专区</a></li>
                </ul>
                <div class="login after">
                    <h1 class="logo"><a href="{{url('/')}}"><img src="/img/logo2.png" height="79" width="205" alt="首页" /></a></h1>
                    <p class="logo_word">全球不良资产超级综服平台<p>
                    
                    <span class="arr"></span>
                </div>
                <div class="arrow"></div>
                <div class="hotline">服务热线：
                    <span>400-898-8557</span>
                </div>
        </div>
    </div>
        <!-- banner/start -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/ucenter/index')}}"></a></li>
    </ul>
    </div>
    <!-- banner/end -->
    <div class="clearfix section asset">
        <div class="secLeft fl">
            <div class="asset-top">
                <h2 class="headline"><span class="fl sub-title">{{$data->TypeName}}</span><span class="serial">{{$data->ProjectNumber}}</span></h2>
                <div class="sm-feature">
                    <span class="entrust novisible"></span><!--委托-->
                    @if(isset($data->CollectFlag) && $data->CollectFlag == 1)
                    <a href="javascript:;" class="storeup" id="collect"><i class="iconfont peach" style="color:#f00">&#xe601;</i><span>已收藏</span></a>
                    @else
                    <a href="javascript:;" class="storeup" id="collect"><i class="iconfont peach">&#xe601;</i><span>收藏</span></a>
                    @endif
                    <div class="shareBox">
                        <div class="jiathis_style_32x32">
                            <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank">分享</a>
                        </div>
                    </div>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script><script type="text/javascript" src="http://v3.jiathis.com/code/plugin.client.js" charset="utf-8"></script>
                    <a href="javascript:;" class="report">举报</a>
                </div>
            </div>
            <div class="asset-main clearfix">
                @if($data->CooperateState == 1)                
                <img src="{{asset('/img/connection.png')}}" alt="" class="disposaled">
                @elseif($data->CooperateState == 2)
                    @if($data->TypeID == 6 || $data->TypeID == 17)
                    <img src="{{asset('/img/disposaled.png')}}" alt="" class="disposaled">
                    @else
                    <img src="{{asset('/img/complete.png')}}" alt="" class="disposaled">
                    @endif
                @endif
            <span class="fees"></span>
            <span class="vip"></span>
            <div class="fl headshot">
                <img src="http://images.ziyawang.com/{{$data->UserPicture}}" class="headshotImg" />
                <span class="nickname" title="{{$data->username}}">{{$data->username}}</span>
                <a href="javascript:;" class="meet" id="rush">点击约谈</a>
                <span class="count_v3" title="已有{{$data->RushCount}}人约谈">{{$data->RushCount}}</span>
                <a href="javascript:;" class="talk"><i class="iconfont">&#xe613;</i>私聊</a>
                <div class="tooltip">
                    <span class="pageview" title="浏览量"><i class="iconfont">&#xe603;</i>{{$data->ViewCount}}</span>
                    <span class="collection" title="收藏量"><i class="iconfont">&#xe601;</i>{{$data->CollectCount}}</span>
                </div>
            </div>

    @yield('content')

            <div class="character">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/captions.png" height="80" width="80" alt="" />文字描述</h3>
                <div class="charact-con fr">
                    {{$data->WordDes}}
                </div>
            </div>
            @if(count($data->PictureDes)>0)
            <div class="relevant">
                <h3 class="charact-title">相关凭证</h3>
                <div class="proof">
                    <ul>
                        @if($data->PictureDes)
                        @foreach($data->PictureDes as $picture)
                        <li><a href="javascript:;"><img src="http://images.ziyawang.com{{$picture}}" /></a></li>
                        @endforeach
                        @endif
                    </ul>
                    <a href="javascript:;" class="proof-l proof-btn"></a>
                    <a href="javascript:;" class="proof-r proof-btn"></a>
                </div>
                    @if($data->Promise == "承诺")
                    <div class="promise">重要提示：发布方本人已对本条信息的真实性进行承诺</div>
                    @endif
            </div>
            @endif
        </div>
        <div class="secRight fr">
            <h3 class="recommendTitle"><i class="iconfont">&#xe612;</i>相关信息<a href="javascript:;" class="changeAlot" id="change">换一换</a></h3>
            <ul class="relev" id="match">
                
            </ul>
        </div>
    </div>
    <div class="poplayer">
        <div class="privacy">
            <a href="javascript:;" class="pri-sure">确定</a>
        </div>
        <div class="authenticate">
            <img src="/img/popv3.png" height="121" width="115" class="popimg" />
            <div class="fill">请先认证成为服务方，即可约谈</div>
            <a href="javascript:;" class="certain confirmurl">确定</a>
        </div>
        <div class="bills">
            <img src="/img/popv3.png" height="121" width="115" class="popimg" />
            <div class="fill">请先认证成为服务方，即可下载清单</div>
            <a href="javascript:;" class="certain confirmurl">确定</a>
        </div>
        <div class="jubaoBox">
            <div class="jubao">
                <h3>选择举报原因</h3>
                <ul class="reasons">
                    <li reasonid="1"><a href="javascript:;">已合作或已处置</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="2"><a href="javascript:;">虚假信息</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="3"><a href="javascript:;">泄露私密</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="4"><a href="javascript:;">垃圾广告</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="5"><a href="javascript:;">人身攻击</a><a href="javascript:;" class="rightCheck"></a></li>
                    <li reasonid="6"><a href="javascript:;">无法联系</a><a href="javascript:;" class="rightCheck"></a></li>
                </ul>
                <div class="btns2">
                    <a href="javascript:;" class="btnConfirm" id="reportpub">确定</a>
                    <a href="javascript:;" class="quxiao" id="reportcancel">取消</a>
                </div>
                <p class="ziyaHot">资芽网全国服务热线&nbsp;&nbsp;400-898-8557</p>
            </div>
        </div>
    </div>
    <!-- 底部 -->
    <div class="foot">
        <div class="footer">
            <div class="botbrands">
                <a class="website" id="_pingansec_bottomimagesmall_brand" href="http://si.trustutn.org/info?sn=671160812023618276847&certType=1" target="_blank"><img src="http://v.trustutn.org/images/cert/brand_bottom_small.jpg"/></a>
                <a  key ="579ebe15efbfb033fb17ed33"  logo_size="96x36"  logo_type="business"  href="http://www.anquan.org" ><script src="//static.anquan.org/static/outer/js/aq_auth.js"></script></a>
                <a href="http://webscan.360.cn/index/checkwebsite/url/www.ziyawang.com" target="_blank"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/9cb32b38475b891e54655e56518a3b9e"/></a>
            </div>
            <div class="nav_foot">
                <a href="{{url('/')}}">首页</a>|<a href="{{url('/aboutus')}}">关于我们</a>|<a href="{{url('/connectus')}}">联系我们</a>|<a href="javascript:;">人才招聘</a>|<a href="javascript:;">商务合作</a>|<a href="{{url('/legal')}}">法律声明</a>
                <p>京ICP备16037201号  Copyright      2016 ziyawang.com</p>
            </div>
            <div class="conection">
                <p class="con_ziya">联系资芽</p>
                <p class="tel"><span></span>Tel：400 - 898 - 8557</p>
                <p class="fax"><span></span>Mail：ziyawang@ziyawang.com</p>
                <p class="address fs12">总部地址：</p><p class="mb10 fs12">北京市海淀区中关村大街15-15号创业公社·中关村</p><p class="fs12">国际创客中心B2-F02</p>
            </div>
            <img src="/img/footer.png" class="erwei">
        </div>
    </div>
    <script type="text/javascript" src="//s.union.360.cn/53727.js"></script>
    </body>
</html>
<script>
    $(function(){
        var PayFlag = "{{$data->PayFlag}}";
        var ConnectPhone = "{{$data->ConnectPhone}}";
        var Price = "{{$data->Price}}";
        var userid = "{{$data->userid}}";
        var access = "{{$data->access}}";

        if(access != 1){
            if(Price != '0' && PayFlag != 1 && userid != $.cookie('userid')){
                layer.alert('该信息为收费资源，您还未支付！',function(){
                    window.location.href="http://ziyawang.com/project"; 
                });
                return false;
            } else if (Price != 0 && PayFlag == 1){
                // $('#shownumber').html(ConnectPhone);
                $('#rush').css('cursor','default').unbind('click'); 
                layer.alert('联系电话：' + ConnectPhone, {title: false,closeBtn:0});
            }
        }

        var proofKey = 0;
        $('.proof ul li').eq(0).show(); 
        var proofLi = $('.proof ul li').length;
        var proofNum = proofLi - 1;
        var proofFn = function(){
            $('.proof ul li').eq(proofKey).fadeOut();
            proofKey++;
            if(proofKey > proofNum){
                proofKey = 0;
            }
            $('.proof ul li').eq(proofKey).fadeIn();
        }
        var timer01 = null;
        timer01 = setInterval(proofFn,5000);
        $('.proof-r').click(function() {
            proofFn();
        });
        $('.proof-l').click(function() {
            $('.proof ul li').eq(proofKey).fadeOut();
            proofKey--;
            if(proofKey < 0){
                proofKey = proofNum;
            }
            $('.proof ul li').eq(proofKey).fadeIn();
        });
        $('.proof').hover(function() {
            if(proofLi > 1 ){
                $('.proof-btn').stop().fadeIn('fast');
            }
            clearInterval(timer01);
        }, function() {
            if(proofLi > 1 ){
                $('.proof-btn').stop().fadeOut('fast');
            }
            timer01 = setInterval(proofFn,5000);
        });

        $('.talk').click(function() {
            $('.poplayer').show();
            $('.privacy').fadeIn('fast');
        });
        $('.pri-sure').click(function() {
            $('.poplayer').hide();
            $('.privacy').fadeOut('fast');
        });

        // $('.meet').click(function() {
        //     $('.poplayer').show();
        //     $('.authenticate').fadeIn('fast');
        // });
        $('.certain').click(function() {
            $('.poplayer').hide();
            $(this).parent().fadeOut('fast');
        });

    var pathname = window.location.pathname;
    var ProjectID = pathname.substr(pathname.lastIndexOf("/")+1);
    var token = $.cookie('token');

     //相关信息
    $.ajax({  
        url: 'http://apis.ziyawang.com/zll/match/project?access_token=token&ProjectID=' + ProjectID + "&token=" + token,  
        type: 'GET',  
        dataType: 'json',
        asycn: false,  
        timeout: 5000,  
        cache: false,   
        success: function (tt){
            json = eval(tt);
            var data = json.data;
            if(data.length == 0){
                $('#match').html("<li>抱歉，暂无此类信息推荐！</li>");
            } else {
                $('#match').html('');
            }
            $.each(data, function (index, item) {

                var TypeID        = data[index].TypeID;
                var ProjectID     = data[index].ProjectID;
                var TypeName      = data[index].TypeName;
                var ViewCount     = data[index].ViewCount;
                var CollectCount  = data[index].CollectCount;
                var ProjectNumber = data[index].ProjectNumber;
                var PublishTime   = data[index].PublishTime;
                var ProArea       = data[index].ProArea;
                    ProArea   = ProArea.substr(0,3);
                var WordDes   = data[index].WordDes;
                if(WordDes.length > 12){
                    WordDes   = WordDes.substr(0,12) + '...';
                }

                var Identity      = ('Identity'     in data[index]) ? data[index].Identity     : null;
                var Money         = ('Money'     in data[index]) ? data[index].Money     : null;
                var Counts        = ('Counts'     in data[index]) ? data[index].Counts     : null;
                var Report        = ('Report'     in data[index]) ? data[index].Report     : null;
                var Time          = ('Time'     in data[index]) ? data[index].Time     : null;
                var Pawn          = ('Pawn'     in data[index]) ? data[index].Pawn     : null;
                var Belong        = ('Belong'     in data[index]) ? data[index].Belong     : null;
                var Usefor        = ('Usefor'     in data[index]) ? data[index].Usefor     : null;
                var Type          = ('Type'     in data[index]) ? data[index].Type     : null;
                var Area          = ('Area'     in data[index]) ? data[index].Area     : null;
                var Year          = ('Year'     in data[index]) ? data[index].Year     : null;
                var TransferType  = ('TransferType'     in data[index]) ? data[index].TransferType     : null;
                var MarketPrice   = ('MarketPrice'     in data[index]) ? data[index].MarketPrice     : null;
                var Credentials   = ('Credentials'     in data[index]) ? data[index].Credentials     : null;
                var Dispute       = ('Dispute'     in data[index]) ? data[index].Dispute     : null;
                var Debt          = ('Debt'     in data[index]) ? data[index].Debt     : null;
                var Guaranty      = ('Guaranty'     in data[index]) ? data[index].Guaranty     : null;
                var Month         = ('Month'     in data[index]) ? data[index].Month     : null;
                var Nature        = ('Nature'     in data[index]) ? data[index].Nature     : null;
                var State         = ('State'     in data[index]) ? data[index].State     : null;
                var Industry      = ('Industry'     in data[index]) ? data[index].Industry     : null;
                var DebteeLocation= ('DebteeLocation'     in data[index]) ? data[index].DebteeLocation     : null;
                var Connect       = ('Connect'     in data[index]) ? data[index].Connect     : null;
                var Law           = ('Law'     in data[index]) ? data[index].Law     : null;
                var UnLaw         = ('UnLaw'     in data[index]) ? data[index].UnLaw     : null;
                var Pay           = ('Pay'     in data[index]) ? data[index].Pay     : null;
                var Court         = ('Court'     in data[index]) ? data[index].Court     : null;
                var Brand         = ('Brand'     in data[index]) ? data[index].Brand     : null;
                var ProLabel      = ('ProLabel'     in data[index]) ? data[index].ProLabel     : null;
                var ProLabelArr   = ('ProLabelArr'     in data[index]) ? data[index].ProLabelArr     : null;
                var NewsID        = ('NewsID'     in data[index]) ? data[index].NewsID     : null;
                var NewsTitle     = ('NewsTitle'     in data[index]) ? data[index].NewsTitle     : null;
                var NewsContent   = ('NewsContent'     in data[index]) ? data[index].NewsContent     : null;
                var NewsLogo      = ('NewsLogo'     in data[index]) ? data[index].NewsLogo     : null;
                var NewsThumb     = ('NewsThumb'     in data[index]) ? data[index].NewsThumb     : null;
                var NewsLabel     = ('NewsLabel'     in data[index]) ? data[index].NewsLabel     : null;
                var NewsAuthor    = ('NewsAuthor'     in data[index]) ? data[index].NewsAuthor     : null;
                var Brief         = ('Brief'     in data[index]) ? data[index].Brief     : null;
                var CollectionCount= ('CollectionCount'     in data[index]) ? data[index].CollectionCount     : null;
                var FromWhere     = ('FromWhere'     in data[index]) ? data[index].FromWhere     : null;
                var Title         = ('Title'         in data[index]) ? data[index].Title         : null;
                var TotalMoney    = ('TotalMoney'    in data[index]) ? data[index].TotalMoney    : null;
                var TransferMoney = ('TransferMoney' in data[index]) ? data[index].TransferMoney : null;
                var AssetType     = ('AssetType'     in data[index]) ? data[index].AssetType     : null;
                var Corpore       = ('Corpore'       in data[index]) ? data[index].Corpore       : null;
                var AssetList     = ('AssetList'     in data[index]) ? data[index].AssetList     : null;
                var Status        = ('Status'        in data[index]) ? data[index].Status        : null;
                var Rate          = ('Rate'          in data[index]) ? data[index].Rate          : null;
                var Requirement   = ('Requirement'   in data[index]) ? data[index].Requirement   : null;
                var BuyerNature   = ('BuyerNature'   in data[index]) ? data[index].BuyerNature   : null;
                var Informant     = ('Informant'     in data[index]) ? data[index].Informant     : null;
                var Buyer         = ('Buyer'         in data[index]) ? data[index].Buyer         : null;
                var PictureDes1   = ('PictureDes1'   in data[index]) ? data[index].PictureDes1   : null;
                if(!PictureDes1){
                    PictureDes1 = '/erroy1.png';
                }
                var Member        = ('Member'        in data[index]) ? data[index].Member        : null;
                var NewFlag       = ('NewFlag'       in data[index]) ? data[index].NewFlag       : null;
                var CollectFlag   = ('CollectFlag'   in data[index]) ? data[index].CollectFlag   : null;
                var InvestType    = ('InvestType'    in data[index]) ? data[index].InvestType    : null;
                var Year          = ('Year'          in data[index]) ? data[index].Year          : null;
                var Price         = ('Price'         in data[index]) ? data[index].Price         : 0;
                var Account       = ('Account'       in data[index]) ? data[index].Account       : null;
                var PayFlag       = ('PayFlag'       in data[index]) ? data[index].PayFlag       : null;
                var PhoneNumber   = ('PhoneNumber'   in data[index]) ? data[index].PhoneNumber   : null;
                var userid       = ('userid'       in data[index]) ? data[index].userid       : null;
        var CooperateState= ('CooperateState'in data[index]) ? data[index].CooperateState: null;
                var priceattr = " price=" + Price;
                var projectidattr = " projectid=" + ProjectID;
                var protypeattr = " typeid=" + TypeID;
                var accountattr = " account=" + Account;
                var payflagattr = " payflag=" + PayFlag;
                var isselfattr = ' isself=0';
                var memberattr = " member=0";
        var coostateattr= " coostate=" + CooperateState;
                var right   = ('right'   in data[index]) ? data[index].right   : null;
                if(right.length == 0 ){
                    right = "0";
                }
                var rightattr = " right=" + right;
                var typenameattr = " typename=" + TypeName;
                if(userid == $.cookie('userid')){
                    isselfattr = ' isself=1';
                }
                TypeID = TypeID + '';
                var vip = '';
                if(Member == 1){
                    vip = '<img src="/img/vip_pic.png" class="vipPic" />';
                    memberattr = " member=1";
                } else if (Member == 2){
                    vip = '<img src="/img/shoufei.png" class="vipPic" style="margin-top: -2px;" />';
                    memberattr = " member=2";
                }
                //处理项目亮点
                var lights = "<strong class='spot-title'>项目亮点</strong><div class='list-spot-con'>";
                $(ProLabelArr).each(function(index,value){
                    if(value != ''){
                        lights = lights + "<span>" + value + "</span>";
                    }
                })
                lights = lights + "</div>";
                if(ProLabelArr[0] == ''){
                    lights = "";
                }
                var law = '';
                if(Law != null){
                    law = "诉讼";
                }else{
                    law = "非诉讼";
                }
                //截取数字长度
                if(TransferMoney.length >= 8){
                    TransferMoney = TransferMoney.substr(0,TransferMoney.indexOf('.'));
                }
                if(Money.length >= 8){
                    Money = Money.substr(0,Money.indexOf('.'));
                }
                if(TotalMoney.length >= 8){
                    TotalMoney = TotalMoney.substr(0,TotalMoney.indexOf('.'));
                }
                if(MarketPrice.length >= 8){
                    MarketPrice = MarketPrice.substr(0,MarketPrice.indexOf('.'));
                }
                //新加合作中亦已完成和处置成功
                var cooperate = "";
                if(CooperateState == "1"){
                    cooperate = "<img src='/img/connection.png' class='disposal-state' />"
                }
                if(CooperateState == "2"){
                    if(TypeID == "6" || TypeID == "17"){
                        cooperate = "<img src='/img/disposaled.png' class='disposal-state' />"
                    } else {
                        cooperate = "<img src='/img/complete.png' class='disposal-state' />"
                    }
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span></div><div class='itemTopRight'><h2><span class='head-title'>资产包</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>来源：<span>" + FromWhere + "</span></p><p class='remarks'>资产包类型：<span>" + AssetType + "</span></p><div class='list-spot'>" + lights + "</div></div></a></li>"
                    break;
                    case "6":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span></div><div class='itemTopRight'><h2><span class='head-title'>融资信息</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>融资额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>融资方式：<span>股权融资</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;
                    case "12":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span></div><div class='itemTopRight'><h2><span class='head-title'>固定资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>市场价</em></span><strong>" + MarketPrice + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>标的物：<span>房产</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;

                    case "16":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span></div><div class='itemTopRight'><h2><span class='head-title'>固定资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>标的物：<span>土地</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;

                    case "17":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span></div><div class='itemTopRight'><h2><span class='head-title'>融资信息</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>融资额</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>融资方式：<span>债权融资</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;

                    case "18":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='businCollection'></span></div><div class='itemTopRight'><h2><span class='head-title'>企业商账</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>债权额</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>处置方式：<span>" + law + "</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;

                    case "19":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='indivAssignment'></span></div><div class='itemTopRight'><h2><span class='head-title'>个人债权</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>处置方式：<span>" + law + "</span></p><div class='list-spot'>" + lights + "</div></div></a></li>";
                    break;

                    case "20":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><span class='head-title'>法拍资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>土地</span></p></div></a></li>";
                    break;

                    case "21":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><span class='head-title'>法拍资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>土地</span></p></div></a></li>";
                    break;

                    case "22":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><span class='head-title'>法拍资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>土地</span></p></div></a></li>";
                    break;
                }
                $("#match").html($("#match").html() + html);  
            });    
          function rush(Price, ProjectID, Account, TypeID) {
            var isenough = '';
            if(Price > Account){
                isenough = "(余额不足)";
            }
            if(Price == 0){
                token = token.replace(/\'/g,"");
                $.ajax({
                    url:'http://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                    type:'POST',
                    dataType:'json',
                    success:function(msg){
                        // alert(msg.status_code);
                        if(msg.status_code == 200 || msg.status_code == 417){
                            window.location.href="http://ziyawang.com/project/"+ TypeID +"/" + ProjectID;
                        } else if(msg.status_code == 418) {
                            layer.confirm('余额不足，请充值！', {title: '提示', btn: ['充值','取消']}, function(){window.location.href="http://ziyawang.com/ucenter/money?TypeID=" + TypeID + "&ProjectID=" + ProjectID; });
                        }
                    }
                });
                return;
            } else {
                layer.open({
                    type: 1,
                    area: ['500px'], //宽高
                    content: '<div class="layerRecharge"> <div class="layerTop"> <span class="coverBg"></span> <div class="captionTip"> <h3>该信息为收费资源</h3> <p class="needMoney">需消耗芽币即可查看对方联系方式</p> <p class="custom">消耗 ：<strong>' + Price + '</strong>芽币</p> <p class="custom">余额 ：<strong>' + Account + '</strong>芽币<span>' + isenough + '</span></p> </div> </div> </div>',
                    btn: ['确定','充值','取消'], btn1:function(){
                    // token = token.replace(/\'/g,"");
                    $.ajax({
                        url:'http://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                        type:'POST',
                        dataType:'json',
                        success:function(msg){
                            if(msg.status_code == 200){
                                window.location.href="http://ziyawang.com/project/"+ TypeID +"/" + ProjectID;
                            } else if(msg.status_code == 418) {
                                layer.open({
                                    type: 1,
                                    area: ['322px'], //宽高
                                    content: '<div class="layerNo"> <div class="layerNotop"> <span class="nocoverBg"></span> <span class="noFree">余额不足请充值！</span> </div></div>', btn: ['充值','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/money?TypeID=" + TypeID + "&ProjectID=" + ProjectID; }, but2:function(){}});
                            }
                        }
                    });

                }, btn2:function(){
                    window.location.href="http://ziyawang.com/ucenter/money?TypeID=" + TypeID + "&ProjectID=" + ProjectID; 
                }, close:function(){

                }});
                return;
            }
        }
        $(".item").click(function(){
            var price = parseInt($(this).attr('price'));
            var projectid = $(this).attr('projectid');
            var typeid = $(this).attr('typeid');
            var member = $(this).attr('member');
            var right = $(this).attr('right');
            var typename = $(this).attr('typename');
            var rightarr = new Array(); //定义一数组 
                rightarr = right.split(","); //字符分割 
            var coostate = $(this).attr('coostate');
            if(coostate == "1" || coostate == "2"){
                window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                return false;
            }
            if(rightarr.indexOf(typeid)>-1){
                window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                return false;
            }
            if(member == 1){
                checkLogin();
                if(stop){
                    return false;
                }
                checkService();
                if(stop){
                    // myFun('poplayer5');
                    if(member == 1){
                        layer.open({title:false,content:"<p style='text-align: center;font-size: 24px; border-bottom: 3px solid #fdd000;padding-bottom:20px;'>提示</p><p style='font-size:20px;text-align: justify;padding: 35px 15px 0;'>只有通过认证的服务方（开通会员）才可查看VIP信息 。</p>", btn: ['认证','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/confirm";}});
                    } else if(member == 2){
                        layer.open({title:false,content:"<p style='text-align: center;font-size: 24px; border-bottom: 3px solid #fdd000;padding-bottom:20px;'>提示</p><p style='font-size:20px;text-align: justify;padding: 35px 15px 0;'>只有通过认证的服务方（消耗芽币）才可查看收费信息 。</p>", btn: ['认证','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/confirm";}});
                    }
                    return false;
                }
                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 1,
                    area: '500px',
                    skin: 'layer-member',
                    shadeClose: true,
                    content: '<div class="member"><p>本条VIP信息只针对' + typename + '会员免费开放，</p><p>详情请咨询会员专线：010-56052557</p></div>',
                    btn: ['去开通'], btn1:function(){
                        window.open("http://ziyawang.com/ucenter/member","status=yes,toolbar=yes, menubar=yes,location=yes"); 
                        return false;
                    }
                });
                return false;
            }
            if(price == 0){
                if(typeid == 99){
                    window.open("http://ziyawang.com/project/czgg/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes");
                    return false;
                }
                window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                return false;
            }
            checkLogin();
            if(stop){
                return false;
            }

            var isself = parseInt($(this).attr('isself'));
            if(isself != 1){
               
                checkService();
                if(stop){
                    // myFun('poplayer5');
                    if(member == 1){
                        layer.open({title:false,content:"<p style='text-align: center;font-size: 24px; border-bottom: 3px solid #fdd000;padding-bottom:20px;'>提示</p><p style='font-size:20px;text-align: justify;padding: 35px 15px 0;'>只有通过认证的服务方（开通会员）才可查看VIP信息 。</p>", btn: ['认证','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/confirm";}});
                    } else if(member == 2){
                        layer.open({title:false,content:"<p style='text-align: center;font-size: 24px; border-bottom: 3px solid #fdd000;padding-bottom:20px;'>提示</p><p style='font-size:20px;text-align: justify;padding: 35px 15px 0;'>只有通过认证的服务方（消耗芽币）才可查看收费信息 。</p>", btn: ['认证','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/confirm";}});
                    }
                    return false;
                }
                var account = parseInt($(this).attr('account'));
                var payflag = $(this).attr('payflag');
                if(payflag != 1){
                    $(this).find('a').removeAttr('href');
                    rush(price, projectid, account, typeid);
                } else if (payflag == 1){
                    window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                }
            }
        }); 
        } //成功执行方法    
    })  

var pathname = window.location.pathname;
var ProjectID = pathname.substr(pathname.lastIndexOf("/")+1);
var token = $.cookie('token');
var stop = false;
var Price = parseInt("{{$data->Price}}");
var ConnectPhone = "{{$data->ConnectPhone}}";
function checkLogin(){
    if(!token){
        // window.location = "{{url('/login')}}";
        window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes");
        layer.confirm('请先登录！', {title: '提示', btn: ['确定']}, function(){window.location.reload();});
        stop = true;
        return false;
    }
    stop = false;
}

function checkService(){
    var role = $.cookie('role');
    if( role != 1) {
        stop = true;
        // myFun('poplayer1');
        return;
    }
    stop = false;
}

function collect() {
    token = token.replace(/\'/g,"");
    $.ajax({
        url:'http://apis.ziyawang.com/zll/collect?access_token=token&token='+token,
        type:'POST',
        data:'itemID=' + ProjectID + '&type=1',
        dataType:'json',
        success:function(msg){
            // alert(msg.msg);
        }
    });
}

function rush() {
    if(PayFlag == 1){
        layer.alert('联系电话：' + ConnectPhone, {title: false,closeBtn:0});
        return false;
    }
    // if(Price == 0){
        token = token.replace(/\'/g,"");
        $.ajax({
            url:'http://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
            type:'POST',
            dataType:'json',
            success:function(msg){
                // alert(msg.status_code);
                if(msg.status_code == 200 || msg.status_code == 417){
                    $('#shownumber').html(ConnectPhone);
                    $('#rush').css('cursor','default').unbind('click'); 
                    layer.alert('联系电话：' + ConnectPhone, {title: false,closeBtn:0});
                    // $('.popNumDet').html('联系电话：' + ConnectPhone);
                    // $('.popPhoneNum').show();
                } else if(msg.status_code == 418) {
                    layer.confirm('余额不足，请充值！', {title: '提示', btn: ['充值','取消']}, function(){window.location.href="http://ziyawang.com/ucenter/money?TypeID=" + TypeID + "&ProjectID=" + ProjectID; });
                }
            }
        });
        return;
}
$("#rush").click(function(){
    checkLogin();
    if(stop){
        return false;
    }

    checkService();
    if(stop){
        myFun('authenticate');
        return false;
    }
    
    rush();
});



if({{$data->CooperateState}} != "0"){
    $("#rush").unbind("click")
    $('#rush').css("background","rgb(171, 171, 171)")
    $('.count_v3').css("background","rgb(171, 171, 171)")
    $('#rush').css('cursor','default')
}


$("#collect").click(function(){
    checkLogin();
    if(stop){
        return false;
    }
    collect();

    if($(this).children('span').html()=='收藏'||$(this).children('span').html()=='取消收藏'){
        $(this).children('i').css('color', '#f00');
        $(this).children('span').html('已收藏');
    }else{
        $(this).children('i').css('color', '#d1d1d1');
        $(this).children('span').html('收藏');
    }
});

//声明方法
var myFun = function(box){
    $('.poplayer').show();
    $('.'+box).show();
}

//点击确定关闭弹出的查看联系人和查看语音信息
$('.confirmurl').click(function(event) {
    $(this).parent().hide();
    $('.poplayer').hide();
    window.open("http://ziyawang.com/ucenter/confirm","status=yes,toolbar=yes, menubar=yes,location=yes"); 
        return false;
});
$('.certain').click(function(event) {
    $(this).parent().hide();
    $('.poplayer').hide();
});

$('.privateChat').click(function(event) {
    myFun('privacy');
});   

// $("#check").click(function(){

//     checkLogin();
//     if(stop){
//         return false;
//     }

//     $("#check").html(ConnectPhone);
// });
$('#download').click(function(){
    checkLogin();
    if(stop){
        return false;
    }

    checkService();
    if(stop){
        myFun('bills');
        return false;
    }
    var url = $(this).attr('url');
    window.open(url);
})
});

$('#change').click(function(){
    var pathname = window.location.pathname;
    var ProjectID = pathname.substr(pathname.lastIndexOf("/")+1);
    var token = $.cookie('token');

     //相关信息
    $.ajax({  
        url: 'http://apis.ziyawang.com/zll/match/project?access_token=token&ProjectID=' + ProjectID + "&token=" + token,  
        type: 'GET',  
        dataType: 'json',
        asycn: false,  
        timeout: 5000,  
        cache: false,  
        success: function (tt){
            json = eval(tt);
            // console.log(json)
            var data = json.data;
            if(data.length == 0){
                $('#match').html("<li>抱歉，暂无此类信息推荐！</li>");
            } else {
                $('#match').html('');
            }
            $.each(data, function (index, item) {

                var TypeID        = data[index].TypeID;
                var ProjectID     = data[index].ProjectID;
                var TypeName      = data[index].TypeName;
                var ViewCount     = data[index].ViewCount;
                var CollectCount  = data[index].CollectCount;
                var ProjectNumber = data[index].ProjectNumber;
                var PublishTime   = data[index].PublishTime;
                var ProArea       = data[index].ProArea;
                    ProArea   = ProArea.substr(0,3);
                var WordDes   = data[index].WordDes;
                if(WordDes.length > 12){
                    WordDes   = WordDes.substr(0,12) + '...';
                }

                var Identity      = ('Identity'     in data[index]) ? data[index].Identity     : null;
                var Money         = ('Money'     in data[index]) ? data[index].Money     : null;
                var Counts        = ('Counts'     in data[index]) ? data[index].Counts     : null;
                var Report        = ('Report'     in data[index]) ? data[index].Report     : null;
                var Time          = ('Time'     in data[index]) ? data[index].Time     : null;
                var Pawn          = ('Pawn'     in data[index]) ? data[index].Pawn     : null;
                var Belong        = ('Belong'     in data[index]) ? data[index].Belong     : null;
                var Usefor        = ('Usefor'     in data[index]) ? data[index].Usefor     : null;
                var Type          = ('Type'     in data[index]) ? data[index].Type     : null;
                var Area          = ('Area'     in data[index]) ? data[index].Area     : null;
                var Year          = ('Year'     in data[index]) ? data[index].Year     : null;
                var TransferType  = ('TransferType'     in data[index]) ? data[index].TransferType     : null;
                var MarketPrice   = ('MarketPrice'     in data[index]) ? data[index].MarketPrice     : null;
                var Credentials   = ('Credentials'     in data[index]) ? data[index].Credentials     : null;
                var Dispute       = ('Dispute'     in data[index]) ? data[index].Dispute     : null;
                var Debt          = ('Debt'     in data[index]) ? data[index].Debt     : null;
                var Guaranty      = ('Guaranty'     in data[index]) ? data[index].Guaranty     : null;
                var Month         = ('Month'     in data[index]) ? data[index].Month     : null;
                var Nature        = ('Nature'     in data[index]) ? data[index].Nature     : null;
                var State         = ('State'     in data[index]) ? data[index].State     : null;
                var Industry      = ('Industry'     in data[index]) ? data[index].Industry     : null;
                var DebteeLocation= ('DebteeLocation'     in data[index]) ? data[index].DebteeLocation     : null;
                var Connect       = ('Connect'     in data[index]) ? data[index].Connect     : null;
                var Law           = ('Law'     in data[index]) ? data[index].Law     : null;
                var UnLaw         = ('UnLaw'     in data[index]) ? data[index].UnLaw     : null;
                var Pay           = ('Pay'     in data[index]) ? data[index].Pay     : null;
                var Court         = ('Court'     in data[index]) ? data[index].Court     : null;
                var Brand         = ('Brand'     in data[index]) ? data[index].Brand     : null;
                var ProLabel      = ('ProLabel'     in data[index]) ? data[index].ProLabel     : null;
                var ProLabelArr   = ('ProLabelArr'     in data[index]) ? data[index].ProLabelArr     : null;
                var NewsID        = ('NewsID'     in data[index]) ? data[index].NewsID     : null;
                var NewsTitle     = ('NewsTitle'     in data[index]) ? data[index].NewsTitle     : null;
                var NewsContent   = ('NewsContent'     in data[index]) ? data[index].NewsContent     : null;
                var NewsLogo      = ('NewsLogo'     in data[index]) ? data[index].NewsLogo     : null;
                var NewsThumb     = ('NewsThumb'     in data[index]) ? data[index].NewsThumb     : null;
                var NewsLabel     = ('NewsLabel'     in data[index]) ? data[index].NewsLabel     : null;
                var NewsAuthor    = ('NewsAuthor'     in data[index]) ? data[index].NewsAuthor     : null;
                var Brief         = ('Brief'     in data[index]) ? data[index].Brief     : null;
                var CollectionCount= ('CollectionCount'     in data[index]) ? data[index].CollectionCount     : null;
                var FromWhere     = ('FromWhere'     in data[index]) ? data[index].FromWhere     : null;
                var Title         = ('Title'         in data[index]) ? data[index].Title         : null;
                var TotalMoney    = ('TotalMoney'    in data[index]) ? data[index].TotalMoney    : null;
                var TransferMoney = ('TransferMoney' in data[index]) ? data[index].TransferMoney : null;
                var AssetType     = ('AssetType'     in data[index]) ? data[index].AssetType     : null;
                var Corpore       = ('Corpore'       in data[index]) ? data[index].Corpore       : null;
                var AssetList     = ('AssetList'     in data[index]) ? data[index].AssetList     : null;
                var Status        = ('Status'        in data[index]) ? data[index].Status        : null;
                var Rate          = ('Rate'          in data[index]) ? data[index].Rate          : null;
                var Requirement   = ('Requirement'   in data[index]) ? data[index].Requirement   : null;
                var BuyerNature   = ('BuyerNature'   in data[index]) ? data[index].BuyerNature   : null;
                var Informant     = ('Informant'     in data[index]) ? data[index].Informant     : null;
                var Buyer         = ('Buyer'         in data[index]) ? data[index].Buyer         : null;
                var PictureDes1   = ('PictureDes1'   in data[index]) ? data[index].PictureDes1   : null;
                if(!PictureDes1){
                    PictureDes1 = '/erroy1.png';
                }
                var Member        = ('Member'        in data[index]) ? data[index].Member        : null;
                var NewFlag       = ('NewFlag'       in data[index]) ? data[index].NewFlag       : null;
                var CollectFlag   = ('CollectFlag'   in data[index]) ? data[index].CollectFlag   : null;
                var InvestType    = ('InvestType'    in data[index]) ? data[index].InvestType    : null;
                var Year          = ('Year'          in data[index]) ? data[index].Year          : null;
                var Price         = ('Price'         in data[index]) ? data[index].Price         : 0;
                var Account       = ('Account'       in data[index]) ? data[index].Account       : null;
                var PayFlag       = ('PayFlag'       in data[index]) ? data[index].PayFlag       : null;
                var PhoneNumber   = ('PhoneNumber'   in data[index]) ? data[index].PhoneNumber   : null;
                var userid       = ('userid'       in data[index]) ? data[index].userid       : null;
        var CooperateState= ('CooperateState'in data[index]) ? data[index].CooperateState: null;
                var priceattr = " price=" + Price;
                var projectidattr = " projectid=" + ProjectID;
                var protypeattr = " typeid=" + TypeID;
                var accountattr = " account=" + Account;
                var payflagattr = " payflag=" + PayFlag;
                var isselfattr = ' isself=0';
                var memberattr = " member=0";
        var coostateattr= " coostate=" + CooperateState;
                var right   = ('right'   in data[index]) ? data[index].right   : null;
                if(right.length == 0 ){
                    right = "0";
                }
                var rightattr = " right=" + right;
                var typenameattr = " typename=" + TypeName;
                if(userid == $.cookie('userid')){
                    isselfattr = ' isself=1';
                }
                TypeID = TypeID + '';
                var vip = '';
                if(Member == 1){
                    vip = '<img src="/img/vip_pic.png" class="vipPic" />';
                    memberattr = " member=1";
                } else if (Member == 2){
                    vip = '<img src="/img/shoufei.png" class="vipPic" style="margin-top: -2px;" />';
                    memberattr = " member=2";
                }
                //处理项目亮点
                var lights = "<strong class='spot-title'>项目亮点</strong><div class='list-spot-con'>";
                $(ProLabelArr).each(function(index,value){
                    if(value != ''){
                        lights = lights + "<span>" + value + "</span>";
                    }
                })
                lights = lights + "</div>";
                if(ProLabelArr[0] == ''){
                    lights = "";
                }
                var law = '';
                if(Law != null){
                    law = "诉讼";
                }else{
                    law = "非诉讼";
                }
                //截取数字长度
                if(TransferMoney.length >= 8){
                    TransferMoney = TransferMoney.substr(0,TransferMoney.indexOf('.'));
                }
                if(Money.length >= 8){
                    Money = Money.substr(0,Money.indexOf('.'));
                }
                if(TotalMoney.length >= 8){
                    TotalMoney = TotalMoney.substr(0,TotalMoney.indexOf('.'));
                }
                if(MarketPrice.length >= 8){
                    MarketPrice = MarketPrice.substr(0,MarketPrice.indexOf('.'));
                }
                //新加合作中亦已完成和处置成功
                var cooperate = "";
                if(CooperateState == "1"){
                    cooperate = "<img src='/img/connection.png' class='disposal-state' />"
                }
                if(CooperateState == "2"){
                    if(TypeID == "6" || TypeID == "17"){
                        cooperate = "<img src='/img/disposaled.png' class='disposal-state' />"
                    } else {
                        cooperate = "<img src='/img/complete.png' class='disposal-state' />"
                    }
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span></div><div class='itemTopRight'><h2><span class='head-title'>资产包</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>来源：<span>" + FromWhere + "</span></p><p class='remarks'>资产包类型：<span>" + AssetType + "</span></p><div class='list-spot'>" + lights + "</div></div></a></li>"
                    break;
                    case "6":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span></div><div class='itemTopRight'><h2><span class='head-title'>融资信息</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>融资额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>融资方式：<span>股权融资</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;
                    case "12":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span></div><div class='itemTopRight'><h2><span class='head-title'>固定资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>市场价</em></span><strong>" + MarketPrice + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>标的物：<span>房产</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;

                    case "16":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span></div><div class='itemTopRight'><h2><span class='head-title'>固定资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>标的物：<span>土地</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;

                    case "17":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span></div><div class='itemTopRight'><h2><span class='head-title'>融资信息</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>融资额</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>融资方式：<span>债权融资</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;

                    case "18":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='businCollection'></span></div><div class='itemTopRight'><h2><span class='head-title'>企业商账</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>债权额</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>处置方式：<span>" + law + "</span></p><div class='list-spot'>" + lights + "</div></div></a></li> ";
                    break;

                    case "19":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='indivAssignment'></span></div><div class='itemTopRight'><h2><span class='head-title'>个人债权</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>处置方式：<span>" + law + "</span></p><div class='list-spot'>" + lights + "</div></div></a></li>";
                    break;

                    case "20":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><span class='head-title'>法拍资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>土地</span></p></div></a></li>";
                    break;

                    case "21":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><span class='head-title'>法拍资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>土地</span></p></div></a></li>";
                    break;

                    case "22":
                    var html = "<li " + coostateattr + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='item'><a href='javascript:;'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><span class='head-title'>法拍资产</span><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><p class='descriptionInwords'>" + Title + "</p><span class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></span><div class='disposal-par'>" + cooperate + "<p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>土地</span></p></div></a></li>";
                    break;
                }
                $("#match").html($("#match").html() + html);  
            });   
function checkLogin(){
    var token = $.cookie('token');
    if(!token){
        // window.location = "{{url('/login')}}";
         window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes"); 
        stop = true;
        return false;
    }
    stop = false;
} 

function checkService(){
    var role = $.cookie('role');
    if( role != 1) {
        stop = true;
        // myFun('poplayer1');
        return;
    }
    stop = false;
}


function rush(Price, ProjectID, Account, TypeID) {
            var isenough = '';
            if(Price > Account){
                isenough = "(余额不足)";
            }
            if(Price == 0){
                token = token.replace(/\'/g,"");
                $.ajax({
                    url:'http://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                    type:'POST',
                    dataType:'json',
                    success:function(msg){
                        // alert(msg.status_code);
                        if(msg.status_code == 200 || msg.status_code == 417){
                            window.location.href="http://ziyawang.com/project/"+ TypeID +"/" + ProjectID;
                        } else if(msg.status_code == 418) {
                            layer.confirm('余额不足，请充值！', {title: '提示', btn: ['充值','取消']}, function(){window.location.href="http://ziyawang.com/ucenter/money?TypeID=" + TypeID + "&ProjectID=" + ProjectID; });
                        }
                    }
                });
                return;
            } else {
                layer.open({
                    type: 1,
                    area: ['500px'], //宽高
                    content: '<div class="layerRecharge"> <div class="layerTop"> <span class="coverBg"></span> <div class="captionTip"> <h3>该信息为收费资源</h3> <p class="needMoney">需消耗芽币即可查看对方联系方式</p> <p class="custom">消耗 ：<strong>' + Price + '</strong>芽币</p> <p class="custom">余额 ：<strong>' + Account + '</strong>芽币<span>' + isenough + '</span></p> </div> </div> </div>',
                    btn: ['确定','充值','取消'], btn1:function(){
                    // token = token.replace(/\'/g,"");
                    $.ajax({
                        url:'http://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                        type:'POST',
                        dataType:'json',
                        success:function(msg){
                            if(msg.status_code == 200){
                                window.location.href="http://ziyawang.com/project/"+ TypeID +"/" + ProjectID;
                            } else if(msg.status_code == 418) {
                                layer.open({
                                    type: 1,
                                    area: ['322px'], //宽高
                                    content: '<div class="layerNo"> <div class="layerNotop"> <span class="nocoverBg"></span> <span class="noFree">余额不足请充值！</span> </div></div>', btn: ['充值','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/money?TypeID=" + TypeID + "&ProjectID=" + ProjectID; }, but2:function(){}});
                            }
                        }
                    });

                }, btn2:function(){
                    window.location.href="http://ziyawang.com/ucenter/money?TypeID=" + TypeID + "&ProjectID=" + ProjectID; 
                }, close:function(){

                }});
                return;
            }
        }
        $(".item").click(function(){
            var price = parseInt($(this).attr('price'));
            var projectid = $(this).attr('projectid');
            var typeid = $(this).attr('typeid');
            var member = $(this).attr('member');
            var right = $(this).attr('right');
            var typename = $(this).attr('typename');
            var rightarr = new Array(); //定义一数组 
                rightarr = right.split(","); //字符分割 
            var coostate = $(this).attr('coostate');
            if(coostate == "1" || coostate == "2"){
                window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                return false;
            }
            if(rightarr.indexOf(typeid)>-1){
                window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                return false;
            }
            if(member == 1){
                checkLogin();
                if(stop){
                    return false;
                }
                checkService();
                if(stop){
                    // myFun('poplayer5');
                    if(member == 1){
                        layer.open({title:false,content:"<p style='text-align: center;font-size: 24px; border-bottom: 3px solid #fdd000;padding-bottom:20px;'>提示</p><p style='font-size:20px;text-align: justify;padding: 35px 15px 0;'>只有通过认证的服务方（开通会员）才可查看VIP信息 。</p>", btn: ['认证','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/confirm";}});
                    } else if(member == 2){
                        layer.open({title:false,content:"<p style='text-align: center;font-size: 24px; border-bottom: 3px solid #fdd000;padding-bottom:20px;'>提示</p><p style='font-size:20px;text-align: justify;padding: 35px 15px 0;'>只有通过认证的服务方（消耗芽币）才可查看收费信息 。</p>", btn: ['认证','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/confirm";}});
                    }
                    return false;
                }
                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 1,
                    area: '500px',
                    skin: 'layer-member',
                    shadeClose: true,
                    content: '<div class="member"><p>本条VIP信息只针对' + typename + '会员免费开放，</p><p>详情请咨询会员专线：010-56052557</p></div>',
                    btn: ['去开通'], btn1:function(){
                        window.open("http://ziyawang.com/ucenter/member","status=yes,toolbar=yes, menubar=yes,location=yes"); 
                        return false;
                    }
                });
                return false;
            }
            if(price == 0){
                if(typeid == 99){
                    window.open("http://ziyawang.com/project/czgg/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes");
                    return false;
                }
                window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                return false;
            }
            checkLogin();
            if(stop){
                return false;
            }

            var isself = parseInt($(this).attr('isself'));
            if(isself != 1){
               
                checkService();
                if(stop){
                    // myFun('poplayer5');
                    if(member == 1){
                        layer.open({title:false,content:"<p style='text-align: center;font-size: 24px; border-bottom: 3px solid #fdd000;padding-bottom:20px;'>提示</p><p style='font-size:20px;text-align: justify;padding: 35px 15px 0;'>只有通过认证的服务方（开通会员）才可查看VIP信息 。</p>", btn: ['认证','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/confirm";}});
                    } else if(member == 2){
                        layer.open({title:false,content:"<p style='text-align: center;font-size: 24px; border-bottom: 3px solid #fdd000;padding-bottom:20px;'>提示</p><p style='font-size:20px;text-align: justify;padding: 35px 15px 0;'>只有通过认证的服务方（消耗芽币）才可查看收费信息 。</p>", btn: ['认证','取消'], btn1:function(){window.location.href="http://ziyawang.com/ucenter/confirm";}});
                    }
                    return false;
                }
                var account = parseInt($(this).attr('account'));
                var payflag = $(this).attr('payflag');
                if(payflag != 1){
                    $(this).find('a').removeAttr('href');
                    rush(price, projectid, account, typeid);
                } else if (payflag == 1){
                    window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                }
            }
        });
                   
        } //成功执行方法    
    })   
});


$('.report').click(function(){
    var token = $.cookie('token');
    if(!token){
        // window.location = "{{url('/login')}}";
        window.open("http://ziyawang.com/login","status=yes,toolbar=yes, menubar=yes,location=yes"); 
        return false;
    }
    $('.poplayer').show();
    $('.jubaoBox').show();
})

$('.reasons a').click(function(event) {
    $(this).parent().toggleClass('cur');
});

$('#reportpub').click(function(){
    var ReasonID = '';
    $('.reasons li').each(function(){
        if($(this).hasClass('cur')){
            ReasonID = ReasonID + ',' + $(this).attr('reasonid');
        }
    })
    if(ReasonID == ''){
        alert('您还没有选择理由呢！');
        return false;
    }
    var pathname = window.location.pathname;
    var ProjectID = pathname.substr(pathname.lastIndexOf("/")+1);
    var token = $.cookie('token');
    $.ajax({
        url: "http://apis.ziyawang.com/zll/report?access_token=token&token=" + token,
        type: "POST",
        data: {'ItemID':ProjectID, 'Type':1, 'ReasonID':ReasonID, 'Channel':'PC'},
        dataType: "json",
        timeout: 5000,  
        cache: false,
        success: function(msg){
            if(msg.status_code == "200"){
                layer.msg("举报成功!客服人员将尽快进行处理",{title:'提示',shade: 0.6});
                $('.poplayer').hide();
                $('.jubaoBox').hide();
            } else {
                layer.msg("异常，请刷新重试！");
                $('.poplayer').hide();
                $('.jubaoBox').hide();
            }
        }
    });
})

$('#reportcancel').click(function(){
    $('.poplayer').hide();
    $('.jubaoBox').hide();
})

</script>