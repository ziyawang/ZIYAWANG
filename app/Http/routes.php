<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
<<<<<<< HEAD
Route::get('/', function () {
    // return view('welcome');
    echo 'Hi, Welcome to Api Server . ';
});


// API 路由接管
$api = app('api.router');
// V1 版本，公有接口，不需要登录
$api->version('v1', ['middleware'=>['access','cross']], function ($api) {
    //【用户】
    // 用户注册
    $api->post('auth/register', 'App\Http\Controllers\Api\V1\AuthenticateController@register');
    // 用户登录验证并返回 Token
    $api->post('auth/login', 'App\Http\Controllers\Api\V1\AuthenticateController@authenticate');
    // 忘记密码，使用手机验证码登录，并返回 Token
    $api->post('auth/smslogin', 'App\Http\Controllers\Api\V1\AuthenticateController@smslogin');
    // 找回密码
    $api->post('auth/resetpwd', 'App\Http\Controllers\Api\V1\AuthenticateController@resetPassword');
    // 获取用户手机验证码
    $api->post('auth/getsmscode', 'App\Http\Controllers\Api\V1\AuthenticateController@getSmsCode');
    // 生成图形验证码
    
    // 服务方列表
    $api->get('service/list', 'App\Http\Controllers\Api\V1\UserController@serList');
    // 服务方详情
    $api->get('service/list/{id}', 'App\Http\Controllers\Api\V1\UserController@serInfo');

    //【项目】
    // 项目列表
    $api->get('project/list', 'App\Http\Controllers\Api\V1\ProjectController@proList');
    // 项目详情
    $api->get('project/list/{id}', 'App\Http\Controllers\Api\V1\ProjectController@proInfo');

    //【视频】
    // 视频列表
    $api->get('video/list', 'App\Http\Controllers\Api\V1\VideoController@videoList');
    // 视频详情
    $api->get('video/list/{id}', 'App\Http\Controllers\Api\V1\VideoController@videoInfo');

    //【新闻资讯】
    // 新闻资讯列表
    $api->get('news/list', 'App\Http\Controllers\Api\V1\NewsController@newsList');
    // 新闻资讯详情
    $api->get('news/list/{id}', 'App\Http\Controllers\Api\V1\NewsController@newsInfo');

    
    // 搜索
    $api->post('search', 'App\Http\Controllers\Api\V1\ToolController@search');
    // $api->post('login','App\Http\Controllers\Auth\AuthController@postLogin');
});

// 私有接口，需要登录
$api->version('v1', ['protected' => true, 'middleware'=>['access','cross']], function ($api) {

    // 更新用户 token
    $api->get('upToken', 'App\Http\Controllers\Api\V1\AuthenticateController@upToken');

    //【用户】
    // 获取当前用户信息
    $api->post('auth/me', 'App\Http\Controllers\Api\V1\UserController@me');
    // 重置用户密码
    $api->post('auth/chpwd', 'App\Http\Controllers\Api\V1\UserController@changePassword');
    // 服务方信息完善
    $api->post('service/confirm', 'App\Http\Controllers\Api\V1\UserController@confirm');
    // 服务方信息重新完善
    $api->post('service/reconfirm', 'App\Http\Controllers\Api\V1\UserController@reconfirm');

    //【项目】
    // 当前用户发布信息列表
    $api->get('project/mypro', 'App\Http\Controllers\Api\V1\UserController@myPro');
    // 创建项目
    $api->post('project/create', 'App\Http\Controllers\Api\V1\ProjectController@create');
    // 项目抢单
    $api->post('project/rush', 'App\Http\Controllers\Api\V1\ProjectController@proRush');
    // 项目抢单列表
    $api->get('project/rushlist/{id}', 'App\Http\Controllers\Api\V1\UserController@proRushList');
    // 项目合作
    $api->post('project/cooperate', 'App\Http\Controllers\Api\V1\UserController@proCooperate');
    // 取消合作
    $api->post('project/cancel', 'App\Http\Controllers\Api\V1\UserController@proCancel');
    // 合作列表
    $api->get('project/coolist', 'App\Http\Controllers\Api\V1\UserController@cooList');   
    // 我的抢单列表（服务方才有）
    $api->get('project/myrush', 'App\Http\Controllers\Api\V1\UserController@rushList');

    //【视频】
    $api->post('video/create', 'App\Http\Controllers\Api\V1\VideoController@create');

    //【资讯】
    $api->post('news/create', 'App\Http\Controllers\Api\V1\NewsController@create');

    //【通用】
    // 收藏
    $api->post('collect', 'App\Http\Controllers\Api\V1\ToolController@collect');
    // 收藏列表
    $api->get('collect/list', 'App\Http\Controllers\Api\V1\ToolController@collectList');
    // 收藏列表APP专用
    $api->get('app/collect/list', 'App\Http\Controllers\Api\V1\ToolController@appcollectList');
    // 上传
    $api->post('upload', 'App\Http\Controllers\Api\V1\ToolController@upload');
    // 获取消息列表
    $api->post('getmessage', 'App\Http\Controllers\Api\V1\ToolController@getMessage');
    // 已读消息
    $api->post('readmessage', 'App\Http\Controllers\Api\V1\ToolController@readMessage');
    // 删除消息
    $api->post('delmessage', 'App\Http\Controllers\Api\V1\ToolController@delMessage');



    //获取融云token
    $api->get('rctoken', 'App\Http\Controllers\Api\V1\IMController@get_token');


});

