<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVarificationMiddleware;
use Illuminate\Support\Facades\Route;


Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);
Route::post('/send-otp', [UserController::class, 'SendOTPCode']);
Route::post('/verify-otp', [UserController::class, 'VerifyOTP']);
Route::post('/reset-password', [UserController::class, 'ResetPassword'])
->middleware([TokenVarificationMiddleware::class]);
