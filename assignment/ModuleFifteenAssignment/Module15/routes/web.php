<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\FormValidation;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Task 1: Request Validation
Route::post('/validate-form', [FormValidation::class, 'validateForm']);

// Task 2: Request Redirect
Route::get('/home', [FormValidation::class, 'redirect1']);
Route::get('/dashboard', [FormValidation::class, 'redirect2']);

// Task 4: Route Middleware
Route::middleware([AuthMiddleware::class])->group(function (){
    Route::get('/profile', [DemoController::class, 'AuthUser']);
    Route::get('/settings', [DemoController::class, 'UserSetting']);
});
// Task 5: Controller CRUD
Route::resource('products', ProductController::class);

// Task 7: Resource Controller
Route::resource('Post', PostController::class);

// Task 8: Blade Template Engine
Route::view('/','welcome');

