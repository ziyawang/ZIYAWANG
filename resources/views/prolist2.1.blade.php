@extends('layouts.home')

@section('seo')
<title>找信息_不良资产信息平台-资芽网</title>
        <meta name="Keywords" content="资产求购,资产转让,融资需求,委外催收,不良资产信息平台,资芽网" />
        <meta name="Description" content="资芽网找信息，汇集资产，债权等各类转让信息；商业保理，安全可靠；要催收，尽职调查与悬赏信息不能少，专业法律服务保障强；融资需求急，这里多信息；想要求购资产？还是资芽网找信息" />
@endsection

@section('content')
    <link type="text/css" rel="stylesheet" href="{{asset('/css/infolist.css')}}">
    <!-- 二级banner -->
    <div class="find_service">
        <ul>
            <li></li>
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
    <div class="conditionalFilter">
        <div class="wrap">
            <div class="vip_resource">
                <span>信息级别：</span>
                <div class="vr_content">
                    <a Vip="null" class="current" href="javascript:;">不限</a><a Vip="0" href="javascript:;">普通</a><a Vip="1" href="javascript:;">VIP</a><a Vip="2" href="javascript:;">收费</a>
                </div>
            </div>
            <div class="service_type infoservice">
                <span>信息类型：</span>
                <div class="des_ser">
                    <a TypeID="null" class="current" href="javascript:;">不限</a>
                    <a TypeID="1"  href="javascript:;">资产包转让</a>
                    <a TypeID="14" href="javascript:;">债权转让</a>
                    <a TypeID="12" href="javascript:;">固产转让</a>
                    <a TypeID="4"  href="javascript:;">商业保理</a>
                    <a TypeID="13" href="javascript:;">资产求购</a>
                    <a TypeID="6"  href="javascript:;">融资需求</a>
                    <a TypeID="3"  href="javascript:;">法律服务</a>
                    <a TypeID="9"  href="javascript:;">悬赏信息</a>
                    <a TypeID="10" href="javascript:;">尽职调查</a>
                    <a TypeID="2"  href="javascript:;" class="special">委外催收</a>
                    <!-- <a TypeID="5"  href="javascript:;">典当担保</a> -->
                    <a TypeID="15" href="javascript:;">投资需求</a>
                </div>
            </div>
            <div class="area">
                <span>所在地区：</span>
                <div class="showArea">
                    <a href="javascript:;" class="current" ProArea="null">全国</a><a href="javascript:;" ProArea="北京">北京</a><a href="javascript:;" ProArea="上海">上海</a><a href="javascript:;" ProArea="广东">广东</a><a href="javascript:;" ProArea="江苏">江苏</a><a href="javascript:;" ProArea="山东">山东</a><a href="javascript:;" ProArea="浙江">浙江</a><a href="javascript:;" ProArea="河南">河南</a><a href="javascript:;" ProArea="河北">河北</a><a href="javascript:;" ProArea="辽宁">辽宁</a><a href="javascript:;" ProArea="四川">四川</a><a href="javascript:;" ProArea="湖北">湖北</a><a href="javascript:;" ProArea="湖南">湖南</a><a href="javascript:;" ProArea="福建">福建</a>
                </div>
            </div>
            <div class="hs_change">
                <span href="#" class="m1 active infomore">更多></span>
                <span href="#" class="m2 infomore">收起</span>
            </div>
            <div class="zhedie">
                <div class="hide">
                <a href="javascript:;" ProArea="安徽">安徽</a>
                <a href="javascript:;" ProArea="陕西">陕西</a>
                <a href="javascript:;" ProArea="天津">天津</a>
                <a href="javascript:;" ProArea="江西">江西</a>
                <a href="javascript:;" ProArea="广西">广西</a>
                <a href="javascript:;" ProArea="重庆">重庆</a>
                <a href="javascript:;" ProArea="吉林">吉林</a>
                <a href="javascript:;" ProArea="云南">云南</a>
                <a href="javascript:;" ProArea="山西">山西</a>
                <a href="javascript:;" ProArea="新疆">新疆</a>
                <a href="javascript:;" ProArea="贵州">贵州</a>
                <a href="javascript:;" ProArea="甘肃">甘肃</a>
                <a href="javascript:;" ProArea="海南">海南</a>
                <a href="javascript:;" ProArea="宁夏">宁夏</a>
                <a href="javascript:;" ProArea="青海">青海</a>
                <a href="javascript:;" ProArea="西藏">西藏</a>
                <a href="javascript:;" ProArea="黑龙江">黑龙江</a>
                <a href="javascript:;" ProArea="内蒙古">内蒙古</a>
                </div>
            </div>
            <div class="deser_cover">
            <div class="cover1"></div>
            <!-- 资产包 -->
            <div class="cover1" id="type1">
                <div class="cover_con">
                    <span>来源：</span>
                    <span class="aa">
                        <a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="FromWhere">银行</a><a href="javascript:;" diy="FromWhere">非银行金融机构</a><a href="javascript:;" diy="FromWhere">企业</a>
                    </span>
                </div>
                <div class="cover_con">
                    <span>资产包类型：</span>
                    <span class="aa">
                        <a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">抵押</a><a href="javascript:;" diy="AssetType">信用</a><a href="javascript:;" diy="AssetType">综合类</a><a href="javascript:;" diy="AssetType">其他</a>
                    </span>
                </div>
            </div>
            <!-- 债权转让 -->
            <div class="cover1" id="type14">
                <div class="cover_con">
                    <span>债权类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">个人债权</a><a href="javascript:;" diy="AssetType">企业商帐</a><a href="javascript:;" diy="AssetType">其他</a></span>
                </div>
            </div>
            <!-- 估产转让 -->
            <div class="cover1" id="type12">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">个人资产</a><a href="javascript:;" diy="AssetType">企业资产</a><a href="javascript:;" diy="AssetType">法拍资产</a></span>
                </div>
                <div class="cover_con">
                    <span>标的对象：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="Corpore">土地</a><a href="javascript:;" diy="Corpore">房产</a><a href="javascript:;" diy="Corpore">汽车</a><a href="javascript:;" diy="Corpore">项目</a><a href="javascript:;" diy="Corpore">其他</a></span>
                </div>
            </div>            
            <!-- 商业保理 -->
            <div class="cover1" id="type4">
                <div class="cover_con">
                    <span>买方性质：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="BuyerNature">国企</a><a href="javascript:;" diy="BuyerNature">民企</a><a href="javascript:;" diy="BuyerNature">上市公司</a><a href="javascript:;" diy="BuyerNature">其他</a>
                    </span>
                </div>
            </div>
            <!-- 资产求购 -->
            <div class="cover1" id="type13">
                <div class="cover_con">
                    <span>求购类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">土地</a><a href="javascript:;" diy="AssetType">房产</a><a href="javascript:;" diy="AssetType">汽车</a><a href="javascript:;" diy="AssetType">其他</a></span>
                </div>
                <div class="cover_con">
                    <span>求购方：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="Buyer">个人</a><a href="javascript:;" diy="Buyer">企业</a></span>
                </div>
            </div>
            <!-- 融资需求 -->
            <div class="cover1" id="type6">
                <div class="cover_con">
                    <span>方式：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">抵押</a><a href="javascript:;" diy="AssetType">质押</a><a href="javascript:;" diy="AssetType">租赁</a><a href="javascript:;" diy="AssetType">过桥</a><a href="javascript:;" diy="AssetType">信用</a><a href="javascript:;" diy="AssetType">股权</a><a href="javascript:;" diy="AssetType">担保</a><a href="javascript:;" diy="AssetType">其他</a></span>
                </div>
            </div>
            <!-- 法律服务 -->
            <div class="cover1" id="type3">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">民事</a><a href="javascript:;" diy="AssetType">经济</a><a href="javascript:;" diy="AssetType">刑事</a><a href="javascript:;" diy="AssetType">公司</a></span>
                </div>
            </div>
            <!-- 悬赏信息 -->
            <div class="cover1" id="type9">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">找人</a><a href="javascript:;" diy="AssetType">找财产</a></span>
                </div>
            </div>
            <!-- 尽职调查 -->
            <div class="cover1" id="type10">
                <div class="cover_con">
                    <span>被调查方：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="Informant">企业</a><a href="javascript:;" diy="Informant">个人</a></span>
                </div>
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">法律</a><a href="javascript:;" diy="AssetType">财务</a><a href="javascript:;" diy="AssetType">税务</a><a href="javascript:;" diy="AssetType">商业</a><a href="javascript:;" diy="AssetType">其他</a></span>
                </div>
            </div>
            <!-- 委外催收 -->
            <div class="cover1" id="type2">
                <div class="cover_con">
                    <span>状态：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="Status">未诉讼</a><a href="javascript:;" diy="Status">已诉讼</a>
                    </span>
                </div>
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" class='defa01' diy="AssetType">个人债权</a><a href="javascript:;" class='defa02' diy="AssetType">银行贷款</a><a href="javascript:;" class='defa01' diy="AssetType">企业商帐</a><a href="javascript:;" class='defa01' diy="AssetType">其他</a>
                    </span>
                </div>
                <div class="cover_con">
                    <span>佣金比例：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" id='defa01' diy="Rate">5%-15%</a><a href="javascript:;" diy="Rate">15%-30%</a><a href="javascript:;" diy="Rate">30%-50%</a><a href="javascript:;" diy="Rate">50%以上</a>
                    </span>
                </div>
            </div>
            <!-- 典当担保 -->
            <!-- <div class="cover1" id="type5">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">典当</a><a href="javascript:;" diy="AssetType">担保</a></span>
                </div>
            </div> -->
            <!-- 投资需求 -->
            <div class="cover1" id="type15">
                <div class="cover_con">
                    <span>投资方式：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="InvestType">债权</a><a href="javascript:;" diy="InvestType">股权</a><a href="javascript:;" diy="InvestType">其他</a>
                    </span>
                </div>
                <div class="cover_con">
                    <span>投资类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" class='defa01' diy="AssetType">个人</a><a href="javascript:;" class='defa02' diy="AssetType">企业</a><a href="javascript:;" class='defa01' diy="AssetType">机构</a><a href="javascript:;" class='defa01' diy="AssetType">其他</a>
                    </span>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="xTitle">
        <!-- <span>精选信息</span>共1001条信息 -->
    </div>
    <style>
    .topPages{width: 1200px;margin: 0 auto;position: relative;top: -75px;}
    .topPages .pageCon{display: block; position: absolute; right: 0; top: 0; float: right;}
    .topPages .pages{left: auto;}
    </style>
    <!-- 公共分页/start -->
    <div class="topPages">
        <div class="pageCon" style="display:block">
            <div class="pages">
                <div id="Pagination1"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage">0</strong>页</span>
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

    function querydata(data,index){
        var TypeID        = data[index].TypeID;
        var ProjectID     = data[index].ProjectID;
        var TypeName      = data[index].TypeName;
        var ViewCount     = data[index].ViewCount;
        var CollectCount  = data[index].CollectCount;
        var ProjectNumber = data[index].ProjectNumber;
        var PublishTime   = data[index].PublishTime;
        var ProArea       = data[index].ProArea;
            ProArea       = ProArea.split('-')[0];
        var WordDes       = data[index].WordDes;        
        if(WordDes.length > 36){
            WordDes       = WordDes.substr(0,33) + '...';
        }
        var PublishState = data[index].PublishState;
        if(PublishState == '0'){
            // PublishState = "<p class='grabOne'><i class='iconfont'>&#xe604;</i><span>抢单中</span></p>";
            PublishState = '';
        } else if ( PublishState == '1') {
            // PublishState = "<p class='cooperation'><i class='iconfont'>&#xe600;</i><span>已合作</span></p>";
            PublishState = '';
        }

        var FromWhere     = ('FromWhere' in data[index])     ? data[index].FromWhere : null;
        var TotalMoney    = ('TotalMoney' in data[index])    ? data[index].TotalMoney : null;
        var TransferMoney = ('TransferMoney' in data[index]) ? data[index].TransferMoney : null;
        var AssetType     = ('AssetType' in data[index])     ? data[index].AssetType : null;
        var Corpore       = ('Corpore' in data[index])       ? data[index].Corpore : null;
        var AssetList     = ('AssetList' in data[index])     ? data[index].AssetList : null;
        var Status        = ('Status' in data[index])        ? data[index].Status : null;
        var Rate          = ('Rate' in data[index])          ? data[index].Rate : null;
        var Requirement   = ('Requirement' in data[index])   ? data[index].Requirement : null;
        var BuyerNature   = ('BuyerNature' in data[index])   ? data[index].BuyerNature : null;
        var Informant     = ('Informant' in data[index])     ? data[index].Informant : null;
        var Buyer         = ('Buyer' in data[index])         ? data[index].Buyer : null;
        var PictureDes1   = ('PictureDes1' in data[index])   ? data[index].PictureDes1 : null;
        var Member        = ('Member' in data[index])        ? data[index].Member : null;
        var NewFlag       = ('NewFlag' in data[index])       ? data[index].NewFlag : null;
        var CollectFlag   = ('CollectFlag' in data[index])   ? data[index].CollectFlag : null;
        var InvestType    = ('InvestType' in data[index])    ? data[index].InvestType : null;
        var Year          = ('Year' in data[index])          ? data[index].Year : null;
        var noImg = '';
        if(PictureDes1.length < 1){
            noImg = 'noImg'
        }
        var vip = '';
        if(Member == 1){
            vip = '<img src="img/vip_pic.png" class="vipPic" />';
        } else if (Member == 2){
            vip = '<img src="img/shoufei.png" class="vipPic" style="margin-top: -2px;" />';
        }
        var newinfo = '';
        if(NewFlag == 1){
            newinfo = '<img src="img/new.gif" class="new_icon" />';
        }
        var collectinfo = "<i class='iconfont heart' title='收藏' ProjectID='" + ProjectID + "'>&#xe601;</i>"
        if(CollectFlag == 1){
            collectinfo = "<i class='iconfont heart red' title='已收藏' ProjectID='" + ProjectID + "'>&#xe601;</i>"
        }
        //循环获取数据
        TypeID = TypeID + '';

        switch(TypeID)
        {
            case "1":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2 class='five'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>资产包转让</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>来源：" + FromWhere + "</span></p><p class='remarks'><span>资产包类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;
            case "2":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='outsourcingCollection'></span><b class='outCollect'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>委外催收</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnYellow'><i class='iconfont transfer'>&#xe606;</i><em>佣金比例</em></span><strong>15%-30%</strong></p><p class='remarks'><span>债务人所在地：" + ProArea + "</span></p><p class='remarks'><span>状态：" + Status + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;
            case "3":
            var html = "<li class='item addMar " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>法律服务</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>需求：" + Requirement + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "4":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='commercialFactoring'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>商业保理</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnYellow'><i class='iconfont colorWhite'>&#xe60c;</i><em>合同金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>买方性质：" + BuyerNature + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "5":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='guarantee'></span><b class='guarant'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>典当担保</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>目标地区：" + ProArea + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "6":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>融资需求</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>回报率</em></span><strong>" + Rate + "%</strong></p><p class='remarks'><span>方式：" + AssetType + "</span></p><p class='remarks'><span>地区：" + ProArea + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "9":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='rewardInfo'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>悬赏信息</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "元</strong></p><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>目标地区：" + ProArea + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "10":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='investigation'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>尽职调查</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords padBot'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>被调查方：" + Informant + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "12":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>固产转让</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'><span>标的物：" + Corpore + "</span></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "13":
            var html = "<li class='item addMar " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPurchase'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>资产求购</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>求购方：" + Buyer + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "14":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='equitableAssignment'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>债权转让</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "15":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='invest'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>投资需求</a>" + newinfo + "</h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img title='" + TypeName + '-' + WordDes.substr(0,20) + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange' style='width:118px;background:url(../img/btn01.png) no-repeat 0 -137px'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>预期回报率</em></span><strong>" + Rate + "%</strong></p><p class='keyPoint'><span class='btnYellow' style='background:url(../img/btn01.png) no-repeat 0 -170px'><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;投资期限</em></span><strong>" + Year + "年</strong></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>投资方式：" + InvestType + "</span></p><p class='remarks'><span>投资类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;
        }
        return html;
    }
