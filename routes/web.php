<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

use Inertia\Inertia;

use App\Http\Controllers\{
    ObterHoteisController
};

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

Route::any('/hoteis/search', [ObterHoteisController::class, 'search'])->name('hoteis.search');
Route::get('/hoteis/create', [ObterHoteisController::class, 'create'])->name('hoteis.create');
Route::put('/hoteis/{id}', [ObterHoteisController::class, 'update'])->name('hoteis.update');
Route::get('/hoteis/edit/{id}', [ObterHoteisController::class, 'edit'])->name('hoteis.edit');
Route::delete('/hoteis/{id}', [ObterHoteisController::class, 'destroy'])->name('hoteis.destroy');
Route::get('/hoteis/{id}', [ObterHoteisController::class, 'show'])->name('hoteis.show');
Route::post('/hoteis', [ObterHoteisController::class, 'store'])->name('hoteis.store');
Route::get('/hoteis', [ObterHoteisController::class, 'index'])->name('hoteis.index');
