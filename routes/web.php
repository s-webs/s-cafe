<?php

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    phpinfo();
});



Route::get('product-categories', [ProductCategoryController::class, 'index']);
Route::get('product-categories/{id}', [ProductCategoryController::class, 'show']);
Route::post('product-categories', [ProductCategoryController::class, 'store']);
Route::put('product-categories/{id}', [ProductCategoryController::class, 'update']);
Route::delete('product-categories/{id}', [ProductCategoryController::class, 'delete']);
