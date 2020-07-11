<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/brand/list', 'Api\BrandController@list')->name('api.brand.list');
Route::get('/category/list', 'Api\CategoryController@list')->name('api.category.list');
Route::get('/admin/list', 'Api\AdminController@list')->name('api.admin.list');


