@extends('layouts.home')

@section('seo')
<title>资芽网-全球不良资产超级综服平台</title>
        <meta name="Keywords" content="资芽网,不良资产,不良资产处置,不良资产处置平台" />
        <meta name="Description" content="资芽网是全球不良资产智能综服超级平台,吸引全国各类不良资产持有者，汇集各类不良资产信息及相关需求,整合海量不良资产处置服务机构与投资方,搭建多样化处置通道和不良资产综服生态产业体系,嵌入移动社交与视频直播,兼具媒体属性,实现大数据搜索引擎和人工智能,打造共享开放的全球不良资产智能综服超级平台。" />
@endsection

@section('content')
        <link rel="stylesheet" type="text/css" href="{{url('/css/company.css')}}?v=2.1.7.1.1" />
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=bKUsU7wpZp0gOKGF1PPK57X9xrROMsT7"></script>
    <!-- 二级banner -->
    <div class="find_service">
        <ul>
            <li></li>
        </ul>
    </div>
    <!-- 主体 -->
        <div class="revisionCon clearfix">
            <div class="ucLeft">
                <div class="ucleftMiddle">
                    <img src="img/revision1.png" class="revisionImg" />
                </div>
                <div class="ucleftBottom revisionList">
                    <ul>
                        <li><a href="http://ziyawang.com/aboutus">关于我们</a></li>
                        <li class="current"><a href="http://ziyawang.com/connectus">联系我们</a></li>
                        <li><a href="javascript:;">人才招聘</a></li>
                        <li><a href="javascript:;">商务合作</a></li>
                        <li><a href="http://ziyawang.com/legal">法律声明</a></li>
                        <li><a href="javascript:;">意见反馈</a></li>
                    </ul>
                </div>
            </div>
            <div class="ucRight">
                <div class="revisionTitle"><span>联系我们</span></div>
                <div class="revAbout">
                    <p>联系地址：北京市海淀区中关村大街15-15号创业公社·中关村国际创客中心B2-F02
                    <p>客服邮箱：service@ziyawang.com</p>
                    <p>邮政编码：100080</p>
                    <p>工作时间：周一至周五 早9:00-晚6:00</p>
                    <p>客服电话：400-898-8557</p>
                </div>
                <div class="map">
                    <div style="width:890px;height:570px;border: 1px solid #f0f0f0;font-size:12px" id="map"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            //创建和初始化地图函数：
            function initMap(){
              createMap();//创建地图
              setMapEvent();//设置地图事件
              addMapControl();//向地图添加控件
              addMapOverlay();//向地图添加覆盖物
            }
            function createMap(){ 
              map = new BMap.Map("map"); 
              map.centerAndZoom(new BMap.Point(116.320636,39.987909),18);
            }
            function setMapEvent(){
              map.enableScrollWheelZoom();
              map.enableKeyboard();
              map.enableDragging();
              map.enableDoubleClickZoom()
            }
            function addClickHandler(target,window){
              target.addEventListener("click",function(){
                target.openInfoWindow(window);
              });
            }
            function addMapOverlay(){
              var markers = [
                {content:"中关村大街15-15号创业公社 中关村国际创客中心B2-F02",title:"资芽（北京）网络科技有限公司",imageOffset: {width:-46,height:-21},position:{lat:39.988317,lng:116.320115}}
              ];
              for(var index = 0; index < markers.length; index++ ){
                var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
                var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                  imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                })});
                var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
                var opts = {
                  width: 200,
                  title: markers[index].title,
                  enableMessage: false
                };
                var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
                marker.setLabel(label);
                addClickHandler(marker,infoWindow);
                map.addOverlay(marker);
              };
            }
            //向地图添加控件
            function addMapControl(){
              var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
              scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
              map.addControl(scaleControl);
              var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
              map.addControl(navControl);
              var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
              map.addControl(overviewControl);
            }
            var map;
            initMap();
            $(function(){
                var ucRighthei1 = $('.ucRight').height();//初始高度
                $('.ucLeft').css('height',ucRighthei1 + 'px');
            })
        </script>
@endsection