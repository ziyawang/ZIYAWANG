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
Route::get('/resetpwd', 'IndexController@resetpwd');//找回密码
Route::get('/project', 'IndexController@proList2');//找信息
Route::any('/project/{id}', 'IndexController@proInfo2');//信息详情
Route::get('/service', 'IndexController@serList2');//找信息
Route::get('/service/{id}', 'IndexController@serInfo2');//信息详情

Route::get('/video', 'VideoController@videoList');//视频首页
Route::get('/video/homemade', 'VideoController@homemade');//资芽哈哈哈视频列表
Route::get('/video/profession', 'VideoController@profession');//行业说
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


Route::get('/app', 'IndexController@app');//app下载页
Route::get('/aboutus', 'IndexController@aboutus');//关于我们
Route::get('/connectus', 'IndexController@connectus');//联系我们
Route::get('/legal', 'IndexController@legal');//法律声明




//需要登录验证
Route::get('/ucenter/index','UCenterController@index');//个人中心首页，默认为系统消息
Route::get('/ucenter','UCenterController@index');//个人中心首页，默认为系统消息
Route::get('/ucenter/pubpro/{id}','UCenterController@pubPro');//发布信息
Route::get('/ucenter/pubpro','UCenterController@publish');//发布信息
Route::get('/ucenter/confirm','UCenterController@confirm');//完善资料
Route::get('/ucenter/reconfirm','UCenterController@reconfirm');//重新完善资料
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



//瀑布流版信息服务列表（旧版，上面是新版）
Route::get('/service2', 'IndexController@serList');//找信息
Route::get('/project2', 'IndexController@proList');//找信息
Route::get('/service2/{id}', 'IndexController@serInfo');//信息详情
Route::get('/project2/{id}', 'IndexController@proInfo');//信息详情


//9.23新增充值中心路由
Route::get('/ucenter/money', 'IndexController@money');//信息详情
Route::get('/ucenter/money/detail', 'IndexController@moneyDetail');//充值消费明细
//充值成功跳转页面
Route::any('/ucenter/money/success', 'IndexController@paySuccess');
//系统消息
Route::get('/ucenter/message','IndexController@message');//个人中心首页，默认为系统消息
//10.11新增意见反馈接口
Route::get('/feedback', 'IndexController@feedback');//意见反馈

//10.14新增活动报名路由
// Route::get('/enroll', 'ActivityController@enroll');

//11.14新增测评路由
Route::get('/test/index', 'ActivityController@testIndex');//首页
Route::get('/test/page', 'ActivityController@testPage');//问题页
Route::get('/test/end', 'ActivityController@testEnd');//尾页
Route::get('/test/result', 'ActivityController@testResult');//结果页




