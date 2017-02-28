@extends('layouts.myproinfo')
@section('content')
 <!-- 右侧 -->
    <div class="ucRight">
        <div class="myfix">
        <div class="fix-top">
            <h2 class="headline"><span class="fl sub-title">融资信息</span><span class="serial">{{$data->ProjectNumber}}</span></h2>
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
                <span class="pubSpan rzxx"></span>
            </div>
            <div class="fix-con fr">
                @if($data->CooperateState == 1)                
                <img src="{{asset('/img/connection.png')}}" alt="" class="info-state">
                @elseif($data->CooperateState == 2)
                    @if($data->TypeID == 6 || $data->TypeID == 17)
                    <img src="{{asset('/img/disposaled.png')}}" alt="" class="info-state">
                    @else
                    <img src="{{asset('/img/complete.png')}}" alt="" class="info-state">
                    @endif
                @endif
                    <div class="triangle-left"></div>
                    <ul class="part">
                        <li><span>发布方身份：</span>{{$data->Identity}}</li>
                        <li><span>担保方式：</span>{{$data->Type}}</li>
                        <li><span>项目所在地：</span>{{$data->ProArea}}</li>
                        <li><span>使用期限：</span>{{$data->Month}}月</li>
                        <li><span>融资方式：</span>{{$data->AssetType}}</li>
                    </ul>
                    <div class="bidprice">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>融资额</span>
                        <span class="cost">{{$data->Money}}</span><span class="unit">万元</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！) </span></div>
                    <a href="{{url('/ucenter/rushlist/'.$data->ProjectID)}}" class="persons">查看约谈人</a><span class="personCt" title="已有{{$data->RushCount}}人约谈">{{$data->RushCount}}</span>
                </div>
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