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
//home前端部分
Route::get('/', 'home\IndexController@index');
Route::get('/web/search', 'home\IndexController@search');
Route::get('/{id}.html', 'home\IndexController@show');
Route::get('/category/{id}', 'home\IndexController@category');
Route::get('/partner/{name}', 'home\IndexController@partner');
// home 模块
// Route::prefix('home')->namespace('home')->group(function () {
// 	// 文章管理
// 	Route::prefix('index')->group(function () {
// 		// 文章列表
// 		Route::get('index', 'IndexController@index');
// 		// 发布文章
// 		Route::get('edit/{id}', 'IndexController@edit')->where('id', '[0-9]+');
// 		// ...
// 		Route::get('update/{id}/{name}', 'IndexController@update');
// 	});
// });

// Route::prefix('database')->group(function () {
// 	Route::get('insert', 'DatabaseController@insert');
// 	Route::get('get', 'DatabaseController@get');
// });

//admin模块
Route::prefix('admin')->namespace('admin')->group(function () {
	Route::prefix('login')->group(function () {
		Route::get('index', 'LoginController@index');
		Route::post('login', 'LoginController@login');
	});
	Route::group(['middleware' => ['admincheck']], function () {
//路由中间件，检测用户是否登录
		Route::prefix('index')->group(function () {
			Route::get('index', 'IndexController@index');
			Route::get('loginout', 'IndexController@loginout');
			Route::get('update/{id}', 'IndexController@update');
		});
		Route::prefix('news')->group(function () {
			Route::get('index', 'NewsController@index');
			Route::get('edit/{id}', 'NewsController@edit');
			Route::post('update/{id}', 'NewsController@update');
			Route::get('create', 'NewsController@create');
			Route::post('store', 'NewsController@store');
			Route::get('category', 'NewsController@category');
			Route::get('category_edit/{id}', 'NewsController@category_edit');
			Route::post('category_update/{id}', 'NewsController@category_update');
		});
		Route::prefix('carousel')->group(function () {
			Route::get('index', 'CarouselController@index');
			Route::get('edit/{id}', 'CarouselController@edit');
			Route::post('update/{id}', 'CarouselController@update');
		});
		Route::prefix('partner')->group(function () {
			Route::get('index', 'PartnerController@index');
		});
	});

});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
