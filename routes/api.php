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
use Modules\Assignment\Http\Controllers\AssignmentCategoryController;
use Modules\Category\Http\Controllers\CategoryController;
use Modules\Category\Http\Controllers\GetCategoryController;
use Modules\Review\Http\Controllers\ReviewController;
use Modules\Review\Http\Controllers\ReviewUserController;
use Modules\Review\Http\Controllers\GetReviewController;
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
Route::post("v1/{user}/balances", BalanceController::class )->middleware('guest');
Route::get("v1/{user}/balances", BalanceUserController::class)->middleware('guest');

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
 *      MODULES/CATEGORY
 * --------------------------
 * Assignments route is used to create and retrieve surveys or any other
 * task that is to be performed by the client
 */
Route::post("v1/categories", CategoryController::class);
Route::get("v1/categories", GetCategoryController::class);
/**
 * --------------------------
 *      MODULES/ASSIGNMENT
 * --------------------------
 * Assignments route is used to create and retrieve surveys or any other
 * task that is to be performed by the client
 */
Route::post("v1/{category}/assignments", AssignmentController::class);
Route::get("v1/{category}/assignments", AssignmentCategoryController::class);
/**
 * --------------------------
 *      MODULES/REVIEW
 * --------------------------
 *  Review route is used for authenticated clients to post
 *  Receive created reviews
 */
Route::post("v1/{user}/reviews", ReviewController::class)->middleware('guest');
Route::get("v1/{user}/reviews", ReviewUserController::class)->middleware('guest');
Route::get("v1/reviews", GetReviewController::class)->middleware('guest');
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
