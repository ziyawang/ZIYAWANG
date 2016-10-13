@extends('layouts.home')

@section('seo')
<title>资芽网-全球不良资产超级综服平台</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection

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
                <div class="enter_input"><input type="text" id="content" placeholder="资产债权  搜索引擎" /><span><img id="search" src="/img/search_yel.png" /></span></div>
                <input id="confirm" class="free_issue" type="button" value="申请成为服务方" />
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
        function getQueryString(key){
            var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
            var result = window.location.search.substr(1).match(reg);
            return result?decodeURIComponent(result[2]):null;
        }
        var content = getQueryString("content");
        var startpage = getQueryString("startpage")?getQueryString("startpage"):'1';
        $('#content').val(content);
        $.ajax({  
            url: 'http://api.ziyawang.com/v1/search?access_token=token',  
            type: 'POST',  
            dataType: 'json',  
            data: {'type':'1', 'content': content, 'startpage': startpage},
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
            console.log(json);
            var counts = json.counts;
            $('.service_info h2 span').html('共有' + counts + '条信息');
            var pages = json.pages;
            var current = json.currentpage-1;
            //分页
            $("#Pagination").pagination(pages,{current_page:current});
            $(".page-sum").html("共<strong class='allPage'>" + pages + "</strong>页");
            $('.pagination a').click(function(){
                startpage = $(this).html();
                ajax(startpage);
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
                    PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"'>抢单中</a>";
                } else if ( PublishState == '1') {
                    PublishState = "<a href='http://ziyawang.com/project/"+ ProjectID +"' class='much applyorder'>已合作</a>";
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
                var Buyer         = ('Buyer' in data[index])         ? data[index].Buyer : null;
                var PictureDes1   = ('PictureDes1' in data[index])   ? data[index].PictureDes1 : null;
                if(PictureDes1.length < 1){
                    PictureDes1 = '/checks/info.jpg';
                }
                //循环获取数据
                switch(TypeID)
                {
                    case "1":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产包转让</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>总金额：" + TotalMoney + "万</span><span>资产包类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span><span>来源：" + FromWhere + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "2":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>委外催收</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;
                    case "3":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>法律服务</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>需求：" + Requirement + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "4":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>商业保理</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>合同金额：" + TotalMoney + "万</span><span>地区：" + ProArea + "</span><span>买方性质：" + BuyerNature + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "5":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>典当担保</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "6":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>融资借贷</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>回报率：" + Rate + "%</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "9":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>悬赏信息</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span><span>金额：" + TotalMoney + "元</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "10":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>尽职调查</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>被调查方：" + Informant + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "12":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>固产转让</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>标的物：" + Corpore + "</span><span>地区：" + ProArea + "</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "13":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产求购</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>求购方：" + Buyer + "</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                    case "14":
                        var html = "<li><a href='#' class='head_pic'><img src='http://images.ziyawang.com" + PictureDes1 + "' alt='' /></a><div class='company_info'><a href='http://ziyawang.com/project/"+ ProjectID +"' class='blue_color'>资产求购</a><p class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</p></div><div class='findinfo_abstr'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span><span>金额：" + TotalMoney + "万</span><span>转让价：" + TransferMoney + "万</span></div><div class='orders'><span>" + PublishTime + "</span>" + PublishState + "</div></li>";
                        break;

                }
                $("#list").html($("#list").html() + html);  
            });
            if(counts == 0){
                $("#list").html('抱歉没有找到您想要的结果！');
            }
        };   
    });

    function ajax(startpage){
        var content = $('#content').val();
        window.open("http://ziyawang.com/search/project?type=1&startpage=" + startpage + "&content=" + content,"status=yes,toolbar=yes, menubar=yes,location=yes"); 
    }


    $('#confirm').click(function(){
        var token = $.cookie('token');
        if(!token){
            window.location = "{{url('/login')}}";
            return false;
        }

        window.location = "{{url('/ucenter/confirm')}}";
    })
</script>
<script>
        $('#search').click(function(){
            var content = $('#content').val();
            window.location = "{{url('/search/project')}}?type=1&content=" + content;
        })

        $('#content').focus(function(event){
        $('#content').bind('keydown', function (e) {
            var key = e.which;
            if (key == 13) {
                var content = $('#content').val();
                window.location = "{{url('/search/project')}}?type=1&content=" + content;
            }
        });
    });
</script>
@endsection