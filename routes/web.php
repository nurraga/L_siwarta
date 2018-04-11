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

Route::get('/',function (){
    if(Auth::check()){
        return redirect()->route('admin');
    }else{
        return view('auth/login');
    }
});
Route::post('/login','App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::match(['get','head'],'password/reset','App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::match(['get','head'],'register','App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register','App\Http\Controllers\Auth\RegisterController@register')->name('register.user');
Route::post('/logout','App\Http\Controllers\Auth\LoginController@logout')->name('logout');


//Auth::routes();

//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index')->name('admin');
});
