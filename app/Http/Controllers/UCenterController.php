<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UCenterController extends Controller
{
    public function index()
    {
        return view("ucenter.index");
    }

    public function helper()
    {
        return view("ucenter.helper");
    }

    public function publish()
    {
        return view("ucenter.publish");
    }

    public function pubPro($TypeID)
    {
        return view("ucenter.publish$TypeID");
    }

    public function mypro()
    {
        return view('ucenter.mypro');
    }

    public function myproinfo()
    {
        return view('ucenter.myproinfo');
    }

    public function mycoo()
    {
        return view('ucenter.mycoo');
    }

    public function rushlist()
    {
        return view('ucenter.rushlist');
    }

    public function confirm()
    {
        return view('ucenter.confirm');
    }

    public function myrush()
    {
        return view('ucenter.myrush');
    }


    public function safe()
    {
        return view('ucenter.safe');
    }

    public function restpwd()
    {
        return view('ucenter.restpwd');
    }    


    public function saveSession(Request $req)
    {
        session(['phonenumber'=>$req->phonenumber]);
        dd(session('phonenumber'));
    }
}
