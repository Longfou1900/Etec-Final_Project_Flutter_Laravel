<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->get('/user', function(Request $request){
    return $request -> user();
});

Route::middleware(['auth:sanctum', 'role:admin']) -> post('/product', [ProductController::class, 'insertProduct']);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/product', [ProductController::class, 'getProduct']);
// Route::post('/product', [ProductController::class, 'insertProduct']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);

Route::delete('/product/{id}', [ProductController::class, 'deleteProduct']);
Route::put("/product/{id}", [ProductController::class, 'update']);

// 1. PUBLIC ROUTES (Anyone can try to login)
Route::post('/login', [AuthController::class, 'login']);

// 2. PROTECTED ROUTES (Requires the User to have a valid Sanctum Bearer token)
Route::middleware('auth:sanctum')->group(function () {
    
    // Logout endpoint
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Product Endpoints
    Route::get('/products', [ProductController::class, 'getProduct']);
    Route::post('/product', [ProductController::class, 'insertProduct']);
    Route::put('/product/{id}', [ProductController::class, 'update']);
    Route::delete('/product/{id}', [ProductController::class, 'deleteProduct']);
});