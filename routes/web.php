<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', [NewsController::class, 'index'])->name('news.index');
Route::get('/add', [NewsController::class, 'add'])->middleware('auth');
Route::post('/add', [NewsController::class, 'addtodb']);
Route::get('/article/{id}', [NewsController::class, 'article'])->name('article');

Route::get('/login', [AuthController::class, 'create'])->name('auth.create');
Route::post('/login', [AuthController::class, 'store'])->name('auth.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/comments/add/{newsId}', [CommentsController::class, 'create'])->name('comments.create');
Route::post('/comments/add', [CommentsController::class, 'store'])->name('comments.store');

