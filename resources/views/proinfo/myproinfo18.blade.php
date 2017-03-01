@extends('layouts.myproinfo')
@section('content')
 <!-- 右侧 -->
    <div class="ucRight">
        <div class="myfix">
        <div class="fix-top">
            <h2 class="headline"><span class="fl sub-title">企业商帐</span><span class="serial">{{$data->ProjectNumber}}</span></h2>
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
                <span class="pubSpan qysz"></span>
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
                            <div class="lawsuit">诉讼<span>佣金比例：</span>{{$data->Law}}</div>
                            @endif
                            @if($data->UnLaw)
                            <div class="nolaw">非诉催收<span>佣金比例：</span>{{$data->UnLaw}}</div>
                            @endif
                            @if($data->Status)
                            <div class="run"><span>债务方经营情况：</span>{{$data->Status}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="bidprice">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>债权额</span>
                        <span class="cost">{{$data->Money}}</span><span class="unit">万元</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！)  </span></div>
                    <a href="{{url('/ucenter/rushlist/'.$data->ProjectID)}}" class="persons">查看约谈人</a><span class="personCt" title="已有{{$data->RushCount}}人约谈">{{$data->RushCount}}</span>
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