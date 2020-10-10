<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ContentController;
use App\Contents;
use Illuminate\Http\Request;



/* SEND EMAIL */
Route::get('/sendmail',function(Request $request) {
  $details = [
    'subject' => $request->subject,
    'fullname' => $request->fname . ' ' . $request->lname,
    'email' => $request->email,
    'subject' => $request->subject,
    'message' => $request->message
  ];

  $content = Contents::first();

  \Mail::to($content->email_us)->send(new \App\Mail\ProBizMail($details));
  return 'Email has been send';
});

/* CONTENTS */
Route::get('/contents',[ContentController::class, 'index']);
Route::put('/contents',[ContentController::class, 'update']);

/* INDEX PROPERTIES */
Route::get('/',[PropertiesController::class, 'index']);
Route::get('/new',[PropertiesController::class, 'create']);
Route::get('/properties', [PropertiesController::class, 'showProperties'])->middleware('auth');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
