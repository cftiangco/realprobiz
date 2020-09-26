<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;

Route::get('/',[PropertiesController::class, 'index']);

Route::get('/admin',[PropertiesController::class, 'create']);

Route::get('/properties', [PropertiesController::class, 'showProperties']);

Route::post('/properties', [PropertiesController::class, 'store']);

Route::get('/properties/{id}', [PropertiesController::class, 'show']);

Route::get('/properties/edit/{id}', [PropertiesController::class, 'edit']);

Route::put('/properties/edit/{id}', [PropertiesController::class, 'update']);

Route::delete('/properties/{id}', [PropertiesController::class, 'destroy']);
