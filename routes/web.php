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



Route::get('admin/admin-login', 'backend\UserController@login')->name('admin-login');
Route::post('admin/admin-login', 'backend\UserController@post_login')->name('post-login');

Route::group(['prefix' => 'admin', 'namespace' => 'backend', 'middleware' => 'login'], function () {
    Route::get('/', function () {
       return view('backend.master.master'); 
    })->name('indexAdmin');

    //news
    Route::get('/ajax/danhmuc/{id}', 'AjaxController@category');

    
    Route::get('admin-logout', 'UserController@logout')->name('admin-logout');
    Route::group(['prefix' => 'new'], function () {
        Route::get('add-new', 'NewController@addnew')->name('add-new');
        Route::post('add-new', 'NewController@post_addnew')->name('post-new');
        Route::get('all-news','NewController@all_news')->name('all-news');
        Route::get('edit-new/{id}','NewController@edit_new')->name('edit-new');
        Route::post('edit-new/{id}','NewController@post_edit_new')->name('post-edit-new');
        Route::get('delete-new/{id}','NewController@delete_new')->name('delete-new');
    });

    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('create', 'UserController@getCreate')->name('getCreateUser');
        Route::post('post', 'UserController@postCreate')->name('postCreateUser');
        Route::get('list', 'UserController@getList')->name('listUser');
        Route::get('delete/{id}', 'UserController@delete')->name('deleteUser');
        Route::get('edit/{id}', 'UserController@getEdit')->name('getEditUser');
        Route::post('update/{id}', 'UserController@update')->name('updateUser');
    });
    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@getList')->name('listCategory');
        Route::post('/post', 'CategoryController@create')->name('createCategory');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('deleteCategory');
        Route::post('update/{id}', 'CategoryController@update')->name('updateCategory');
    });
    //type-news
    Route::group(['prefix' => 'type'], function () {
        Route::get('/','TypeController@getList')->name('listTypeNews');
        Route::post('/post','TypeController@postType')->name('postTypeNews');
        Route::get('/delete/{id}', 'TypeController@detele')->name('deleteTypeNews');
        Route::post('/update/{id}','TypeController@update')->name('updateTypeNews');
    });
});

// fontend
Route::group(['namespace' => 'fontend'], function () {
    Route::get('/', function () {
        return view('fontend.master.master');
    });
    Route::get('/sigle-new/{id}','DetailNewController@index')->name('sigle');
});
//ajax
Route::group(['prefix' => 'ajax', 'namespace' => 'ajax'], function () {
    Route::get('check-user', 'CheckUser@check');
    Route::get('/like/{id}','LikeController@like');
    Route::get('/comment/{id}','CommentController@comment');
    Route::get('/reply-comment/{id}','ReplyCommentController@reply');
});
