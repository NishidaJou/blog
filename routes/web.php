<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
<<<<<<< HEAD

Route::get('/', function(){ return view('welcome');});

use App\Http\Controllers\PostControllers;
Route::get('/posts',[PostController::class, 'index']);


=======
Route::get('/', [PostController::class, 'index']); 
Route::get('posts/create',[PostController::class,'create']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::post('posts',[PostController::class,'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class,'delete']);
>>>>>>> 5b7b392b775c4068e38aab50037d98b9b185c9ed
