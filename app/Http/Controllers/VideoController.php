<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{

    //视频列表
    public function videoList()
    {
        return view('video.videolist2');
    }

    //资芽哈哈哈
    public function homemade()
    {
        return view('video.homemade2');
    }

    //行业说
    public function profession()
    {
        return view('video.profession2');
    }

    //视频列表
    public function star()
    {
        return view('video.star');
    }

    //资芽一分钟
    public function oneminu()
    {
        return view('video.oneminu2');
    }

    //视频详情
    public function videoInfo()
    {
        return view('video.videoinfo2');
    }   
}
