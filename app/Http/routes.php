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

//接受数据存入session
Route::post('/session', 'UCenterController@saveSession');

//不需要登录
Route::get('/', 'IndexController@index');//首页
Route::get('/register', 'IndexController@register');//注册
Route::get('/login', 'IndexController@login');//登录
Route::get('/smslogin', 'IndexController@smslogin');//忘记密码
Route::get('/project', 'IndexController@proList');//找信息
Route::get('/project/{id}', 'IndexController@proInfo');//信息详情
Route::get('/video', 'IndexController@videoList');//视频首页
Route::get('/video/{id}', 'IndexController@videoInfo');//视频详情
Route::get('/news', 'IndexController@newsList');//新闻列表
Route::get('/news/{id}', 'IndexController@newsInfo');//新闻详情
Route::get('/code', 'IndexController@code');//获取验证码


//需要登录验证
Route::get('/ucenter','UCenterController@index');//个人中心首页，默认为系统消息
Route::get('/ucenter/pubpro/{id}','UCenterController@pubPro');//发布信息
Route::get('/ucenter/pubpro','UCenterController@publish');//发布信息
Route::get('/ucenter/confirm','UCenterController@confirm');//完善资料
Route::get('/ucenter/resetpwd','UCenterController@restpwd');//重置密码

Route::any('/ucenter/upload', 'IndexController@upload');//上传图片


