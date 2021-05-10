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

Route::middleware('auth:api')->group(function () {
    Route::apiResource('/users', \App\Http\Controllers\UserController::class);
    Route::apiResource('/folders', \App\Http\Controllers\FolderController::class);
    Route::apiResource('/members', \App\Http\Controllers\MemberController::class);
    Route::apiResource('/links', \App\Http\Controllers\LinkController::class);
});
