<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BendKontroller;
use App\Http\Controllers\PevacKontroller;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('bend', [BendKontroller::class, 'index']);
Route::get('bend/{id}', [BendKontroller::class, 'show']);
Route::get('pevac', [PevacKontroller::class, 'index']);
Route::get('pevac/{id}', [PevacKontroller::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('bend', [BendKontroller::class, 'store']);
    Route::delete('bend/{id}', [BendKontroller::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
