<?php

use Illuminate\Http\Request;

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
Route::middleware(['auth:api'])->group(function () {
    Route::get('/inbox', 'ApiController@inbox');
    Route::get('/myuser', 'ApiController@user');
     Route::get('/logout', 'ApiController@logout');
});

Route::post('/login', 'ApiController@login');
