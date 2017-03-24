@extends('layouts.proinfo')
@section('title')
<title>固定资产_不良资产信息平台-资芽网</title>
@endsection
@section('content')
                <div class="fr fix-con">
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
                </div>
            </div>
            @if($data->ProLabel && !empty($data->ProLabel))
            <div class="spot">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/lighticon.png" height="80" width="80" alt="" />项目亮点</h3>
                <div class="boxSpot fr">
                    <div class="spot-con">
                        @foreach($data->ProLabel as $prolabel)
                        <span class="spot-opt">{{$prolabel}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
@endsection('content')