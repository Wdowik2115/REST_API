<?php

use App\Http\Controllers\Api\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('wdowik/305422/people', [PeopleController::class, 'index']);
Route::post('wdowik/305422/people', [PeopleController::class, 'create']);
Route::get('wdowik/305422/people/{people}', [PeopleController::class, 'read']);
Route::put('wdowik/305422/people/{people}', [PeopleController::class, 'update']);
Route::delete('wdowik/305422/people/{people}', [PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});