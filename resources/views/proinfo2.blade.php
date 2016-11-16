@extends('layouts.home')

@section('seo')
<title>找信息_不良资产信息平台-资芽网</title>
        <meta name="Keywords" content="资产求购,资产转让,融资需求,委外催收,不良资产信息平台,资芽网" />
        <meta name="Description" content="资芽网找信息，汇集资产，债权等各类转让信息；商业保理，安全可靠；要催收，尽职调查与悬赏信息不能少，专业法律服务保障强；融资需求急，这里多信息；想要求购资产？还是资芽网找信息" />
@endsection

@section('content')
        <link rel="stylesheet" type="text/css" href="{{url('/css/infomation.css')}}?v=1.0.4.1" />
        <link rel="stylesheet" type="text/css" href="{{url('/css/infolist.css')}}?v=1.0.4" />
        <style>
            .jubaoBox{padding:22px;background:#fff;width: 415px;position: fixed;top: 50%;left: 50%;margin:-290px 0 0 -207px;display: none;}
            .jubao{background:#d5d5d5;padding:30px 40px 18px;}
            .ziyaHot{margin-top: 20px; color: #666; font-size: 12px; text-align: center; letter-spacing: 1px;}
            .jubao h3{text-align: center;color:#333;font-size: 24px;font-weight: normal;padding-bottom: 20px;border-bottom: 1px solid #fff;}
            .reasons a{color:#4c4c4c;text-decoration: none;font-size: 18px;}
            .reasons li{border-bottom: 1px dashed #fff;padding:16px 0;}
            .reasons .rightCheck{float: right;width: 17px;height: 22px;background:url(/img/report.png) no-repeat 0px -18px;}
            .reasons .cur .rightCheck{background:url(/img/report.png) no-repeat 0px 4px;}
            .btns2{padding-top: 38px;overflow: hidden;}
            .btns2 a{display: block;width: 154px;height: 38px;line-height: 33px;text-align: center;color:#454545;position: relative;font-size: 20px;text-decoration: none;}
            .btns2 .btnConfirm{background:#fdd000;box-shadow: 0 -5px 0 #b69600 inset;color:#000;float: left;}
            .quxiao{background:#fff;box-shadow: 0 -5px 0 #828282 inset;float: right;}
            .btns2 a:active{top:1px;}
        </style>
        <!-- 二级banner -->
        <div class="find_service">
            <ul>
                <li></li>
            </ul>
        </div>
        <!-- 主体 -->
        <div class="content clearfix informations">
            <div class="conLeft">
                <div class="conleftTop">
                    <div class="cltTitle">
                        <p id="TypeNumber"></p>
                        <div class="shareandstore">
                            <!-- 分享 -->
                            <a href="javascript:;" class="report">举报</a>
                            <div class="shareBox">
                                <div class="jiathis_style_32x32">
                                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank" id="share_asign"></a>
                                </div>
                                <span class="span_share">分享</span>
                            </div>
                            <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                            <!-- 分享 -->
                            <a href="javascript:;" class="collect"><i class="iconfont heart">&#xe601;</i><span>收藏</span></a>
                            <img id="weituo" src="/img/weituo.png" class="weituo" style="float:right;margin:7px 20px 0 0; display:none;" />
                        </div>
                    </div>
                    <style>
                    .cltCon{position: relative;}
                    .proinfoImg{position: absolute; top: 7px; right: 38px;}
                    </style>
                    <div class="cltCon">
                        <img id="infotype" src="/img/vip_pic.png" class="proinfoImg" style="display:none"/>
                        <div class="cltconLeft">
                            <span class="avatar"><img id="UserPicture" src="" /></span><!--默认头像如是-->
                            <a href="javascript:;" class="privateChat"><i class="iconfont">&#xe613;</i>私聊</a>
                            <a href="javascript:;" class="lookConnection." id="check" style="display:none">查看联系方式</a>
                            <div class="cue" id="ViewCollect"></div>
                        </div>
                        <div class="cltconRight">
                            <span class="triangle"></span>
                            <div class="cltconRightCon">
                                <div class="groupBox" id="diff">
                                </div>
                                <span class="theTime" id="PublishTime"></span>
                                <div id="PublishState">
                                </div>
                                <div class="phonetic">
                                    <p>语音描述：<i class="iconfont">&#xe610;</i><span>(下载资芽APP可发布及收听语音描述！)  </span></p>
                                    <p id="AssetList"></p>
                                </div>
                                <div class="depict" id="WordDes">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="conleftMiddle memo" style="display:none">
                    <h2><span class="delinestar"></span><span class="excellent">备注信息</span></h2>
                    <div id="CompanyDes">
                        <!-- <p>（1）房子户型是全南向的两居室，进门是客厅，房子的卧室和厨房都是朝南向的没有遮挡阳光十分充足，其中主卧室朝南带阳台，格局非常方正基本没有浪费的地方是单位成本价房，可以调档满五唯一，落户学区房</p>
                        <p>（2）房子户型是全南向的两居室，进门是客厅，房子的卧室和厨房都是朝南向的没有遮挡阳光十分充足，其中主卧室朝南带阳台，格局非常方正基本没有浪费的地方是单位成本价房，可以调档满五唯一，落户学区房</p>
                        <p>（3）房子户型是全南向的两居室，进门是客厅，房子的卧室和厨房都是朝南向的没有遮挡阳光十分充足，其中主卧室朝南带阳台，格局非常方正基本没有浪费的地方是单位成本价房，可以调档满五唯一，落户学区房</p> -->
                    </div>
                </div>
                <div class="conleftBottom">
                    <div class="clbTitle">凭证信息</div>
                    <!-- 有图 -->
                    <div class="clbCon">
                        <span class="flowerTl flower"></span><span class="flowerTr flower"></span>
                        <span class="flowerBl flower"></span><span class="flowerBr flower"></span>
                        <div class="imgBox">
                            <div class="imgContent">
                                <img id="PictureDes1" src="" style="display:none" />
                                <img id="PictureDes2" src="" style="display:none" />
                                <img id="PictureDes3" src="" style="display:none" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 相关推荐 -->
            <div class="conRight">
                <div class="recommend">
                    <h2 class="recommendTitle"><i class="iconfont">&#xe612;</i>相关信息<a href="javascript:;" class="changeAlot" id="change">换一换</a></h2>
                    <div class="recommendCon">
                        <ul id="match">
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!-- 弹层/start -->
<div class="poplayer">
    <!-- 联系人弹出层 -->
    <div class="poplayer1">
        <a href="javascript:;" class="certain confirmurl">确定</a>
    </div>
    <!-- 聊天弹出层 -->
    <div class="poplayer2">
        <a href="javascript:;" class="certain">确定</a>
    </div>
    <!-- 清单弹出层 -->
    <div class="poplayer3">
        <a href="javascript:;" class="certain confirmurl"></a>
    </div>
    <!-- 抢单弹出层 -->
    <div class="poplayer5">
        <a href="javascript:;" class="certain confirmurl">确定</a>
    </div>
    <div class="jubaoBox">
        <div class="jubao">
            <h3>选择举报原因</h3>
            <ul class="reasons">
                <li reasonid='1'><a href="javascript:;">已合作或已处置</a><a href="javascript:;" class="rightCheck"></a></li>
                <li reasonid='2'><a href="javascript:;">虚假信息</a><a href="javascript:;" class="rightCheck"></a></li>
                <li reasonid='3'><a href="javascript:;">泄露私密</a><a href="javascript:;" class="rightCheck"></a></li>
                <li reasonid='4'><a href="javascript:;">垃圾广告</a><a href="javascript:;" class="rightCheck"></a></li>
                <li reasonid='5'><a href="javascript:;">人身攻击</a><a href="javascript:;" class="rightCheck"></a></li>
                <li reasonid='6'><a href="javascript:;">无法联系</a><a href="javascript:;" class="rightCheck"></a></li>
            </ul>
            <div class="btns2">
                <a href="javascript:;" class="btnConfirm" id="reportpub">确定</a>
                <a href="javascript:;" class="quxiao" id="reportcancel">取消</a>
            </div>
            <p class="ziyaHot">资芽网全国服务热线&nbsp;&nbsp;400-898-8557</p>
        </div>
    </div>
    <!-- <div class="popPhoneNum" style="display: none;">
        <div class="popNumDet"></div>
        <a href="javascript:;" class="certain">确定</a>
    </div> -->
</div>
<!-- 弹层/end -->
<style>
    .layui-layer{border-top: 8px solid #fdd000; width: 420px!important; padding: 0 40px 30px;background: #fff;}
    .layui-layer .layui-layer-title{color:#000;text-align: center; border-bottom: 2px solid #fdd000; padding: 26px 0 22px 25px; font-size: 30px; letter-spacing: 25px; margin-bottom: 15px;background: none;}
    .layui-layer-dialog .layui-layer-content{padding: 0;line-height: 36px;text-align: justify;font-size: 20px;color: #000;letter-spacing: 1px;}
    .layui-layer .layui-layer-btn{text-align: center;margin-top: 20px;}
    .layui-layer-btn{padding: 0;}
    .layui-layer-btn a{width: 104px;padding: 6px 0px 10px; background: #f4f4f4; border-radius: 5px; border-right: 2px; color: #000; box-shadow: 0 -5px 0 #bababa inset; position: relative;border: 0 none;margin: 0;font-size: 20px;margin: 0 18px;text-align: center;}
    .layui-layer-btn .layui-layer-btn1{}
    .layui-layer-btn .layui-layer-btn0,.layui-layer-btn a:hover{background: #fdd000;box-shadow: 0 -5px 0 #b69600 inset;color: #000;}
    .layui-layer-btn a:active{top: 1px;}
    .layui-layer-setwin .layui-layer-close1{display: none;}
</style>
<script>
$(function () {
    
    var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.cookie('token');

    //信息详情
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/project/list/'+ ProjectID +'?access_token=token&token=' + token,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000,  
        cache: false,
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: succFunction //成功执行方法    
    })  

     //相关信息
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/match/project?access_token=token&ProjectID=' + ProjectID,  
        type: 'GET',  
        dataType: 'json',
        asycn: false,  
        timeout: 5000,  
        cache: false,
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
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
                var InvestType    = ('InvestType' in data[index])    ? data[index].InvestType : null;
                var Year          = ('Year' in data[index])          ? data[index].Year : null;
                var noImg = '';
                if(PictureDes1.length < 1){
                    noImg = ' noImg'
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2 class='five'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>资产包转让</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;
                    case "2":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='outsourcingCollection'></span><b class='outCollect'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>委外催收</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnYellow'><i class='iconfont transfer'>&#xe606;</i><em>佣金比例</em></span><strong>" + Rate + "</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;
                    case "3":
                        var html = "<li class='addMar" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>法律服务</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>需求：" + Requirement + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "4":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='commercialFactoring'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>商业保理</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnYellow'><i class='iconfont colorWhite'>&#xe60c;</i><em>合同金额</em></span><strong>" + TotalMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "5":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='guarantee'></span><b class='guarant'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>典当担保</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "6":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>融资需求</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>回报率</em></span><strong>" + Rate + "%</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "9":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='rewardInfo'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>悬赏信息</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnYellow'><i class='iconfont'>&#xe60c;</i><em>悬赏佣金</em></span><strong>" + TotalMoney + "元</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "10":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='investigation'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>尽职调查</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/264' class='descriptionInwords padBot'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>被调查方：" + Informant + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "12":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>固产转让</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "13":
                        var html = "<li class='addMar" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPurchase'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>资产求购</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>求购方：" + Buyer + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "14":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='equitableAssignment'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>债权转让</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "15":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='invest'></span><b class='outCollect'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>投资需求</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange' style='width:118px;background:url(../img/btn01.png) no-repeat 0 -137px'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>预期回报率</em></span><strong>" + Rate + "%</strong></p><p class='keyPoint'><span class='btnYellow' style='background:url(../img/btn01.png) no-repeat 0 -170px'><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;投资期限</em></span><strong>" + Year + "年</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";

                }
                $("#match").html($("#match").html() + html);  
            });    
                   
        } //成功执行方法    
    })   

    function LoadFunction() {  
     // $("#spec01").html('加载中...');  
    }  
    function erryFunction() {  
      
    }  
    function succFunction(tt) {
        var json = eval(tt); //数组 
        // console.log(json);

        var TypeID        = json.TypeID;
        var ProjectID     = json.ProjectID;
        var TypeName      = json.TypeName;
        var ViewCount     = json.ViewCount;
        var ProjectNumber = json.ProjectNumber;
        var ProArea       = json.ProArea;
        var PublishState  = json.PublishState;
        var CollectCount  = json.CollectCount;
        var RushCount     = json.RushCount;
        var WordDes       = json.WordDes;
        var CompanyDes    = json.CompanyDesPC;
        var Publisher     = json.Publisher;
        var brief         = WordDes.substr(0,20) + "...";
        var VoiceDes      = json.VoiceDes;
        var PictureDes1   = json.PictureDes1;
        var PictureDes2   = json.PictureDes2;
        var PictureDes3   = json.PictureDes3;
        var UserPicture   = json.UserPicture;
        var ConnectPhone  = json.PhoneNumber;
        var Member        = json.Member;
        var CollectFlag   = json.CollectFlag;    //收藏状态
        var RushFlag = json.RushFlag;    //抢单状态
        var PayFlag = json.PayFlag;    //付费状态
        var Price = json.Price;    //付费状态

        document.title = TypeName + '_不良资产信息平台-资芽网';
        if(Price != '0' && PayFlag != 1 && ConnectPhone != $.cookie('phonenumber')){
            layer.alert('该信息为收费资源，您还未支付！',function(){
                window.location.href="http://ziyawang.com/project"; 
            });
            return;
        } else if (Price != 0 && PayFlag == 1){
            $('#shownumber').html(ConnectPhone);
            $('#rush').css('cursor','default').unbind('click'); 
            layer.alert('联系电话：' + ConnectPhone, {title: '提示'});
        }

        if(TypeID == '13' || TypeID == '15'){
            $('#check').show();
            $('#PublishState').hide();
        }
        if(CompanyDes.length > 3){
            $("#CompanyDes").html(CompanyDes).show();
            $('#CompanyDes').parent().show();
        }
        if(Member == '1'){
            $('#infotype').attr('src','/img/vip_pic.png').show();
        }else if(Member == '2'){
            $('#infotype').attr('src','/img/shoufei.png').show();
        }
        if(Publisher == 1){
            $('#weituo').show();
        }

        if(CollectFlag == 1){
            $(".collect").children('i').addClass('red');
            $(".collect").children('span').html('已收藏');
        }
        if(PublishState == '0'){
            PublishState = "<a href='javascript:;' class='applyOrder' id='rush'><span id='shownumber'>约<em>谈</em></span><i class='grab'><img src='/img/chat_icon.gif' height='18' width='18' style='margin:8px 0 0 7px;' /></i></a><span class='rushNumber' title='已有" + RushCount + "人约谈'>" + RushCount + "</span>";
        } else if ( PublishState == '1') {
            PublishState = "<a href='javascript:;' class='overCooperation'><span>已合作</span><i class='iconfont grab'>&#xe600;</i></a>";
        }
        if(PayFlag == 1){
            PublishState = "<a href='javascript:;' class='applyOrder'><span id='shownumber'>" + ConnectPhone + "</span><i class='iconfont grab'><img src='/img/chat_icon.gif' height='18' width='18' style='margin:8px 0 0 7px;' /></i></a><span class='rushNumber' title='已有" + RushCount + "人约谈'>" + RushCount + "</span>";
        }
        if(ConnectPhone == $.cookie('phonenumber')){
            PublishState = "<a href='http://ziyawang.com/ucenter/mypro/rushlist/" + ProjectID + "' class='lookOrders'><span>查看约谈人</span><i class='iconfont grab'>&#xe617;</i></a><span class='rushNumber' title='已有" + RushCount + "人约谈'>" + RushCount + "</span>";
        }
        var PublishTime = json.PublishTime;

        var TypeNumber = "<b>" + TypeName + "</b>" + ProjectNumber;
        $('#TypeNumber').html(TypeNumber);
        $('#PublishTime').html(PublishTime);
        $('#avatar').attr('src', UserPicture);
        var ViewCollect = "<i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span>";
        $('#ViewCollect').html(ViewCollect);
        $('#WordDes').html(WordDes);
        $("#PublishState").html(PublishState); 
        $('#UserPicture').attr('src',"http://images.ziyawang.com"+UserPicture);



        var FromWhere     = ('FromWhere' in json)     ? json.FromWhere : null;
        var TotalMoney    = ('TotalMoney' in json)    ? json.TotalMoney : null;
        var Corpore       = ('Corpore' in json)       ? json.Corpore : null;
        var TransferMoney = ('TransferMoney' in json) ? json.TransferMoney : null;
        var AssetType     = ('AssetType' in json)     ? json.AssetType : null;
        var AssetList     = ('AssetList' in json)     ? json.AssetList : null;
        var Account       = ('Account' in json)     ? json.Account : null;
        var Status        = ('Status' in json)        ? json.Status : null;
        var Rate          = ('Rate' in json)          ? json.Rate : null;
        var Requirement   = ('Requirement' in json)   ? json.Requirement : null;
        var BuyerNature   = ('BuyerNature' in json)   ? json.BuyerNature : null;
        var Informant     = ('Informant' in json)     ? json.Informant : null;
        var Buyer         = ('Buyer' in json)         ? json.Buyer : null;
        var InvestType    = ('InvestType' in json)    ? json.InvestType : null;
        var Year          = ('Year' in json)          ? json.Year : null;
        var Price         = ('Price' in json)        ? json.Price : null;

        var listhtml = '';
        switch(TypeID)
        {
            case "1":
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>来源：<strong>" + FromWhere + "</strong></p><p class='remarks'>资产包类型：<strong>" + AssetType + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div>";
                listhtml = "清单下载：<a id='download' url='http://files.ziyawang.com/" + AssetList + "' class='bill'><i class='iconfont'>&#xe611;</i></a>"
                break;
            case "2":
                var html = "<div class='infoStyles'><p class='remarks'>债务人所在地：<strong>" + ProArea + "</strong></p><p class='remarks'>状态：<strong>" + Status + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnYellow'><i class='iconfont transfer'>&#xe606;</i><em>佣金比例</em></span><strong>" + Rate + "</strong></p></div>";
                break;
            case "3":
                var html = "<div class='infoStyles'><p class='remarks'>类型：<strong>" + AssetType + "</strong></p><p class='remarks'>需求：<strong>" + Requirement + "</strong></p></div>";
                break;

            case "4":
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>买方性质：<strong>" + BuyerNature + "</strong></p></div><div class='emphases'><p class='keyPoint supply'><span class='btnYellow'><i class='iconfont transfer'>&#xe60c;</i><em>合同金额</em></span><strong>" + TotalMoney + "万</strong></p></div>";
                break;

            case "5":
                var html = "<div class='infoStyles'><p class='remarks'>类型：<strong>" + AssetType + "</strong></p><p class='remarks'>目标地区：<strong>" + ProArea + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p></div>";
                break;

            case "6":
                var html = "<div class='infoStyles'><p class='remarks'>方式：<strong>" + AssetType + "</strong></p><p class='remarks'>地区：<strong>" + ProArea + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe609;</i><em>回报率</em></span><strong>" + Rate + "%</strong></p></div>";
                break;

            case "9":
                var html = "<div class='infoStyles'><p class='remarks'>类型：<strong>" + AssetType + "</strong></p><p class='remarks'>地区：<strong>" + ProArea + "</strong></p></div><div class='emphases'><p class='totalPoint'></p><p class='keyPoint'><span class='btnYellow'><i class='iconfont'>&#xe60c;</i><em>悬赏佣金</b></em></span><strong>" + TotalMoney + "元</strong></p></div>";
                break;

            case "10":
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>被调查方：<strong>" + Informant + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div>";
                break;

            case "12":
                var html = "<div class='infoStyles'><p class='remarks'>标的物：<strong>" + Corpore + "</strong></p><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div><div class='emphases'><p class='keyPoint supply'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div>";
                break;

            case "13":
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>求购方：<strong>" + Buyer + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div>";
                break;

            case "14":
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div>";
                break;

            case "15":
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>投资类型：<strong>" + InvestType + "</strong></p><p class='remarks'>投资方式：<strong>" + AssetType + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnOrange' style='width:118px;background:url(../img/btn01.png) no-repeat 0 -137px'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>预期回报率</em></span><strong>" + Rate + "%</strong></p><p class='keyPoint'><span class='btnYellow' style='background:url(../img/btn01.png) no-repeat 0 -170px'><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;投资期限</em></span><strong>" + Year + "年</strong></p></div>";

        }
        $("#diff").html(html);
        $("#AssetList").html(listhtml);

        //  $("#member").html("<p>会员信息</p><p>"+ HideNumber +"</p><p>查看联系方式</p>")
        if(PictureDes1.length >1 ) {
            $('#PictureDes1').attr('src', 'http://images.ziyawang.com'+PictureDes1).attr('title',TypeName + '-' + WordDes.substr(0,20)).show();
        } else {
            $('#PictureDes1').attr('src', '/img/noimg.png').addClass('replace').show();
        }
        if(PictureDes2.length >1 ) {
            $('#PictureDes2').attr('src', 'http://images.ziyawang.com'+PictureDes2).attr('title',TypeName + '-' + WordDes.substr(0,20)).show();
        }
        if(PictureDes3.length >1 ) {
            $('#PictureDes3').attr('src', 'http://images.ziyawang.com'+PictureDes3).attr('title',TypeName + '-' + WordDes.substr(0,20)).show();
        }
        var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
        var token = $.cookie('token');
        var stop = false;
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
                url:'http://api.ziyawang.com/v1/collect?access_token=token&token='+token,
                type:'POST',
                data:'itemID=' + ProjectID + '&type=1',
                dataType:'json',
                success:function(msg){
                    // alert(msg.msg);
                }
            });
        }

        function rush() {
            if(Price == 0){
                token = token.replace(/\'/g,"");
                $.ajax({
                    url:'http://api.ziyawang.com/v1/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                    type:'POST',
                    dataType:'json',
                    success:function(msg){
                        // alert(msg.status_code);
                        if(msg.status_code == 200 || msg.status_code == 417){
                            $('#shownumber').html(ConnectPhone);
                            $('#rush').css('cursor','default').unbind('click'); 
                            layer.alert('联系电话：' + ConnectPhone, {title: '提示'});
                            // $('.popNumDet').html('联系电话：' + ConnectPhone);
                            // $('.popPhoneNum').show();
                        } else if(msg.status_code == 418) {
                            layer.confirm('余额不足，请充值！', {title: '提示', btn: ['充值','取消']}, function(){window.location.href="http://ziyawang.com/ucenter/money?ProjectID=" + ProjectID; });
                        }
                    }
                });
                return;
            } else {
                layer.confirm('该信息为收费资源，查看对方联系方式需消耗' + Price + '芽币，点击确认系统将自动扣除！', {
                     title: '提示',
                    btn: ['确定','充值','取消'] //按钮
                }, function(){
                    token = token.replace(/\'/g,"");
                    $.ajax({
                        url:'http://api.ziyawang.com/v1/app/consume?access_token=token&ProjectID=' + ProjectID + '&token=' + token,
                        type:'POST',
                        dataType:'json',
                        success:function(msg){
                            // alert(msg.status_code);
                            if(msg.status_code == 200){
                                $('#shownumber').html(ConnectPhone);
                                $('#rush').css('cursor','default').unbind('click'); 
                                layer.alert('联系电话：' + ConnectPhone, {title: '提示'});
                                // $('.popNumDet').html('联系电话：' + ConnectPhone);
                                // $('.popPhoneNum').show();
                            } else if(msg.status_code == 418) {
                                layer.confirm('余额不足，请充值！', {title: '提示', btn: ['充值','取消']}, function(){window.location.href="http://ziyawang.com/ucenter/money?ProjectID=" + ProjectID; });
                            }
                        }
                    });

                }, function(){
                    window.location.href="http://ziyawang.com/ucenter/money?ProjectID=" + ProjectID; 
                }, function(){

                });
                return;
            }
        }
        $("#rush").click(function(){
            checkLogin();
            if(stop){
                return false;
            }

            checkService();
            if(stop){
                myFun('poplayer5');
                return false;
            }
            
            rush();
        });

        $(".collect").click(function(){
            checkLogin();
            if(stop){
                return false;
            }
            collect();
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
            myFun('poplayer2');
        });   

        $("#check").click(function(){

            checkLogin();
            if(stop){
                return false;
            }

            $("#check").html(ConnectPhone);
        });
        $('#download').click(function(){
            checkLogin();
            if(stop){
                return false;
            }

            checkService();
            if(stop){
                myFun('poplayer3');
                return false;
            }
            var url = $(this).attr('url');
            window.open(url);
        })
    } 
});

$('#change').click(function(){
    var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
     //相关信息
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/match/project?access_token=token&ProjectID=' + ProjectID,  
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
                var InvestType    = ('InvestType' in data[index])    ? data[index].InvestType : null;
                var Year          = ('Year' in data[index])          ? data[index].Year : null;
                var noImg = '';
                if(PictureDes1.length < 1){
                    noImg = ' noImg'
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2 class='five'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>资产包转让</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;
                    case "2":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='outsourcingCollection'></span><b class='outCollect'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>委外催收</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnYellow'><i class='iconfont transfer'>&#xe606;</i><em>佣金比例</em></span><strong>" + Rate + "</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;
                    case "3":
                        var html = "<li class='addMar" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>法律服务</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>需求：" + Requirement + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "4":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='commercialFactoring'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>商业保理</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnYellow'><i class='iconfont colorWhite'>&#xe60c;</i><em>合同金额</em></span><strong>" + TotalMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "5":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='guarantee'></span><b class='guarant'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>典当担保</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "6":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>融资需求</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>回报率</em></span><strong>" + Rate + "%</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "9":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='rewardInfo'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>悬赏信息</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnYellow'><i class='iconfont'>&#xe60c;</i><em>悬赏佣金</em></span><strong>" + TotalMoney + "元</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "10":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='investigation'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>尽职调查</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/264' class='descriptionInwords padBot'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>被调查方：" + Informant + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "12":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>固产转让</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "13":
                        var html = "<li class='addMar" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPurchase'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>资产求购</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>求购方：" + Buyer + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "14":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='equitableAssignment'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>债权转让</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "15":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='invest'></span><b class='outCollect'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>投资需求</a></h2><p><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img title='" + TypeName + '-' + WordDes + "' src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange' style='width:118px;background:url(../img/btn01.png) no-repeat 0 -137px'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>预期回报率</em></span><strong>" + Rate + "%</strong></p><p class='keyPoint'><span class='btnYellow' style='background:url(../img/btn01.png) no-repeat 0 -170px'><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;投资期限</em></span><strong>" + Year + "年</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";

                
                }
                $("#match").html($("#match").html() + html);  
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
    var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.cookie('token');
    $.ajax({
        url: "http://api.ziyawang.com/v1/report?access_token=token&token=" + token,
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
@endsection