@extends('layouts.home')

@section('seo')
<title>找信息_不良资产信息平台-资芽网</title>
        <meta name="Keywords" content="资产求购,资产转让,融资需求,委外催收,不良资产信息平台,资芽网" />
        <meta name="Description" content="资芽网找信息，汇集资产，债权等各类转让信息；商业保理，安全可靠；要催收，尽职调查与悬赏信息不能少，专业法律服务保障强；融资需求急，这里多信息；想要求购资产？还是资芽网找信息" />
@endsection

@section('content')
        <link rel="stylesheet" type="text/css" href="{{url('/css/infomation.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('/css/infolist.css')}}" />
    
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
                            <div class="shareBox">
                                <div class="jiathis_style_32x32">
                                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank" id="share_asign"></a>
                                </div>
                                <span class="span_share">分享</span>
                            </div>
                            <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                            <!-- 分享 -->
                            <a href="javascript:;" class="collect"><i class="iconfont heart">&#xe601;</i><span>收藏</span></a>
                        </div>
                    </div>
                    <div class="cltCon">
                        <div class="cltconLeft">
                            <span class="avatar"><img id="UserPicture" src="" /></span><!--默认头像如是-->
                            <a href="javascript:;" class="privateChat"><i class="iconfont">&#xe613;</i>私聊</a>
                            <a href="javascript:;" class="lookConnection" id="check">查看联系方式</a>
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
                <div class="conleftBottom">
                    <div class="clbTitle">凭证信息</div>
                    <!-- 有图 -->
                    <div class="clbCon">
                        <span class="flowerTl flower"></span><span class="flowerTr flower"></span>
                        <span class="flowerBl flower"></span><span class="flowerBr flower"></span>
                        <div class="imgBox">
                            <div class="imgContent">
                                <img id="PictureDes1" src="" style="display:none" />
                                <img id="PictureDes1" src="" style="display:none" />
                                <img id="PictureDes1" src="" style="display:none" />
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
    <div class="poplayer4">
        <a href="javascript:;" class="certain confirmurl"></a>
    </div>
