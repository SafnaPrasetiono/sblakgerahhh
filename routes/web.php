<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

// use function routing admins
use App\Http\Controllers\admin\dashboardController;

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


Route::get('/', [homeController::class, 'home'])->name('index');

// admin routing the web
Route::prefix('admin')->group(function () {
    Route::get('/', [dashboardController::class, 'dashboard'])->name('dashboard');
});