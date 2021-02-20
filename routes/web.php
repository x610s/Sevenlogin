<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreciosController;





Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/precios',[PreciosController::class,'index'])->name('precios.index');



