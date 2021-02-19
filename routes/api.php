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
    return auth()->user();
});

/*
 * Site functional routes
 */
Route::group(['namespace' => 'App\Http\Controllers\Api',], function ($router) {
    Route::get('/products_list', 'ProductListController@store')->name('site.viewProductsList'); // List of products
    Route::get('/image/{dir}/{title}', 'ImageController@viewImage')->name('site.viewImage'); // Images
});

/*
 * Auth functional routes
 */
Route::group(['namespace' => 'App\Http\Controllers\Api\Auth',], function ($router) {
    Route::post('/register', 'RegisterController@register')->name('auth.register');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::post('/logout', 'LoginController@logout')->name('auth.logout');
    Route::post('/refresh', 'LoginController@refresh')->name('auth.refresh');
});





