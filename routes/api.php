<?php

use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OvertimeController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post("login", LoginController::class);
Route::post("register", RegisterController::class);
Route::get("user/{user_id}", [UserController::class, "index"]);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post("leave", LeaveController::class);
    Route::post("overtime", OvertimeController::class);
    // Route::get("user/:user_id", UserController::class);
});
