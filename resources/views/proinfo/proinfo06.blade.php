@extends('layouts.proinfo')
@section('title')
<title>融资信息_不良资产信息平台-资芽网</title>
@endsection
@section('content')
                <div class="fr finance-con">
                    <div class="triangle-left"></div>
                    <ul class="part">
                        <li><span>发布方身份：</span>{{$data->Identity}}</li>
                        <li><span>企业现状：</span>{{$data->Status}}</li>
                        <li><span>项目所在地：</span>{{$data->ProArea}}</li>
                        <li><span>所属行业：</span>{{$data->Belong}}</li>
                        <li><span>融资方式：</span>{{$data->AssetType}}</li>
                        <li><span>资金用途：</span>{{$data->Usefor}}</li>
                        <li><span>出让股权比例：</span>{{$data->Rate}}%</li>
                    </ul>
                    <div class="bidprice">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>融资额</span>
                        <span class="cost">{{$data->TotalMoney}}</span><span class="unit">万元</span>
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