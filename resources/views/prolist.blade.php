@extends('layouts.home')
@section('content')
        <link type="text/css" rel="stylesheet" href="{{asset('/css/findservice.css')}}?v=1.0.4" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/findinfo.css')}}?v=1.0.4" />
        <script type="text/javascript" src="{{asset('/js/fs.js')}}"></script>
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
    <!-- 条件筛选 -->
    <div class="description">
        <div class="wrap">
        <div class="vip_resource">
            <span>信息级别：</span>
            <div class="vr_content">
                <a vip="null" class="current" href="javascript:;">不限</a><a vip="0"  href="javascript:;">普通</a><a vip="1" href="javascript:;">VIP</a>
            </div>
        </div>
        <div class="service_type infoservice">
            <span>信息类型：</span>
            <div class="des_ser">
                <a type="null" class="current" href="javascript:;">不限</a>
                <a type="1"  href="javascript:;">资产包转让</a>
                <a type="14" href="javascript:;">债权转让</a>
                <a type="12" href="javascript:;">固产转让</a>
                <a type="4"  href="javascript:;">商业保理</a>
                <a type="13" href="javascript:;">资产求购</a>
                <a type="6"  href="javascript:;">融资需求</a>
                <a type="3"  href="javascript:;">法律服务</a>
                <a type="9"  href="javascript:;">悬赏信息</a>
                <a type="10" href="javascript:;">尽职调查</a>
                <a type="2"  href="javascript:;">委外催收</a>
                <a type="5"  href="javascript:;" class="special">典当担保</a>
            </div>
        </div>
        <div class="area">
            <span>所在地区：</span><a href="javascript:;" class="current" area="null">全国</a><a href="javascript:;" area="北京">北京</a><a href="javascript:;" area="上海">上海</a><a href="javascript:;" area="广东">广东</a><a href="javascript:;" area="江苏">江苏</a><a href="javascript:;" area="山东">山东</a><a href="javascript:;" area="浙江">浙江</a><a href="javascript:;" area="河南">河南</a><a href="javascript:;" area="河北">河北</a><a href="javascript:;" area="辽宁">辽宁</a><a href="javascript:;" area="四川">四川</a><a href="javascript:;" area="湖北">湖北</a><a href="javascript:;" area="湖南">湖南</a><a href="javascript:;" area="福建">福建</a><a href="javascript:;" area="安徽">安徽</a><a href="javascript:;" area="陕西">陕西</a><a href="javascript:;" area="天津">天津</a>
        </div>
        <div class="hs_change"><span href="#" class="more m1 active infomore">更多></span>
            <span href="#" class="more m2 infomore">收起</span>
        </div>
        <div class="zhedie">    
            <div class="hide">
                <a href="javascript:;" area="江西">江西</a>
                <a href="javascript:;" area="广西">广西</a>
                <a href="javascript:;" area="重庆">重庆</a>
                <a href="javascript:;" area="吉林">吉林</a>
                <a href="javascript:;" area="云南">云南</a>
                <a href="javascript:;" area="山西">山西</a>
                <a href="javascript:;" area="新疆">新疆</a>
                <a href="javascript:;" area="贵州">贵州</a>
                <a href="javascript:;" area="甘肃">甘肃</a>
                <a href="javascript:;" area="海南">海南</a>
                <a href="javascript:;" area="宁夏">宁夏</a>
                <a href="javascript:;" area="青海">青海</a>
                <a href="javascript:;" area="西藏">西藏</a>
                <a href="javascript:;" area="黑龙江">黑龙江</a>
                <a href="javascript:;" area="内蒙古">内蒙古</a>
            </div>
        </div>
        
        <div class="deser_cover">
            <div class="cover1"></div>
            <!-- 资产包 -->
            <div class="cover1">
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
            <div class="cover1">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">个人债权</a><a href="javascript:;" diy="AssetType">企业商帐</a><a href="javascript:;" diy="AssetType">其他</a></span>
                </div>
            </div>
            <!-- 估产转让 -->
            <div class="cover1">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">个人资产</a><a href="javascript:;" diy="AssetType">企业资产</a><a href="javascript:;" diy="AssetType">法拍资产</a></span>
                </div>
                <div class="cover_con">
                    <span>标的物：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="Corpore">土地</a><a href="javascript:;" diy="Corpore">房产</a><a href="javascript:;" diy="Corpore">汽车</a><a href="javascript:;" diy="Corpore">项目</a><a href="javascript:;" diy="Corpore">其他</a></span>
                </div>
            </div>            
            <!-- 商业保理 -->
            <div class="cover1">
                <div class="cover_con">
                    <span>买方性质：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="BuyerNature">国企</a><a href="javascript:;" diy="BuyerNature">民企</a><a href="javascript:;" diy="BuyerNature">上市公司</a><a href="javascript:;" diy="BuyerNature">其他</a>
                    </span>
                </div>
            </div>
            <!-- 资产求购 -->
            <div class="cover1">
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
            <div class="cover1">
                <div class="cover_con">
                    <span>方式：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">抵押</a><a href="javascript:;" diy="AssetType">质押</a><a href="javascript:;" diy="AssetType">租赁</a><a href="javascript:;" diy="AssetType">过桥</a><a href="javascript:;" diy="AssetType">信用</a></span>
                </div>
            </div>
            <!-- 法律服务 -->
            <div class="cover1">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">民事</a><a href="javascript:;" diy="AssetType">经济</a><a href="javascript:;" diy="AssetType">刑事</a><a href="javascript:;" diy="AssetType">公司</a></span>
                </div>
            </div>
            <!-- 悬赏信息 -->
            <div class="cover1">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">找人</a><a href="javascript:;" diy="AssetType">找财产</a></span>
                </div>
            </div>
            <!-- 尽职调查 -->
            <div class="cover1">
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
            <div class="cover1">
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
            <div class="cover1">
                <div class="cover_con">
                    <span>类型：</span>
                    <span class="aa"><a href="javascript:;" class="current" unlimit="cleardiy">不限</a><a href="javascript:;" diy="AssetType">典当</a><a href="javascript:;" diy="AssetType">担保</a></span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- 列表 -->
    <div class="selected_serve wrap">
        <div class="service_info">
            <h2><i></i>精选信息<span></span></h2>
            <ul id="list" class="service_ul info_ul">
                <!-- ajax -->
            </ul>
            <!-- 公共分页/start -->
            <div class="pages">
                <div id="Pagination"></div>
                <div class="searchPage">
                  <span class="page-sum">共<strong class="allPage">xxx</strong>页</span>
                </div>
            </div>
            <!-- 公共分页/end -->
        </div>
        <div class="pic_info">
            <h2><em></em>重点推荐信息</h2>
            <ul>
                <li>
                    <img src="http://images.ziyawang.com/user/14701880836818.jpg">
                    <div class="picinfo_content">
                        <h3><span class="pc_title">固产转让</span><span class="dotted"></span></h3>
                        <h4><a href="{{url('/project/231')}}">某学区临街美食街整体转让...</a></h4>
                        <div class="picon_intro">
                            <p>类型：房产</p>
                            <p>地区：北京市-海淀区</p>
                            <p>转让价：75000万</p>
                        </div>
                        <a href="{{url('/project/231')}}" class="look">查看内容</a>
                        <span class="white_cube"></span>
                    </div>
                </li>
                <li>
                    <img src="http://images.ziyawang.com/user/14698666674730.png">
                    <div class="picinfo_content">
                        <h3><span class="pc_title">资产包转让</span><span class="dotted"></span></h3>
                        <h4><a href="{{url('/project/81')}}">该笔银行资产包共有6个...</a></h4>
                        <div class="picon_intro">
                            <p>总金额：6520.00万</p>
                            <p>转让价：4570.00万</p>
                            <p>地区：上海市-宝山区</p>
                            <p>来源：银行</p>
                        </div>
                        <a href="{{url('/project/81')}}" class="look">查看内容</a>
                        <span class="white_cube"></span>
                    </div>
                </li>
                <li>
                    <img src="http://images.ziyawang.com/checks/14701230538719.jpg">
                    <div class="picinfo_content">
                        <h3><span class="pc_title">资产包转让</span><span class="dotted"></span></h3>
                        <h4><a href="{{url('/project/222')}}">银行一手包 抵押充足...</a></h4>
                        <div class="picon_intro">
                            <p>类型：综合类</p>
                            <p>地区：广东省-广州市</p>
                            <p>总金额：67800.00万</p>
                            <p>转让价：20000.00万</p>
                        </div>
                        <a href="{{url('/project/222')}}" class="look">查看内容</a>
                        <span class="white_cube"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<script>
    $(function () {
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/project/list?pagecount=10&startpage=1&access_token=token',  
            type: 'GET',  
            dataType: 'json',  
            timeout: 5000, 
            cache: false,  
            beforeSend: LoadFunction, //加载执行方法    
            error: erryFunction,  //错误执行方法    
            success: succFunction //成功执行方法    
        });  
        function LoadFunction() {  
            $("#list").html('加载中...');  
        }  
        function erryFunction() {  
            // alert("error");  
        }  
        function succFunction(tt) {  
            $("#list").html('');
            var json = eval(tt); //数组 
            // console.log(json);
            var counts = json.counts;
            $('.service_info h2 span').html('共有' + counts + '条信息');
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax();
                $("html,body").animate({scrollTop:0},200); 

            });
            var data = json.data;        
            $.each(data, function (index, item) {

                var TypeID = data[index].TypeID;
                var ProjectID = data[index].ProjectID;
                var TypeName = data[index].TypeName;
                var ViewCount = data[index].ViewCount;
                var ProjectNumber = data[index].ProjectNumber;
                var ProArea = data[index].ProArea;
                ProArea = ProArea.substr(0,3);
                var PublishState = data[index].PublishState;
                if(PublishState == '0'){
                    PublishState = "<a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>抢单中</a>";
                } else if ( PublishState == '1') {
                    PublishState = "<a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='much applyorder'>已合作</a>";
                }
                var PublishTime = data[index].PublishTime;

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
                if(PictureDes1.length < 1){
                    PictureDes1 = '/checks/infolist.jpg';
                }
                var vip = '';
                if(Member == 1){
                    vip = '<img src="img/vip.png" class="vip_icon" />';
                }
                var newinfo = '';
                if(NewFlag == 1){
                    newinfo = '<img src="img/new.gif" class="new_icon" />';
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产包转让" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "2":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>委外催收" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "3":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>法律服务" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "4":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>商业保理" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "5":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>典当担保" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "6":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>融资需求" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "9":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>悬赏信息" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "元</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "10":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>尽职调查" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "12":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>固产转让" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>标的物：" + Corpore + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "13":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产求购" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "14":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>债权转让" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                }
                $("#list").html($("#list").html() + html);  
            });
            if(counts == 0){
                $("#list").html('抱歉没有找到您想要的结果！');
            }
        }  
    });  




