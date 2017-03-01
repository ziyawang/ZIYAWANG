@extends('layouts.home')

@section('seo')
<title>下载专区-资芽网-全球不良资产超级综服平台</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection

@section('content')
<link type="text/css" rel="stylesheet" href="{{url('/css/contract.css')}}?v=2.1.4.1" />
<!-- 二级banner -->
<div class="find_service temp">
    <ul>
        <li><a href="{{url('/ucenter/index')}}"></a></li>
    </ul>
</div>
<!-- 主体 -->
<div class="contract wrap">
<!-- 面包屑导航 -->
    <div class="contract_bread">
        <a href="{{url('/')}}">首页</a>&gt;<span>下载专区</span>
    </div>
<!-- 第一栏 -->
    <div class="con_first">
        <div class="contract_icon">
            <img src="img/law01.png" height="248" width="248" />
            <h2>合同参考</h2>
            <p>（以下下载内容仅供参考，<br />实际应用请在专业人士指导下进行）</p>
        </div>
        <div class="contract_list">
            <div class="cl_law">
                <div class="cl_lawfile">
                    <ul>
                        <li><a target="_blank" href="{{asset('/upload/contracts/htck-bzhtfb(ldzrbz).pdf')}}">合同参考--保证合同范本（连带责任保证）</a><span><a target="_blank" href="{{asset('/upload/contracts/htck-bzhtfb(ldzrbz).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/htck-bzhtfb(ldzrbz).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/htck-bzhtfb.pdf')}}">合同参考--保证合同范本</a><span><a target="_blank" href="{{asset('/upload/contracts/htck-bzhtfb.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/htck-bzhtfb.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/htck-grjkhtfb(jy).pdf')}}">合同参考--个人借款合同范本（简易）</a><span><a target="_blank" href="{{asset('/upload/contracts/htck-grjkhtfb(jy).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/htck-grjkhtfb(jy).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/htck-grjkhtfb(wdb).pdf')}}">合同参考--个人借款合同范本（无担保）</a><span><a target="_blank" href="{{asset('/upload/contracts/htck-grjkhtfb(wdb).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/htck-grjkhtfb(wdb).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/htck-yxzrgsgqzrhtfb.pdf')}}">合同参考--有限责任公司股权转让合同范本</a><span><a target="_blank" href="{{asset('/upload/contracts/htck-yxzrgsgqzrhtfb.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/htck-yxzrgsgqzrhtfb.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/htck-zczrhtfb.pdf')}}">合同参考--资产转让合同范本</a><span><a target="_blank" href="{{asset('/upload/contracts/htck-zczrhtfb.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/htck-yxzrgsgqzrhtfb.rar')}}">下载</a></span></li>
                    </ul>
                </div>
            </div>
            <a href="javascript:;" class="con_leftbtn a_btn"></a>
            <a href="javascript:;" class="con_rightbtn a_btn"></a>
        </div>
    </div>
<!-- 第二栏 -->
    <div class="con_twith">
        <div class="contract_icon">
            <img src="img/law02.png" height="248" width="248" />
            <h2>法律文书</h2>
            <p>（以下下载内容仅供参考，<br />实际应用请在专业人士指导下进行）</p>
        </div>
        <div class="contract_list">
            <div class="cl_law">
                <div class="cl_lawfile">
                    <ul>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-ccbqsqs.pdf')}}">法律文书--财产保全申请书</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-ccbqsqs.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-ccbqsqs.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-fddbrsfzm.pdf')}}">法律文书--法定代表人身份证明</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-fddbrsfzm.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-fddbrsfzm.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-msqsz(dwsdw).pdf')}}">法律文书--民事起诉状（单位拆单位）</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-msqsz(dwsdw).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-msqsz(dwsdw).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-msqsz(dwsgr).pdf')}}">法律文书--民事起诉状（单位诉个人）</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-msqsz(dwsgr).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-msqsz(dwsgr).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-msqsz(grqsgr).pdf')}}">法律文书--民事起诉状（个人起诉个人）</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-msqsz(grqsgr).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-msqsz(grqsgr).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-msqsz(grsdw).pdf')}}">法律文书--民事起诉状（个人诉单位）</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-msqsz(grsdw).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-msqsz(grsdw).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-msssz.pdf')}}">法律文书--民事上诉状</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-msssz.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-msssz.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-sqwts(frhqtzzy).pdf')}}">法律文书--授权委托书（法人或其他组织用）</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-sqwts(frhqtzzy).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-sqwts(frhqtzzy).rar')}}">下载</a></span></li>
                    </ul>
                    <ul>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-sqwts(gmgry).pdf')}}">法律文书--授权委托书（公民个人用）</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-sqwts(gmgry).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-sqwts(gmgry).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-zflsqs.pdf')}}">法律文书--支付令申请书</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-zflsqs.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-zflsqs.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/flws-zxsqs.pdf')}}">法律文书--执行申请书</a><span><a target="_blank" href="{{asset('/upload/contracts/flws-zxsqs.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/flws-zxsqs.rar')}}">下载</a></span></li>
                    </ul>
                </div>
            </div>
            <a href="javascript:;" class="con_leftbtn a_btn"></a>
            <a href="javascript:;" class="con_rightbtn a_btn"></a>
        </div>
    </div>
<!-- 第三栏 -->
    <div class="con_third">
        <div class="contract_icon">
            <img src="img/law03.png" height="248" width="248" />
            <h2>实用文书</h2>
            <p>（以下下载内容仅供参考，<br />实际应用请在专业人士指导下进行）</p>
        </div>
        <div class="contract_list">
            <div class="cl_law">
                <div class="cl_lawfile">
                    <ul>
                        <li><a target="_blank" href="{{asset('/upload/contracts/syws-bjsgytdfwdyqzxdjsqs.pdf')}}">实用文书--北京市国有土地房屋抵押权注销登记申请书</a><span><a target="_blank" href="{{asset('/upload/contracts/syws-bjsgytdfwdyqzxdjsqs.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/syws-bjsgytdfwdyqzxdjsqs.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/syws-bjsgytdfwybdyqsldjsq.pdf')}}">实用文书--北京市国有土地房屋一般抵押权设立登记申请</a><span><a target="_blank" href="{{asset('/upload/contracts/syws-bjsgytdfwybdyqsldjsq.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/syws-bjsgytdfwybdyqsldjsq.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/syws-ckh.pdf')}}">实用文书--催款函</a><span><a target="_blank" href="{{asset('/upload/contracts/syws-ckh.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/syws-ckh.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/syws-gdhjy.pdf')}}">实用文书--股东会决议</a><span><a target="_blank" href="{{asset('/upload/contracts/syws-gdhjy.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/syws-gdhjy.rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/syws-sqwts(zjwdjy).pdf')}}">实用文书--授权委托书（住建委 登记用）</a><span><a target="_blank" href="{{asset('/upload/contracts/syws-sqwts(zjwdjy).pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/syws-sqwts(zjwdjy).rar')}}">下载</a></span></li>
                        <li><a target="_blank" href="{{asset('/upload/contracts/syws-sqwts.pdf')}}">实用文书--授权委托书</a><span><a target="_blank" href="{{asset('/upload/contracts/syws-sqwts.pdf')}}">预览</a>|<a href="{{asset('/upload/contracts/syws-sqwts.rar')}}">下载</a></span></li>
                    </ul>
                </div>
            </div>
            <a href="javascript:;" class="con_leftbtn a_btn"></a>
            <a href="javascript:;" class="con_rightbtn a_btn"></a>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{url('/js/contract.js')}}"></script>
<!-- 底部 -->
@endsection