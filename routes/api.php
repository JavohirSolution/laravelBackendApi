<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\OrderyController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);
Route::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::apiResources([
    'favorites' => FavoritesController::class,
    'products' => ProductController::class,
    'categories' => CategoryController::class,
    'categories.products' => CategoryProductController::class,
    'orders' => OrderyController::class,
    'user-addresses' => UserAddressController::class,
    'delivery-methods' => DeliveryMethodController::class,
    'payment-types' => PaymentTypeController::class,
    'user-payment-cards' => UserPaymentCardsController::class
]);
