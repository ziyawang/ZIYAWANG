@extends('layouts.myproinfo')
@section('content')
 <!-- 右侧 -->
    <div class="ucRight">
        <div class="myfix">
        <div class="fix-top">
            <h2 class="headline"><span class="fl sub-title">法拍资产</span><span class="serial">{{$data->ProjectNumber}}</span></h2>
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
                <span class="pubSpan fpzc"></span>
            </div>
            <div class="fix-con fr">
                    <div class="triangle-left"></div>
                    <ul class="part">
                        <li><span>资产类型：</span>{{$data->AssetType}}</li>
                        <li><span>拍卖地点：</span>{{$data->ProArea}}</li>
                        <li><span>面积：</span>{{$data->Area}} 平米</li>
                        <li><span>拍卖时间：</span>{{$data->Year}}</li>
                        <li><span>性质：</span>{{$data->Nature}}</li>
                        <li><span>拍卖阶段：</span>{{$data->State}}</li>
                        <li><span>处置单位：</span>{{$data->Court}}</li>
                    </ul>
                    <div class="bidprice">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>起拍价</span>
                        <span class="cost">{{$data->Money}}</span><span class="unit">万元</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！)  </span></div>
                    <a href="{{url('/ucenter/rushlist/'.$data->ProjectID)}}" class="persons">查看约谈人</a><span class="personCt" title="已有{{$data->RushCount}}人约谈">{{$data->RushCount}}</span>
                </div>
            </div>
@endsection('content')