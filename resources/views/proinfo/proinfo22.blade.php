@extends('layouts.proinfo')
@section('title')
<title>法拍资产_不良资产信息平台-资芽网</title>
@endsection
@section('content')
                <div class="fr fore-con">
                    <div class="triangle-left"></div>
                    <ul class="part bidcar">
                        <li><span>资产类型：</span>{{$data->AssetType}}</li>
                        <li><span>拍卖地点：</span>{{$data->ProArea}}</li>
                        <li><span>品牌型号：</span>{{$data->Brand}}</li>
                        <li><span>拍卖时间：</span>{{$data->Year}}</li>
                        <li><span>处置单位：</span>{{$data->Court}}</li>
                        <li><span>拍卖阶段：</span>{{$data->State}}</li>
                    </ul>
                    <div class="bidprice">
                        <span class="yel-bg"><i class="iconfont">&#xe60c;</i>起拍价</span>
                        <span class="cost">{{$data->Money}}</span><span class="unit">万元</span>
                    </div>
                    <div class="speech">语音描述：<i class="iconfont">&#xe620;</i><span class="listen">(下载资芽APP可发布及收听语音描述！)  </span></div>
                </div>
            </div>
@endsection('content')