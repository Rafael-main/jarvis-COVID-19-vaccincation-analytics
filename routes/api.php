<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutheController;
use App\Http\Controllers\UserController;

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

Route::post('register', [AutheController::class, 'register']);
Route::post('login', [AutheController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    // Route::resource('individual', VisitorController::class);
    // Route::resource('individual', VisitedAtController::class);
    // Route::resource('individual', EstablishmentController::class);
    // Route::resource('individual', UserController::class);
    Route::post('logout', [AuthController::class, 'logout']);
});
