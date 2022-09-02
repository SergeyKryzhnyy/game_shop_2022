<?php

use App\Http\Controllers\About;
use App\Http\Controllers\GameList;
use App\Http\Controllers\News;
use App\Http\Controllers\Order;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('main_content');
});

Route::get('/main', [GameList::class, 'getAllGames'])->name('main');
Route::get('/about', [About::class, 'getAboutUs'])->name('about');
Route::get('/news', [News::class, 'getNews'])->name('news');
Route::get('/orders', [Order::class, 'getMyOrders'])->name('news');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
