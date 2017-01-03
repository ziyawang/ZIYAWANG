@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=2.0.3" />
    <div class="ucRight">
        <div class="ucRightCon member-sys">
            <h3 class="member-title">
                <a href="javascript:;">开通认证</a>
            </h3>
            <div class="ucrightTop">
                <div class="infoText"><strong class="implify">开通认证成功后将点亮本认证星级，并在服务方展示页面进行展示（本网站将做水印和模糊处理，请放心上传）。</strong></div>
            </div>
            <div class="amount">
                <div class="amountTitle">
                    <span class="amtLeft pl16">开通认证：</span><div class="server-icon"><span class="server-icon-single server-sanzh" title="三证认证"></span>三证认证</div>
                </div>
                <div class="up-and-down">
                    <div class="clearfix plus-box">
<!-- 头像上传 -->
<script src="{{asset('/org/jqupload/js/jquery.ui.widget.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload-process.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload-validate.js')}}"></script>
<script type="text/javascript">
$(function () {
    var token = $.cookie('token');
    $('.sz').fileupload({
        dataType: 'json',
        maxFileSize: 1 * 1024 * 1024,
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('input[name=PictureDes]').val(data);
                // var name = $(".preview[src='']:first").attr('id');
                $(".preview[src='']:first").attr({'src':encodeURI('http://images.ziyawang.com/user/'+file.name), 'picurl':'/user/'+file.name}).parent().show();
            });
        }
    });
    $('.pictures').hover(function(){
        $(this).children('.deleteImg').stop().toggle();
    })
    $('.deleteImg').click(function(){
        $(this).prev().attr('src','');
        $(this).prev().attr('picurl','');
        $(this).parent().hide();
        layer.msg('删除成功，请重新上传',{time:2000,icon:2});
        var url = "http://ziyawang.com/ucenter/upload?file=" + $(this).prev().attr('picname');
        $.ajax({
            'url':url,
            'type': 'DELETE',
            'success':function(msg){

            }
        });
    })
});
</script>
<!-- 头像上传 -->
                        <span class="server-plus">
                            <input class="sz" id="fileupload1" type="file" name="files[]" data-url="http://ziyawang.com/ucenter/upload" multiple="" accept="image/png, image/gif, image/jpg, image/jpeg" title="上传证件">
                            <div class="pictures">
                                <img class="preview" id="ConfirmationP1" src="" picurl="">
                                <span class="deleteImg" title="删除"></span>
                            </div>
                        </span>
                        <span class="server-plus">
                            <input class="sz" id="fileupload2" type="file" name="files[]" data-url="http://ziyawang.com/ucenter/upload" multiple="" accept="image/png, image/gif, image/jpg, image/jpeg" title="上传证件">
                            <div class="pictures">
                                <img class="preview" id="ConfirmationP2" src="" picurl="">
                                <span class="deleteImg" title="删除"></span>
                            </div>
                        </span>
                        <span class="server-plus">
                            <input class="sz" id="fileupload3" type="file" name="files[]" data-url="http://ziyawang.com/ucenter/upload" multiple="" accept="image/png, image/gif, image/jpg, image/jpeg" title="上传证件">
                            <div class="pictures">
                                <img class="preview" id="ConfirmationP3" src="" picurl="">
                                <span class="deleteImg" title="删除"></span>
                            </div>
                        </span>
                    </div>
                    <p class="implify">上传三证原件（营业执照、组织机构代码证、税务登记证）或三证合一证件原件。</p>
                    <input id="pub" type="button" class="server-btn server-upload-file" value="" />
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function rtrim(str){  //删除右边逗号
        return str.replace(/,{2,}/g,",");
    }

    $('#pub').click(function(){
        var Resource = new Array();
        $('.preview').each(function(index,value){
            Resource[index] = $(this).attr('picurl');
        })
        if(!(Resource[0] || Resource[1] || Resource[2])){
            layer.msg('您还没有上传照片呢！');
            return false;
        }
        var token = $.cookie('token');
        var resource = '';
        $.each(Resource,function(index,value){
            resource += value + ',';
        })
        resource = rtrim(resource);
        $.ajax({
            url: 'http://api.ziyawang.com/v1/v2/pay?access_token=token&Resource=' + resource + '&token=' + token + '&paytype=star&payid=5&payname=三证认证&channel=pc',
            data: {'Resource':resource,'paytype':'star','payid':5,'payname':'三证认证','channel':'pc'},
            type: 'POST',
            dataType:'json',
            success:function(msg){
                layer.alert('三证上传成功，客服人员稍后会与您联系！', {icon: 1}, function(){  
                    window.location.href = "{{url('/ucenter/star')}}";
                }); 
            }
        });
    })
</script>
@endsection
