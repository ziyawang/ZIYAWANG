@extends('layouts.proinfo')
@section('title')
<title>个人债权_不良资产信息平台-资芽网</title>
@endsection
@section('content')
                <div class="fr indiv-con">
                    <div class="triangle-left"></div>
                    <div class="loan">
                        <ul class="loan-l fl">
                            <li><span>发布方身份：</span>{{$data->Identity}}</li>
                            <li><span>债权人所在地：</span>{{$data->DebteeLocation}}</li>
                            <li><span>债务人所在地：</span>{{$data->ProArea}}</li>
                            <li><span>逾期时间：</span>{{$data->Month}}月</li>
                        </ul>
                        <div class="loan-r fr">
                            <span>处置方式及佣金：</span>
                            @if($data->Law)
                            <div class="lawsuit">诉讼：<span>@if($data->UnLaw)
                                <style>.lawsuit span{margin-left: 2em;}</style>
                                @endif
                                佣金比例：</span>{{$data->Law}}</div>
                            @endif
                            @if($data->UnLaw)
                            <div class="nolaw">非诉催收：<span>
                                佣金比例：</span>{{$data->UnLaw}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="bidprice">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>总金额</span>
                        <span class="cost">{{$data->TotalMoney}}</span><span class="unit">万元</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！)  </span></div>
                </div>
            </div>
            @if($data->Guaranty || $data->Pay || $data->Property || $data->Credentials || $data->Connect)
            <div class="rests">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/others.png" height="80" width="80" alt="" />其他信息</h3>
                <div class="boxRest fr">
                    <ul class="rest-list">
                        @if($data->Guaranty)
                        <li><span>是否有担保：</span>{{$data->Guaranty}}</li>
                        @endif
                        @if($data->Pay)
                        <li><span>债务人是否有偿还能力：</span>{{$data->Pay}}</li>
                        @endif
                        @if($data->Property)
                        <li><span>是否有抵押：</span>{{$data->Property}}</li>
                        @endif
                        @if($data->Credentials)
                        <li><span>相关凭证是否齐全：</span>{{$data->Credentials}}</li>
                        @endif
                        @if($data->Connect)
                        <li><span>债务人是否失联 ：</span>{{$data->Connect}}</li>
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