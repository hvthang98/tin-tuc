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
    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('create','UserController@getCreate')->name('getCreateUser');
        Route::post('post','UserController@postCreate')->name('postCreateUser');
        Route::get('list', 'UserController@getList')->name('listUser');
        Route::get('delete/{id}','UserController@delete')->name('deleteUser');
        Route::get('edit/{id}','UserController@getEdit')->name('getEditUser');
        Route::post('update/{id}','UserController@update' )->name('updateUser');
    });
    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@getList')->name('listCategory');
        Route::post('/post','CategoryController@create')->name('createCategory');
        Route::get('/delete/{id}','CategoryController@delete')->name('deleteCategory');
        Route::post('update/{id}', 'CategoryController@update')->name('updateCategory');
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
