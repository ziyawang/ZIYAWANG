<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        @yield('title')


        <link type="text/css" rel="stylesheet" href="{{asset('/css/base.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/public.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('/css/fsdetails.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{url('/css/relinfo.css')}}" />

        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('/js/fs.js')}}"></script>
        <script src="{{asset('/js/jquery-session.js')}}"></script>
    </head>
    <body>
    <header>
        <div class="wrap">
                <div class="guide">
                    <span id="haslogin" style="display:none;font:white;">
                        <a href="{{url('/ucenter')}}" id="phone"></a>
                        <a href="javascript:" id="logout">退出</a>
                    </span>
                    <a href="#">我的收藏</a>
                    <a href="#">联系客服</a>
                </div>
                <div class="brum_login">
                    <div id="unlogin" style="display:none;font:white;">
                        <a href="{{url('/login')}}" class="viplog">会员登录</a>
                        <a href="{{url('/register')}}" class="freereg">免费注册</a>
                    </div>
                </div>
<!-- 登录退出状态 -->
<script>
    $(document).ready(function(){
        var phonenumber = $.session.get('phonenumber');
        // console.log(typeof(phonenumber));
        if(typeof(phonenumber)!="undefined") {
            phonenumber = phonenumber.replace(/\'/g,"");
            $('#unlogin').hide();
            $('#haslogin').show();
            $('#phone').text(phonenumber);
        } else {
            $('#unlogin').show();
            $('#haslogin').hide();
        }
    });

    $('#logout').click(function(){
        $.session.clear();
        $('#unlogin').show();
        $('#haslogin').hide();
        window.location = "{{url('/')}}";
    });
</script>
<!-- 登录退出状态 -->
                <ul class="nav">
                    <li id="index"><a href="{{url('/')}}">首页</a>|</li>
                    <li id="project"><a href="{{url('/project')}}">找信息</a>|</li>
                    <li id="service"><a href="{{url('/service')}}">找服务</a>|</li>
                    <li id="news"><a href="{{url('/news')}}">新闻中心</a>|</li>
                    <li id="video"><a href="{{url('/video')}}">资芽视频</a>|</li>
                    <li id="contract"><a href="{{url('/contract')}}">合同下载</a></li>
                </ul>
                <div class="login">
                    <h1 class="logo"><a href="index.html"><img src="/img/logo.png" height="68" width="172" alt="首页" /></a></h1>
                    <p class="logo_word">全球不良资产超级综服平台<p>
                    
                    <span class="arr"></span>
                </div>
                <div class="arrow"></div>
                <div class="hotline">服务热线：<br/>
                    <span>400-000-9999</span>
                </div>
        </div>
    </header>
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
            <li><a href="#">资芽助手</a></li>
            <li class="current"><a href="{{url('/ucenter/pubpro')}}">发布信息</a></li>
            <li><a href="{{url('/ucenter/published')}}">我发布的</a></li>
            <li><a href="{{url('/ucenter/cooperated')}}">我合作的</a></li>
            <li><a href="{{url('/ucenter/collected')}}">我收藏的</a></li>
            <li><a href="{{url('/ucenter/confirm')}}">完善资料</a></li>
            <li><a href="{{url('/ucenter/myrush')}}">我的抢单</a></li>
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
                    <em>*</em>语音描述：
                </span>
                <div class="ec_right">
                    <button class="add_voice">添加语音</button>
                </div>
                <p class="ec_pleft">注：语音描述仅限于手机app</p>
            </div>

<!-- 图片上传 -->
<script src="{{asset('/org/uploadifive/jquery.uploadifive.min.js')}}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/org/uploadifive/uploadifive.css')}}">

            <div class="ec clearfix">
                <span class="ec_left">
                    <em>*</em>上传相关凭证：
                </span>
                <div class="ec_right upload">
                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                    <a style="position: relative; top: 8px;" href="javascript:$('#file_upload').uploadifive('upload')">上传凭证</a>
                    
                        <img class="preview" id="PictureDes1" src="" style="width:60px;height:60px;display:none">
                        <img class="preview" id="PictureDes2" src="" style="width:60px;height:60px;display:none">
                        <img class="preview" id="PictureDes3" src="" style="width:60px;height:60px;display:none">
                    
                </div>
                <p class="ec_pleft ecp_word">@yield('tips')</p>
            </div>
<div id="queue"></div>

    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#file_upload').uploadifive({
                'buttonText'       : '选择图片',
                'removeCompleted'  : true,
                'auto'             : false,
                'fileSizeLimit'    : 2048,
                'uploadLimit'      : 3,
                'queueID'          : 'queue',
                'uploadScript'     : "{{url('/ucenter/upload')}}",
                'onUploadComplete' : function(file, data) {
                    console.log(data); 
                    $('input[name=PictureDes]').val(data);
                    var name = $(".preview[src='']:first").attr('name');
                    $('form').append("<input type='hidden' name='"+ name +"' value='"+ data +"' />");
                    $(".preview[src='']:first").attr('src', data).show();
                    alert($('#preview').attr('src')); 
                }
            });
        });
    </script>
<!-- 图片上传 -->





@yield('list')

            <p><input type="hidden" name="TypeID" id="TypeID" value="1"></p>
            <p><input type="hidden" name="ProArea" id="ProArea" value=""></p>
            <p><input type="hidden" name="access_token" value="token"></p>
            <p><input type="hidden" name="token" id="token" value=""></p>

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
            alert('请选择地区！');
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
        var token = $.session.get('token');
        token = token.replace(/\'/g,"");
        $('#TypeID').val(getNum(window.location.pathname));
        $('#token').val(token);

        var areaID = getAreaID();
        var ProArea =  getAreaNamebyID(areaID);
        $('#ProArea').val(ProArea);
        var data = $('form').serialize();
        console.log(data);

        // $.ajax({
        //     url:"http://api.ziyawang.com/api/project/create?token="+token,
        //     type:"POST",
        //     data:data,
        //     dataType:"json",
        //     success:function(msg){
        //         console.log(msg);
        //     }
        // });
    });


</script>

    <!-- 底部 -->
    <footer>
        <div class="footer">
            <div class="nav_foot">
                <a href="#">首页</a>|<a href="#">关注我们</a>|<a href="#">联系我们</a>|<a href="#">人才招聘</a>|<a href="#">商务合作</a>|<a href="#">法律声明</a>|<a href="#">意见反馈</a>
                <p>经营许可证：京ICP证150904号  Copyright      2016 ziyawang.com</p>
            </div>
            <div class="conection">
                <p class="con_ziya">联系资芽</p>
                <p class="tel"><span></span>Tel：400 - 000 - 9999</p>
                <p class="fax"><span></span>Fax：+86 10 - 1234 5678</p>
                <p class="address">总部地址：<br>北京市海淀区中关村国际创客中心A座725</p>
            </div>
            <img src="/img/footer.png" class="erwei">
        </div>
    </footer>
    <!-- // <script type="text/javascript" src="js/jquery.min.js"></script>
    // <script type="text/javascript" src="js/fs.js"></script> -->
    </body>
</html>


<script>
$(function () {
    var token = $.session.get('token');
    if(!token){
        window.location = "{{url('/login')}}";
        return false;
    }

    $('#container').show();
});

</script>