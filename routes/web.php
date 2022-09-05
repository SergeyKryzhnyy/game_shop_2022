<?php

use App\Http\Controllers\About;
use App\Http\Controllers\GameList;
use App\Http\Controllers\News;
use App\Http\Controllers\Order;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;


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
Route::view('login', 'auth.login')->name('login');
Route::view('register', 'auth.register')->name('register');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//
//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();
//});
