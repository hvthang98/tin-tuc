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

	Route::get('admin/admin-login','backend\UserController@login')->name('admin-login');
	Route::post('admin/admin-login','backend\UserController@post_login')->name('post-login');

Route::group(['prefix' => 'admin','namespace'=>'backend','middleware'=>'login'], function () {
	Route::get('/ajax/danhmuc/{id}','AjaxController@category');
	
	Route::get('admin-logout','UserController@logout')->name('admin-logout');
    // Route::get('/', function () {
    //     return view('backend.master.master');
    // });
    //quản lý tin tức
    Route::group(['prefix' => 'new'], function(){

    	Route::get('add-new', 'NewController@addnew')->name('add-new');
    	Route::post('add-new', 'NewController@post_addnew')->name('post-new');
    });

});

// fontend
Route::group(['namespace'=>'fontend'], function () {
    Route::get('/', function () {
        return view('fontend.master.master');
    });
});
