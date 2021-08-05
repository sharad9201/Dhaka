<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DhakaController;

/*`
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('dhaka', DhakaController::class);
Route::get('dhaka',[DhakaController::class,'dhaka']);

Route::post('dhaka', [DhakaController::class,'dhakastore']);

Route::get('dhaka/{id}',[DhakaController::class,'dhakaById']);

Route::put('dhaka/{id}',[DhakaController::class,'dhakaUpdate']);

Route::delete('dhaka/{id}',[DhakaController::class,'dhakaDelete']);

Route::get('search/{design}',[DhakaController::class,'search']);

Route::put('buyProduct/{dhaka}',[DhakaController::class,'buyProduct']);
Route::put('addStocks/{dhaka}',[DhakaController::class,'addStocks']);
