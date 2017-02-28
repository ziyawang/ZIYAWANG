@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/assess.css')}}?v=2.1.0" />
    <!-- banner / start -->
    <div class="banner-assess">
        <ul>
            <li></li>
        </ul>
    </div>
    <!-- banner / end -->
    <!-- 债权信息填写 /start -->
    <div class="assess">
        <h2 class="assess-title">风险评估</h2>
        <div class="assess-start pb110 clearfix">
            <div class="assess-l">
                <h2 class="assess-end">评估结束</h2>
                <span class="better">请输入手机号码，获取评估结果</span>
                <input type="text" class="inps-phonenum" id="phonenumber" placeholder="请输入电话号码" />
                <button id="pub" class="assess-btn assess-sure">确&nbsp;定</button>
            </div>
            <div class="mt35 assess-r">
                <a href="javascript:;" id="pub" class="assess-btn ma24">免&nbsp;费&nbsp;发&nbsp;布</a>
                <a href="javascript:;" class="assess-btn ma24 online-serv">在&nbsp;线&nbsp;客&nbsp;服</a>
                <span class="ma24 assess-hot">400-898-8557</span>
                <div class="assess-img">
                    <img src="/img/footer.png" />
                    <span>APP下载</span>
                </div>
            </div>
        </div>
    </div>
    <!-- 债权信息填写 /end -->
<script type="text/javascript">
    function numLimit(id,str) {
        id.value = str.replace(/[^\d.]/g,'');
    }
    $(function(){
        $('.online-serv').click(function() {
            window.open('http://p.qiao.baidu.com/cps2/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%229573093%22%2C%22userId%22%3A%2221573996%22%7D','_blank','width=600,height=600');
        });

        $('.status').click(function() {
            $(this).toggleClass('checked');
            $(this).parent().siblings().children('.status').removeClass('checked');
            if($(this).hasClass('checked')){
                $(this).closest('.opts').siblings().children('.inps').attr('readonly', 'readonly');
            }else{
                $(this).closest('.opts').siblings().children('.inps').removeAttr('readonly');
            }
        });

        if(!$.cookie('answer')){
            window.location.href = "{{url('/test/index')}}";
        }
// console.log($.cookie('answer'));
    })

    $('#pub').click(function(){
        var reg = /^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
        var PhoneNumber = $('#phonenumber').val();
        if(!reg.test(PhoneNumber)){
            layer.alert('请填写正确的手机号');
            return false;
        }
        var Money = $.cookie('money');
        var Area = $.cookie('area');
        var AssetType = $.cookie('assettype');
        var Type = $.cookie('type');
        var Answer = $.cookie('answer');
        var token = $.cookie('token');
        $.ajax({
            url:"http://apis.ziyawang.com/zll/test/result?access_token=token&token=" + token,
            type:"POST",
            dataType:"json",
            data:{'Money':Money,'Area':Area,'AssetType':AssetType,'Type':Type,'Answer':Answer,'Channel':'PC','PhoneNumber':PhoneNumber},
            success:function(json){
                if(json.status_code == '200'){
                    $.removeCookie('money', { path: '/', domain: '.ziyawang.com' });
                    $.removeCookie('area', { path: '/', domain: '.ziyawang.com' });
                    $.removeCookie('assettype', { path: '/', domain: '.ziyawang.com' });
                    $.removeCookie('type', { path: '/', domain: '.ziyawang.com' });
                    $.removeCookie('answer', { path: '/', domain: '.ziyawang.com' });

                    var date = new Date();
                    date.setTime(date.getTime() + (5 * 60 * 1000));
                    $.cookie('result', json.result, { expires: date, path: '/', domain: '.ziyawang.com' });
                    $.cookie('score', json.score, { expires: date, path: '/', domain: '.ziyawang.com' });
                    window.location.href = "{{url('/test/result')}}";
                }
            }
        })
        

    })
</script>
@endsection