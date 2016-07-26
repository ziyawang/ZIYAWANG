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
                    <a href="javascript:;" class="collect"><em></em>收藏</a><a href="#"><em></em>分享</a>
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
                <a href="javascript:;" id="check">查看联系方式</a>
                <a href="#" class="chat"><i></i>私聊</a>
            </div>
            <div class="pic_info cbi_picinfo">
                <h2><em></em>相关信息</h2>
                <ul>
                    <li>
                        <img src="/img/pic01.png">
                        <div class="picinfo_content">
                            <h3>融资借贷</h3>
                            <h4>融资金额6000万...</h4>
                            <div class="picon_intro">
                                <p>北京某畜牧业扩建项目融资融资</p>
                                <p>金额6000万-1亿</p>
                                <p>所在地：北京市</p>
                                <p>所属行业：农林畜牧</p>
                            </div>
                            <a href="#" class="look">查看内容</a>
                            <span class="white_cube"></span>
                        </div>
                    </li>
                    <li>
                        <img src="/img/pic01.png">
                        <div class="picinfo_content">
                            <h3>融资借贷</h3>
                            <h4>融资金额6000万...</h4>
                            <div class="picon_intro">
                                <p>北京某畜牧业扩建项目融资融资</p>
                                <p>金额6000万-1亿</p>
                                <p>所在地：北京市</p>
                                <p>所属行业：农林畜牧</p>
                            </div>
                            <a href="#" class="look">查看内容</a>
                            <span class="white_cube"></span>
                        </div>
                    </li>
                    <li>
                        <img src="/img/pic01.png">
                        <div class="picinfo_content">
                            <h3>融资借贷</h3>
                            <h4>融资金额6000万...</h4>
                            <div class="picon_intro">
                                <p>北京某畜牧业扩建项目融资融资</p>
                                <p>金额6000万-1亿</p>
                                <p>所在地：北京市</p>
                                <p>所属行业：农林畜牧</p>
                            </div>
                            <a href="#" class="look">查看内容</a>
                            <span class="white_cube"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
     $(function () {
        
        var ProjectID = window.location.pathname.replace(/[^0-9]/ig,"");
        var token = $.session.get('token');

        function checkLogin(){
            if(!token){
                window.location = "{{url('/login')}}";
            }
        }

        function collect() {
            token = token.replace(/\'/g,"");
            $.ajax({
                url:'http://api.ziyawang.com/api/collect?access_token=token&token='+token,
                type:'POST',
                data:'itemID=' + ServiceID + '&type=1',
                dataType:'json',
                success:function(msg){
                    console.log(msg);
                }
            });
        }

        function rush() {
            token = token.replace(/\'/g,"");
            $.ajax({
                url:'http://api.ziyawang.com/api/project/rush?access_token=token&token='+token,
                type:'POST',
                data:'ProjectID=' + ProjectID,
                dataType:'json',
                success:function(msg){
                    console.log(msg);
                }
            });
        }

        $.ajax({  
         url: 'http://api.ziyawang.com/api/project/list/'+ ProjectID +'?access_token=token&token=' + token,  
         type: 'GET',  
         dataType: 'json',  
         timeout: 1000,  
         cache: false,
         beforeSend: LoadFunction, //加载执行方法    
         error: erryFunction,  //错误执行方法    
         success: succFunction //成功执行方法    
        })  
        function LoadFunction() {  
         $("#spec01").html('加载中...');  
        }  
        function erryFunction() {  
         alert("error");  
        }  
        function succFunction(tt) {  
         $("#spec01").html('');

            var json = eval(tt); //数组 
            console.log(json);

            var TypeID        = json.TypeID;
            var ProjectID     = json.ProjectID;
            var TypeName      = json.TypeName;
            var ViewCount     = json.TypeID;
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
                PublishState = "<a href='javascript:;' class='much applyorder' id=rush>申请抢单</a>";
            } else if ( PublishState == '1') {
                PublishState = "<a href='javascript:;' class='combine'>已合作</a>";
            }
            var PublishTime = json.PublishTime;
            var common = "<a href='#' class='blue_color'>信息类型：" + TypeName + "</a><div class='fi_time'>" + PublishTime + "</div><p class='people fi_people'><span class='grab'><em>" + RushCount + "</em>人已抢单</span><span class='visited'>浏览数：<em class='yellow_color'>" + ViewCount + "</em>人</span><span>信息完整度：<em class='degree'></em></span></p>";
            var des = "<dl><dt>语音信息：</dt><dd class='voice_info'><a href='#'></a><span>5分22秒</span></dd><dt>文字信息：</dt><dd>" + WordDes + "</dd></dl>";

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
                    case 1:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>总金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>资产包类型：" + AssetType + "</span></p><p class='line_info'><span>地区：" + ProArea + "</span><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span><span>来源：" + FromWhere + "</span></p>";
                        des = "<dl><dt>语音信息：</dt><dd class='voice_info'><a href='#'></a><span>5分22秒</span></dd><dt>文字信息：</dt><dd>" + WordDes + "</dd><dt>清单下载：</dt><dd><button>下载</button></dd></dl>";
                        break;
                    case 2:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>债权人所在地：" + ProArea + "</span><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p><p class='line_info'><span>状态：" + Status + "</span><span>佣金比例：" + Rate + "</span><span>类型：" + AssetType + "</span></p>";
                        break;
                    case 3:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>需求：" + Requirement + "</span></p>";
                        break;

                    case 4:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>合同金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>买方性质：" + BuyerNature + "</span></p>";
                        break;

                    case 5:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p>";
                        break;

                    case 6:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>方式：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>回报率：" + Rate + "%</span></p>";
                        break;

                    case 9:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>目标地区：" + ProArea + "</span></p><p class='line_info'><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span></p>";
                        break;

                    case 10:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>被调查方：" + Informant + "</span></p>";
                        break;

                    case 12:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span></p>";
                        break;

                    case 13:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>类型：" + AssetType + "</span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>求购方：" + Buyer + "</span></p>";
                        break;

                    case 14:
                        var html = "<p class='line_info'><span>编号：" + ProjectNumber + "</span><span>金额：<em class='yellow_color'>" + TotalMoney + "万</em></span><span>地区：" + ProArea + "</span></p><p class='line_info'><span>类型：" + AssetType + "</span><span>转让价：<em class='yellow_color'>" + TransferMoney + "万</em></span></p>";
                        break;

                }
            $("#brief").html(brief);
            $("#status").html(PublishState); 
            $('#userpicture').attr('src',UserPicture);
            $("#common").html(common);
            $("#diff").html(html);
            $(".ai_info").html(des);
            //  $("#member").html("<p>会员信息</p><p>"+ HideNumber +"</p><p>查看联系方式</p>")
            if(PictureDes1.length >0 ) {
                $('#PictureDes1').attr('src', PictureDes1).show();
            }
            if(PictureDes2.length >0 ) {
                $('#PictureDes2').attr('src', PictureDes2).show();
            }
            if(PictureDes3.length >0 ) {
                $('#PictureDes3').attr('src', PictureDes3).show();
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
        } 
    });

</script>
@endsection