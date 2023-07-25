<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TODOController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVarificationMiddleware;
use Illuminate\Support\Facades\Route;


//API Route
Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);
Route::post('/send-otp', [UserController::class, 'SendOTPCode']);
Route::post('/verify-otp', [UserController::class, 'VerifyOTP']);
Route::post('/reset-password', [UserController::class, 'ResetPassword'])
->middleware([TokenVarificationMiddleware::class]);

//TODO Route
Route::post('/create-todo', [TODOController::class, 'TodoCreate'])
->middleware([TokenVarificationMiddleware::class]);

Route::get('/todo-list', [TODOController::class, 'TodoList'])
->middleware([TokenVarificationMiddleware::class]);

Route::post('/delete-todo', [TODOController::class, 'TodoDelete'])
->middleware([TokenVarificationMiddleware::class]);

Route::post('/update-todo', [TODOController::class, 'TodoUpdate'])
->middleware([TokenVarificationMiddleware::class]);





