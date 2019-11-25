<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 練習自定義 認證
// 取得認證資訊
Route::get('/test', function(){
    dump(Auth::user()); // 取得已認證用戶實例
    dump(Auth::id()); // 取得已認證用戶id
    dump(Auth::check()); // 是否登入
    return time();
});

// 路由保護:透過中間件方法 middleware('auth') 來要求需登入才可訪問該auth頁面
Route::get('/auth', function(){

    return 'auth頁面';
// })->middleware('auth');
})->middleware('auth.basic');

// 控制器保護範例:
Route::get('/student', 'StudentController@index');

//
Route::get('/', function () {
    Auth::logout();
});
