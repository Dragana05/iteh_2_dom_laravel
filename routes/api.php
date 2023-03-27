<?php

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

Route::get('bend', [BendKontroller::class, 'index']);
Route::get('bend/{id}', [BendKontroller::class, 'show']);
Route::post('bend', [BendKontroller::class, 'store']);
Route::delete('bend/{id}', [BendKontroller::class, 'destroy']);
Route::get('pevac', [PevacKontroller::class, 'index']);
Route::get('pevac/{id}', [PevacKontroller::class, 'show']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
