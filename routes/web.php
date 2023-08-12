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

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

// 暗黙の結合によって{post}にはPostControllerのshowメソッドの引数のpostのidが格納される
Route::get('posts/{post}', [PostController::class, 'show']);

Route::post('/posts', [PostController::class, 'store']);