@extends('layouts.home')
@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/assess.css')}}?v=2.0.3" />
<script src="{{asset('/js/Area.js')}}"></script>
<script src="{{asset('/js/AreaData_min.js')}}"></script>
<script src="{{asset('/js/select.js')}}"></script>
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
                <div class="assess-l-tit">本系统根据您提交的选项及填写的资料进行评估，相关内容需真实、有效、合法、完整。我们做出的评估结果仅供参考，不具有任何法律效力。建议您及时收回款项，保证您的权益。</div>
                <div class="options">
                    <div class="sum mb28">
                        <span class="options-l"><em class="c-red">*</em>债权金额：</span>
                        <input type="text" placeholder="请输入" class="options-m" onkeyup="numLimit(this,this.value)" id="Money"/><span class="ml12">万元</span>
                        <p class="mistake"></p>
                    </div>
                    <div class="where mb28">
                        <span class="options-l"><em class="c-red">*</em>债权人所在地：</span>
                        <span class="region">
                            <select id="seachprov" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>
                            <select id="seachcity"></select>
                        </span>
                    </div>
                    <div class="rights mb28">
                        <span class="options-l"><em class="c-red">*</em>债权类型：</span>
                        <select class="options-m" name="AssetType" id="AssetType">
                            <option value="0">请选择</option>
                            <option value="个人债权">个人债权</option>
                            <option value="企业商账">企业商账</option>
                        </select>
                    </div>
                    <div class="debtee mb28">
                        <span class="options-l"><em class="c-red">*</em>债务人类型：</span>
                        <select class="options-m" name="Type" id="Type">
                            <option value="0">请选择</option>
                            <option value="个人">个人</option>
                            <option value="企业">企业</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="assess-btn ml30" id="start">开&nbsp;始&nbsp;评&nbsp;估</button>
            </div>
            <div class="mt96 assess-r">
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
    $('#pub').click(function(){
        var token = $.cookie('token');
        if(!token){
            window.open("{{url('/login')}}","status=yes,toolbar=yes, menubar=yes,location=yes"); 
            return false;
        }

        window.location = "{{url('/ucenter/index')}}";
    })
    $(function(){
        $(".options select").change(function() {
            if($(this).children("option:selected").hasClass("grayColor")){
                $(this).css({"color":"#999",'font-size':'12px'});   
            }else{
                $(this).css({"color":"#333",'font-size':'14px'});   
            }
        });

        $('.online-serv').click(function() {
            window.open('http://p.qiao.baidu.com/cps2/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%229573093%22%2C%22userId%22%3A%2221573996%22%7D','_blank','width=600,height=600');
        });
    })

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

    $('#start').click(function(){
        var Money = $('#Money').val();
        var areaID = getAreaID();
        var Area =  getAreaNamebyID(areaID);
        var AssetType = $('#AssetType').val();
        var Type = $('#Type').val();

        if(Money == ''){
            layer.alert('请输入债权金额');
            return false;
        }

        if(Area.length < 4 || Area == ''){
            layer.alert('请选择债权人所在地');
            return false;
        }

        if(AssetType == '0'){
            layer.alert('请选择债权类型');
            return false;
        }

        if(Type == '0'){
            layer.alert('请选择债权人类型');
            return false;
        }

        var date = new Date();
        date.setTime(date.getTime() + (120 * 60 * 1000));
        $.cookie('money', Money, { expires: date, path: '/', domain: '.ziyawang.com' });
        $.cookie('area', Area, { expires: date, path: '/', domain: '.ziyawang.com' });
        $.cookie('assettype', AssetType, { expires: date, path: '/', domain: '.ziyawang.com' });
        $.cookie('type', Type, { expires: date, path: '/', domain: '.ziyawang.com' });


        if(Type == '个人'){
            window.location.href = "{{url('/test/page')}}" + '?type=per&page=1';
        }else if(Type == '企业'){
            window.location.href = "{{url('/test/page')}}" + '?type=bus&page=1';
        }
    })
</script>
@endsection