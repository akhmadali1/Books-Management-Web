<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PublishersController;
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

Route::get('/',[BooksController::class,'index']);
Route::get('/contact', [CategoriesController::class,'indexcat']);
Route::get('/publisher', [PublishersController::class,'index']);
Route::get('/category/{category:id}', [CategoriesController::class, 'index']);
Route::get('/{book:id}', [BooksController::class, 'show']);




