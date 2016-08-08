@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/fidetails.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="content wrap">
    <!-- 面包屑导航 -->
    <div class="breadcrumb_nav"><a href="{{url('/')}}">首页</a>&gt;<a href="{{url('/project')}}">找信息</a>&gt;<span id="brief"></span></div>
    <div class="content_wrap">
    <!-- 左侧 -->
        <div class="content_middle">
            <div class="abstract">
                <div class="abstract_info fi_abstractinfo">
                    <!-- 通用部分 -->
                    <div id="common">
                        
                    </div>
                    <!-- 类型属性 -->
                    <div id="diff">
                        
                    </div>
                    <!-- 通用部分 -->
                    <div class="ai_info">
                        
                    </div>
                </div>
                <div id="status">
                </div>
                <div class="share fi_share">
                    <a href="javascript:;" class="collect"><em></em><span>收藏</span></a>
                    <!-- 分享 -->
                    <div class="jiathis_style_32x32">
                        <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank" id="share_asign"></a>
                    </div>
                    <span class="span_share">分享</span>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                    <!-- 分享 -->
                </div>
            </div>
            <div class="cb_intro">
                <h2 class="pingzheng">凭证信息</h2>
                <div class="service_ceti">
                    <img id="PictureDes1" src="" style="display:none" />
                    <img id="PictureDes1" src="" style="display:none" />
                    <img id="PictureDes1" src="" style="display:none" />
                </div>
            </div>
        </div>
        <!-- 右侧 -->
        <div class="content_bottom">
            <div class="userinfo">
                <h2><em></em>会员信息</h2>
                <span class="toux_pic"><img src="" id="userpicture"></span>
                <a href="javascript:;" id="check" class="look1">查看联系方式</a>
                <a href="javascript:;"  id='sound' class="chat look2"><i></i>私聊</a>
            </div>
            <div class="pic_info cbi_picinfo">
                <h2><em></em>相关信息</h2>
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
    </div>
</div>
<!-- 弹层/start -->
<div class="poplayer"></div>
<!-- 联系人弹出层 -->
<div class="poplayer1">
    <a href="javascript:;" class="certain" id="connect">确定</a>
</div>
<!-- 聊天弹出层 -->
<div class="poplayer2">
    <a href="javascript:;" class="certain" id="app">确定</a>
