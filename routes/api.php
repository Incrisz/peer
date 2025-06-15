<?php

use App\Http\Controllers\Api\CountdownController;
use App\Http\Controllers\Api\IocController;
use App\Http\Controllers\Api\RoundController;
use App\Http\Controllers\Api\BlockchainController;
use App\Models\Countdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('admin')->group(function () {
    
    Route::get('/show/countdown', [IocController::class, 'getCountdown'])->name('get.countdown');
    Route::get('/show/rounds', [IocController::class, 'getRounds'])->name('get.rounds');

    Route::get('/transaction', [IoCController::class, 'getTransactions'])->name('get.transactions');

    Route::put('/update-token-sale-price', [IoCController::class, 'updateTokenSalePrice'])->name('update.token.sale.price');
});
