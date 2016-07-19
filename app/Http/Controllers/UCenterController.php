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

    public function publish()
    {
        return view("ucenter.publish");
    }

    public function pubPro($TypeID)
    {
        return view("ucenter.publish$TypeID");
    }

    public function confirm()
    {
    	return view('ucenter.confirm');
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