var startpage = 1;
var Vip = null;
var ProArea = null;
var TypeID = null;
var diffInfo = {};
function ajax() {
    var string = query(diffInfo);
    var data = 'startpage=' + startpage + '&Vip=' + Vip + '&TypeID=' + TypeID + '&ProArea=' + ProArea + string;
    console.log(data);

    $.ajax({              
        url: 'http://api.ziyawang.com/v1/project/list?access_token=token&pagecount=10&' + data,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 5000, 
        cache: false,  
        async: false,
        beforeSend: function(){$("#list").html('加载中...');}, //加载执行方法    
        error: function(){
                // alert("error");
            },  //错误执行方法    
        success: function(msg){
            $("#list").html('');
            var json = eval(msg); //数组 
            var counts = json.counts;
            $('.service_info h2 span').html('共有' + counts + '条信息');
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax();
                $("html,body").animate({scrollTop:0},200); 
                
            });
            var data = json.data;        
            $.each(data, function (index, item) {

                var TypeID = data[index].TypeID;
                var ProjectID = data[index].ProjectID;
                var TypeName = data[index].TypeName;
                var ViewCount = data[index].ViewCount;
                var ProjectNumber = data[index].ProjectNumber;
                var ProArea = data[index].ProArea;
                ProArea = ProArea.substr(0,3);
                var PublishState = data[index].PublishState;
                if(PublishState == '0'){
                    PublishState = "<a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"'>抢单中</a>";
                } else if ( PublishState == '1') {
                    PublishState = "<a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='much applyorder'>已合作</a>";
                }
                var PublishTime = data[index].PublishTime;

                var FromWhere     = ('FromWhere' in data[index])     ? data[index].FromWhere : null;
                var TotalMoney    = ('TotalMoney' in data[index])    ? data[index].TotalMoney : null;
                var Corpore       = ('Corpore' in data[index])       ? data[index].Corpore : null;
                var TransferMoney = ('TransferMoney' in data[index]) ? data[index].TransferMoney : null;
                var AssetType     = ('AssetType' in data[index])     ? data[index].AssetType : null;
                var AssetList     = ('AssetList' in data[index])     ? data[index].AssetList : null;
                var Status        = ('Status' in data[index])        ? data[index].Status : null;
                var Rate          = ('Rate' in data[index])          ? data[index].Rate : null;
                var Requirement   = ('Requirement' in data[index])   ? data[index].Requirement : null;
                var BuyerNature   = ('BuyerNature' in data[index])   ? data[index].BuyerNature : null;
                var Informant     = ('Informant' in data[index])     ? data[index].Informant : null;
                var PictureDes1   = ('PictureDes1' in data[index])   ? data[index].PictureDes1 : null;
                var Buyer         = ('Buyer' in data[index])         ? data[index].Buyer : null;
                var Member        = ('Member' in data[index])        ? data[index].Member : null;
                var NewFlag       = ('NewFlag' in data[index])       ? data[index].NewFlag : null;
                if(PictureDes1.length < 1){
                    PictureDes1 = '/checks/infolist.jpg';
                }
                var vip = '';
                if(Member == 1){
                    vip = '<img src="img/vip.png" class="vip_icon" />';
                }
                var newinfo = '';
                if(NewFlag == 1){
                    newinfo = '<img src="img/new.gif" class="new_icon" />';
                }
                if(PictureDes1.length < 1){
                    PictureDes1 = '/checks/info.jpg';
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产包转让" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "2":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>委外催收" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "3":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>法律服务" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "4":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>商业保理" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "5":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>典当担保" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "6":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>融资需求" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "9":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>悬赏信息" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "元</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "10":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>尽职调查" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "12":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>固产转让" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>标的物：" + Corpore + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "13":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产求购" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "14":
                        var html = "<li><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a target='_blank' href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>债权转让" + newinfo + "</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'>" + vip + "<span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                }
                $("#list").html($("#list").html() + html);
            }); 
             if(counts == 0){
                $("#list").html('抱歉没有找到您想要的结果！');
            } 
        }
    })
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
            Vip = $(this).attr('vip');
            ajax();
        })
        $('.infoservice .des_ser a').click(function(){
            startpage = 1;
            TypeID = $(this).attr('type');
            diffInfo = {};
            ajax();
        });
        $('.area a, .zhedie a').click(function(){
            startpage = 1;
            ProArea = $(this).attr('area');
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