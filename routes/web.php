<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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
    return view('welcome');
});

Route::get('/formulario', [WebController::class, 'show']);
Route::post('store-form', [WebController::class, 'store'])->name('store-form');

Route::get('/mostrar', [WebController::class, 'showData'])->name('show-data');
Route::get('/login', [WebController::class, 'login'])->name('login');




