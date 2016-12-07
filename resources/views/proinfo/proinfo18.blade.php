@extends('layouts.proinfo')
@section('title')
<title>企业商帐_不良资产信息平台-资芽网</title>
@endsection
@section('content')
                <div class="fr busin-con">
                    <div class="triangle-left"></div>
                    <div class="loan">
                        <ul class="loan-l fl">
                            <li><span>发布方身份：</span>{{$data->Identity}}</li>
                            <li><span>商账类型：</span>{{$data->AssetType}}</li>
                            <li><span>逾期时间：</span>{{$data->Month}}月</li>
                            <li><span>债务方地区：</span>{{$data->ProArea}}</li>
                            <li><span>债务方企业性质：</span>{{$data->Nature}}</li>
                        </ul>
                        <div class="loan-r fr">
                            <span>处置方式及佣金：</span>
                            @if($data->Law)
                            <div class="lawsuit">诉讼：<span>
                                @if($data->UnLaw)
                                <style>.lawsuit span{margin-left: 2em;}</style>
                                @endif
                                佣金比例：</span>{{$data->Law}}</div>
                            @endif
                            @if($data->UnLaw)
                            <div class="nolaw">非诉催收：<span>
                                佣金比例：</span>{{$data->UnLaw}}</div>
                            @endif
                            <div class="run"><span>债务方经营情况：</span>{{$data->Status}}</div>
                        </div>
                    </div>
                    <div class="bidprice">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>债权额</span>
                        <span class="cost">{{$data->Money}}</span><span class="unit">万元</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！)  </span></div>
                </div>
            </div>
            @if($data->Guaranty || $data->Industry || $data->State)
            <div class="rests">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/others.png" height="80" width="80" alt="" />其他信息</h3>
                <div class="boxRest fr">
                    <ul class="rest-list">
                        @if($data->Guaranty)
                        <li><span>债权相关凭证：</span>{{$data->Guaranty}}</li>
                        @endif
                        @if($data->Industry)
                        <li><span>债务方行业：</span>{{$data->Industry}}</li>
                        @endif
                        @if($data->State)
                        <li><span>债权涉诉情况：</span>{{$data->State}}</li>
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