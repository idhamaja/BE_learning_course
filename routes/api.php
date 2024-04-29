<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['namespace'=>'Api'], function(){
    // Route::post('/login', [UserController::class, 'createUser']);
    Route::post('/login', 'UserController@createUser');

    //authentication middleware
    Route::group(['middleware'=>['auth:sanctum']], function(){
        Route::any('/courseList', [CourseController::class, 'courseList']);
    });
});


// Route::post('/auth/login', [UserController::class, 'loginUser']);
