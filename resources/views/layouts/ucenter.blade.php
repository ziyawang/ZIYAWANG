<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        @yield('title')
<meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
    <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
        <meta name="viewport" content="width=1492">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link type="text/css" rel="stylesheet" href="{{asset('/css/base.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/public.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/index.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/fsdetails.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{url('/css/relinfo.css')}}" />
<style>
    #uploadifive-picture_upload{height: 30px!important;line-height: 30px!important;border-radius: 25px;background: #e48013;color: #fff;}
    .img_box{padding-left: 170px;}
    #queue{width: 600px;margin-left: 170px;position: relative;}
</style>
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('/js/fs.js')}}"></script>
        <script src="{{url('/js/jquery.cookie.js')}}"></script>
        <script src="{{asset('/js/public.js')}}"></script>
    <script src="http://libs.cncdn.cn/jquery-ajaxtransport-xdomainrequest/1.0.3/jquery.xdomainrequest.min.js"></script>
    </head>
    <body>
    <div class="header">
        <div class="wrap">
                <div class="guide">
                    <a target="_blank" href="{{url('/ucenter/index')}}" class="personal">个人中心</a>
                    <a class="ziyaapp">APP下载<span class="ziya_ma"><img src="/img/ziyaapp.png" /></span></a>
                    <a href="javascript:;" class="weixin1">微信<span class="wx_ma"><img src="/img/wx.jpg" /></span></a>
                    <a href="#" class="weibo1">微博<span class="wb_ma"><img src="/img/wb.png" /></span></a>
                    <a target="_blank" href="{{url('/ucenter/mycollect')}}" class="mycol">我的收藏</a>
                </div>
                <div class="brum_login" style="display:none">
                        <a href="{{url('/login')}}" class="viplog" target="_blank">会员登录</a>
                        <a href="{{url('/register')}}" class="freereg" target="_blank">免费注册</a>
                </div>
                <!-- 登录后内容 -->
                <div class="after_login">
                    <a href="{{url('/ucenter/index')}}" class="number" id="phone"></a><a href="javascript:;" id="logout" class="back">退出</a>
                </div>
