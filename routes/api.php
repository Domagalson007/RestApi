<?php

use App\Http\Controllers\controllerpeople;
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

Route::get('Domagala/305356/people', [controllerpeople::class, 'index']);
Route::post('Domagala/305356/people', [controllerpeople::class, 'create']);
Route::get('Domagala/305356/people', [controllerpeople::class, 'read']);
Route::put('Domagala/305356/people', [controllerpeople::class, 'update']);
Route::delete('Domagala/305356/people', [controllerpeople::class, 'delete']);