// console.log(urldata)
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/project/lists?pagecount=6&access_token=token&startpage='+ startpage + urldata + '&token=' + token,
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
        $(".xTitle").html('<span>精选信息</span>共' + counts + '条信息');
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
        /*判断瀑布流最大布局宽度，最大为1232*/
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
                    url: 'http://api.ziyawang.com/v1/project/lists?pagecount=6&access_token=token&startpage='+ startpage + urldata + '&token=' + token,  
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

                            function collect(ProjectID) {
                                var token = $.cookie('token');
                                $.ajax({
                                    url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
                                    type:'POST',
                                    data:'itemID=' + ProjectID + '&type=1',
                                    dataType:'json',
                                    success:function(msg){
                                        alert(msg.msg)
                                    }
                                });
                            }

                            $(".heart").unbind("click").click(function(){
                                checkLogin();
                                if(stop){
                                    return false;
                                }
                                var ProjectID = $(this).attr('ProjectID');
                                collect(ProjectID);
                                var title = $(this).attr("title");
                                if(title == '收藏'){
                                    $(this).attr('title', '已收藏');
                                    $(this).addClass('red');
                                }else{
                                    $(this).attr('title', '收藏');
                                    $(this).removeClass('red');
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

        function collect1(ProjectID) {
            var token = $.cookie('token');
            $.ajax({
                url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
                type:'POST',
                data:'itemID=' + ProjectID + '&type=1',
                dataType:'json',
                success:function(msg){
                    alert(msg.msg)
                }
            });
        }

        $(".heart").click(function(){
            checkLogin();
            if(stop){
                return false;
            }
            var ProjectID = $(this).attr('ProjectID');
            collect1(ProjectID);
            var title = $(this).attr("title");
            if(title == '收藏'){
                $(this).attr('title', '已收藏');
                $(this).addClass('red');
            }else{
                $(this).attr('title', '收藏');
                $(this).removeClass('red');
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
$('.infoservice .des_ser a').click(function(){
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
    var value = $(this).html();
    diffInfo[name] = value;
    ajax();
});

$('a[unlimit]').click(function(){
    startpage = 1;
    diff = $(this).next().attr('diy');
    delete diffInfo[diff];
    ajax();
});

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

