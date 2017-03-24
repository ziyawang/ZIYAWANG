@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/infomation.css')}}?v=2.1.7.1.1" />
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=2.1.7.1.1" />
<link type="text/css" rel="stylesheet" href="{{url('/css/recnew.css')}}?v=2.1.7.1.1" />

<!-- 右侧详情 -->
    <div class="ucRight">
        <div class="lookDetails informations">
            <h2 class="ldeTitle"><span>查看信息详情</span></h2>
            <div class="conLeft">
                <div class="conleftTop">
                    <div class="cltTitle">
                        <p id="TypeNumber"></p>
                        <div class="shareandstore">
                            <div class="cue" id="ViewCollect"></div>
                        </div>
                    </div>
                    <div class="cltCon">
                        <div class="cltconRight">
                            <div class="cltconRightCon">
                                <div class="groupBox" id="diff"></div>
                                <span class="theTime" id="PublishTime"></span>
                                <div id="PublishState"></div>
                                <div class="phonetic">
                                    <p>语音描述：<i class="iconfont">&#xe610;</i><span>(下载资芽APP可发布及收听语音描述！)  </span></p>
                                    <p id="AssetList"></p>
                                </div>
                                <div class="depict" id="WordDes"></div>
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
                                <img id="PictureDes1" src="" style="display:none">
                                <img id="PictureDes2" src="" style="display:none">
                                <img id="PictureDes3" src="" style="display:none">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 相关推荐/start -->
                <div class="recommend">
                    <h2 class="recommendTitle">相关推荐<a href="javascript:;" class="changeAlot" id="change"><i class="iconfont">&#xe608;</i>换一批</a></h2>
                    <div class="recommendCon">
                        <ul id="match">
                            
                        </ul>
                    </div>
                </div>
                <!-- 相关推荐/end -->
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
    var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.cookie('token');

    //相关服务方
    $.ajax({  
        url: 'https://apis.ziyawang.com/zll/match/proser?access_token=token&ProjectID=' + ProjectID,  
        type: 'GET',  
        dataType: 'json',
        asycn: false,  
        timeout: 5000,  
        cache: false,
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: function (tt){
            $('#match').html('');
            json = eval(tt);
            var data = json.data;    
            $.each(data, function (index, item) {  
                //循环获取数据
                var ServiceName = data[index].ServiceName;   //服务方名称
                var ConfirmationP1 = data[index].ConfirmationP1;    //服务商资质 
                var ServiceLocation = data[index].ServiceLocation;    //公司所在地 
                var ServiceLevel = data[index].ServiceLevel;    //服务等级 
                var ServiceIntroduction = data[index].ServiceIntroduction;    //服务等级 
                var ServiceArea = data[index].ServiceArea;    //服务地区
                var ViewCount = data[index].ViewCount;    //浏览次数
                var CollectCount = data[index].CollectCount;    //收藏次数
                if(ServiceIntroduction.length > 36) {
                    ServiceIntroduction = ServiceIntroduction.substr(0,36) + '...';
                }
                var ServiceType = data[index].ServiceType;    //服务类型
                if(ServiceType.length > 36) {
                    ServiceType = ServiceType.substr(0,36) + '...';
                }
                var ServiceID = data[index].ServiceID;    //服务商ID
                $("#match").html($("#match").html() + "<li><div class='reconTop'><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconTopTitle'>" + ServiceName + "</a><div class='cueRec'><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></div></div><a href='http://ziyawang.com/service/" + ServiceID + "' class='recImg'><img src='http://images.ziyawang.com" + ConfirmationP1 + "' /></a><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconDescription'>" + ServiceIntroduction + "</a><div class='reconBottom'><span class='reconBottomCon'>服务类型</span>" + ServiceType + "</div><a href='http://ziyawang.com/service/" + ServiceID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>"); 
            });     
                   
        } //成功执行方法    
    })   





    $.ajax({  
         url: 'https://apis.ziyawang.com/zll/project/list/'+ ProjectID +'?access_token=token&token=' + token,  
         type: 'GET',  
         dataType: 'json',  
         timeout: 5000,  
         cache: false,
         beforeSend: LoadFunction, //加载执行方法    
         error: erryFunction,  //错误执行方法    
         success: succFunction //成功执行方法    
        })  
        function LoadFunction() {  
         $("#common").html('加载中...');  
        }  
        function erryFunction() {  
         $(".content_middle").html('加载异常，请刷新页面...'); 
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
        var CertifyState  = json.CertifyState;
        var CollectFlag   = json.CollectFlag;    //收藏状态
        var RushFlag = json.RushFlag;    //抢单状态

        document.title = TypeName + '_不良资产信息平台-资芽网';

        if(CertifyState == '0'){
            PublishState = "<a href='http://ziyawang.com/ucenter/mypro/rushlist/" + ProjectID + "' class='much applyorder'>审核中</a>";
        } else if ( CertifyState == '1') {
            PublishState = "<a href='http://ziyawang.com/ucenter/mypro/rushlist/" + ProjectID + "' class='lookOrders'><span>查看约谈人</span><i class='iconfont grab'>&#xe617;</i></a><span class='rushNumber' title='已有" + RushCount + "人约谈'>" + RushCount + "</span>";
        } else if ( PublishState == '1') {
            PublishState = "<img src='/img/gaizhang.png' class='seal' />";
        }
        var PublishTime = json.PublishTime;

        var TypeNumber = "<b>" + TypeName + "</b>" + ProjectNumber;
        $('#TypeNumber').html(TypeNumber);
        $('#PublishTime').html(PublishTime);
        // $('#avatar').attr('src', UserPicture);
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
        var Status        = ('Status' in json)        ? json.Status : null;
        var Rate          = ('Rate' in json)          ? json.Rate : null;
        var Requirement   = ('Requirement' in json)   ? json.Requirement : null;
        var BuyerNature   = ('BuyerNature' in json)   ? json.BuyerNature : null;
        var Informant     = ('Informant' in json)     ? json.Informant : null;
        var Buyer         = ('Buyer' in json)         ? json.Buyer : null;
        var InvestType    = ('InvestType' in json)    ? json.InvestType : null;
        var Year          = ('Year' in json)          ? json.Year : null;

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
                var html = "<div class='infoStyles'><p class='remarks'>地区：<strong>" + ProArea + "</strong></p><p class='remarks'>投资类型：<strong>" + InvestType + "</strong></p><p class='remarks'>投资方式：<strong>" + AssetType + "</strong></p></div><div class='emphases'><p class='totalPoint'><span class='btnOrange touzi'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>预期回报率</em></span><strong>" + Rate + "%</strong></p><p class='keyPoint'><span class='btnYellow touzitime'><i></i><em>投资期限</em></span><strong>" + Year + "年</strong></p></div></div>";

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
  
            $("#rush").click(function(){
                checkLogin();
                rush();
            });

            $(".collect").click(function(){
                checkLogin();
                collect();
            });

            $("#check").click(function(){
                checkLogin();
                $("#check").html(ConnectPhone);
            });

            var hei = $('.main_right').height();
            $('.main_left').css('height',hei+'px');
        }

})
var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
$('#change').click(function(){
    //相关服务方
    $.ajax({  
        url: 'https://apis.ziyawang.com/zll/match/proser?access_token=token&ProjectID=' + ProjectID,  
        type: 'GET',  
        dataType: 'json',
        asycn: false,  
        timeout: 5000,  
        cache: false,
        success: function (tt){
            $('#match').html('');
            json = eval(tt);
            var data = json.data;    
            $.each(data, function (index, item) {  
                //循环获取数据
                var ServiceName = data[index].ServiceName;   //服务方名称
                var ConfirmationP1 = data[index].ConfirmationP1;    //服务商资质 
                var ServiceLocation = data[index].ServiceLocation;    //公司所在地 
                var ServiceLevel = data[index].ServiceLevel;    //服务等级 
                var ServiceIntroduction = data[index].ServiceIntroduction;    //服务等级 
                var ServiceArea = data[index].ServiceArea;    //服务地区
                var ViewCount = data[index].ViewCount;    //浏览次数
                var CollectCount = data[index].CollectCount;    //收藏次数
                if(ServiceIntroduction.length > 36) {
                    ServiceIntroduction = ServiceIntroduction.substr(0,36) + '...';
                }
                var ServiceType = data[index].ServiceType;    //服务类型
                if(ServiceType.length > 36) {
                    ServiceType = ServiceType.substr(0,36) + '...';
                }
                var ServiceID = data[index].ServiceID;    //服务商ID
                $("#match").html($("#match").html() + "<li><div class='reconTop'><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconTopTitle'>" + ServiceName + "</a><div class='cueRec'><i class='iconfont icon' title='浏览数'>&#xe603;</i><span class='visitors' title='浏览数'>" + ViewCount + "</span><i class='iconfont' title='收藏数'>&#xe601;</i><span class='collectors' title='收藏数'>" + CollectCount + "</span></div></div><a href='http://ziyawang.com/service/" + ServiceID + "' class='recImg'><img src='http://images.ziyawang.com" + ConfirmationP1 + "' /></a><a href='http://ziyawang.com/service/" + ServiceID + "' class='reconDescription'>" + ServiceIntroduction + "</a><div class='reconBottom'><span class='reconBottomCon'>服务类型</span>" + ServiceType + "</div><a href='http://ziyawang.com/service/" + ServiceID + "' class='lookMore'>查看内容&nbsp;&gt;</a></li>"); 
            });           
                   
        } //成功执行方法    
    })   
});

</script>
@endsection