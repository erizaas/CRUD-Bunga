<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BungaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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



Route::middleware('isPublic')->group(function () {
    Route::get('/', [BungaController::class,'index']);
    Route::get('/login', [BungaController::class,'login']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [BungaController::class,'register']);
    Route::post('/register', [RegisterController::class,'register']);
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('isLogin')->group(function () {
    Route::get('/',[BungaController::class,'dashboard']);
    Route::get('/dashboard', [BungaController::class, 'dashboard']);
    Route::delete('/destroy/{id}', [BungaController::class, 'destroy'])->name('destroy');
    Route::get('/create',[BungaController::class,'create']);
    Route::post('/create',[BungaController::class,'store'])->name('create');
    Route::get('/edit/{id}', [BungaController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [BungaController::class, 'update'])->name('update');
});