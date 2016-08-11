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
        return view('video.videolist');
    }

    //视频列表
    public function homemade()
    {
        return view('video.homemade');
    }

    //视频列表
    public function profession()
    {
        return view('video.profession');
    }

    //视频列表
    public function star()
    {
        return view('video.star');
    }

    //视频列表
    public function oneminu()
    {
        return view('video.oneminu');
    }

    //视频详情
    public function videoInfo()
    {
        return view('video.videoinfo');
    }   
}
