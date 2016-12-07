<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class ActivityController extends Controller
{         
    function enroll() {
        return view('activity.enroll');
    }

    function testIndex(){
    	return view('test.index');
    }

    function testEnd(){
    	return view('test.end');
    }

    function testPage(Request $request){
        $type = $request->type;
        $page = $request->page;
        $viewname = $type.$page;
    	return view("test.$viewname");
    }

    function testResult(){
        return view('test.result');
    }

    function index(){
        return view('activity.index');
    }

    function report(){
        return view('activity.report');
    }
}
