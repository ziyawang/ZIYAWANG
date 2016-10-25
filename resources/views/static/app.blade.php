@extends('layouts.home')
@section('content')
        <link rel="stylesheet" type="text/css" href="{{url('/css/us.css')}}?v=1.0.4" />
    <!-- 主体 -->
    <div class="box">
        <div class="topimg">
            <div class="wrap">
                <ul class="imglist">
                    <li>
                        <img src="/img/img01.jpg" height="315" width="1200" alt="资芽网" />
                        <div class="app_caption">
                            <em>全球不良资产超级综服平台</em>
                            <span>不良资产都在这儿！</span>
                        </div>
                    </li>
                    <li>
                        <img src="/img/img02.jpg" height="306" width="1200" alt="资芽网" />
                        <div class="downloadbtn">
                            <a href="http://images.ziyawang.com/apk/ziya.apk" class="android"><em>Android</em>立即下载</a>
                            <a href="javascript:;" class="iphone"><em>iphone</em>敬请期待</a>
                        </div>
                        <div class="scan">
                            扫一扫
                            <span class="scan_img"><img src="/img/doi.png" height="160" width="160" alt="下载资芽APP" /></span>
                        </div>
                    </li>
                    <li><img src="/img/img03.jpg" height="179" width="1200" alt="资芽网" /></li>
                </ul>
            </div>
        </div>
    </div>
@endsection