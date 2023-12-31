<?php

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

Route::get('/', [ProductController::class, 'index'])->name('welcome');
Route::get('/search', [ProductController::class, 'indexs']);
Route::post('/single_sorting', [ProductController::class, 'single_sorting'])->name('single_sorting');
Route::post('/multiple_sorting', [ProductController::class, 'multiple_sorting'])->name('multiple_sorting');
