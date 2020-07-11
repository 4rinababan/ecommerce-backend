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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::middleware(['auth', 'checkRole:admin'])->group(function() {
	
	Route::get('/settings', 'Admin\SettingController@index')->name('settings.list');
	Route::post('/settings', 'Admin\SettingController@index')->name('settings.handle');

	// Mall Data groups
	Route::get('/products', 'Admin\ProductController@index')->name('product.list');

	Route::resources([
		'brands' => 'Admin\BrandController',
		'customer-groups' => 'Admin\CustomerGroupController',
		]);
	Route::resource('admins','Admin\AdminController')->parameters(['admins'=>'user']);
	Route::resource('categories','Admin\CategoryController')->parameters(['categories'=>'category']);
	Route::get('/admin/categories/list', 'Admin\CategoryController@dataList')->name('adminapi.category.list');
	Route::get('/admin/brands/list', 'Admin\BrandController@dataList')->name('adminapi.brand.list');
	Route::get('/admin/customer-groups/list', 'Admin\CustomerGroupController@dataList')->name('adminapi.customer.list');
	
	// <-- customer route -->
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

Route::middleware(['auth'])->get('/home2', 'HomeController@index2')->name('home2')->middleware('password.confirm');
Route::get('/home3', 'HomeController@index3')->name('home3');
Route::get('/home4', 'HomeController@index4')->name('home4');