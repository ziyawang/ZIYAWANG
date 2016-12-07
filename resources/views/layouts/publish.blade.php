<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        @yield('title')
<meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
    <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=1492">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link type="text/css" rel="stylesheet" href="{{asset('/css/base.css')}}?v=1.0.8" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/public.css')}}?v=1.0.8" />
        <link type="text/css" rel="stylesheet" href="{{url('/css/fixed.css')}}?v=1.0.8.4" />
<style>
    #uploadifive-picture_upload{height: 30px!important;line-height: 30px!important;border-radius: 25px;background: #e48013;color: #fff;}
    .img_box{padding-left: 170px;}
    #queue{width: 600px;margin-left: 170px;position: relative;}
</style>
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{url('/js/Area.js')}}"></script>
        <script src="{{url('/js/AreaData_min.js')}}"></script>
        <script src="{{url('/js/select.js')}}"></script>
        <script src="{{url('/js/jquery.cookie.js')}}"></script>
        <script src="{{asset('/org/layer/layer.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/YMDClass.js')}}"></script>
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
            // phonenumber = phonenumber.replace(/\'/g,"");
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
        $.removeCookie('userid', { path: '/', domain: '.ziyawang.com' });
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
<!-- 二级banner -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/course')}}"></a></li>
    </ul>
</div>
<!-- 个人中心 -->
<div class="userContent clearfix">
    <!-- 个人中心侧边栏 -->
    <div class="ucLeft">
        <h2>个人中心</h2>
        <div class="ucleftHead">
            <a href="{{url('/ucenter/safe')}}"><img id="avatar" src="" /></a>
            <span id="nickname"></span>
        </div>
        <!-- ps: 有新的系统消息时redTips显示，没有新消息时隐藏 -->
        <div class="ucleftMiddle">
            <a href="{{url('/ucenter/message')}}" class="sysInfo" title="系统消息"><i class="iconfont">&#xe61c;</i><span id="msg"></span></a>
            <a href="{{url('/ucenter/money')}}" class="money" title="芽币金额"><span id="account"></span></a>
        </div>
        <div class="ucleftBottom">
            <ul>
                <li class="current" id="pubpro"><a href="{{url('/ucenter/index')}}"><i class="iconfont">&#xe61e;</i>发布信息</a></li>
                <li id="mypro"><a href="{{url('/ucenter/mypro')}}"><i class="iconfont">&#xe61a;</i>我的发布</a></li>
                <li id="confirm"><a href="{{url('/ucenter/confirm')}}"><i class="iconfont">&#xe60f;</i>服务方认证</a></li>
                <li id="myrush" style="display:none"><a href="{{url('/ucenter/myrush')}}"><i class="iconfont">&#xe619;</i>我的约谈</a></li>
                <li id=""><a href="{{url('/ucenter/money')}}"><i class="iconfont chongzhi">&#xe61f;</i>充值中心</a></li>
                <li id="safe"><a href="{{url('/ucenter/safe')}}"><i class="iconfont">&#xe61d;</i>安全中心</a></li>
                <li id="mycollect"><a href="{{url('/ucenter/mycollect')}}"><i class="iconfont">&#xe61b;</i>我的收藏</a></li>
            </ul>
        </div>
    </div>
    <form action="" class="pub-form">

    @yield('content')


<!-- 文字描述 -->

                        <div class="row">
                            <span class="row-left"><em class="must">*</em>文字描述：</span><span class="limit">（字数限制在500字以内）</span>
                            <textarea name="WordDes" id="" cols="30" rows="10" class="literal"></textarea>
                        </div>
                        <div class="row">
                            <span class="row-left">语音描述：</span>
                            <button class="add_voice" type="button">添加语音</button>
                            <p class="dib">注：语音描述仅限于手机app</p>
                        </div>
