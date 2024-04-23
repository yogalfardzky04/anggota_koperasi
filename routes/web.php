<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\MemberController::class,'dashboard']);
Route::get('/index', [App\Http\Controllers\MemberController::class,'index']);
Route::get('/form', [App\Http\Controllers\MemberController::class,'create']);
Route::post('/save', [App\Http\Controllers\MemberController::class,'save']);
Route::get('/form/{id}', [App\Http\Controllers\MemberController::class,'show']);
Route::get('/form/edit/{id}', [App\Http\Controllers\MemberController::class,'edit']);
Route::get('/form/delete/{id}', [App\Http\Controllers\MemberController::class,'delete']);