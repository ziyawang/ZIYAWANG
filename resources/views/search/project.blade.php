@extends('layouts.home')

@section('seo')
<title>搜索信息-资芽网找信息-海量不良资产信息服务平台</title>
        <meta name="Keywords" content="资产求购,资产转让,融资需求,委外催收,不良资产信息平台,资芽网" />
        <meta name="Description" content="资芽网找信息，汇集资产，债权等各类转让信息；保理担保，安全可靠；要催收，尽职调查与悬赏信息不能少，专业法律服务保障强；融资需求急，这里多信息；想要求购资产？还是资芽网找信息" />
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

    function getQueryString(key){
        var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
        var result = window.location.search.substr(1).match(reg);
        return result?decodeURIComponent(result[2]):null;
    }
    var content = getQueryString("content");
    var urlpage   = getQueryString("startpage")   ? getQueryString("startpage")  : 1;
    var startpage   = ( urlpage - 1 ) * 4 + 1;
    $('#content').val(content);
    $.ajax({  
        url: 'http://api.ziyawang.com/v1/search?access_token=token&token=' + token,  
        type: 'POST',  
        dataType: 'json',  
        data: {'type':'1', 'content': content, 'startpage': startpage, 'pagecount': '6'},
        timeout: 5000,  
        cache: false,  
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: succFunction //成功执行方法    
    });  
    function querydata(data,index){
        var TypeID        = data[index].TypeID;
        var ProjectID     = data[index].ProjectID;
        var TypeName      = data[index].TypeName;
        var ViewCount     = data[index].ViewCount;
        var CollectCount  = data[index].CollectCount;
        var ProjectNumber = data[index].ProjectNumber;
        var PublishTime   = data[index].PublishTime;
        var ProArea       = data[index].ProArea;
            ProArea       = ProArea.substr(0,3);
        var WordDes       = data[index].WordDes;        
        if(WordDes.length > 36){
            WordDes       = WordDes.substr(0,33) + '...';
        }
        var PublishState = data[index].PublishState;
        if(PublishState == '0'){
            PublishState = "<p class='grabOne'><i class='iconfont'>&#xe604;</i><span>抢单中</span></p>";
        } else if ( PublishState == '1') {
            PublishState = "<p class='cooperation'><i class='iconfont'>&#xe600;</i><span>已合作</span></p>";
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
        var noImg = '';
        if(PictureDes1.length < 1){
            noImg = 'noImg'
        }
        var vip = '';
        if(Member == 1){
            vip = '<img src="img/vip_pic.png" class="vipPic" />';
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
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPackage'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2 class='five'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>资产包转让</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>来源：" + FromWhere + "</span></p><p class='remarks'><span>资产包类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;
            case "2":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='outsourcingCollection'></span><b class='outCollect'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>委外催收</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnYellow'><i class='iconfont transfer'>&#xe608;</i><em>佣金比例</em></span><strong>15%-30%</strong></p><p class='remarks'><span>债务人所在地：" + ProArea + "</span></p><p class='remarks'><span>状态：" + Status + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;
            case "3":
            var html = "<li class='item addMar " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='law'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>法律服务</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnYellow'><i class='iconfont colorWhite'>&#xe60c;</i><em>合同金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>需求：" + Requirement + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "4":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='commercialFactoring'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>商业保理</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnYellow'><i class='iconfont colorWhite'>&#xe60c;</i><em>合同金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>买方性质：" + BuyerNature + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "5":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='guarantee'></span><b class='guarant'>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>典当担保</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>目标地区：" + ProArea + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "6":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='financing'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>融资需求</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer rewardRadio'>&#xe609;</i><em>回报率</em></span><strong>" + Rate + "%</strong></p><p class='remarks'><span>方式：" + AssetType + "</span></p><p class='remarks'><span>地区：" + ProArea + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "9":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='rewardInfo'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>悬赏信息</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint moneyPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>金<b>额</b></em></span><strong>" + TotalMoney + "元</strong></p><p class='remarks'><span>类型：" + AssetType + "</span></p><p class='remarks'><span>目标地区：" + ProArea + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "10":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='investigation'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>尽职调查</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords padBot'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>被调查方：" + Informant + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "12":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='fixedTransfer'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>固产转让</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='keyPoint'><span class='btnBlue'><i class='iconfont colorWhite'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'><span>标的物：" + Corpore + "</span></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "13":
            var html = "<li class='item addMar " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='assetPurchase'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>资产求购</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>求购方：" + Buyer + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;

            case "14":
            var html = "<li class='item " + noImg + "'><div class='itemTop'><div class='itemTopLeft'><span class='equitableAssignment'></span><b>" + ProjectNumber + "</b></div><div class='itemTopRight'><h2><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>债权转让</a>" + newinfo + "</h2><p><i class='iconfont icon'>&#xe603;</i><span class='visitors'>" + ViewCount + "</span><i class='iconfont'>&#xe601;</i><span class='collectors'>" + CollectCount + "</span></p></div></div><div class='itemMiddle'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='cetification'><img src='http://images.ziyawang.com" + PictureDes1 + "' /></a><div class='illustration'>" + vip + "<span class='createTime'>" + PublishTime + "</span></div></div><div class='itemBottom'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='descriptionInwords'>" + WordDes + "</a><p class='totalPoint'><span class='btnOrange'><i class='iconfont'>&#xe60c;</i><em>总金额</em></span><strong>" + TotalMoney + "万</strong></p><p class='keyPoint'><span class='btnBlue'><i class='iconfont transfer'>&#xe608;</i><em>转让价</em></span><strong>" + TransferMoney + "万</strong></p><p class='remarks'><span>地区：" + ProArea + "</span></p><p class='remarks'><span>类型：" + AssetType + "</span></p>" + PublishState + "</div><div class='storeup'><a href='javascript:;'>" + collectinfo + "</a></div></li>";
            break;
        }
        return html;
    }

    function LoadFunction() {  
        // $("#list").html('加载中...');  
    }  

    function erryFunction() {  
        // alert("error");  
    }  

    function succFunction(tt) {



        $("#list").html('');
        var json = eval(tt); //数组 
        console.log(json);
        var counts = json.counts;
        var pages = json.pages;
        pages = Math.ceil(pages/5);
        var current = Math.ceil(json.currentpage/5) - 1;
        //分页
        $("#Pagination").pagination(pages,{current_page:current});
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
            var maxTop=Math.max.apply(null,itemArr);
            if(maxTop<$(window).height()+$(document).scrollTop()){
                //加载更多数据
                startpage += 1;
                $.ajax({
                    url: 'http://api.ziyawang.com/v1/search?access_token=token&token=' + token,  
                    type: 'POST',  
                    dataType: 'json',  
                    data: {'type':'1', 'content': content, 'startpage': startpage, 'pagecount': '6'},  
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
                            //收藏按钮切换
                            $('.storeup i').click(function() {
                                var title = $(this).attr("title");
                                if(title == '收藏'){
                                    $(this).attr('title', '已收藏');
                                    $(this).addClass('red');
                                }else{
                                    $(this).attr('title', '收藏');
                                    $(this).removeClass('red');
                                }
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

                            $(".heart").click(function(){
                                checkLogin();
                                if(stop){
                                    return false;
                                }
                                var ProjectID = $(this).attr('ProjectID');
                                collect(ProjectID);
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
    

        //收藏按钮切换
        $('.storeup i').click(function() {
            var title = $(this).attr("title");
            if(title == '收藏'){
                $(this).attr('title', '已收藏');
                $(this).addClass('red');
            }else{
                $(this).attr('title', '收藏');
                $(this).removeClass('red');
            }
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

        $(".heart").click(function(){
            checkLogin();
            if(stop){
                return false;
            }
            var ProjectID = $(this).attr('ProjectID');
            collect(ProjectID);
        });
    }
})

function getQuery(key){
    var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
    var result = window.location.search.substr(1).match(reg);
    return result?decodeURIComponent(result[2]):null;
}
var startpage = getQuery('startpage');
var content = getQuery('content');

function ajax(fenye) {
    if(fenye != undefined){
        startpage = fenye;
    }
    var data = 'startpage=' + startpage + '&content=' + content + '&type=1';
    // console.log(data);
    var url = "http://ziyawang.com/search/project?" + data;
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
            alert('收藏成功！')
        }
    });
}

$(".heart").click(function(){
    checkLogin();
    if(stop){
        return false;
    }
    var ProjectID = $(this).attr('ProjectID');
    collect(ProjectID);
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