<!-- 头像上传 -->
<script src="{{asset('/org/jqupload/js/jquery.ui.widget.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload-process.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload-validate.js')}}"></script>
<!-- <div class="ec clearfix"> -->
     <div class="row">
        <span class="row-left"><em class="must">*</em>上传图片：</span>
        <div class="upload">
            <span class="fileinput-button">
            <em>上传凭证</em>
            <!-- The file input field used as target for the file upload widget -->
            <input id="fileupload" type="file" name="files[]" data-url="{{url('/ucenter/upload')}}" multiple accept="image/png, image/gif, image/jpg, image/jpeg">
            </span>                   
        </div>
        <p class="dib">@yield('tips')</p>
    </div>
    <p id="nopz" style="margin-left:170px;" class="error"></p>
    <div class="clearfix img_box">
        <div class="pictures"><img class="preview" id="PictureDes1" src="" picname=''><span class="deleteBtn1 deleteImg" title="删除"></span></div>
        <div class="pictures"><img class="preview" id="PictureDes2" src="" picname='' ><span class="deleteBtn2 deleteImg" title="删除"></span></div>
        <div class="pictures"><img class="preview" id="PictureDes3" src="" picname='' ><span class="deleteBtn3 deleteImg" title="删除"></span></div>
        <div class="pictures"><img class="preview" id="PictureDes4" src="" picname='' ><span class="deleteBtn3 deleteImg" title="删除"></span></div>
        <div class="pictures"><img class="preview" id="PictureDes5" src="" picname='' ><span class="deleteBtn3 deleteImg" title="删除"></span></div>
    </div>
<!-- </div> -->
<script type="text/javascript">
$(function () {
    
    $('#fileupload').fileupload({
        dataType: 'json',
        formAcceptCharset :'utf-8',
        maxNumberOfFiles : 5,
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                // console.log(file.name);
                $('input[name=PictureDes]').val(data);
                var name = $(".preview[src='']:first").attr('id');
                $("input[name='" + name + "']").val('/user/' + file.name);
                $(".preview[src='']:first").attr({'src':encodeURI('http://images.ziyawang.com/user/'+file.name), 'picname':file.name}).parent().show();
                $('#nopz').html('');

            });
        }
    });
    $('.pictures').hover(function(){
        $(this).children('.deleteImg').stop().toggle();
    })
    $('.deleteImg').click(function(){
        $(this).prev().attr('src','');
        $(this).parent().hide();
        var _this = this;
        layer.msg('删除成功，请重新上传');
        var url = "http://ziyawang.com/ucenter/upload?file=" + $(this).prev().attr('picname');
        $.ajax({
            'url':url,
            'type': 'GET',
            'success':function(msg){
                var pid = $(_this).prev().attr('id');
                $("input[name="+pid+"]").val('');
            }
        });
    })
})
</script>
<!-- 头像上传 -->
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>联系人姓名：</span>
                            <input type="text" class="inps bitian" placeholder="请输入" name="ConnectPerson">
                        </div>
                        <div class="row">
                            <span class="row-left"><em class="must">*</em>联系电话：</span>
                            <input type="text" class="inps bitian" placeholder="请输入" name="ConnectPhone">
                        </div>






@yield('list')

                <p><input type="hidden" name="TypeID" id="TypeID" value="1"></p>
                <p><input type="hidden" name="VoiceDes" id="VoiceDes" value=""></p>
                <p><input type="hidden" name="ProArea" id="ProArea" value=""></p>
                <p><input type="hidden" name="access_token" value="token"></p>
                <p><input type="hidden" name="token" id="token" value=""></p>
                <p><input type="hidden" name="PictureDes1" value="" id="pz"></p>
                <p><input type="hidden" name="PictureDes2" value=""></p>
                <p><input type="hidden" name="PictureDes3" value=""></p>
                <p><input type="hidden" name="PictureDes4" value=""></p>
                <p><input type="hidden" name="PictureDes5" value=""></p>

            </form>
            </div>
                    </div>
                </div>
                        <button class="issue-btn" id="pub">确 认 发 布</button>
        </div>
            <!-- right / end -->
</div>
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
        $(".ec_right select").change(function() {
            if($(this).children("option:selected").hasClass("grayColor")){
                $(this).css({"color":"#999",'font-size':'12px'});   
            }else{
                $(this).css({"color":"#333",'font-size':'14px'});   
            }
        });

