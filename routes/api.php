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

Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::resource('tasks', 'TaskController');
    Route::get('logout', 'ApiController@logout');   
});

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */
