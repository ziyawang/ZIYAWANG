<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;


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

    //找回密码
    public function resetpwd()
    {
        return view('resetpwd');
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

    //服务商列表 找服务
    public function serList()
    {
        return view('serlist');
    }

    //瀑布流版找信息找服务
    //项目列表 找信息
    public function proList2()
    {
        return view('prolist2');
    }
    //服务商列表 找服务
    public function serList2()
    {
        return view('serlist2');
    }
    //服务商详情
    public function serInfo2()
    {
        return view('serinfo2');
    }
    //项目详情
    public function proInfo2($type,$id)
    {
        return view('proinfo2');
    }

    //服务详情
    public function serInfo()
    {
        return view('serinfo');
    } 

    //新闻列表
    public function newsList()
    {
        return view('news.newslist2');
    }

    //资芽新闻
    public function zynewsList()
    {
        return view('news.zynewslist2');
    }

    //行业新闻
    public function hynewsList()
    {
        return view('news.hynewslist2');
    }

    //财经新闻
    public function cjnewsList()
    {
        return view('news.cjnewslist2');
    }

    //新闻详情
    public function newsInfo()
    {
        
        // return redirect(url('news.newsinfo').".html");
        return view('news.newsinfo2');
    }

    //合同列表
    public function contractList()
    {
        return view('contractlist2');
    }

    //合同详情
    public function contractInfo($id)
    {
        return view('contarct.contract'.$id);
    }

    //联系我们
    public function connectus()
    {
        return view('static.connectus');
    }

    //法律声明
    public function legal()
    {
        return view('static.legal');
    }

    //关于我们
    public function aboutus()
    {
        return view('static.aboutus');
    }

    //意见反馈
    public function feedback()
    {
        return view('static.feedback');
    }

    //关于我们
    public function app()
    {
        return view('static.app');
    }


    //搜索信息
    public function searchProject()
    {
        return view('search.project');
    }    

    //搜索服务方
    public function searchService()
    {
        return view('search.service');
    }    

    //搜索视频
    public function searchVideo()
    {
        return view('search.video');
    }

    //获取图形验证码
    public function code()
    {   
        require('/org/code/Code.class.php');
        $code = new \Code();
        $code->make();
    }

    //图片上传
    // public function upload(){
    //     $file = Input::file('Filedata');
    //     $clientName = $file->getClientOriginalName();//获取文件名
    //     $tmpName = $file->getFileName();//获取临时文件名
    //     $realPath = $file->getRealPath();//缓存文件的绝对路径
    //     $extension = $file->getClientOriginalExtension();//获取文件的后缀
    //     $mimeType = $file->getMimeType();//文件类型
    //     $newName = time(). mt_rand(1000,9999). '.'. $extension;//新文件名
    //     $path = $file->move(dirname(base_path()).'/ziyaupload/images/user/',$newName);//移动绝对路径
    //     $filePath = '/user/'.$newName;//存入数据库的相对路径

    //     return $filePath;
    // }
    public function upload(){
        error_reporting(E_ALL | E_STRICT);
        // $upload_handler = new \App\UploadHandler();
        $upload_handler = new \App\UploadHandler(['upload_dir'=>dirname(base_path()).'/ziyaupload/images/user/', 'upload_url'=>dirname(base_path()).'/ziyaupload/images/user/']);
    }

    //文件
    // public function uploadFile(){
    //     $file = Input::file('Filedata');
    //     $clientName = $file->getClientOriginalName();//获取文件名
    //     $tmpName = $file->getFileName();//获取临时文件名
    //     $realPath = $file->getRealPath();//缓存文件的绝对路径
    //     $extension = $file->getClientOriginalExtension();//获取文件的后缀
    //     $mimeType = $file->getMimeType();//文件类型
    //     $newName = time(). mt_rand(1000,9999). '.'. $extension;//新文件名
    //     $path = $file->move(dirname(base_path()).'/ziyaupload/files/',$newName);//移动绝对路径
    //     $filePath = $newName;//存入数据库的相对路径

    //     return $filePath;
    // }
    public function uploadFile(){
        error_reporting(E_ALL | E_STRICT);
        // $upload_handler = new \App\UploadHandler();
        $upload_handler = new \App\UploadHandler(['upload_dir'=>dirname(base_path()).'/ziyaupload/files/', 'upload_url'=>dirname(base_path()).'/ziyaupload/files/']);
    }


    //9.23新增充值中心
    public function money() {
        return view('ucenter.money');
    }

    public function moneyDetail() {
        return view('ucenter.moneydetail');
    }

    public function paySuccess() {
        return view('ucenter.success');
    }

    public function message() {
        return view('ucenter.message');
    }

    public function question() {
        return view('temp.question');
    }
}
