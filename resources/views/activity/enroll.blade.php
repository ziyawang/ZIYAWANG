<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1, maximum-scale=1,minimal-ui,user-scalable=no">
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="stylesheet" type="text/css" href="{{url('/css/base.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('/css/enroll.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('/css/enrollphone.css')}}" />
        <script type="text/javascript" src="{{url('/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/org/layer/layer.js')}}"></script>
    </head>
    <style>
        .layui-layer-dialog .layui-layer-padding {
            color: black;
        }
    </style>
    <body>
        <div class="enroll pc">
            <div class="entop">
                <div class="leftImg">
                    <img src="/img/enroll1.png" />
                    <div class="entopTitle">第一期不良资产精选项目推荐会盛宴开启&nbsp;&nbsp;恭候莅临！</div>
                </div>
                <div class="rightImg"><img src="/img/enroll2.png" /></div>
            </div>
            <div class="enMiddle clearfix">
                <div class="leftContent">
                    <div class="factor">
                        <p>会议时间：2016年10月25日&nbsp;&nbsp;&nbsp;13：30点签到（周二）</p>
                        <p>会议地点：北京中关村国际创客中心B2层F02&nbsp;&nbsp;资芽网</p>
                        <p>联系电话：185 1951 0332&nbsp;&nbsp;&nbsp;&nbsp;150 0136 9600 王女士</p>
                    </div>
                    <!-- ps： span class="enrollError"为提示填写内容 -->
                    <div class="textBox">
                        <form action="" id="formPC">
                            <div class="inputBox">
                                <p><label for="">姓名：</label><input type="text" name="name" id="namePC" diy="PC1"/><span class="enrollError"></span></p>
                                <p class="companyName"><label for="">公司名称：</label><input type="text" name="company" id="companyPC" diy="PC1" /><span class="enrollError"></span></p>
                                <p><label for="">电话：</label><input type="text" name="phonenumber" id="phonenumberPC" diy="PC1" /><span class="enrollError"></span></p>
                                <p><label for="">邮箱：</label><input type="text" name="mail" id="mailPC" /><span class="enrollError"></span></p>
                                <p><label for="">职务：</label><input type="text" name="job" id="jobPC" /><span class="enrollError"></span></p>
                            </div>
                        </form>
                        <button class="clickSub" id="pubPC">点击提交</button>
                    </div>
                    <div class="proStyle">项目类型<span class="blackCircle leftCircle"></span></div>
                    <div class="proStyleCon">银行业金融机构不良资产、实物类不良资产、<br />大中型企业债务重组、债权类融资</div>
                    <div class="proStyle">参与机构<span class="blackCircle leftCircle"></span></div>
                    <div class="partin">
                        <span>平安银行</span>
                        <span>恒丰银行</span>
                        <span>德州银行</span>
                        <span>太平置业（北京）有限公司</span>
                        <span>招商致远资本投资有限公司</span>
                        <span>中国创新基金</span>
                        <span>众鼎集团有限公司</span>
                        <span>旺泰控股集团有限公司</span>
                        <span>北京光耀东方投资管理有限公司</span>
                        <span>国商股权投资基金管理有限公司</span>
                        <span>炬人联合（北京）资本管理有限公司</span>
                        <span>图新投资咨询（上海）有限公司</span>
                        <span>中融民信资本管理有限公司</span>
                        <span>元德正信（北京）资产管理有限公司</span>
                        <span>众恒（上海）股权投资基金管理有限公司</span>
                        <span>北京上京发展投资有限公司</span>
                        <span>北京欧瀚源投资基金管理有限公司</span>
                        <span>中根资产管理有限公司</span>
                        <span>新时代信托股份有限公司</span>
                        <span>北京联泰投资有限公司</span>
                        <span>易宝支付</span>
                        <span>米多财富</span>
                        <span>北京秃鹰资产管理有限公司</span>
                        <span>北京金信普惠资产管理有限公司</span>
                        <span>誉正资产管理公司</span>
                        <span>北京信义仁和投资管理有限公司</span>
                        <span>上海博铸资产管理公司</span>
                        <span>观唐银通（北京）投资管理有限公司</span>
                        <span>青岛华商汇通金融控股有限公司</span>
                        <span>北京全盛丰联投资有限公司</span>
                        <span>大道资本投资管理有限公司</span>
                        <span>联通创新创业投资有限公司</span>
                        <span>冠群驰聘投资管理有限公司</span>
                        <span>海航资本</span>
                        <span>天星资本</span>
                        <span>明太股权投资有限公司</span>
                        <span>等等</span>
                    </div>
                    <div class="here">
                        <div class="netAddr"><i>w</i>ww.ziyawang.com</div>
                        <span>不良资产都在这！</span>
                    </div>
                </div>
                <div class="rightContent">
                    <div class="activity">活动背景<span class="blackCircle rightCircle"></span></div>
                    <div class="activityCon">
                        当前中国经济持续下行，不良资产存量激增，社会各界广泛关注，行业迎来发展窗口期，参与者暗流涌动。资芽网在此背景下，发起“第一期精选项目推荐会”，搭建实效的项目对接平台，届时诚邀银行、四大资管、非银金融机构、投资机构和各级服务商，现场推介，交流洽谈，实现共赢。盛宴开启，恭候莅临！
                    </div>
                    <div class="activity">活动亮点<span class="blackCircle rightCircle"></span></div>
                    <div class="highlight">实力买家&nbsp;&nbsp;资方联盟&nbsp;&nbsp;一手资源&nbsp;&nbsp;现场推介</div>
                    <div class="activity">主办方介绍<span class="blackCircle rightCircle"></span></div>
                    <div class="sponsor">
                        <p>资芽网作为中国不良资产超级综服平台，吸引</p>
                        <p>全国不良资产持有者，汇集各类不良资产信息</p>
                        <p>及相关需求，整合海量相关处置服务机构与投</p>
                        <p>资方，搭建多样化处置通道和不良资产综服生</p>
                        <p>态产业体系，嵌入移动社交与视频直播，兼具</p>
                        <p>媒体属性，实现大数据搜索引擎和人工智能。</p>
                        <p>资芽网致力于规范不良资产市场，打破信息不</p>
                        <p>对称壁垒打造共享开放的不良资产行业性入口</p>
                    </div>
                    <div class="activity">会议议程<span class="blackCircle rightCircle"></span></div>
                    <div class="sponsor">
                        <p>13:30 -14:00 嘉宾签到</p>
                        <p>14:00 -14:10 主持人开场</p>
                        <p>14:10 -14:30 嘉宾介绍</p>
                        <p>14:30 -16:30 项目介绍对接</p>
                        <p>16:30 -16:50 参会嘉宾互换名片</p>
                        <p>16:50 -17:00 会议总结</p>
                        <p>17:00 -17:10 合影留念</p>
                        <p>17:10 -17:20 主持人致辞结束词</p>
                        <span>备注：名额有限，欢迎各位精英朋友踊跃报名，本活动免费。</span>
                    </div>
                </div>
                <span class="bottomImg"><img src="/img/enroll3.png" /></span>
            </div>
        </div>
    <div class="phoneRev phone">
        <ul>
            <li><img src="/img/enphone1.png" /></li>
            <li><img src="/img/enphone2.png" /></li>
            <li><img src="/img/enphone3.png" /></li>
        </ul>
        <div class="fiveStar">
            <span class="bgXing"></span>
            <img src="/img/enphone8.png" class="meetInfo" />
            <div class="meeting">
                <!--<div>
                     <dl><dt>会议时间：</dt><dd>2016年10月25日&nbsp;&nbsp;13：30点签到（周二）</dd></dl>
                    <dl><dt>会议地点：</dt><dd>北京中关村国际创客中心B2层F02&nbsp;&nbsp;资芽网</dd></dl>
                    <dl><dt>联系电话：</dt><dd>185 1951 0332&nbsp;&nbsp;&nbsp;150 0136 9600 王女士</dd></dl> 
                </div>-->
                <div class="phoneText">
                    <div class="phoneInput">
                        <form id="formM" action="">
                            <p><label for="">姓名：</label><span class="phoneAddiv"><input type="text" name="name" id="namePC"  diy="M1"/></span><span class="enrollError"></span></p>
                            <p class="companyName">
                                <label for="">公司名称：</label>
                                <span class="phoneAddiv"><input type="text" name="company" id="companyPC" diy="M1"/></span>
                                <span class="enrollError"></span>
                            </p>
                            <p><label for="">电话：</label><span class="phoneAddiv"><input type="text" name="phonenumber" id="phonenumberPC" diy="M1"/></span><span class="enrollError"></span></p>
                            <p><label for="">邮箱：</label><span class="phoneAddiv"><input type="text" name="mail" id="mailPC" /></span><span class="enrollError"></span></p>
                            <p><label for="">职务：</label><span class="phoneAddiv"><input type="text" name="job" id="jobPC" /></span><span class="enrollError"></span></p>
                        </form>
                    </div>
                    <button class="phoneSub" id="pubM">点击提交</button>
                </div>
                <div class="eventHight">
                    <div class="yelTitle">活动亮点</div>
                    <img src="/img/enphone5.png" class="titleStar" />
                    <p class="highlightCon shortCap">实力买家&nbsp;&nbsp;资方联盟&nbsp;&nbsp;一手资源&nbsp;&nbsp;现场推介</p>
                </div>
                <div class="eventHight">
                    <div class="yelTitle">项目类型</div>
                    <img src="/img/enphone5.png" class="titleStar" />
                    <p class="highlightCon">银行业金融机构不良资产、实物类不良资产、大中型企业债务重组、债权类融资</p>
                </div>
                <div class="eventHight">
                    <div class="yelTitle">活动背景</div>
                    <img src="/img/enphone5.png" class="titleStar" />
                    <p class="highlightCon">当前中国经济持续下行，不良资产存量激增，社会各界广泛关注，行业迎来发展窗口期，参与者暗流涌动。资芽网在此背景下，发起“第一期精选项目推荐会”，搭建实效的项目对接平台，届时诚邀银行、四大资管、非银金融机构、投资机构和各级服务商，现场推介，交流洽谈，实现共赢。<br />盛宴开启，恭候莅临！</p>
                </div>
                <div class="eventHight">
                    <div class="yelTitle">主办方介绍</div>
                    <img src="/img/enphone5.png" class="titleStar" />
                    <p class="highlightCon">资芽网作为中国不良资产超级综服平台，吸引全国不良资产持有者，汇集各类不良资产信息及相关需求，整合海量相关处置服务机构与投资方，搭建多样化处置通道和不良资产综服生态产业体系，嵌入移动社交与视频直播，兼具媒体属性，实现大数据搜索引擎和人工智能。资芽网致力于规范不良资产市场，打破信息不对称壁垒 打造共享开放的不良资产行业性入口</p>
                </div>
                <div class="eventHight">
                    <div class="yelTitle">会议议程</div>
                    <img src="/img/enphone5.png" class="titleStar" />
                    <div class="highlightCon">
                        <p>13:30 -14:00 嘉宾签到</p>
                        <p>14:00 -14:10 主持人开场</p>
                        <p>14:10 -14:30 嘉宾介绍</p>
                        <p>14:30 -16:30 项目介绍对接</p>
                        <p>16:30 -16:50 参会嘉宾互换名片</p>
                        <p>16:50 -17:00 会议总结</p>
                        <p>17:00 -17:10 合影留念</p>
                        <p>17:10 -17:20 主持人致辞结束词</p>
                        <span>备注：名额有限，欢迎踊跃报名，本活动免费</span>
                    </div>
                </div>
                <div class="eventHight">
                    <div class="yelTitle">参与机构</div>
                    <img src="/img/enphone5.png" class="titleStar" />
                    <div class="highlightCon">
                        <span>平安银行</span>
                        <span>恒丰银行</span>
                        <span>德州银行</span>
                        <span>太平置业（北京）有限公司</span>
                        <span>招商致远资本投资有限公司</span>
                        <span>中国创新基金</span>
                        <span>众鼎集团有限公司</span>
                        <span>旺泰控股集团有限公司</span>
                        <span>北京光耀东方投资管理有限公司</span>
                        <span>国商股权投资基金管理有限公司</span>
                        <span>炬人联合（北京）资本管理有限公司</span>
                        <span>图新投资咨询（上海）有限公司</span>
                        <span>中融民信资本管理有限公司</span>
                        <span>元德正信（北京）资产管理有限公司</span>
                        <span>众恒（上海）股权投资基金管理有限公司</span>
                        <span>北京上京发展投资有限公司</span>
                        <span>北京欧瀚源投资基金管理有限公司</span>
                        <span>中根资产管理有限公司</span>
                        <span>新时代信托股份有限公司</span>
                        <span>北京联泰投资有限公司</span>
                        <span>易宝支付</span>
                        <span>米多财富</span>
                        <span>北京秃鹰资产管理有限公司</span>
                        <span>北京金信普惠资产管理有限公司</span>
                        <span>誉正资产管理公司</span>
                        <span>北京信义仁和投资管理有限公司</span>
                        <span>上海博铸资产管理公司</span>
                        <span>观唐银通（北京）投资管理有限公司</span>
                        <span>青岛华商汇通金融控股有限公司</span>
                        <span>北京全盛丰联投资有限公司</span>
                        <span>大道资本投资管理有限公司</span>
                        <span>联通创新创业投资有限公司</span>
                        <span>冠群驰聘投资管理有限公司</span>
                        <span>海航资本</span>
                        <span>天星资本</span>
                        <span>明太股权投资有限公司</span>
                        <span>等等</span>
                    </div>
                </div>
                <img src="/img/enphone6.png" class="enphonebotPic" />
                <div style="clear:both;"></div>
                <div class="enphoneBottom">
                    <div class="netUrl"><i>w</i>ww.ziyawang.com</div>
                    <span>不良资产都在这！</span>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script type="text/javascript">
        $(function(){
            $(window).resize(function(event) {
                if($(window).width()<=750){
                    $('.phone').show();
                    $('.pc').hide();
                }else{
                    $('.pc').show();
                    $('.phone').hide();
                }
            });
            if($(window).width()<=750){
                $('.phone').show();
                $('.pc').hide();
            }else{
                $('.pc').show();
                $('.phone').hide();
            }
        })

        function _checkInput(T){
            var stop = false;
            var diy = T + "1";
            $("input[diy=" + diy + "]").each(function(){
                $parent=$(this).parent();
                $parent.find("span").remove();
                if($(this).val()==""){
                    $parent.append("<span class='enrollError'>此项必填！</span>");
                    stop = true;
                    return false;
                }
            });

            if(stop){
                return;
            }

            permission = 1;
        }

        var permission = 0;
        $('#pubPC').click(function(){
            _checkInput("PC");
            if(permission != 1){
                return;
            }
            var data = $('#formPC').serialize();
            $(this).attr('disabled', true);
            $.ajax({
                url:"http://apitest.ziyawang.com/v1/enroll?access_token=token&" + data,
                type:"POST",
                data:data,
                dataType:"json",
                success:function(msg){
                    if(msg.status_code == 200){
                        layer.alert(msg.msg, {icon: 1});
                        $('input').val('');
                        $("#pubPC").attr('disabled', false);
                        permission = 0;
                    }
                }
            });
        })
        $('#pubM').click(function(){
            _checkInput("M");
            if(permission != 1){
                return;
            }
            var data = $('#formM').serialize();
            $(this).attr('disabled', true);
            $.ajax({
                url:"http://apitest.ziyawang.com/v1/enroll?access_token=token&" + data,
                type:"POST",
                data:data,
                dataType:"json",
                success:function(msg){
                    if(msg.status_code == 200){
                        layer.alert(msg.msg, {icon: 1});
                        $('input').val('');
                        $("#pubM").attr('disabled', false);
                        permission = 0;
                    }
                }
            });
        })
    </script>

</html>