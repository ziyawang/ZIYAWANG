<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{         
    function postData($url, $data)  
    {  
        $ch = curl_init();  
        $timeout = 300;   
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_POST, true);  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
        $handles = curl_exec($ch);  
        return curl_error($ch);  
        curl_close($ch);  
    }  
    //首页
    public function index()
    {   
        $url = 'http://api.ziyawang.com/api/project/list';
        $data = ['TypeID'=>1, 'access_token'=>'token'];

           
   // $tmp = $this->postData($url, $data);          
// $tmp = file_get_contents('http://api.ziyawang.com/api/project/list?TypeID=1&access_token=token');
// var_dump($tmp);
        return view('index');
    }

    //注册页
    public function register()
    {
        return view('register');
    }

    //登录页
    public function login()
    {
        return view('login');
    }

    //短信登录页
    public function smslogin()
    {
        return view('smslogin');
    }

    //项目列表
    public function proList()
    {

    }

    //项目详情
    public function proInfo()
    {
        return view('proinfo');
    }

    //视频列表
    public function videoList()
    {

    }

    //视频详情
    public function videoInfo()
    {
        
    }    

    //新闻列表
    public function newsList()
    {

    }

    //新闻详情
    public function newsInfo()
    {
        
    }

    //获取图形验证码
    public function code()
    {   
        require('/org/code/Code.class.php');
        $code = new \Code();
        $code->make();
    }

}
