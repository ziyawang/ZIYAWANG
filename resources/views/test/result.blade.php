@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/assess.css')}}?v=1.0.4" />
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
                <h2 class="assess-end">评估结果</h2>
                <span class="better" id="score"></span>
                <div class="result" id="result"></div>
                <div class="result-btn2">
                    <a href="javascript:;" class="assess-btn" id="return">重&nbsp;新&nbsp;评&nbsp;估</a>
                    <a href="javascript:;" class="assess-btn" id="pub">发&nbsp;布&nbsp;债&nbsp;权</a>
                </div>
            </div>
            <div class="mt35 assess-r">
                <a href="javascript:;" class="assess-btn ma24">免&nbsp;费&nbsp;发&nbsp;布</a>
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

        var result = $.cookie('result');
        var score = $.cookie('score');
        if(!result){
            window.location.href = "{{url('/test/index')}}";
            return false;
        }
        $('#score').html('评估分数：' + score + '分');
        $('#result').html(result);
    })

    $('#return').click(function(){
        $.removeCookie('score', { path: '/', domain: '.ziyawang.com' });
        $.removeCookie('result', { path: '/', domain: '.ziyawang.com' });
        window.location.href = "{{url('/test/index')}}";
    })

    $('#pub').click(function(){
        // $.removeCookie('score', { path: '/', domain: '.ziyawang.com' });
        // $.removeCookie('result', { path: '/', domain: '.ziyawang.com' });
        var token = $.cookie('token');
        if(token){
            window.location.href = "{{url('/ucenter/index')}}"
        } else {
            window.location.href = "{{url('/login')}}";
        }
    })
</script>
@endsection