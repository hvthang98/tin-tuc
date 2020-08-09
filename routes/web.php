<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// backend
Route::group(['prefix' => 'admin','namespace'=>'backend'], function () {
    Route::get('/', function () {
        return view('backend.master.master');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('create','UserController@getCreate')->name('getCreateUser');
        Route::post('post','UserController@postCreate')->name('postCreateUser');
    });
    
});
// fontend
Route::group(['namespace'=>'fontend'], function () {
    Route::get('/', function () {
        return view('fontend.master.master');
    });
});
//ajax
Route::group(['prefix' => 'ajax','namespace'=>'ajax'], function () {
    Route::get('check-user', 'CheckUser@check');
});