function _checkInput(){
var stop = false;

    $("select").each(function(){
        if($(this).hasClass('bitian')){
            $parent=$(this).parent();
            $parent.find("p").remove();
            if($(this).val()=='null' || $(this).val()==0 || $(this).val()==undefined){
                if($(this).css('display') == 'none'){
                    return true;
                }
                $parent.append("<p class='error'>您还没选呢~</p>");
                stop = true;
                return false;
            }
        }
    })
    
    if(stop){
        return;
    }

    $(".ec_input").each(function(){
        if($(this).hasClass('bitian')){
            $parent=$(this).parent();
            $parent.find("p").remove();
            if($(this).val()==""){
                $parent.append("<p class='error'>您还没填呢~</p>");
                stop = true;
                return false;
            } 
        }
    });

    if(stop){
        return;
    }

    $(".inps").each(function(){
        if($(this).hasClass('bitian')){
            $parent=$(this).parent();
            $parent.find("p").remove();
            if($(this).val()==""){
                $parent.append("<p class='error'>您还没填呢~</p>");
                stop = true;
                return false;
            } 
        }
    });

    if(stop){
        return;
    }

@yield('radio')
    $("textarea").parent().find("p").remove();
    if($("textarea").val() == ''){
        $("textarea").parent().append("<p class='error'>您还没填呢~</p>");
        return;
    }

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

    function getAreaIDtwo(){
        var area = 0;          
        if ($("#seachcity1").val() != "0"){
            area = $("#seachcity1").val();
        }else{
            area = $("#seachprov1").val();
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

        var areaID = getAreaID();
        var ProArea =  getAreaNamebyID(areaID);

@yield('zqr')
@yield('shijian')
        
        $('#ProArea').val(ProArea);
        var data = $('form').serialize();
        // console.log(data);
        // return false;

        // var token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIzMyIsImlzcyI6Imh0dHA6XC9cL2FwaXRlc3Queml5YXdhbmcuY29tXC92MVwvYXV0aFwvbG9naW4iLCJpYXQiOiIxNDc0Nzk0NTQyIiwiZXhwIjoiMTQ3NTM5OTM0MiIsIm5iZiI6IjE0NzQ3OTQ1NDIiLCJqdGkiOiJmNmFhNDRhODA4ODBlZjAxNzE3NWJmYTZhNDczMWJiZCJ9.ho521A0Prh6LcNAPNcmQEF2H_VTQBXstSwf2m4yeXpA";
        $(this).prop('disabled', true);
        var _this = this;
        // console.log(data);
        layer.open({
            type: 1,
            title: false,
            closeBtn: 0,
            area: '500px',
            skin: 'layer-submit',
            shadeClose: false,
            content: '<div class="needDo"><div class="need-top">重要提示</div><div class="need-title">您是否对您发布的信息进行真实性承诺，承诺后更能吸引服务方主动联系您，更有助于达成您的需求。无论承诺与否都不影响您的正常发布。</div></div>',
            btn: ['承 诺','不承诺'],
            yes:function(){
                $.ajax({
                    url:"http://api.ziyawang.com/v1/test/project/create?" + data + "&Promise=承诺",
                    type:"POST",
                    data:data + "&Promise=承诺",
                    dataType:"json",
                    error:function(){
                        $(_this).removeAttr('disabled');
                    },
                    success:function(msg){
                        layer.alert('发布成功，请等待审核，您也可以主动查看服务方。', {icon: 1,title:0,closeBtn:0,yes:function(){window.location = "{{url('/ucenter/mypro')}}"}});
                    }
                });
            },
            btn2:function(){
                $.ajax({
                    url:"http://api.ziyawang.com/v1/test/project/create?" + data + "&Promise=承诺",
                    type:"POST",
                    data:data + "&Promise=不承诺",
                    dataType:"json",
                    error:function(){
                        $(_this).removeAttr('disabled');
                    },
                    success:function(msg){
                        layer.alert('发布成功，请等待审核，您也可以主动查看服务方。', {icon: 1,title:0,closeBtn:0,yes:function(){window.location = "{{url('/ucenter/mypro')}}"}});
                    },
                });
            }
        })
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

    $('.judicial .inp-radio').click(function() {
        $(this).toggleClass('checked');
        if($(this).hasClass('checked')){
            $(this).parent().children('.hire').removeAttr('disabled');
        }else{
            $(this).parent().children('.hire').attr('disabled', 'disabled');
        }
    });
    var token = $.cookie('token');
    // token = token.replace(/\'/g,"");
    $('#TypeID').val(getNum(window.location.pathname));
    $('#token').val(token);
    
    $(".row-select").change(function() {
        if($(this).children("option:selected").hasClass("grayColor")){
            $(this).css({"color":"#999"});   
        }else{
            $(this).css({"color":"#333"});   
        }
    });
    // mortge
    $('.mortge-row .inp-radio').click(function() {
        $(this).toggleClass('checked');
    });
    // The radio button switch about transfer and other
    $('.sub-row .inp-radio').click(function() {
        $(this).addClass('checked');
        $(this).parent().siblings().children('.inp-radio').removeClass('checked');
    });
    // Spot 
    $('.spot-row .inp-radio').click(function() {
        $(this).toggleClass('checked');
    });
    
    $(".row-select").change(function() {
        if($(this).children("option:selected").hasClass("grayColor")){
            $(this).css({"color":"#999"});   
        }else{
            $(this).css({"color":"#333"});   
        }
    });
    // House land switch
    $('.opts').click(function() {
        $(this).addClass('checked');
        $(this).parent().siblings().children('.opts').removeClass('checked');
    });
    // The radio button switch about transfer
    $('.transfer .inp-radio').click(function() {
        $(this).addClass('checked');
        $(this).parent().siblings().children('.inp-radio').removeClass('checked');
    });

    // depute release
    $('.depute').on('click',function(){
        layer.open({
            type: 1,
            title: false,
            closeBtn: 0,
            area: '500px',
            skin: 'layer-depute',
            shadeClose: true,
            content: '<div class="deputeBox"><div class="dep-title">请您留下姓名及联系方式，以便资芽网客服人员与您联系，帮您发布。客服电话：400-898-8557</div><div class="row"><span class="row-left"><em class="must">*</em>联系人姓名：</span><input id="ConnectPerson" type="text" class="inps" placeholder="请输入"></div><div class="row"><span class="row-left"><em class="must">*</em>联系电话：</span><input id="ConnectPhone" type="text" class="inps" placeholder="请输入"></div></div>',
            btn: ['确 定','返 回'], 
            btn1:function(){
                var token = $.cookie('token');
                var TypeID = $('#TypeID').val();
                var ConnectPerson = $('#ConnectPerson').val();
                var ConnectPhone = $('#ConnectPhone').val();
                var Channel = 'PC';
                if(!ConnectPhone || !ConnectPerson){
                    layer.alert('请填写完整!');
                    return false;
                }
                var data = {'token':token,'TypeID':TypeID,'ConnectPerson':ConnectPerson,'ConnectPhone':ConnectPhone,'Channel':Channel,'access_token':'token'};
                $.ajax({
                    url:"http://api.ziyawang.com/v1/v2/entrust?access_token=token&token="+token+"&TypeID="+TypeID+"&ConnectPhone="+ConnectPhone+"&ConnectPerson="+ConnectPerson+"&Channel="+Channel,
                    type:"POST",
                    data:data,
                    dataType:"json",
                    success:function(msg){
                        if(msg.status_code == "200"){
                            layer.open({
                                type: 1,
                                title: false,
                                closeBtn: 0,
                                area: '500px',
                                skin: 'layer-depSuc',
                                shadeClose: true,
                                // content: '<div class="deputeSuc"><div class="depute-top">/(ㄒoㄒ)/~~ 信息提交失败了</div><div class="depute-wait">请您返回重新填写！</div></div>',        //提交失败时content内容
                                content: '<div class="deputeSuc"><div class="depute-top">信息已提交</div><div class="depute-wait">请您耐心等待资芽网客服人员进行确认！</div></div>',
                                btn:['返 回','首 页'], btn2:function(){
                                    window.location.href='http://ziyawang.com/'
                                }
                            })
                        }
                    }
                });
            }
        });
    })

    var token = $.cookie('token');
        // var token = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIxIiwiaXNzIjoiaHR0cDpcL1wvYXBpLnppeWF3YW5nLmNvbVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoiMTQ3NjM0OTE0MCIsImV4cCI6IjIxMDcwNjkxNDAiLCJuYmYiOiIxNDc2MzQ5MTQwIiwianRpIjoiMmIxOWNkOGNmYjIzNDZkZWQyYmU4ZjgwMGJjNjY5NjMifQ.gWBZgej8Z7DKEP_h5yBltEQvZ_KqBfy_uUqZvvksiDY";
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



    $.ajax({
        url: 'http://api.ziyawang.com/v1/auth/me?access_token=token&token=' + token,
        type: 'POST',
        success:function(msg){
            var data = eval(msg);
            // console.log(data);
            var picture = data.user.UserPicture;
            var nickname = data.user.username;
            if(nickname.length<1){
                nickname = '未设置';
            }
            var account = data.user.Account;
            var phonenumber = data.user.phonenumber;
            var msgcount = data.MyMsgCount;
            $('#avatar, #avatar1').attr('src', 'http://images.ziyawang.com'+picture);
            $('#nickname, #nickname1').html(nickname);
            $('#account').html(account);
            if(msgcount>0){
                $('#msg').addClass('redTips');
            }
            $('#_phonenumber').html('联系电话：'+phonenumber);
        }
    });
});

</script>