</div>
<!-- 弹层/end -->
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
                var noImg = '';
                if(PictureDes1.length < 1){
                    noImg = ' noImg'
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2 class='five'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>资产包转让</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;
                    case "2":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='outsourcingCollection'></span><b class='outCollect'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>委外催收</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnYellow'><i class='iconfont transfer'>&#xe606;</i><em>佣金比例</em></span><strong>" + Rate + "</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;
                    case "3":
                        var html = "<li class='addMar" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>法律服务</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>需求：" + Requirement + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "4":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='commercialFactoring'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>商业保理</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnYellow'><i class='iconfont colorWhite'>&#xe60c;</i><em>合同金额</em></span><strong>" + TotalMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "5":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='guarantee'></span><b class='guarant'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>典当担保</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "6":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>融资需求</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>回报率</em></span><strong>" + Rate + "%</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "9":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='rewardInfo'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>悬赏信息</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnYellow'><i class='iconfont'>&#xe60c;</i><em>悬赏佣金</em></span><strong>" + TotalMoney + "元</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "10":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='investigation'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>尽职调查</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/264' class='descriptionInwords padBot'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>被调查方：" + Informant + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "12":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>固产转让</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "13":
                        var html = "<li class='addMar" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPurchase'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>资产求购</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>求购方：" + Buyer + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "14":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='equitableAssignment'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>债权转让</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

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
        var brief         = WordDes.substr(0,20) + "...";
        var VoiceDes      = json.VoiceDes;
        var PictureDes1   = json.PictureDes1;
        var PictureDes2   = json.PictureDes2;
        var PictureDes3   = json.PictureDes3;
        var UserPicture   = json.UserPicture;
        var ConnectPhone  = json.PhoneNumber;
        var CollectFlag   = json.CollectFlag;    //收藏状态
        var RushFlag = json.RushFlag;    //抢单状态

        document.title = TypeName + '_不良资产信息平台-资芽网';



        if(CollectFlag == 1){
            $(".collect").children('i').addClass('red');
            $(".collect").children('span').html('已收藏');
        }
        if(PublishState == '0'){
            PublishState = "<a href='javascript:;' class='applyOrder' id='rush'><span>申请抢单</span><i class='iconfont grab'>&#xe604;</i></a><span class='rushNumber' title='已有" + RushCount + "人抢单'>" + RushCount + "</span>";
        } else if ( PublishState == '1') {
            PublishState = "<a href='javascript:;' class='overCooperation'><span>已合作</span><i class='iconfont grab'>&#xe600;</i></a>";
        }
        if(RushFlag == 1){
            PublishState = "<a href='javascript:;' class='overOrders'><span>已抢单</span><i class='iconfont grab'>&#xe604;</i></a>";
        }
        if(ConnectPhone == $.cookie('phonenumber')){
            PublishState = "<a href='http://ziyawang.com/ucenter/mypro/rushlist/" + ProjectID + "' class='lookOrders'><span>查看抢单人</span><i class='iconfont grab'>&#xe617;</i></a>";
        }
        var PublishTime = json.PublishTime;

        var TypeNumber = "<b>" + TypeName + "</b>" + ProjectNumber;
        $('#TypeNumber').html(TypeNumber);
        $('#PublishTime').html(PublishTime);
        $('#avatar').attr('src', UserPicture);
        var ViewCollect = "<i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span>";
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
        var Status        = ('Status' in json)        ? json.Status : null;
        var Rate          = ('Rate' in json)          ? json.Rate : null;
        var Requirement   = ('Requirement' in json)   ? json.Requirement : null;
        var BuyerNature   = ('BuyerNature' in json)   ? json.BuyerNature : null;
        var Informant     = ('Informant' in json)     ? json.Informant : null;
        var Buyer         = ('Buyer' in json)         ? json.Buyer : null;

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
                var html = "<div class='infoStyles'><p class='remarks'>类型：<strong>" + AssetType + "</strong></p><p class='remarks'>地区：<strong>" + ProArea + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnYellow'><i class='iconfont'>&#xe60c;</i><em>悬赏佣金</b></em></span><strong>" + TotalMoney + "元</strong></p></div>";
                break;

            case "10":
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>被调查方：<strong>" + Informant + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div>";
                break;

            case "12":
                var html = "<div class='infoStyles'><p class='remarks'>标的物：<strong>" + Corpore + "</strong></p><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div><div class='emphases'><p class='keyPoint supply'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div>";
                break;

            case "13":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>求购方：" + Buyer + "</span></p>";
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>求购方：<strong>" + Buyer + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div>";
                break;

            case "14":
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>类型：<strong>" + AssetType + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div>";
                break;

        }
        $("#diff").html(html);
        $("#AssetList").html(listhtml);

        //  $("#member").html("<p>会员信息</p><p>"+ HideNumber +"</p><p>查看联系方式</p>")
        if(PictureDes1.length >1 ) {
            $('#PictureDes1').attr('src', 'http://images.ziyawang.com'+PictureDes1).show();
        } else {
            $('#PictureDes1').attr('src', '/img/noimg.png').addClass('replace').show();
        }
        if(PictureDes2.length >1 ) {
            $('#PictureDes2').attr('src', 'http://images.ziyawang.com'+PictureDes2).show();
        }
        if(PictureDes3.length >1 ) {
            $('#PictureDes3').attr('src', 'http://images.ziyawang.com'+PictureDes3).show();
        }
        var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
        var token = $.cookie('token');
        var stop = false;
        function checkLogin(){
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
            token = token.replace(/\'/g,"");
            $.ajax({
                url:'http://api.ziyawang.com/v1/project/rush?access_token=token&token='+token,
                type:'POST',
                data:'ProjectID=' + ProjectID,
                dataType:'json',
                success:function(msg){
                    alert(msg.msg)
                }
            });
        }
        $("#rush").click(function(){
            checkLogin();
            if(stop){
                return false;
            }

            checkService();
            if(stop){
                myFun('poplayer4');
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

            if( TypeID != 13 && TypeID != 15){
                checkService();
            }

            if(stop){
                myFun('poplayer1');
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
                var noImg = '';
                if(PictureDes1.length < 1){
                    noImg = ' noImg'
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2 class='five'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>资产包转让</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;
                    case "2":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='outsourcingCollection'></span><b class='outCollect'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>委外催收</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnYellow'><i class='iconfont transfer'>&#xe606;</i><em>佣金比例</em></span><strong>" + Rate + "</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;
                    case "3":
                        var html = "<li class='addMar" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>法律服务</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>需求：" + Requirement + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "4":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='commercialFactoring'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>商业保理</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnYellow'><i class='iconfont colorWhite'>&#xe60c;</i><em>合同金额</em></span><strong>" + TotalMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "5":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='guarantee'></span><b class='guarant'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>典当担保</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "6":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>融资需求</a><img src='http://images.ziyawang.com" + PictureDes1 + "' /></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>回报率</em></span><strong>" + Rate + "%</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "9":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='rewardInfo'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>悬赏信息</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnYellow'><i class='iconfont'>&#xe60c;</i><em>悬赏佣金</em></span><strong>" + TotalMoney + "元</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "10":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='investigation'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>尽职调查</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/264' class='descriptionInwords padBot'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>被调查方：" + Informant + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "12":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>固产转让</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "13":
                        var html = "<li class='addMar" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPurchase'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>资产求购</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>求购方：" + Buyer + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                    case "14":
                        var html = "<li class='" + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='equitableAssignment'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "'>债权转让</a></h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "'></a><div class='illustration'><span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p></div><a target='_blank' href='http://ziyawang.com/project/" + ProjectID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>";
                        break;

                }
                $("#match").html($("#match").html() + html);  
            });    
                   
        } //成功执行方法    
    })   
});


</script>
@endsection