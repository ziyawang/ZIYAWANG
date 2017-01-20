@extends('layouts.home')

@section('seo')
<title>找信息_不良资产信息平台-资芽网</title>
        <meta name="Keywords" content="资产求购,资产转让,融资需求,委外催收,不良资产信息平台,资芽网" />
        <meta name="Description" content="资芽网找信息，汇集资产，债权等各类转让信息；商业保理，安全可靠；要催收，尽职调查与悬赏信息不能少，专业法律服务保障强；融资需求急，这里多信息；想要求购资产？还是资芽网找信息" />
@endsection

@section('content')
    <link type="text/css" rel="stylesheet" href="{{asset('/css/infolist_v2.css')}}?v=2.1.0.1">
        <style type="text/css">
            .layerRecharge{width: 500px; height: 212px;}
            .layerTop{background:#fdd000;overflow: hidden;padding:25px 0 25px 25px;}
            .coverBg{float: left;width: 145px;height: 145px;background:url(img/coverpop.png) no-repeat;padding-right: 15px;}
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
            .nocoverBg{width: 145px;height: 145px;background:url(img/coverpop.png) no-repeat;margin:0 auto;display: block;}
            .noFree{font-size: 24px;color:#333;font-weight: bold;display: block;text-align: center;padding: 8px 0 20px;}
            /*.layui-layer-title{display: none;}*/
            .layui-layer-title{height: 0;border-bottom: 0;}
            .layui-layer-btn{padding-top: 20px!important;text-align: center;height: 60px;background: #fff;}
            .layui-layer-btn a{width: 108px;padding: 6px 0px 10px; background: #f4f4f4; border-radius: 5px; border-right: 2px; color: #000; box-shadow: 0 -5px 0 #bababa inset; position: relative;border: 0 none;margin: 0;font-size: 20px;margin: 0 20px;text-align: center;}
            .layui-layer-btn .layui-layer-btn1{}
            .layui-layer-btn .layui-layer-btn0,.layui-layer-btn a:hover{background: #fdd000;box-shadow: 0 -5px 0 #b69600 inset;color: #000;}
            .layui-layer-btn a:active{top: 1px;}

            /*列表li样式*/
            .item{cursor: pointer;}
        </style>
    <!-- 二级banner -->
    <div class="find-info temp">
        <ul>
            <li><a href="{{url('/ucenter/index')}}"></a></li>
        </ul>
        <div class="prompt_text">
            <div class="wrap bg">
                <div class="wrap prompt_text_content">
                    <div class="enter_input"><input type="text" id="content" placeholder="资产债权  搜索引擎" /><span id="search"><img src="/img/search_yel.png" /></span></div>
                    <input id="confirm" class="free_issue" type="button" value="申请成为服务方" />
                </div>
            </div>
        </div>
    </div>
<!-- 条件筛选 -->
    <div class="conditionalFilter">
        <div class="wrap">
            <div class="vip_resource">
                <span>信息级别：</span>
                <div class="vr_content">
                    <a vip="null" class="current" href="javascript:;">不限</a>
                    <a vip="0" href="javascript:;">普通</a>
                    <a vip="1" href="javascript:;">VIP</a>
                    <a vip="2" href="javascript:;">收费</a>
                </div>
            </div>
            <div class="service_type">
                <span>信息类型：</span>
                <div class="des_ser">
                    <a href="javascript:;" class="current">不限</a>
                    <a TypeID="gdzc" href="javascript:;">固定资产</a>
                    <a TypeID="rzxx" href="javascript:;">融资信息</a>
                    <a TypeID="1" href="javascript:;">资产包</a>
                    <a TypeID="18" href="javascript:;">企业商账</a>
                    <a TypeID="19" href="javascript:;">个人债权</a>
                    <a TypeID="fpzc" href="javascript:;">法拍资产</a>
                    <a TypeID="czgg" href="javascript:;" class="disposal">处置公告</a>
                </div>
            </div>
            <div class="area">
                <span>所在地区：</span>
                <div class="showArea">
                    <a href="javascript:;" class="current" proarea="null">全国</a>
                    <a href="javascript:;" proarea="北京">北京</a>
                    <a href="javascript:;" proarea="上海">上海</a>
                    <a href="javascript:;" proarea="广东">广东</a>
                    <a href="javascript:;" proarea="江苏">江苏</a>
                    <a href="javascript:;" proarea="山东">山东</a>
                    <a href="javascript:;" proarea="浙江">浙江</a>
                    <a href="javascript:;" proarea="河南">河南</a>
                    <a href="javascript:;" proarea="河北">河北</a>
                    <a href="javascript:;" proarea="辽宁">辽宁</a>
                    <a href="javascript:;" proarea="四川">四川</a>
                    <a href="javascript:;" proarea="湖北">湖北</a>
                    <a href="javascript:;" proarea="湖南">湖南</a>
                    <a href="javascript:;" proarea="福建">福建</a>
                </div>
            </div>
            <div class="hs_change">
                <span href="javascript:;" class="m1 active infomore">更多></span>
                <span href="javascript:;" class="m2 infomore">收起</span>
            </div>
            <div class="zhedie">
                <div class="hide">
                    <a href="javascript:;" proarea="安徽">安徽</a>
                    <a href="javascript:;" proarea="陕西">陕西</a>
                    <a href="javascript:;" proarea="天津">天津</a>
                    <a href="javascript:;" proarea="江西">江西</a>
                    <a href="javascript:;" proarea="广西">广西</a>
                    <a href="javascript:;" proarea="重庆">重庆</a>
                    <a href="javascript:;" proarea="吉林">吉林</a>
                    <a href="javascript:;" proarea="云南">云南</a>
                    <a href="javascript:;" proarea="山西">山西</a>
                    <a href="javascript:;" proarea="新疆">新疆</a>
                    <a href="javascript:;" proarea="贵州">贵州</a>
                    <a href="javascript:;" proarea="甘肃">甘肃</a>
                    <a href="javascript:;" proarea="海南">海南</a>
                    <a href="javascript:;" proarea="宁夏">宁夏</a>
                    <a href="javascript:;" proarea="青海">青海</a>
                    <a href="javascript:;" proarea="西藏">西藏</a>
                    <a href="javascript:;" proarea="黑龙江">黑龙江</a>
                    <a href="javascript:;" proarea="内蒙古">内蒙古</a>
                </div>
            </div>
            <div class="deser_cover">
                <div class="cover1"></div>
                <!-- 固定资产 -->
                <div class="cover1" id="typegdzc">
                    <div class="cover_con">
                        <span>标的物类型：</span>
                        <span class="aa">
                            <a href="javascript:;" class="current" unlimit="cleardiy" id="gcreset">不限</a>
                            <a href="javascript:;" diy="TypeID" diyval="16">土地</a>
                            <a href="javascript:;" diy="TypeID" diyval="12">房产</a>
                        </span>
                    </div>
                </div>
                <!-- 融资信息 -->
                <div class="cover1" id="typerzxx">
                    <div class="cover_con">
                        <span>融资方式：</span>
                        <span class="aa">
                            <a href="javascript:;" class="current" unlimit="cleardiy" id="rzreset">不限</a>
                            <a href="javascript:;" diy="TypeID" diyval="17">债权融资</a>
                            <a href="javascript:;" diy="TypeID" diyval="6">股权融资</a>
                        </span>
                    </div>
                </div>
                <!-- 资产包 -->
                <div class="cover1" id="type1">
                    <div class="cover_con">
                        <span>来源：</span>
                        <span class="aa">
                            <a href="javascript:;" class="current" unlimit="cleardiy">不限</a>
                            <a href="javascript:;" diy="FromWhere" diyval="银行">银行</a>
                            <a href="javascript:;" diy="FromWhere" diyval="非银行机构">非银行机构</a>
                            <a href="javascript:;" diy="FromWhere" diyval="企业">企业</a>
                            <a href="javascript:;" diy="FromWhere" diyval="其他">其他</a>
                        </span>
                    </div>
                    <div class="cover_con">
                        <span>资产包类型：</span>
                        <span class="aa">
                            <a href="javascript:;" class="current" unlimit="cleardiy">不限</a>
                            <a href="javascript:;" diy="AssetType" diyval="抵押">抵押</a>
                            <a href="javascript:;" diy="AssetType" diyval="信用">信用</a>
                            <a href="javascript:;" diy="AssetType" diyval="综合类">综合类</a>
                            <a href="javascript:;" diy="AssetType" diyval="其他">其他</a>
                        </span>
                    </div>
                </div>
                <!-- 企业商账 -->
                <div class="cover1" id="type18">
                    <div class="cover_con">
                        <span>处置方式：</span>
                        <span class="aa">
                            <a href="javascript:;" class="current" unlimit="cleardiy">不限</a>
                            <a href="javascript:;" diy="Law" diyval="1">诉讼</a>
                            <a href="javascript:;" diy="UnLaw" diyval="1">非诉讼催收</a>
                        </span>
                    </div>
                    <div class="cover_con">
                        <span>佣金比例：</span>
                        <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a>
                            <a href="javascript:;" diy="Rate" diyval="10%-20%">10%-20%</a>
                            <a href="javascript:;" diy="Rate" diyval="20%-30%">20%-30%</a>
                            <a href="javascript:;" diy="Rate" diyval="30%-40%">30%-40%</a>
                            <a href="javascript:;" diy="Rate" diyval="40%以上">40%以上</a>
                        </span>
                    </div>
                </div>
                <!-- 个人债权 -->
                <div class="cover1" id="type19">
                    <div class="cover_con">
                        <span>处置方式：</span>
                        <span class="aa">
                            <a href="javascript:;" class="current" unlimit="cleardiy">不限</a>
                            <a href="javascript:;" diy="Law" diyval="1">诉讼</a>
                            <a href="javascript:;" diy="UnLaw" diyval="1">非诉讼催收</a>
                        </span>
                    </div>
                    <div class="cover_con">
                        <span>佣金比例：</span>
                        <span class="aa">
                            <a href="javascript:;" class="current" unlimit="cleardiy">不限</a>
                            <a href="javascript:;" diy="Rate" diyval="10%-20%">10%-20%</a>
                            <a href="javascript:;" diy="Rate" diyval="20%-30%">20%-30%</a>
                            <a href="javascript:;" diy="Rate" diyval="30%-40%">30%-40%</a>
                            <a href="javascript:;" diy="Rate" diyval="40%以上">40%以上</a>
                        </span>
                    </div>
                </div>
                <!-- 法拍资产 -->
                <div class="cover1" id="typefpzc">
                    <div class="cover_con">
                        <span>资产类型：</span>
                        <span class="aa">
                            <a href="javascript:;" class="current" unlimit="cleardiy" id="fpreset">不限</a>
                            <a href="javascript:;" diy="TypeID" diyval="21">土地</a>
                            <a href="javascript:;" diy="TypeID" diyval="20">房产</a>
                            <a href="javascript:;" diy="TypeID" diyval="22">汽车</a>
                        </span>
                    </div>
                </div>
                <!-- 处置公告 -->
                <div class="cover1"></div>
            </div>
        </div>
    </div><!-- 
    <div class="xTitle">
         <span>精选信息</span>共1001条信息 
    </div>
    <style>
    .topPages{width: 1200px;margin: 0 auto;position: relative;top: -75px;}
    .topPages .pageCon{display: block; position: absolute; right: 0; top: 0; float: right;}
    .topPages .pages{left: auto;}
    </style>
     公共分页/start 
    <div class="topPages">
        <div class="pageCon" style="display:block">
            <div class="pages">
                <div id="Pagination1"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage">0</strong>页</span>
                </div>
            </div>
        </div>
    </div> -->
    <div class="xTitle">
        <div class="fl" id="countsinfo"></div>
        <div class="topPages">
            <div class="pageCon" style="display:block">
                <div class="pages">
                    <div id="Pagination1">
                    </div>
                    <div class="searchPage">
                        <span class="page-sum">共<strong class="allPage">0</strong>页</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 公共分页/end -->
    <!-- waterfall -->
    <div class="infomation">
        <div class="waterfull clearfloat" id="waterfull">
            <ul id="list">
                
            </ul>
        </div>
        <!-- loading按钮 -->
        <div id="imloading">
        资芽正在给力加载中.....
        </div>
        <!-- 公共分页/start -->
        <div class="pageCon">
            <div class="pages">
                <div id="Pagination"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage">0</strong>页</span>
                </div>
            </div>
        </div>
        <!-- 公共分页/end -->
    </div>
    <script type="text/javascript" src="{{asset('/js/fs.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.masonry.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jQeasing.js')}}"></script>
    <script type="text/javascript">
$(function(){

    var token = $.cookie('token');
    $('body').addClass('grey');

    function getQueryString(key){
        var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
        var result = window.location.search.substr(1).match(reg);
        return result?decodeURIComponent(result[2]):null;
    }
    var urlobj = {};
    var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;
    var startpage   = ( urlpage - 1 ) * 4 + 1;
    urlobj['Vip']         = getQueryString("Vip")        ?getQueryString("Vip")        :undefined;
    urlobj['TypeID']      = getQueryString("TypeID")     ?getQueryString("TypeID")     :undefined;
    urlobj['ProArea']     = getQueryString("ProArea")    ?getQueryString("ProArea")    :undefined;
    urlobj['FromWhere']   = getQueryString("FromWhere")  ?getQueryString("FromWhere")  :undefined;
    urlobj['AssetType']   = getQueryString("AssetType")  ?getQueryString("AssetType")  :undefined;
    urlobj['Corpore']     = getQueryString("Corpore")    ?getQueryString("Corpore")    :undefined;
    urlobj['BuyerNature'] = getQueryString("BuyerNature")?getQueryString("BuyerNature"):undefined;
    urlobj['Buyer']       = getQueryString("Buyer")      ?getQueryString("Buyer")      :undefined;
    urlobj['Informant']   = getQueryString("Informant")  ?getQueryString("Informant")  :undefined;
    urlobj['Rate']        = getQueryString("Rate")       ?getQueryString("Rate")       :undefined;
    urlobj['Status']      = getQueryString("Status")     ?getQueryString("Status")     :undefined;
    urlobj['InvestType']  = getQueryString("InvestType") ?getQueryString("InvestType") :undefined;
    urlobj['Year']        = getQueryString("Year")       ?getQueryString("Year")       :undefined;
    urlobj['Law']        = getQueryString("Law")       ?getQueryString("Law")       :undefined;
    urlobj['UnLaw']        = getQueryString("UnLaw")       ?getQueryString("UnLaw")       :undefined;
    function query(obj) {
        var string = '';
        $.each(obj,function(n,value) {
            if(n == 'TypeID') {
                $('#type'+value).show();
            }
            if(n == 'ProArea') {
                $('a[' + n + '=' + value + ']').parent().show();
                $('.showArea a').removeClass('current');
            }
            if(value != undefined) {
                string = string + '&' + n + '=' + value;
                if(value.indexOf('%') < 0){
                    $('a[' + n + '=' + value + ']').addClass('current').siblings().removeClass('current');
                }
                $.each($('.cover1 a'), function(){
                    if($(this).html() == value){
                        $(this).addClass('current').siblings().removeClass('current');
                    }
                })
            }
        });

        return string;      
    };
    var urldata = query(urlobj);
    if(urlobj['ProArea'] == undefined){
        $('a[ProArea=null]').addClass('current');
    }
    //融资股权
    if(urlobj['TypeID'] == 6){
        $('a[TypeID=rzxx]').addClass('current').siblings().removeClass('current');
        $('a[diyval=6]').addClass('current').siblings().removeClass('current');
        $('#typerzxx').show();
    }
    //固产房产
    if(urlobj['TypeID'] == 12){
        $('a[TypeID=gdzc]').addClass('current').siblings().removeClass('current');
        $('a[diyval=12]').addClass('current').siblings().removeClass('current');
        $('#typegdzc').show();
    }
    //固产土地
    if(urlobj['TypeID'] == 16){
        $('a[TypeID=gdzc]').addClass('current').siblings().removeClass('current');
        $('a[diyval=16]').addClass('current').siblings().removeClass('current');
        $('#typegdzc').show();
    }
    //融资债权
    if(urlobj['TypeID'] == 17){
        $('a[TypeID=rzxx]').addClass('current').siblings().removeClass('current');
        $('a[diyval=17]').addClass('current').siblings().removeClass('current');
        $('#typerzxx').show();
    }
    //法拍房产
    if(urlobj['TypeID'] == 20){
        $('a[TypeID=fpzc]').addClass('current').siblings().removeClass('current');
        $('a[diyval=20]').addClass('current').siblings().removeClass('current');
        $('#typefpzc').show();
    }
    //法拍土地
    if(urlobj['TypeID'] == 21){
        $('a[TypeID=fpzc]').addClass('current').siblings().removeClass('current');
        $('a[diyval=21]').addClass('current').siblings().removeClass('current');
        $('#typefpzc').show();
    }
    //法拍汽车
    if(urlobj['TypeID'] == 22){
        $('a[TypeID=fpzc]').addClass('current').siblings().removeClass('current');
        $('a[diyval=22]').addClass('current').siblings().removeClass('current');
        $('#typefpzc').show();
    }
    //处置公告
    if(urlobj['TypeID'] == 'czgg'){
        $('.vr_content a, .area a, .m1').unbind('click');
        $('.vip_resource,.area').addClass('bore');
    }
    //个人债权
    if(urlobj['Law'] == 1){
        $('a[diy=Law]').addClass('current').siblings().removeClass('current');
    }
    //企业商帐
    if(urlobj['UnLaw'] == 1){
        $('a[diy=UnLaw]').addClass('current').siblings().removeClass('current');
    }

    function querydata(data,index){
        var TypeID        = data[index].TypeID;
        var ProjectID     = data[index].ProjectID;
        if(!ProjectID){
            ProjectID = data[index].NewsID;
        }
        var TypeName      = data[index].TypeName;
        var ViewCount     = data[index].ViewCount;
        var CollectCount  = data[index].CollectCount;
        var ProjectNumber = data[index].ProjectNumber;
        var PublishTime   = data[index].PublishTime;
        var ProArea       = data[index].ProArea;
        if(ProArea){
            ProArea = ProArea.split('-')[0];
        }
        var WordDes       = data[index].WordDes;
        if(WordDes){
            if(WordDes.length > 36){
                WordDes       = WordDes.substr(0,33) + '...';
            }
        }        
        var PublishState = data[index].PublishState;
        if(PublishState == '0'){
            // PublishState = "<p class='grabOne'><i class='iconfont'>&#xe604;</i><span>抢单中</span></p>";
            PublishState = '';
        } else if ( PublishState == '1') {
            // PublishState = "<p class='cooperation'><i class='iconfont'>&#xe600;</i><span>已合作</span></p>";
            PublishState = '';
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
        var Member        = ('Member'        in data[index]) ? data[index].Member        : null;
        var NewFlag       = ('NewFlag'       in data[index]) ? data[index].NewFlag       : null;
        var CollectFlag   = ('CollectFlag'   in data[index]) ? data[index].CollectFlag   : null;
        var InvestType    = ('InvestType'    in data[index]) ? data[index].InvestType    : null;
        var Year          = ('Year'          in data[index]) ? data[index].Year          : null;
        var Price         = ('Price'         in data[index]) ? data[index].Price         : 0;
        var Account       = ('Account'       in data[index]) ? data[index].Account       : null;
        var PayFlag       = ('PayFlag'       in data[index]) ? data[index].PayFlag       : null;
        var userid       = ('userid'       in data[index]) ? data[index].userid       : null;
        var PhoneNumber   = ('PhoneNumber'   in data[index]) ? data[index].PhoneNumber   : null;
        var right   = ('right'   in data[index]) ? data[index].right   : null;
        if(right.length == 0 ){
            right = "0";
        }
        var noImg = '';
        var rushclass = '';
        var rushclasswords = "class='descriptionInwords'";
        var rushclasspics = "class='cetification'";
        var priceattr = "price=" + Price;
        var projectidattr = " projectid=" + ProjectID;
        var protypeattr = " typeid=" + TypeID;
        var accountattr = " account=" + Account;
        var payflagattr = " payflag=" + PayFlag;
        var isselfattr = ' isself=0';
        var memberattr = " member=0";
        var rightattr = " right=" + right;
        var typenameattr = " typename=" + TypeName;

        if(userid == $.cookie('userid')){
            isselfattr = ' isself=1';
        }
        // if(Price > 0){
        //     rushclass = "class='rush'";
        //     rushclasswords = "class='descriptionInwords rush'";
        //     rushclasspics = "class='cetification rush'";
        // }
        // if(PictureDes1){
        //     if(PictureDes1.length < 1){
        //         noImg = 'noImg'
        //     }
        // }
        if(!PictureDes1){
            PictureDes1 = "/erroy1.png";
        }
        var vip = '';
        if(Member == 1){
            vip = '<img src="/img/vip_pic.png" class="vipPic" />';
            memberattr = " member=1";
        } else if (Member == 2){
            vip = '<img src="/img/shoufei.png" class="vipPic" style="margin-top: -2px;" />';
            memberattr = " member=2";
        }
        var newinfo = '';
        if(NewFlag == 1){
            newinfo = '<img src="img/new.gif" class="new_icon" />';
        }
        var collectinfo = "<i class='iconfont heart' title='收藏' ProjectID='" + ProjectID + "'>&#xe601;</i>"
        if(CollectFlag == 1){
            collectinfo = "<i class='iconfont heart red' title='已收藏' ProjectID='" + ProjectID + "'>&#xe601;</i>"
        }
        var law = '';
        if(Law){
            law = '诉讼';
        }else{
            law = '非诉讼';
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

        //处理项目亮点
        var lights = "<strong class='spot-title'>项目亮点</strong><div class='spot-con'>";
        $(ProLabelArr).each(function(index,value){
            if(value != ''){
                lights = lights + "<a href='javascript:;'>" + value + "</a>";
            }
        })
        lights = lights + "</div>";
        if(ProLabelArr[0] == ''){
            lights = "";
        }
        //循环获取数据
        TypeID = TypeID + '';

        switch(TypeID)
        {
            case "1":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>资产包</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>来源：<span>" + FromWhere + "</span></p><p class='remarks'>资产包类型：<span>" + AssetType + "</span></p><div class='spot'>" + lights + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>"
            break;
            case "6":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>融资信息</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>融资额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>融资方式：<span>股权融资</span></p><div class='spot'>" + lights + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li> ";
            break;
            case "12":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>固定资产</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>市场价</em></span><strong>" + MarketPrice + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>标的物：<span>房产</span></p><div class='spot'>" + lights + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li> ";
            break;

            case "16":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>固定资产</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>标的物：<span>土地</span></p><div class='spot'>" + lights + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li> ";
            break;

            case "17":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>融资信息</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>融资额</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>融资方式：<span>债权融资</span></p><div class='spot'>" + lights + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li> ";
            break;

            case "18":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='businCollection'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>企业商账</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>债权额</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>处置方式：<span>" + law + "</span></p><div class='spot'>" + lights + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li> ";
            break;

            case "19":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='indivAssignment'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>个人债权</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>处置方式：<span>" + law + "</span></p><div class='spot'>" + lights + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "20":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>法拍资产</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>房产</span></p><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "21":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>法拍资产</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>土地</span></p><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "22":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>法拍资产</a><b>" + ProjectNumber + "</b></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectCount + "</span></p></div></div><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div><a href='javascript:;' title='" + Title + "' class='descriptionInwords'>" + Title + "</a><a href='javascript:;' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><p class='keyPoint'><span class='btnBlue btnYel'><i class='iconfont colorWhite'>&#xe60c;</i><em>起拍价</em></span><strong>" + Money + "万</strong></p><p class='remarks'>地区：<span>" + ProArea + "</span></p><p class='remarks'>类型：<span>汽车</span></p><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "99":
            var html = "<li " + priceattr + projectidattr + protypeattr + accountattr + payflagattr + isselfattr + memberattr + rightattr + typenameattr + " class='rush item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='disposalNote'></span></div><div class='itemTopRight'><h2><a href='javascript:;'>处置公告</a></h2><p><span class='visitors'><i class='iconfont icon'>&#xe603;</i>" + ViewCount + "</span><span class='collectors' title='收藏数'><i class='iconfont'>&#xe601;</i>" + CollectionCount + "</span></p></div></div><a href='javascript:;' class='gongaoTit'>" + NewsTitle + "</a><a href='javascript:;' class='cetification'><img title='" + NewsTitle + "' src='http://images.ziyawang.com" + NewsLogo + "' /></a><p class='gongao'>" + Brief + "</p><div class='resourse'><span class='paper'>来源：" + NewsAuthor + "</span><span class='shijian'>" + PublishTime.substr(0,10) + "</span></div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li> ";
            break;
        }
        return html;
    }
// console.log(urldata)
    $.ajax({  
        url: 'https://apis.ziyawang.com/zll/project/list?pagecount=6&access_token=token&startpage='+ startpage + urldata + '&token=' + token,
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000, 
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: succFunction //成功执行方法    
    }); 

    function LoadFunction() {  
        // $("#list").html('加载中...');  
    }  

    function erryFunction() {  
        // alert("error");  
    }  

    function succFunction(tt) {

        $("#list").html('');
        var json = eval(tt); //数组 
        // console.log(json);
        var counts = json.counts;
        $("#countsinfo").html('<span>精选信息</span>共' + counts + '条信息');
        var pages = json.pages;
        pages = Math.ceil(pages/4);
        var current = Math.ceil(json.currentpage/4) - 1;
        //分页
        $("#Pagination").pagination(pages,{current_page:current});
        $("#Pagination1").pagination(pages,{current_page:current});
        $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
        if(urlpage == 1){
            $('.prev').remove();
        }
        if(urlpage == pages){
            $('.next').remove();
        }
        $('.pagination a').click(function(){
            // startpage = $(this).html();

            // var stop = false;
            urlpage = parseInt(urlpage);

            var fenyepage = $(this).html();
            if(fenyepage == '上一页') {
                urlpage -= 1;
            } else if(fenyepage == '下一页') {
                urlpage += 1;
            } else {
                urlpage = fenyepage;
            }
            // var urlpage = undefined;

            // $.each($('.pagination a'),function(){
            //     if($(this).hasClass('current')){
            //         urlpage = $(this).html();
            //     }
            // })
            ajax(urlpage);
            $("html,body").animate({scrollTop:0},200); 

        });
        var data = json.data;
        $.each(data, function (index, item) {
            var html = querydata(data, index);
            $("#list").html($("#list").html() + html);  
        });

        if(counts == 0){
            $("#list").html('抱歉没有找到您想要的结果！');
        }

        /*瀑布流开始*/
        var container = $('.waterfull ul');
        var loading=$('#imloading');
        var pageCon = $('.pageCon');
        // 初始化loading状态
        loading.data("on",true);
        /*判断瀑布流最大布局宽度，最大为1256*/
        function tores(){
            var tmpWid=$(window).width();
            if(tmpWid>1232){
                tmpWid=1232;
            }else{
                var column=Math.floor(tmpWid/308);
                tmpWid=column*308;
            }
            $('.waterfull').width(tmpWid);
        }
        tores();
        $(window).resize(function(){
            tores();
        });
        container.imagesLoaded(function(){
            container.masonry({
                columnWidth: 308,
                itemSelector : '.item',
                isFitWidth: false,//是否根据浏览器窗口大小自动适应默认false
                isAnimated: true,//是否采用jquery动画进行重拍版
                isRTL:false,//设置布局的排列方式，即：定位砖块时，是从左向右排列还是从右向左排列。默认值为false，即从左向右
                isResizable: false,//是否自动布局默认true
                animationOptions: {
                duration: 600,
                easing: 'easeInOutBack',//如果你引用了jQeasing这里就可以添加对应的动态动画效果，如果没引用删除这行，默认是匀速变化
                queue: false//是否队列，从一点填充瀑布流
                }
            });
        });
        /*模拟从后台获取到的数据*/

        /*本应该通过ajax从后台请求过来类似sqljson的数据然后，便利，进行填充，这里我们用sqlJson来模拟一下数据*/
        $(window).scroll(function(){
            var sqlJson=null;
            if(!loading.data("on")) return;
            // 计算所有瀑布流块中距离顶部最大，进而在滚动条滚动时，来进行ajax请求，方法很多这里只列举最简单一种，最易理解一种
            var itemNum=$('#waterfull').find('.item').length;
            var itemArr=[];
            itemArr[0]=$('#waterfull').find('.item').eq(itemNum-1).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
            itemArr[1]=$('#waterfull').find('.item').eq(itemNum-2).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
            itemArr[2]=$('#waterfull').find('.item').eq(itemNum-3).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
            var maxTop=Math.max.apply(null,itemArr) - 400;
            if(maxTop<$(window).height()+$(document).scrollTop()){
                //加载更多数据
                startpage += 1;
                $.ajax({
                    url: 'https://apis.ziyawang.com/zll/project/list?pagecount=6&access_token=token&startpage='+ startpage + urldata + '&token=' + token,  
                    type: 'GET',  
                    dataType: 'json',  
                    timeout: 5000, 
                    asycn: false,
                    cache: false,  
                    beforeSend: LoadFunction, //加载执行方法    
                    error: erryFunction,  //错误执行方法    
                    success: function(tt){
                        var json = eval(tt);
                        sqlJson = json.data;
                        waterload(sqlJson);
                    } //成功执行方法  
                });
                loading.data("on",false).fadeIn(600);
                function waterload(sqlJson){
                    /*根据后台返回的数据来判断是否你进行分页或者数据加载完毕*/
                    if(itemNum >18 || sqlJson.length <1){
                        //loading.text('没有更多了哦！');
                        $('#imloading').remove();
                        // loading.hide();
                        pageCon.show();
                    }else{
                        var html="";
                        $.each(sqlJson, function (index, item) {
                            var queryhtml = querydata(sqlJson, index);
                            html = html + queryhtml 
                        });
                        /*模拟ajax请求数据时延时600毫秒*/
                        var time=setTimeout(function(){
                            $(html).find('img').each(function(index){
                                loadImage($(this).attr('src'));
                            })
                            var $newElems = $(html).css({ opacity: 0}).appendTo(container);
                            $newElems.imagesLoaded(function(){
                                $newElems.animate({ opacity: 1},600);
                                container.masonry( 'appended', $newElems,true);
                                loading.data("on",true).fadeOut();
                                clearTimeout(time);
                            });
                            
                            //鼠标滑过li
                            $('.item').hover(function() {
                                $(this).children('.storeup').stop().animate({'bottom':'0px'}, 200);
                            }, function() {
                                $(this).children('.storeup').stop().animate({'bottom':'-42px'}, 300);
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

                            function collect(ProjectID,TypeID) {
                                var token = $.cookie('token');
                                var type = 1;
                                if(TypeID == '99'){
                                    type = 3;
                                }
                                $.ajax({
                                    url:'https://apis.ziyawang.com/zll/collect?access_token=token&token='+token,
                                    type:'POST',
                                    data:'itemID=' + ProjectID + '&type=' + type,
                                    dataType:'json',
                                    success:function(msg){
                                    }
                                });
                            }

                            $(".heart").unbind("click").click(function(e){
                                e.stopPropagation();
                                checkLogin();
                                if(stop){
                                    return false;
                                }
                                var ProjectID = $(this).attr('ProjectID');
                                var TypeID = $(this).parents('li').attr('typeid');
                                console.log(TypeID);
                                collect(ProjectID,TypeID);
                                var title = $(this).attr("title");
                                if(title == '收藏'){
                                    $(this).attr('title', '已收藏');
                                    $(this).addClass('red');
                                }else{
                                    $(this).attr('title', '收藏');
                                    $(this).removeClass('red');
                                }
                            });


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
                                        url:'https://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                                        type:'POST',
                                        dataType:'json',
                                        success:function(msg){
                                            // alert(msg.status_code);
                                            if(msg.status_code == 200 || msg.status_code == 417){
                                                // $('#shownumber').html(ConnectPhone);
                                                // $('#rush').css('cursor','default').unbind('click'); 
                                                // layer.alert('联系电话：' + ConnectPhone, {title: '提示'});
                                                // $('.popNumDet').html('联系电话：' + ConnectPhone);
                                                // $('.popPhoneNum').show();
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
                                        content: '<div class="layerRecharge"> <div class="layerTop"> <span class="coverBg"></span> <div class="captionTip"> <h3>该信息为收费信息</h3> <p class="needMoney">消耗芽币可查看信息详情</p> <p class="custom">消耗 ：<strong>' + Price + '</strong>芽币</p> <p class="custom">余额 ：<strong>' + Account + '</strong>芽币<span>' + isenough + '</span></p> </div> </div> </div>',
                                        btn: ['确定','充值','取消'], btn1:function(){
                                        // token = token.replace(/\'/g,"");
                                        $.ajax({
                                            url:'https://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                                            type:'POST',
                                            dataType:'json',
                                            success:function(msg){
                                                if(msg.status_code == 200){
                                                    // $('#shownumber').html(ConnectPhone);
                                                    // $('#rush').css('cursor','default').unbind('click'); 
                                                    // layer.alert('联系电话：' + ConnectPhone, {title: '提示'});
                                                    // $('.popNumDet').html('联系电话：' + ConnectPhone);
                                                    // $('.popPhoneNum').show();
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
                                        window.location.href="http://ziyawang.com/ucenter/money?ProjectID=" + ProjectID; 
                                    }, close:function(){

                                    }});
                                    return;
                                }
                            }
                            $(".rush").unbind('click').click(function(){
                                    var price = parseInt($(this).attr('price'));
                                    var projectid = $(this).attr('projectid');
                                    var typeid = $(this).attr('typeid');
                                    var member = $(this).attr('member');
                                    var typename = $(this).attr('typename');
                                    var right = $(this).attr('right');
                                    var rightarr = new Array(); //定义一数组 
                                        rightarr = right.split(","); //字符分割 
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
                                if(isself == 1){
                                    if(typeid == 99){
                                            window.open("http://ziyawang.com/project/czgg/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                                            return false;
                                        }
                                        window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                                        return false;
                                }
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
                                    }else if (payflag == 1){
                                        window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                                    }
                                }
                            });
                        },600)
                    }
                };
            }
        });
        function loadImage(url) {
            var img = new Image(); 
            //创建一个Image对象，实现图片的预下载
            img.src = url;
            if (img.complete) {
                return img.src;
            }
            img.onload = function () {
                return img.src;
            };
        };
        
        //鼠标滑过li
        $('.item').hover(function() {
            $(this).children('.storeup').stop().animate({'bottom':'0px'}, 200);
        }, function() {
            $(this).children('.storeup').stop().animate({'bottom':'-42px'}, 300);
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

        function collect(ProjectID,TypeID) {
            var token = $.cookie('token');
            var type = 1;
            if(TypeID == '99'){
                type = 3;
            }
            $.ajax({
                url:'https://apis.ziyawang.com/zll/collect?access_token=token&token='+token,
                type:'POST',
                data:'itemID=' + ProjectID + '&type=' + type,
                dataType:'json',
                success:function(msg){
                }
            });
        }

        $(".heart").click(function(e){
            e.stopPropagation();
            checkLogin();
            if(stop){
                return false;
            }
            var ProjectID = $(this).attr('ProjectID');
            var TypeID = $(this).parents('li').attr('typeid');
            collect(ProjectID,TypeID);
            var title = $(this).attr("title");
            if(title == '收藏'){
                $(this).attr('title', '已收藏');
                $(this).addClass('red');
            }else{
                $(this).attr('title', '收藏');
                $(this).removeClass('red');
            }
        });

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
                    url:'https://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                    type:'POST',
                    dataType:'json',
                    success:function(msg){
                        // alert(msg.status_code);
                        if(msg.status_code == 200 || msg.status_code == 417){
                            // $('#shownumber').html(ConnectPhone);
                            // $('#rush').css('cursor','default').unbind('click'); 
                            // layer.alert('联系电话：' + ConnectPhone, {title: '提示'});
                            // $('.popNumDet').html('联系电话：' + ConnectPhone);
                            // $('.popPhoneNum').show();
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
                        url:'https://apis.ziyawang.com/zll/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                        type:'POST',
                        dataType:'json',
                        success:function(msg){
                            if(msg.status_code == 200){
                                // $('#shownumber').html(ConnectPhone);
                                // $('#rush').css('cursor','default').unbind('click'); 
                                // layer.alert('联系电话：' + ConnectPhone, {title: '提示'});
                                // $('.popNumDet').html('联系电话：' + ConnectPhone);
                                // $('.popPhoneNum').show();
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
                    window.location.href="http://ziyawang.com/ucenter/money?ProjectID=" + ProjectID; 
                }, close:function(){

                }});
                return;
            }
        }
        $(".rush").click(function(){
            var price = parseInt($(this).attr('price'));
            var projectid = $(this).attr('projectid');
            var typeid = $(this).attr('typeid');
            var member = $(this).attr('member');
            var typename = $(this).attr('typename');
            var right = $(this).attr('right');
            var rightarr = new Array(); //定义一数组 
                rightarr = right.split(","); //字符分割 
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
            if(isself == 1){
                if(typeid == 99){
                        window.open("http://ziyawang.com/project/czgg/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                        return false;
                    }
                    window.open("http://ziyawang.com/project/"+typeid+"/"+projectid,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
                    return false;
            }
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
    }
})

function getQuery(key){
    var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
    var result = window.location.search.substr(1).match(reg);
    return result?decodeURIComponent(result[2]):null;
}
var startpage = getQuery('startpage');
var Vip = getQuery('Vip');
var ProArea = getQuery('ProArea');
var TypeID = getQuery('TypeID');

var diffInfo = {};
    diffInfo['FromWhere']   = getQuery("FromWhere")  ?getQuery("FromWhere")  :undefined;
    diffInfo['AssetType']   = getQuery("AssetType")  ?getQuery("AssetType")  :undefined;
    diffInfo['Corpore']     = getQuery("Corpore")    ?getQuery("Corpore")    :undefined;
    diffInfo['BuyerNature'] = getQuery("BuyerNature")?getQuery("BuyerNature"):undefined;
    diffInfo['Buyer']       = getQuery("Buyer")      ?getQuery("Buyer")      :undefined;
    diffInfo['Informant']   = getQuery("Informant")  ?getQuery("Informant")  :undefined;
    diffInfo['Rate']        = getQuery("Rate")       ?getQuery("Rate")       :undefined;
    $.each(diffInfo, function(n,value){
        if(value == undefined){
            delete diffInfo[n];
        }
    })

function ajax(fenye) {
    if(fenye != undefined){
        startpage = fenye;
    }
    var string = query(diffInfo);
    var data = 'startpage=' + startpage + '&Vip=' + Vip + '&TypeID=' + TypeID + '&ProArea=' + ProArea + string;
    // console.log(data);
    var url = "http://ziyawang.com/project?" + data;
    url = encodeURI(url);
     window.location.href= url; 
}
function query(obj) {
    var string = '';
    $.each(obj,function(n,value) {
        string = string + '&' + n + '=' + value;   
    });
    return string;      
};
$('.pagination a').click(function(){
    startpage = $(this).html();
    ajax();
});
$('.vip_resource .vr_content a').click(function(){
    startpage = 1;
    Vip = $(this).attr('Vip');
    ajax();
})
$('.service_type .des_ser a').click(function(){
    startpage = 1;
    TypeID = $(this).attr('TypeID');
    diffInfo = {};
    ajax();
});
$('.area a, .zhedie a').click(function(){
    startpage = 1;
    ProArea = $(this).attr('ProArea');
    ajax();
});

$('a[diy]').click(function(){
    startpage = 1;
    var name = $(this).attr('diy');
    var value = $(this).attr('diyval');
    if(name == 'TypeID'){
        TypeID = value;
    } else {
        diffInfo[name] = value;
    }
    ajax();
});

$('a[unlimit]').click(function(){
    startpage = 1;
    diff = $(this).next().attr('diy');
    delete diffInfo[diff];
    ajax();
});


$('#rzreset').click(function(){
    TypeID = "rzxx";
    startpage = 1;
    ajax();
})

$('#gcreset').click(function(){
    TypeID = "gdzc";
    startpage = 1;
    ajax();
})

$('#fpreset').click(function(){
    TypeID = "fpzc";
    startpage = 1;
    ajax();
})

$('#confirm').click(function(){
    var token = $.cookie('token');
    if(!token){
        window.open("{{url('/login')}}","status=yes,toolbar=yes, menubar=yes,location=yes"); 
        // window.location = "{{url('/login')}}";
        return false;
    }

    window.location = "{{url('/ucenter/confirm')}}";
})

    </script>
<script>
    $('#search').click(function(){
        var content = $('#content').val();
        if(content.length < 1){
            window.open("http://ziyawang.com/project","status=yes,toolbar=yes, menubar=yes,location=yes");
            return false;
        }
        window.open("http://ziyawang.com/search/project?type=1&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
    })
    $('#content').focus(function(event){
        $('#content').bind('keydown', function (e) {
            var key = e.which;
            if (key == 13) {
                var content = $('#content').val();
                if(content.length < 1){
                    window.open("http://ziyawang.com/project","status=yes,toolbar=yes, menubar=yes,location=yes");
                    return false;
                }
                window.open("http://ziyawang.com/search/project?type=1&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
            }
        });
    });
</script>
@endsection

