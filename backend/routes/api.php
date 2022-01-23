<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('profile');
    Route::get('/user/update', [\App\Http\Controllers\UserController::class, 'update'])->name('profileUpdate');
    Route::get('/comment', [\App\Http\Controllers\CommentController::class, 'onlyUserTimeline'])->name('onlyUserTimeline');
    Route::post('/comment', [\App\Http\Controllers\CommentController::class, 'post'])->name('post');
    Route::get('/comment/all', [\App\Http\Controllers\CommentController::class, 'allUserTimeline'])->name('allUserTimeline');
});
