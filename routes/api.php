<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function(){
    Route::post('/register','register');
    Route::post('/login','login');
});

Route::controller(MemberController::class)->group(function(){
    Route::post('/members','store');
    Route::put('/members','update');
    Route::get('/members','index');
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
