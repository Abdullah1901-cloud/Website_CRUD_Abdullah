<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\CustomerController;


Route::get('/', function () {
    return view('pages.home.index');
});
Route::get('/item', [ItemController::class,'index']);
Route::get('/item/create', [ItemController::class,'create']);
Route::get('/item/edit/{id}', [ItemController::class,'edit']);
Route::post('/item/store', [ItemController::class,'store']);
Route::delete('/item/{id}', [ItemController::class,'delete']);
Route::put('/item/{id_item}', [ItemController::class,'update']);
Route::get('/customer', [CustomerController::class,'index']);
