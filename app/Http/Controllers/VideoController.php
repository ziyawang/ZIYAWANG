<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Redirect;


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

    //行业说
    public function course()
    {
        return view('video.course2');
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
    public function videoInfo(Request $request,$id)
    {
        $cookie = explode(';',($request->header()['cookie'][0]));
        foreach($cookie as $c){
            if(strpos($c,'phonenumber')){
                $arr = explode('=',$c);
                $phonenumber = $arr[1];
            }
        }
        $data = DB::table('T_V_VIDEOINFO')->where("VideoID",$id)->first();
        if($data->Member != 0){
            if(!isset($phonenumber)){
                return Redirect::to('login');
            } else {
                $User = DB::table('users')->where('phonenumber',$phonenumber)->first();
                $tmp = DB::table('T_V_CONSUME')->where(['VideoID'=>$id, 'UserID'=>$User->userid])->get();
                $tmpp = DB::table('T_U_MONEY')->where(['VideoID'=>$id, 'UserID'=>$User->userid])->get();
                if(!$tmp && !$tmpp && !$User->right){
                    return Redirect::to('/video');
                }
            }
        }
        return view('video.videoinfo2');
    }   
}
