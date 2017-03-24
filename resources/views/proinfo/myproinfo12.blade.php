@extends('layouts.myproinfo')
@section('content')
 <!-- 右侧 -->
    <div class="ucRight">
        <div class="myfix">
        <div class="fix-top">
            <h2 class="headline"><span class="fl sub-title">固定资产</span><span class="serial">{{$data->ProjectNumber}}</span></h2>
            <div class="sm-feature">
                <div class="tooltip">
                    <span class="pageview" title="浏览量"><i class="iconfont">&#xe603;</i>{{$data->ViewCount}}</span>
                    <span class="collection" title="收藏量"><i class="iconfont">&#xe601;</i>{{$data->CollectCount}}</span>
                </div>
            </div>
        </div>
        <div class="fix-main clearfix">
            <span class="fees"></span>
            <span class="vip"></span>
            <div class="fl headshot">
            <span class="pubSpan gdzc"></span>
            </div>
            <div class="fix-con fr">
                @if($data->CooperateState == 1)                
                <img src="{{asset('/img/connection.png')}}" alt="" class="info-state">
                @elseif($data->CooperateState == 2)
                    @if($data->TypeID == 6 || $data->TypeID == 17)
                    <img src="{{asset('/img/complete.png')}}" alt="" class="info-state">
                    @else
                    <img src="{{asset('/img/disposaled.png')}}" alt="" class="info-state">
                    @endif
                @endif
                    <div class="triangle-left"></div>
                    <ul class="part">
                        <li><span>身份：</span>{{$data->Identity}}</li>
                        <li><span>房产类型：</span>{{$data->Type}}</li>
                        <li><span>标的物类型：</span>{{$data->AssetType}}</li>
                        <li><span>面积：</span>{{$data->Area}}平米</li>
                        <li><span>地区：</span>{{$data->ProArea}}</li>
                    </ul>
                    <div class="bidprice nobdb">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>市场价</span>
                        <span class="cost">{{$data->MarketPrice}}</span><span class="unit">万元</span>
                        <span style="display: block; width: 50%; float: right; margin-top: 16px; class="unit-price"">市场单价：<?php echo round(@($data->MarketPrice/$data->Area),2)?> 万元/平米</span>
                    </div>
                    <div class="bidprice nobdt">
                        <span class="yel-bg blue-bg"><i class="iconfont">&#xe608;</i>转让价</span>
                        <span class="cost">{{$data->TransferMoney}}</span><span class="unit">万元</span>
                        <span style="display: block; width: 50%; float: right; margin-top: 16px; class="unit-price"">转让单价：<?php echo round(@($data->TransferMoney/$data->Area),2)?> 万元/平米</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！) </span></div>
                    <a href="{{url('/ucenter/rushlist/'.$data->ProjectID)}}" class="persons">查看约谈人</a><span class="personCt" title="已有{{$data->RushCount}}人约谈">{{$data->RushCount}}</span>
                </div>
            </div>
            @if($data->ProLabel && !empty($data->ProLabel))
            <div class="spot">
            <div class="triangle-left"></div>
            <h3 class="charact-title fl"><img src="/img/lighticon.png" height="80" width="80" alt="" />项目亮点</h3>
            <div class="boxSpot fl">
                <div class="spot-con">
                    @foreach($data->ProLabel as $prolabel)
                    <span class="spot-opt">{{$prolabel}}</span>
                    @endforeach
                </div>
            </div>
            </div>
            @endif
@endsection('content')