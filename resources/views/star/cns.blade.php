@extends('layouts.uhome')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/releasehome.css')}}?v=2.1.0" />
    <div class="ucRight">
        <div class="ucRightCon member-sys">
            <h3 class="member-title">
                <a href="javascript:;">开通认证</a>
            </h3>
            <div class="ucrightTop">
                <div class="infoText"><strong class="implify">开通认证成功后将点亮本认证星级，并在服务方展示页面进行展示。</strong></div>
            </div>
            <div class="amount">
                <div class="amountTitle">
                    <span class="amtLeft pl16">开通认证：</span><div class="server-icon"><span class="server-icon-single server-nuo" title="承诺书认证"></span>承诺书认证</div>
                </div>
                <div class="up-and-down">
                    <a target="_blank" href="{{asset('/upload/doc/cns.doc')}}"><input type="button" class="download-btn server-btn" value="" /></a>
<!-- 头像上传 -->
<script src="{{asset('/org/jqupload/js/jquery.ui.widget.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.iframe-transport.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload-process.js')}}"></script>
<script src="{{asset('/org/jqupload/js/jquery.fileupload-validate.js')}}"></script>
                    <span class="upload-btn server-btn">
                        <input id="fileupload" type="file" name="files[]" data-url="{{url('/ucenter/upload')}}" multiple accept="image/png, image/gif, image/jpg, image/jpeg">
                    </span>
<script type="text/javascript">
$(function () {
    var token = $.cookie('token');
    $('#fileupload').fileupload({
        dataType: 'json',
        maxFileSize: 1 * 1024 * 1024,
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                // console.log(file.name);
                $("#cns").attr('src','http://images.ziyawang.com/user/'+file.name).show();
                var Resource = '/user/'+file.name;
                $.ajax({
                    url: 'http://apis.ziyawang.com/zll/pay?access_token=token&Resource=' + Resource + '&token=' + token + '&paytype=star&payid=4&payname=承诺书认证&channel=pc',
                    data: {'Resource':Resource,'paytype':'star','payid':4,'payname':'承诺书认证','channel':'pc'},
                    type: 'POST',
                    dataType:'json',
                    success:function(msg){
                        layer.alert('承诺书上传成功，客服人员稍后会与您联系！', {icon: 1}, function(){  
                            window.location.href = "{{url('/ucenter/star')}}";
                        }); 
                    }
                });
            });
        }
    });
});
</script>
<!-- 头像上传 -->
                    <p class="implify">请您先下载承诺书，签字盖章后在此处上传承诺书。</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
