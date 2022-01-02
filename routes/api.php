<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Modules\Admin\Http\Controllers\AdminController;
use Modules\Balance\Http\Controllers\BalanceController;
use Modules\Balance\Http\Controllers\BalanceUserController;
use Modules\Role\Http\Controllers\GetRoleController;
use Modules\Role\Http\Controllers\RoleController;
use Modules\Task\Http\Controllers\TaskController;
use Modules\Assignment\Http\Controllers\AssignmentController;
use Modules\Assignment\Http\Controllers\AssignmentIdController;
use Modules\Review\Http\Controllers\ReviewController;
use Modules\Review\Http\Controllers\ReviewUserController;
use Modules\Task\Http\Controllers\TaskUserController;

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
 /**
  *    --------------------------------------------------
  *     EACH ENDPOINT IS MAPPED TO ITS OWN DOMAIN
  *     THE DOMAINS CAN BE FOUND IN THE MODULES FOLDER
  *     --------------------------------------------------
 */
/**
 * --------------------------
 *      MODULES/BALANCE
 * --------------------------
 * Balances route used for updating and checking current user balance
 */
Route::post("v1/balances", BalanceController::class )->middleware('guest');
Route::get("v1/balances/{user}", BalanceUserController::class)->middleware('guest');

/**
 * --------------------------
 *      MODULES/ROLE
 * --------------------------
 * Roles route used for assigning roles to users who are registering
 * The client consumes the roles in the DB and user is assigned on registration
 */
Route::post("v1/roles", RoleController::class )->middleware('guest');
Route::get("v1/roles", GetRoleController::class )->middleware('guest');

/**
 *   --------------------------
 *      MODULES/TASKS
 *    --------------------------
 * Tasks route is used to check if current user has completed certains tasks
 * It will also be used in assigning tasks/assignments to users
 */
Route::post("v1/tasks", TaskController::class)->middleware('guest');
Route::get("v1/tasks", TaskUserController::class)->middleware('guest');

/**
 * --------------------------
 *      MODULES/ASSIGNMENT
 * --------------------------
 * Assignments route is used to create and retrieve surveys or any other
 * task that is to be performed by the client
 */
Route::post("v1/assignments", AssignmentController::class)->middleware('guest');
Route::get("v1/assignments/{assignment}", AssignmentIdController::class)->middleware('guest');
/**
 * --------------------------
 *      MODULES/REVIEW
 * --------------------------
 *  Review route is used for authenticated clients to post
 *  Receive created reviews
 */
Route::post("v1/reviews", ReviewController::class)->middleware('guest');
Route::get("v1/reviews", ReviewUserController::class)->middleware('guest');
/**
 * --------------------------
 *      MODULES/ADMIN
 * --------------------------
 *  Review route is used for authenticated clients to post
 *  Receive created reviews
 */
// Route::get("v1/admin", AdminController::class)->middleware('guest');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
