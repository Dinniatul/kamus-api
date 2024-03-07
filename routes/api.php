<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosaKataController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::get('/kosa-kata', [KosaKataController::class, 'index']);
Route::get('/kosa-kata/{id}', [KosaKataController::class, 'show']);
Route::post('/kosa-kata', [KosaKataController::class, 'store']);
Route::put('/kosa-kata/{id}', [KosaKataController::class, 'update']);
Route::delete('/kosa-kata/{id}', [KosaKataController::class, 'destroy']);

