<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Balance\Http\Controllers\BalanceController;
use Modules\Role\Http\Controllers\GetRoleController;
use Modules\Role\Http\Controllers\RoleController;
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

Route::post("v1/balances", BalanceController::class )->middleware('guest');
Route::post("v1/roles", RoleController::class )->middleware('guest');
Route::get("v1/roles", GetRoleController::class )->middleware('guest');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
