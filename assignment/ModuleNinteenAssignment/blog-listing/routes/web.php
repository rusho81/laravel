<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

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

Route::get('/', [HomeController::class, 'page']);

/** Ajax call */
Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/socialData', [HomeController::class, 'socialData']);
Route::get('/postData', [HomeController::class, 'postData']);
Route::get('/post/{id}', [PageController::class, 'singleData']);
Route::get('/post/{id}/full', [PageController::class, 'testData']);
Route::post('/comments', [CommentController::class, 'comments']);


