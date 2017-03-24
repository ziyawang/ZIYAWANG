@extends('layouts.proinfo')
@section('title')
<title>资产包_不良资产信息平台-资芽网</title>
@endsection
@section('content')
                <div class="fr asset-con">
                    <div class="triangle-left"></div>
                    <ul class="part">
                        <li><span>发布方身份：</span>{{$data->Identity}}</li>
                        <li><span>卖家类型：</span>{{$data->FromWhere}}</li>
                        <li><span>资产包类型：</span>{{$data->AssetType}}</li>
                        <li><span>地区：</span>{{$data->ProArea}}</li>
                        <li><span>本金：</span>{{$data->Money}}</li>
                        <li><span>利息：</span>{{$data->Rate}}</li>
                    </ul>
                    <div class="bidprice nobdb">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>总金额</span>
                        <span class="cost">{{$data->TotalMoney}}</span><span class="unit"> 万元</span>
                    </div>
                    <div class="bidprice nobdt">
                        <span class="yel-bg blue-bg"><i class="iconfont">&#xe608;</i>转让价</span>
                        <span class="cost">{{$data->TransferMoney}}</span><span class="unit"> 万元</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！) </span></div>
                    <div class="speech">清单下载：<a id='download' url='http://files.ziyawang.com/{{$data->AssetList}}' href="javascript:;" class="download"><i class="iconfont">&#xe611;</i></a></div>
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