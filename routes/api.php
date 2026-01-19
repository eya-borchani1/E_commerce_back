<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusarController;
 // Assuming you create a ProductController

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('getUser', [MusarController::class,'getUser']);
// Example API resource routes for products
Route::apiResource('users', MusarController::class);
Route::apiResource('products', App\Http\Controllers\ProductController::class);
// You can also define individual routes
Route::get('/hello', function () {
    return response()->json(['message' => 'Hello from the API!']);
});