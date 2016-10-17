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

}
