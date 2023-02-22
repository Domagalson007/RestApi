<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


Route::get('domagala/305356/people', [PeopleController::class, 'index']);
Route::get('domagala/305356/people/{people}', [PeopleController::class, 'read']);
Route::delete('domagala/305356/people/{people}', [PeopleController::class, 'delete']);
Route::post('domagala/305356/people', [PeopleController::class, 'create']);
Route::put('domagala/305356/people/{people}', [PeopleController::class, 'update']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
