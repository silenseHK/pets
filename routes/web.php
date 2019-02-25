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

Route::get('/', 'Admin\IndexController@index');



Route::group(['prefix'=>'/admin','middleware'=>'adminLogin'],function(){

    Route::get('/index','Admin\IndexController@index');

});

Route::group(['prefix'=>'/admin/cate','middleware'=>'adminLogin'],function(){

    Route::get('/index','Admin\CateController@index');
    Route::get('/add','Admin\CateController@add');
    Route::post('/create','Admin\CateController@create');
    Route::post('/edit','Admin\CateController@edit');
    Route::post('/uploadImg','Admin\CateController@uploadImg');
    Route::get('/{cate}/update','Admin\CateController@update');
    Route::get('/del','Admin\CateController@del');

});

Route::group(['prefix'=>'/admin/article','middleware'=>'adminLogin'],function(){

    Route::get('/index','Admin\ArticleController@index');
    Route::get('/add','Admin\ArticleController@add');
    Route::post('/create','Admin\ArticleController@create');
    Route::post('/uploadImg','Admin\ArticleController@uploadImg');
    Route::post('/uploadContentImg','Admin\ArticleController@uploadContentImg');
    Route::get('/{article}/update','Admin\ArticleController@update');
    Route::post('/edit','Admin\ArticleController@edit');
    Route::get('/del','Admin\ArticleController@del');

});

Route::group(['prefix'=>'/admin/admin','middleware'=>'adminLogin'],function(){

    Route::get('/index','Admin\AdminController@index');
    Route::get('/add','Admin\AdminController@add');
    Route::post('/create','Admin\AdminController@create');
    Route::post('/changePwd','Admin\AdminController@changePwd');

});

Route::group(['prefix'=>'/admin/login'],function(){
    Route::get('/index','Admin\LoginController@index');
    Route::post('/verify','Admin\LoginController@verify');
    Route::post('/login','Admin\LoginController@login');
});
