<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

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

Route::get('/dashboard', [ProgramController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/create', function () {
    return view('create');
})->middleware(['auth'])->name('create');

Route::post('/store', [ProgramController::class, 'store'])->middleware(['auth'])->name('store');
Route::get('/update/{id}/status', [ProgramController::class, 'update'])->middleware(['auth'])->name('update');
Route::get('/delete/{id}', [ProgramController::class, 'delete'])->middleware(['auth'])->name('delete');

require __DIR__.'/auth.php';
