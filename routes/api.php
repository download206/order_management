<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;


use App\Models\Client;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Agrupamento de rotas com middleware e prefixo
Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    // Rotas para o recurso Client
    Route::apiResource('clients', ClientController::class);
    // Rotas para o recurso Product
    Route::apiResource('products', ProductController::class);
    // Rotas para o recurso Order
    Route::apiResource('orders', OrderController::class);
    // Rotas para o recurso OrderItem
    Route::apiResource('order-items', OrderItemController::class);


     // Rotas para o recurso OrderItem
     Route::apiResource('order-items', OrderItemController::class);
     // Adicionando rota para order-items.create
     Route::get('order-items/create', [OrderItemController::class, 'create']);
 });


