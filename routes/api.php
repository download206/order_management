<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
