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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AutheController::class, 'register']);
Route::post('login', 'App\Http\Controllers\AutheController@login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    // Route::resource('individual', VisitorController::class);
    Route::post('logout', [AuthController::class, 'logout']);
});
