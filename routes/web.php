<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('category/{category_name}', [HomeController::class, 'category'])->name('category');

Route::get('book/{id}', [HomeController::class, 'viewBook'])->name('view-book');

Route::prefix('publisher/')->group(function(){
    Route::get('/{detail_name}', [PublisherController::class, 'detail'])->name('publisher_detail');

    Route::get('/', [PublisherController::class, 'index'])->name('publisher');
});

Route::get('contact', [HomeController::class, 'contact'])->name('contact');