<!-- 登录退出状态 -->
<script>
    $(document).ready(function(){
         var phonenumber = $.cookie('phonenumber');
        // console.log(typeof(phonenumber));
        if(typeof(phonenumber)!="undefined") {
            phonenumber = phonenumber.replace(/\'/g,"");
            $('#unlogin').hide();
            $('.brum_login').hide();
            $('.personal').show();
            $('.after_login').show();
            $('#phone').text(phonenumber);
            $('.login').addClass('after');
        } else {
            $('#unlogin').show();
            $('.brum_login').show();
            $('.after_login').hide();
            $('.personal').hide();
        }
    });

    $('#logout').click(function(){
        $.removeCookie('token', { path: '/', domain: '.ziyawang.com' });
        $.removeCookie('phonenumber', { path: '/', domain: '.ziyawang.com' });
        $.removeCookie('role', { path: '/', domain: '.ziyawang.com' });
        $('#unlogin').show();
        $('#after_login').hide();
        $('.personal').hide();
        $('.login').removeClass('after');
        $('')
        window.location = "{{url('/')}}";
    });
</script>
<!-- 登录退出状态 -->
                <ul class="nav">
                    <li id="index"><a href="{{url('/')}}">首页</a>|</li>
                    <li id="project"><a href="{{url('/project')}}">找信息</a>|</li>
                    <li id="service"><a href="{{url('/service')}}">找服务</a>|</li>
                    <li id="video"><a href="{{url('/video')}}">资芽视频</a>|</li>
                    <li id="news"><a href="{{url('/news')}}">新闻中心</a>|</li>
                    <li id="contract"><a href="{{url('/contract')}}">下载专区</a></li>
                </ul>
                <div class="login after">
                    <h1 class="logo"><a href="{{url('/')}}"><img src="/img/logo2.png" height="79" width="205" alt="首页" /></a></h1>
                    <p class="logo_word">全球不良资产超级综服平台<p>
                    
                    <span class="arr"></span>
                </div>
                <div class="arrow"></div>
                <div class="hotline">服务热线：
                    <span>400-898-8557</span>
                </div>
        </div>
    </div>
    <link type="text/css" rel="stylesheet" href="{{url('/css/relinfo.css')}}" />
<!-- 二级banner -->
<div class="find_service">
    <ul>
        <li></li>
    </ul>
</div>
<!-- 主体 -->
<div class="main wrap">
<!-- 左侧导航 -->
    <div class="main_left">
        <h2>个人中心</h2>
        <ul>
            <li><a href="{{url('/ucenter')}}">系统消息</a></li>
            <li><a href="{{url('/ucenter/helper')}}">资芽助手</a></li>
            <li class="current"><a href="{{url('/ucenter/pubpro')}}">发布信息</a></li>
            <li><a href="{{url('/ucenter/mypro')}}">我发布的</a></li>
            <li><a href="{{url('/ucenter/mycoo')}}">我合作的</a></li>
            <li><a href="{{url('/ucenter/mycollect')}}">我收藏的</a></li>
            <li><a href="{{url('/ucenter/confirm')}}">服务方认证</a></li>
            <li id="myrush" style="display:none"><a href="{{url('/ucenter/myrush')}}">我的抢单</a></li>
            <li><a href="{{url('/ucenter/safe')}}">安全中心</a></li>
        </ul>
    </div>

    @yield('content')

                <!-- 文字描述 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>文字描述：
                </span>
                <div class="ec_right">
                    <textarea name="WordDes" id="" class="ec_textarea"></textarea>
                </div>
                <p class="ec_pleft ecp_text">提示：<br>为保护您的隐私，如您在描述中填写个人姓名、联系方式等信息，平台将做模糊处理。</p>
            </div>
            <!-- 语音描述 -->
            <div class="ec clearfix">
                <span class="ec_left">
                    语音描述：
                </span>
                <div class="ec_right">
                    <button class="add_voice" type="button">添加语音</button>
                </div>
                <p class="ec_pleft">注：语音描述仅限于手机app</p>
            </div>

<!-- 图片上传 -->
<script src="{{asset('/org/uploadifive/jquery.uploadifive.min.js')}}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/org/uploadifive/uploadifive.css')}}">

            <div class="ec clearfix">
                <span class="ec_left">
                    上传相关凭证：
                </span>
                <div class="ec_right upload">
                    <input id="picture_upload" name="picture_upload" type="file" multiple="true">
                    <a style="position: relative; top: 8px;" href="javascript:$('#picture_upload').uploadifive('upload')"></a>
                    <style>
                        .preview {float: left;margin-right: 20px;}
                    </style>                  
                </div>
                <p class="ec_pleft ecp_word">@yield('tips')</p>
            </div>
                <p id="nopz" style="margin-left:170px;" class="error"></p>
            <div class="ec clearfix img_box">
                <img class="preview" id="PictureDes1" src="" style="width:150px;height:150px;display:none">
                <img class="preview" id="PictureDes2" src="" style="width:150px;height:150px;display:none">
                <img class="preview" id="PictureDes3" src="" style="width:150px;height:150px;display:none">
            </div>
<div id="queue"></div>

    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#picture_upload').uploadifive({
                'buttonText'       : '选择图片',
                'removeCompleted'  : true,
                'auto'             : true,
                'fileSizeLimit'    : 2048,
                'uploadLimit'      : 3,
                'queueID'          : 'queue',
                'uploadScript'     : "{{url('/ucenter/upload')}}",
                'onUploadComplete' : function(file, data) {
                    $('input[name=PictureDes]').val(data);
                    var name = $(".preview[src='']:first").attr('id');
                    $("input[name='" + name + "']").val(data);
                    $(".preview[src='']:first").attr('src', 'http://images.ziyawang.com/'+data).show();
                    $('#nopz').html('');
                }
            });
        });
    </script>
<!-- 图片上传 -->





@yield('list')

            <p><input type="hidden" name="TypeID" id="TypeID" value="1"></p>
            <p><input type="hidden" name="VoiceDes" id="VoiceDes" value=""></p>
            <p><input type="hidden" name="ProArea" id="ProArea" value=""></p>
            <p><input type="hidden" name="access_token" value="token"></p>
            <p><input type="hidden" name="token" id="token" value=""></p>
            <p><input type="hidden" name="PictureDes1" value="" id="pz"></p>
            <p><input type="hidden" name="PictureDes2" value=""></p>
            <p><input type="hidden" name="PictureDes3" value=""></p>

        </form>
        </div>
        <button class="fabu" id="pub">确认发布</button>
    </div>
</div>
<script src="{{asset('/js/Area.js')}}"></script>
<script src="{{asset('/js/AreaData_min.js')}}"></script>
<script src="{{asset('/js/select.js')}}"></script>
<script>
    //得到地区码
var permission = 0;
$('.ec_input').blur(function(event) {
    $parent=$(this).parent();
    $success="输入正确";
    $parent.find("p").remove();
    if($(this).val()==""){
        $parent.append("<p class='error'>您还没填呢~</p>");
        return;
    }
})

$('textarea').blur(function(envet){
    $parent=$(this).parent();
    $parent.find("p").remove();
    if($(this).val()==""){
        $parent.append("<p class='error'>您还没填呢~</p>");
        return;
    }
})

$('select').change(function(){
    $(this).parent().find("p").remove();
})

