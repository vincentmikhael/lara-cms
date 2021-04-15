<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Models\Card;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/level', [HomeController::class, 'level']);

Route::post('/level', [LevelController::class, 'store'])->name('store.level');
Route::delete('/level/{id}', [LevelController::class, 'delete'])->name('delete.level');

Route::post('/card', [CardController::class, 'store'])->name('store.card');
Route::get('/card/{id}', [CardController::class, 'edit'])->name('edit.card');
Route::put('/card/{id}', [CardController::class, 'update'])->name('update.card');
Route::delete('/card', [CardController::class, 'delete'])->name('delete.card');

Route::get('/score', [HomeController::class, 'score'])->name('score');
