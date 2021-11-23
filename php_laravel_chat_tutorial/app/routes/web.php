<?php

use App\Http\Controllers\RoomController;
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
    return redirect('/rooms');
});

Route::get('/rooms', [RoomController::class, 'index'])->middleware(['auth'])->name('rooms.index');
Route::post('/rooms', [RoomController::class, 'store'])->middleware(['auth'])->name('rooms.store');
Route::get('/rooms/{id}', [RoomController::class, 'show'])->middleware(['auth'])->name('rooms.show');
Route::post('/rooms/{id}', [RoomController::class, 'join'])->middleware(['auth'])->name('rooms.join');

require __DIR__.'/auth.php';
