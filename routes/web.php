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

/* Route Public */

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::get('/about', ['uses' => 'AboutController@index', 'as' => 'about']);

Route::match(['get', 'post'], '/contact', ['uses' => 'ContactController@index', 'as' => 'contact']);

Route::get('/models', ['uses' => 'ModelsController@index', 'as' => 'models']);
Route::get('/models/{car}', ['uses' => 'ModelShowController@index', 'as' => 'model']);

Route::get('/categories/{category}', ['uses' => 'CategoriesController@index', 'as' => 'category']);

Route::get('/search', ['uses' => 'SearchController@index', 'as' => 'search']);

Route::get('/tools', ['uses' => 'ToolsController@index', 'as' => 'tools']);
Route::get('/tools/{tool}', ['uses' => 'ToolShowController@index', 'as' => 'tool']);

Route::match(['get', 'post'], '/login', 'UserController@login')->middleware('guest')->name('login');
Route::get('/logout', 'UserController@logout')->middleware('auth')->name('logout');

/* Route Admin */

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function() {

	Route::get('/', 'MainController@index')->name('admin.index');

	Route::resource('/categories', 'CategoryController');

	Route::resource('/menus', 'MenuController');

	Route::resource('/messages', 'MessageController');

	Route::resource('/teams', 'TeamController');

	Route::resource('/cars', 'CarController');

	Route::resource('/tools', 'ToolController');

	Route::resource('/users', 'UserController');

});