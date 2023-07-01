<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/posts',[PostController::class,'index']);
Route::get('/all',[PostController::class,'all']);
Route::get('/category/{id}',[PostController::class,'totalPost']);
Route::get('/posts/{id}/delete',[PostController::class,'delatePost']);
Route::get('/posts/softdelete',[PostController::class,'onlySoftDelete']);

Route::get('categories/latest', [PostController::class, 'latestCat']);
Route::get('/categories/{id}/posts',[PostController::class, 'postCategory']);
Route::get('categories/{latest}', [PostController::class, 'latestPost']);


