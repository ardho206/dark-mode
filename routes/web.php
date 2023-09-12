<?php

use App\Models\Game;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Middleware\setDefaultTheme;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardGameController;

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


Route::get('/', function () {
    $games = Game::all();
    $title = 'Top up dan Joki terpercaya';
    return view('components.index', compact('games', 'title'));
});

Route::prefix('order')->group(function () {
    Route::get('/', [GameController::class, 'index'])->name('games.index');
    Route::get('/{game:slug}', [GameController::class, 'show'])->name('games.show');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('/dashboard/game', DashboardGameController::class);