</div>
<!-- 弹层/end -->
<script>
$(function () {
    
    var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
    var token = $.session.get('token');

    $.ajax({  
        url: 'http://api.ziyawang.com/v1/project/list/'+ ProjectID +'?access_token=token&token=' + token,  
        type: 'GET',  
        dataType: 'json',  
        timeout: 1000,  
        cache: false,
        beforeSend: LoadFunction, //加载执行方法    
        error: erryFunction,  //错误执行方法    
        success: succFunction //成功执行方法    
    })  
    function LoadFunction() {  
     // $("#spec01").html('加载中...');  
    }  
    function erryFunction() {  
      
    }  
    function succFunction(tt) {
        var json = eval(tt); //数组 
        console.log(json);

        var TypeID        = json.TypeID;
        var ProjectID     = json.ProjectID;
        var TypeName      = json.TypeName;
        var ViewCount     = json.ViewCount;
        var ProjectNumber = json.ProjectNumber;
        var ProArea       = json.ProArea;
        var PublishState  = json.PublishState;
        var RushCount     = json.RushCount;
        var WordDes       = json.WordDes;
        var brief         = WordDes.substr(0,20) + "...";
        var VoiceDes      = json.VoiceDes;
        var PictureDes1   = json.PictureDes1;
        var PictureDes2   = json.PictureDes2;
        var PictureDes3   = json.PictureDes3;
        var UserPicture   = json.UserPicture;
        var ConnectPhone  = json.PhoneNumber;
        if(PublishState == '0'){
            PublishState = "<a href='javascript:;' class='much applyorder' id='rush'>申请抢单</a>";
        } else if ( PublishState == '1') {
            PublishState = "<a href='javascript:;' class='much applyorder'>已合作</a>";
        }
        var PublishTime = json.PublishTime;
        var common = "<a href='javascript:;' class='blue_color'>信息类型：" + TypeName + "</a><div class='fi_time'>" + PublishTime + "</div><p class='people fi_people'><span class='grab'><em>" + RushCount + "</em>人已抢单</span><span class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</span><span>信息完整度：<em class='degree'></em></span></p>";
        var des = "<dl><dt>语音描述：</dt><dd class='voice_info'><a href='javascript:;'></a><span>(下载资芽APP可发布及收听语音描述！)</span></dd><dt>文字描述：</dt><dd>" + WordDes + "</dd></dl>";

        var FromWhere     = ('FromWhere' in json)     ? json.FromWhere : null;
        var TotalMoney    = ('TotalMoney' in json)    ? json.TotalMoney : null;
        var TransferMoney = ('TransferMoney' in json) ? json.TransferMoney : null;
        var AssetType     = ('AssetType' in json)     ? json.AssetType : null;
        var AssetList     = ('AssetList' in json)     ? json.AssetList : null;
        var Status        = ('Status' in json)        ? json.Status : null;
        var Rate          = ('Rate' in json)          ? json.Rate : null;
        var Requirement   = ('Requirement' in json)   ? json.Requirement : null;
        var BuyerNature   = ('BuyerNature' in json)   ? json.BuyerNature : null;
        var Informant     = ('Informant' in json)     ? json.Informant : null;
        var Buyer         = ('Buyer' in json)         ? json.Buyer : null;

        switch(TypeID)
        {
            case "1":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>总金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>资产包类型：" + AssetType + "</span></p><p class='line_info'><span>地区：" + ProArea + "</span><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span><span>来源：" + FromWhere + "</span></p>";des = "<dl><dt>语音描述：</dt><dd class='voice_info'><a href='#'></a><span>(下载资芽APP可发布及收听语音描述！)</span></dd><dt>文字描述：</dt><dd>" + WordDes + "</dd><dt>清单下载：</dt><dd><button><a id='download' url='http://files.ziyawang.com/" + AssetList + "'>下载</a></button></dd></dl>";
                break;
            case "2":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>债务人所在地：" + ProArea + "</span><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p><p class='line_info'><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></p>";
                break;
            case "3":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>需求：" + Requirement + "</span></p>";
                break;

            case "4":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>合同金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>买方性质：" + BuyerNature + "</span></p>";
                break;

            case "5":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p>";
                break;

            case "6":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>回报率：" + Rate + "%</span></p>";
                break;

            case "9":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p>";
                break;

            case "10":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>被调查方：" + Informant + "</span></p>";
                break;

            case "12":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span></p>";
                break;

            case "13":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>求购方：" + Buyer + "</span></p>";
                break;

            case "14":
                var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>类型：" + AssetType + "</span><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span></p>";
                break;

        }
        $("#brief").html(brief);
        $("#status").html(PublishState); 
        $('#userpicture').attr('src',"http://images.ziyawang.com"+UserPicture);
        $("#common").html(common);
        $("#diff").html(html);
        $(".ai_info").html(des);
        //  $("#member").html("<p>会员信息</p><p>"+ HideNumber +"</p><p>查看联系方式</p>")
        if(PictureDes1.length >1 ) {
            $('#PictureDes1').attr('src', 'http://images.ziyawang.com'+PictureDes1).show();
        }
        if(PictureDes2.length >1 ) {
            $('#PictureDes2').attr('src', 'http://images.ziyawang.com'+PictureDes2).show();
        }
        if(PictureDes3.length >1 ) {
            $('#PictureDes3').attr('src', 'http://images.ziyawang.com'+PictureDes3).show();
        }
        var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
        var token = $.session.get('token');
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
            var role = $.session.get('role');
            if( role.indexOf('1') < 0) {
                stop = true;
                myFn('poplayer1');
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
        var myFn = function(box){
            $('.poplayer').show();
            $('.'+box).show();
        }

        //点击确定关闭弹出的查看联系人和查看语音信息
        $('#connect').click(function(event) {
            $(this).parent().hide();
            $('.poplayer').hide();
            window.open("http://ziyawang.com/ucenter/confirm","status=yes,toolbar=yes, menubar=yes,location=yes"); 
                return false;
        });

        //点击确定关闭弹出查看语音信息
        $('#app').click(function(event) {
            $(this).parent().hide();
            $('.poplayer').hide();
        });

        $('#sound').click(function(){
            myFn('poplayer2')
        })

        $("#check").click(function(){
            checkLogin();
            if(stop){
                return false;
            }
            checkService();
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
                return false;
            }
            var url = $(this).attr('url');
            window.open(url);
        })
    } 
});


</script>
@endsection