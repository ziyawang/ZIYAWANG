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
Route::get('/', 'IndexController@index');
Route::get('/register', 'IndexController@register');
Route::get('/login', 'IndexController@login');
Route::get('/smslogin', 'IndexController@smslogin');
Route::get('/project', 'IndexController@proList');
Route::get('/project/{id}', 'IndexController@proInfo');
Route::get('/video', 'IndexController@videoList');
Route::get('/video/{id}', 'IndexController@videoInfo');
Route::get('/news', 'IndexController@newsList');
Route::get('/news/{id}', 'IndexController@newsInfo');
Route::get('/code', 'IndexController@code');
Route::get('/test', 'IndexController@test');


//需要登录验证
Route::get('/ucenter/pubpro/{id}','UCenterController@pubPro');
Route::get('/ucenter/confirm','UCenterController@confirm');
Route::get('/ucenter/resetpwd','UCenterController@restpwd');

