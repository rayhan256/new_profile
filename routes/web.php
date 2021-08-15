<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/portfolio/{id}', [HomeController::class, 'portfolio']);

Route::prefix('cms')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/add', [PortfolioController::class, 'add']);
    Route::post('/portfolio/post', [PortfolioController::class, 'post']);
    Route::get('/portfolio/{id}', [PortfolioController::class, 'view']);
    Route::post('/portfolio/addImage', [PortfolioController::class, 'add_image']);
    Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'destroy']);
});
