<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestController;





    Route::get('/', [AttendanceController::class, 'getindex']);
    Route::get('/attendance/start',[AttendanceController::class,'startAttendance']);
    Route::get('/attendance/end',[AttendanceController::class,'endAttendance']);
    Route::get('/attendance/{num}',[AttendanceController::class,'getAttendance']);
    
    Route::get('/break/start',[RestController::class,'startRest']);
    Route::get('/break/end',[RestController::class,'endRest']);

    Route::get('/register',[AuthController::class,'getRegister']);
    Route::post('/register',[AuthController::class,'postRegister']);
    Route::get('/login',[AuthController::class,'getLoign']);
    Route::post('/login',[AuthController::class,'postLoign']);
    Route::get('/logout',[AuthController::class,'getLogout']);



    