function _checkInput(){
var stop = false;

    $("select").each(function(){
        $parent=$(this).parent();
        $parent.find("p").remove();
        if($(this).val()=='null' || $(this).val()==0 || $(this).val()==undefined){
            $parent.append("<p class='error'>您还没选呢~</p>");
            stop = true;
        }
    })
    
    if(stop){
        return;
    }

    $(".ec_input").each(function(){
        $parent=$(this).parent();
        $parent.find("p").remove();
        if($(this).val()==""){
            $parent.append("<p class='error'>您还没填呢~</p>");
            stop = true;
        } 
    });

    if(stop){
        return;
    }
    
    $("textarea").parent().find("p").remove();
    if($("textarea").val() == ''){
        $("textarea").parent().append("<p class='error'>您还没填呢~</p>");
        return;
    }

    // $("#nopz").html('');
    // if($('#pz').val() == ''){
    //     $("#nopz").html('你还没有上传凭证呢~');
    //     return;
    // }
@yield('pingzheng')

@yield('qingdan')
    permission = 1;
}

    function getAreaID(){
        var area = 0;          
        if ($("#seachcity").val() != "0"){
            area = $("#seachcity").val();
        }else{
            area = $("#seachprov").val();
        }
        return area;
    }

    function getAreaNamebyID(areaID){
        var areaName = "";
        if(!areaID){
            return false;
        } if(areaID.length == 2){
            areaName = area_array[areaID];
        }else if(areaID.length == 4){
            var index1 = areaID.substring(0, 2);
            areaName = area_array[index1] + "-" + sub_array[index1][areaID];
        }
        return areaName;
    }

    function getNum(text){
        var value = text.replace(/[^0-9]/ig,"");
        return value;
    }

    $('#pub').click(function(){
        _checkInput();

        if( permission != 1){
            return false;
        }
        var token = $.cookie('token');
        token = token.replace(/\'/g,"");
        $('#TypeID').val(getNum(window.location.pathname));
        $('#token').val(token);

        var areaID = getAreaID();
        var ProArea =  getAreaNamebyID(areaID);
        $('#ProArea').val(ProArea);
        var data = $('form').serialize();
        // console.log(data);

        $(this).attr('disabled', true);
        $.ajax({
            url:"http://api.ziyawang.com/v1/project/create?token="+token,
            type:"POST",
            data:data,
            dataType:"json",
            success:function(msg){
                alert('发布成功，请等待审核！')
                window.location = "{{url('/ucenter/mypro')}}"
            }
        });
    });


</script>

    <!-- 底部 -->
    <div class="foot">
        <div class="footer">
            <div class="botbrands">
                <a class="website" id="_pingansec_bottomimagesmall_brand" href="http://si.trustutn.org/info?sn=671160812023618276847&certType=1" target="_blank"><img src="http://v.trustutn.org/images/cert/brand_bottom_small.jpg"/></a>
                <a  key ="579ebe15efbfb033fb17ed33"  logo_size="96x36"  logo_type="business"  href="http://www.anquan.org" ><script src="//static.anquan.org/static/outer/js/aq_auth.js"></script></a>
                <a href="http://webscan.360.cn/index/checkwebsite/url/www.ziyawang.com" target="_blank"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/9cb32b38475b891e54655e56518a3b9e"/></a>
            </div>
            <div class="nav_foot">
                <a href="{{url('/')}}">首页</a>|<a href="{{url('/aboutus')}}">关于我们</a>|<a href="{{url('/connectus')}}">联系我们</a>|<a href="javascript:;">人才招聘</a>|<a href="javascript:;">商务合作</a>|<a href="{{url('/legal')}}">法律声明</a>
                <p>京ICP备16037201号  Copyright      2016 ziyawang.com</p>
            </div>
            <div class="conection">
                <p class="con_ziya">联系资芽</p>
                <p class="tel"><span></span>Tel：400 - 898 - 8557</p>
                <p class="fax"><span></span>Mail：ziyawang@ziyawang.com</p>
                <p class="address fs12">总部地址：</p><p class="mb10 fs12">北京市海淀区中关村大街15-15号创业公社 · 中关村</p><p class="fs12">国际创客中心B2-C15</p>
            </div>
            <img src="/img/footer.png" class="erwei">
        </div>
    </div>
    
    <!-- // <script type="text/javascript" src="js/jquery.min.js"></script>
    // <script type="text/javascript" src="js/fs.js"></script> -->
    <script type="text/javascript" src="//s.union.360.cn/53727.js"></script>
    </body>
</html>


<script>
$(function () {
    var token = $.cookie('token');
    if(!token){
        window.location = "{{url('/login')}}";
        return false;
    }

    var role = $.cookie('role');
    // console.log(role);
    if(role == 1){
        $("#myrush").show();
    }

    $('#container').show();
});

</script>