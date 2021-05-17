<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome']);

Route::group(['prefix' => 'productos', 'middleware' => 'auth'] ,function () {

    Route::get('/', [ProductoController::class, 'getIndex']);

    Route::get('show/{id}', [ProductoController::class, 'getShow']);

    Route::get('create', [ProductoController::class, 'getCreate']);

    Route::get('edit/{id}', [ProductoController::class, 'getEdit'])->name('edit');

    Route::post('create', [ProductoController::class, 'postCreate']);

    Route::put('edit/{id}', [ProductoController::class, 'putEdit'])->name('putEdit');


	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Auth::routes();
