<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


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

    //项目列表 找信息
    public function proList()
    {
        return view('prolist');
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

    //文件上传
    public function upload(){
        $file = Input::file('Filedata');
        $clientName = $file->getClientOriginalName();//获取文件名
        $tmpName = $file->getFileName();//获取临时文件名
        $realPath = $file->getRealPath();//缓存文件的绝对路径
        $extension = $file->getClientOriginalExtension();//获取文件的后缀
        $mimeType = $file->getMimeType();//文件类型
        $newName = date('Ymd'). mt_rand(1000,9999). '.'. $extension;//新文件名
        $path = $file->move(base_path().'/public/upload/images/',$newName);//移动绝对路径
        $filePath = '/upload/images/'.$newName;//存入数据库的相对路径

        return $filePath;
        // $res = Article::thumb($realPath, $filePath);
        // if($res){
        //     return $filePath;
        // } 
    }

}
