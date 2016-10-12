@extends('layouts.home')

@section('seo')
<title>资芽网-全球不良资产超级综服平台</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection

@section('content')
        <link rel="stylesheet" type="text/css" href="{{url('/css/company.css')}}" />
    <!-- 二级banner -->
    <div class="find_service">
        <ul>
            <li></li>
        </ul>
    </div>
        <div class="revisionCon clearfix">
            <div class="ucLeft">
                <div class="ucleftMiddle">
                    <img src="img/revision1.png" class="revisionImg" />
                </div>
                <div class="ucleftBottom revisionList">
                    <ul>
                        <li class="current"><a href="http://ziyawang.com/aboutus">关于我们</a></li>
                        <li><a href="http://ziyawang.com/connectus">联系我们</a></li>
                        <li><a href="javascript:;">人才招聘</a></li>
                        <li><a href="javascript:;">商务合作</a></li>
                        <li><a href="http://ziyawang.com/legal">法律声明</a></li>
                        <li><a href="javascript:;">意见反馈</a></li>
                    </ul>
                </div>
            </div>
            <div class="ucRight">
                <div class="revisionTitle"><span>意见反馈</span></div>
                <div class="revAbout">
                    <h2>资芽网”反馈问卷</h2>
                    <p class="infoText">亲爱的用户：<br />您对“资芽网”有任何建议，或者使用中遇到问题，请您在本页面反馈。 <span class="tint">第1页（共1页）</span></p>
                    <p>请联系资芽客服中心：<span class="colorServ">010-56230557</span></p>
                </div>
                <div class="question">
                    <div class="grayTitle">请留下您对“资芽网’首页的意见和建议。（请填写）</div>
                    <div class="suggestText">
                        <textarea name="" id="" ></textarea>
                        <span class="fileinput-button">
                            <span>上传图片</span>
                            <input type="file" name="" multiple="">
                        </span>
                    </div>
                    <div class="grayTitle">您在使用“资芽网’的过程中，总体的满意程度如何？（单选）</div>
                    <div class="satisfy">
                        <div class="satisfyDeg1 satisfyDeg"><label for="satisfy1"><input type="checkbox" id="satisfy1" />非常满意</label></div>
                        <div class="satisfyDeg2 satisfyDeg"><label for="satisfy2"><input type="checkbox" id="satisfy2" />比较满意</label></div>
                        <div class="satisfyDeg3 satisfyDeg"><label for="satisfy3"><input type="checkbox" id="satisfy3" />一般满意</label></div>
                        <div class="satisfyDeg4 satisfyDeg"><label for="satisfy4"><input type="checkbox" id="satisfy4" />比较不满意</label></div>
                        <div class="satisfyDeg5 satisfyDeg"><label for="satisfy5"><input type="checkbox" id="satisfy5" />非常不满意</label></div>
                    </div>
                    <div class="grayTitle">您来“资芽网’的目的是？(单选）</div>
                    <div class="satisfy">
                        <div class="satisfyDeg6 satisfyDeg"><label for="target1"><input type="checkbox" id="target1" />找信息</label></div>
                        <div class="satisfyDeg7 satisfyDeg"><label for="target2"><input type="checkbox" id="target2" />找服务</label></div>
                        <div class="satisfyDeg8 satisfyDeg"><label for="target3"><input type="checkbox" id="target3" />既找信息也找服务</label></div>
                        <div class="satisfyDeg9 satisfyDeg"><label for="target4"><input type="checkbox" id="target4" />都不是</label></div>
                    </div>
                    <div class="grayTitle">对“资芽网’页面的以下各个方面，您的满意程度如何？（单选）</div>
                    <div class="mixSatisfy">
                        <div class="msTitle">页面打开快速</div>
                        <div class="satisfy">
                            <div class="satisfyDeg1 satisfyDeg"><label for="open1"><input type="checkbox" id="open1" />非常满意</label></div>
                            <div class="satisfyDeg2 satisfyDeg"><label for="open2"><input type="checkbox" id="open2" />比较满意</label></div>
                            <div class="satisfyDeg3 satisfyDeg"><label for="open3"><input type="checkbox" id="open3" />一般满意</label></div>
                            <div class="satisfyDeg4 satisfyDeg"><label for="open4"><input type="checkbox" id="open4" />比较不满意</label></div>
                            <div class="satisfyDeg5 satisfyDeg"><label for="open5"><input type="checkbox" id="open5" />非常不满意</label></div>
                        </div>
                        <div class="msTitle">界面设计美观</div>
                        <div class="satisfy">
                            <div class="satisfyDeg1 satisfyDeg"><label for="design1"><input type="checkbox" id="design1" />非常满意</label></div>
                            <div class="satisfyDeg2 satisfyDeg"><label for="design2"><input type="checkbox" id="design2" />比较满意</label></div>
                            <div class="satisfyDeg3 satisfyDeg"><label for="design3"><input type="checkbox" id="design3" />一般满意</label></div>
                            <div class="satisfyDeg4 satisfyDeg"><label for="design4"><input type="checkbox" id="design4" />比较不满意</label></div>
                            <div class="satisfyDeg5 satisfyDeg"><label for="design5"><input type="checkbox" id="design5" />非常不满意</label></div>
                        </div>
                        <div class="msTitle">排版展现合理</div>
                        <div class="satisfy">
                            <div class="satisfyDeg1 satisfyDeg"><label for="compose1"><input type="checkbox" id="compose1" />非常满意</label></div>
                            <div class="satisfyDeg2 satisfyDeg"><label for="compose2"><input type="checkbox" id="compose2" />比较满意</label></div>
                            <div class="satisfyDeg3 satisfyDeg"><label for="compose3"><input type="checkbox" id="compose3" />一般满意</label></div>
                            <div class="satisfyDeg4 satisfyDeg"><label for="compose4"><input type="checkbox" id="compose4" />比较不满意</label></div>
                            <div class="satisfyDeg5 satisfyDeg"><label for="compose5"><input type="checkbox" id="compose5" />非常不满意</label></div>
                        </div>
                        <div class="msTitle">操作过程方便</div>
                        <div class="satisfy">
                            <div class="satisfyDeg1 satisfyDeg"><label for="handle1"><input type="checkbox" id="handle1" />非常满意</label></div>
                            <div class="satisfyDeg2 satisfyDeg"><label for="handle2"><input type="checkbox" id="handle2" />比较满意</label></div>
                            <div class="satisfyDeg3 satisfyDeg"><label for="handle3"><input type="checkbox" id="handle3" />一般满意</label></div>
                            <div class="satisfyDeg4 satisfyDeg"><label for="handle4"><input type="checkbox" id="handle4" />比较不满意</label></div>
                            <div class="satisfyDeg5 satisfyDeg"><label for="handle5"><input type="checkbox" id="handle5" />非常不满意</label></div>
                        </div>
                        <div class="msTitle">页面文字，功能介绍等内容传达清晰</div>
                        <div class="satisfy">
                            <div class="satisfyDeg1 satisfyDeg"><label for="vivid1"><input type="checkbox" id="vivid1" />非常满意</label></div>
                            <div class="satisfyDeg2 satisfyDeg"><label for="vivid2"><input type="checkbox" id="vivid2" />比较满意</label></div>
                            <div class="satisfyDeg3 satisfyDeg"><label for="vivid3"><input type="checkbox" id="vivid3" />一般满意</label></div>
                            <div class="satisfyDeg4 satisfyDeg"><label for="vivid4"><input type="checkbox" id="vivid4" />比较不满意</label></div>
                            <div class="satisfyDeg5 satisfyDeg"><label for="vivid5"><input type="checkbox" id="vivid5" />非常不满意</label></div>
                        </div>
                    </div>
                    <div class="grayTitle">您常用的联系电话是？（请填写）<span class="tint">尽量填写，以便我们及时给您回复</span></div>
                    <div class="alwaysTel"><input type="text" /></div>
                    <div class="btnBox">
                        <button class="fabu" type="button"><span>提交问卷</span><i class="iconfont grab">&#xe607;</i></button>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    $(function(){ 
        $(".satisfyDeg input").click(function(){ 
            if($(this).attr("checked")==undefined) 
            { 
                $(this).closest('.satisfyDeg').siblings().find('input').attr("checked",false); 
                $(this).attr("checked",true);
            }
        }); 
    }); 
</script>
@endsection