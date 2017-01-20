@extends('layouts.proinfo')
@section('title')
<title>固定资产_不良资产信息平台-资芽网</title>
@endsection
@section('content')
                <div class="fr fix-con">
                    <div class="triangle-left"></div>
                    <ul class="part">
                        <li><span>发布方身份：</span>{{$data->Identity}}</li>
                        <li><span>规划用途：</span>{{$data->Usefor}}</li>
                        <li><span>地区：</span>{{$data->ProArea}}</li>
                        <li><span>面积：</span>{{$data->Area}} 平方米</li>
                        <li><span>标的物类型：</span>{{$data->AssetType}}</li>
                        <li><span>剩余使用年限：</span>{{$data->Year}} 年</li>
                        <li><span>类型：</span>{{$data->Type}}</li>
                        <li><span>转让方式：</span>{{$data->TransferType}}</li>
                    </ul>
                    <div class="bidprice nobdb">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>市场价</span>
                        <span class="cost">{{$data->MarketPrice}}</span><span class="unit">万元</span>
                        <span style="display: block; width: 50%; float: right; margin-top: 16px; class="unit-price"">市场单价：<?php echo round(@($data->MarketPrice/$data->Area),2)?> 万元/平方米</span>
                    </div>
                    <div class="bidprice nobdt">
                        <span class="yel-bg blue-bg"><i class="iconfont">&#xe608;</i>转让价</span>
                        <span class="cost">{{$data->TransferMoney}}</span><span class="unit">万元</span>
                        <span style="display: block; width: 50%; float: right; margin-top: 16px; class="unit-price"">转让单价：<?php echo round(@($data->TransferMoney/$data->Area),2)?> 万元/平方米</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！) </span></div>
                </div>
            </div>
            @if($data->Credentials || $data->Guaranty || $data->Dispute || $data->Property || $data->Debt)
            <div class="rests">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/others.png" height="80" width="80" alt="" />其他信息</h3>
                <div class="boxRest fr">
                    <ul class="rest-list">
                        @if($data->Credentials)
                        <li><span>相关证件：</span>{{$data->Credentials}}</li>
                        @endif
                        @if($data->Guaranty)
                        <li><span>担保抵押：</span>{{$data->Guaranty}}</li>
                        @endif
                        @if($data->Dispute)
                        <li><span>法律纠纷：</span>{{$data->Dispute}}</li>
                        @endif
                        @if($data->Property)
                        <li><span>拥有全部产权：</span>{{$data->Property}}</li>
                        @endif
                        @if($data->Debt)
                        <li><span>负债：</span>{{$data->Debt}}</li>
                        @endif
                    </ul>
                </div>
            </div>
            @endif
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