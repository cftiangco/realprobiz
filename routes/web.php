<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ListController;


/* INDEX PROPERTIES */
Route::get('/',[PropertiesController::class, 'index']);
Route::get('/new',[PropertiesController::class, 'create']);
Route::get('/properties', [PropertiesController::class, 'showProperties']);
Route::post('/properties', [PropertiesController::class, 'store']);
Route::get('/properties/{id}', [PropertiesController::class, 'show']);
Route::get('/properties/edit/{id}', [PropertiesController::class, 'edit']);
Route::put('/properties/edit/{id}', [PropertiesController::class, 'update']);
Route::delete('/properties/{id}', [PropertiesController::class, 'destroy']);


/* LISTS */
Route::get('/properties/lists/{id}',[ListController::class, 'index']);
Route::get('/properties/{id}/list/create/',[ListController::class, 'create']);
Route::post('/properties/{id}/lists/create/',[ListController::class, 'store']);
Route::get('/properties/lists/{pid}/edit/{lid}',[ListController::class, 'edit']);
Route::put('/properties/lists/{pid}/edit/{lid}',[ListController::class, 'update']);
Route::delete('/properties/{pid}/lists/{lid}/delete',[ListController::class, 'destroy']);