// END V1 版本
=======

//接受数据存入session
Route::post('/session', 'UCenterController@saveSession');

//不需要登录
Route::get('/', 'IndexController@index');//首页
Route::get('/register', 'IndexController@register');//注册
Route::get('/login', 'IndexController@login');//登录
Route::get('/smslogin', 'IndexController@smslogin');//忘记密码
Route::get('/resetpwd', 'IndexController@resetpwd');//找回密码
Route::get('/project', 'IndexController@proList');//找信息
Route::get('/project/{id}', 'IndexController@proInfo');//信息详情
Route::get('/service', 'IndexController@serList');//找信息
Route::get('/service/{id}', 'IndexController@serInfo');//信息详情

Route::get('/video', 'VideoController@videoList');//视频首页
Route::get('/video/homemade', 'VideoController@homemade');//自制剧视频列表
Route::get('/video/profession', 'VideoController@profession');//行业说
Route::get('/video/star', 'VideoController@star');//大咖秀
Route::get('/video/oneminu', 'VideoController@oneminu');//一分钟
Route::get('/video/{id}', 'VideoController@videoInfo');//视频详情

Route::get('/news', 'IndexController@newsList');//新闻列表
Route::get('/zynews', 'IndexController@zynewsList');//资芽新闻
Route::get('/hynews', 'IndexController@hynewsList');//行业新闻
Route::get('/cjnews', 'IndexController@cjnewsList');//财经新闻
Route::get('/news/{id}', 'IndexController@newsInfo');//新闻详情
Route::get('/contract', 'IndexController@contractList');//合同列表
Route::get('/contract/{id}', 'IndexController@contractInfo');//合同详情
Route::get('/code', 'IndexController@code');//获取验证码
Route::get('/search/service', 'IndexController@searchService');//搜索服务
Route::get('/search/project', 'IndexController@searchProject');//搜索信息
Route::get('/search/video', 'IndexController@searchVideo');//搜索视频


Route::get('/aboutus', 'IndexController@aboutus');//关于我们
Route::get('/connectus', 'IndexController@connectus');//联系我们
Route::get('/legal', 'IndexController@legal');//法律声明




//需要登录验证
Route::get('/ucenter/index','UCenterController@index');//个人中心首页，默认为系统消息
Route::get('/ucenter','UCenterController@index');//个人中心首页，默认为系统消息
Route::get('/ucenter/pubpro/{id}','UCenterController@pubPro');//发布信息
Route::get('/ucenter/pubpro','UCenterController@publish');//发布信息
Route::get('/ucenter/confirm','UCenterController@confirm');//完善资料
Route::get('/ucenter/safe/resetpwd','UCenterController@resetpwd');//重置密码
Route::get('/ucenter/myrush','UCenterController@myrush');//我的抢单
Route::get('/ucenter/mypro','UCenterController@mypro');//我发布的
Route::get('/ucenter/mypro/{id}','UCenterController@myproinfo');//我发布的信息详情
Route::get('/ucenter/mypro/rushlist/{id}','UCenterController@rushlist');//查看抢单列表
Route::get('/ucenter/mycoo','UCenterController@mycoo');//我合作的
Route::get('/ucenter/mycollect','UCenterController@mycollect');//我收藏的
Route::get('/ucenter/safe','UCenterController@safe');//安全中心
Route::get('/ucenter/helper','UCenterController@helper');//资芽助手


Route::any('/ucenter/upload', 'IndexController@upload');//上传图片
Route::any('/ucenter/uploadfile', 'IndexController@uploadFile');//上传文件
Route::any('/ucenter/redirect', 'UCenterController@redirect');//跳转


>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
