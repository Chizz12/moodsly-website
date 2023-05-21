<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CreateController;
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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function() {
Route::get('/', [DashboardController::class, 'index']);
Route::post('/items', [ItemController::class, 'store']);
Route::get('/items/random', [ItemController::class, 'getRandom']);
Route::post('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::get('/create', [CreateController::class, 'create'])->name('items.create');

});
