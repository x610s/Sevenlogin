<?php

use App\Http\Controllers\PanelAdministrador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreciosController;





Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('/precios', PreciosController::class);
Route::resource('/admin', PanelAdministrador::class);


