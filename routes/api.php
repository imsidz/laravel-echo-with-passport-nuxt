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
//Guest
//Auth
Route::post('/auth/login', 'LoginController@login');


//User
Route::middleware('auth:api')->get('/auth/me', function (Request $request) {
    return response()->json([
        'user' => $request->user()
    ]);
});
