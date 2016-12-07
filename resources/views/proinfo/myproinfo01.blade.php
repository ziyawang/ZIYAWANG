@extends('layouts.myproinfo')
@section('content')
 <!-- 右侧 -->
    <div class="ucRight">
        <div class="myfix">
        <div class="fix-top">
            <h2 class="headline"><span class="fl sub-title">资产包</span><span class="serial">{{$data->ProjectNumber}}</span></h2>
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
            <span class="pubSpan zchb"></span>
            </div>
            <div class="fix-con fr">
                    <div class="triangle-left"></div>
                    <ul class="part">
                        <li><span>发布方身份：</span>{{$data->Identity}}</li>
                        <li><span>来源：</span>{{$data->FromWhere}}</li>
                        <li><span>资产包类型：</span>{{$data->AssetType}}</li>
                        <li><span>地区</span>{{$data->ProArea}}</li>
                    </ul>
                    <div class="bidprice nobdb">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>总金额</span>
                        <span class="cost">{{$data->TotalMoney}}</span><span class="unit">万元</span>
                    </div>
                    <div class="bidprice nobdt">
                        <span class="yel-bg blue-bg"><i class="iconfont">&#xe608;</i>转让价</span>
                        <span class="cost">{{$data->TransferMoney}}</span><span class="unit">万元</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！) </span></div>
                    <div class="speech">清单下载：<a href="javascript:;" class="download"><i class="iconfont">&#xe611;</i></a></div>
                    <a href="{{url('/ucenter/rushlist/'.$data->ProjectID)}}" class="persons">查看约谈人</a><span class="personCt" title="已有{{$data->RushCount}}人约谈">{{$data->RushCount}}</span>
                </div>
            </div>
            @if($data->Money || $data->Report || $data->Rate || $data->Time || $data->Counts || $data->Pawn)
            <div class="rests">
                <div class="triangle-left"></div>
                <h3 class="charact-title fl"><img src="/img/others.png" height="80" width="80" alt="" />其他信息</h3>
                <div class="boxRest fr">
                    <ul class="rest-list">
                        @if($data->Money)
                        <li><span>本金：</span>{{$data->Money}}万元</li>
                        @endif
                        @if($data->Report)
                        <li><span>有无尽调报告：</span>{{$data->Report}}</li>
                        @endif
                        @if($data->Rate)
                        <li><span>利息：</span>{{$data->Rate}}万元</li>
                        @endif
                        @if($data->Time)
                        <li><span>出表时间：</span>{{$data->Time}}</li>
                        @endif
                        @if($data->Counts)
                        <li><span>户数：</span>{{$data->Counts}}户</li>
                        @endif
                        @if($data->Pawn)
                        <li><span>抵押物类型：</span>{{$data->Pawn}}</li>
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