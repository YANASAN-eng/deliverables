<?php
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\ProductController;

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

// 管理ページはwordpressを用いて作成する

// ホームページ
Route::get('/home', [DisplayController::class, 'showHome'])->name('home');

Route::get('/product', [ProductController::class, 'showProduct'])->name('product');