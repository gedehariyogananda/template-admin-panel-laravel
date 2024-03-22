<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\user\UserController;
use App\Http\Controllers\API\CampainController;
use App\Http\Controllers\API\ReqCampainController;
use App\Http\Controllers\API\TransactionController;

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


Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout')->middleware(['auth:sanctum']);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user/{userId}', 'show')->middleware(['auth:sanctum', 'verifyUser']);
    Route::put('/user/{userId}', 'update')->middleware(['auth:sanctum', 'verifyUser']);
    Route::delete('/user/{user}', 'destroy');
    Route::get('/users', 'allUsers');
});

Route::controller(TransactionController::class)->group(function () {
    Route::post('/transactions/{id}', 'store');
    Route::put('/transactions/{historyCampain}', 'update');
    Route::delete('/transactions/{historyCampain}', 'destroy');
    Route::get('/transactions/{id}', 'Transaction');
});

Route::controller(CampainController::class)->group(function () {
    Route::get('/campain/{campain}', 'show');
    Route::put('/campain/{campain}', 'update');
    Route::get('/campain/withdraw/{id}/{userId}', 'withdraw')->middleware(['auth:sanctum', 'verifyUser']);
    Route::delete('/campain/{campain}', 'destroy');
    Route::post('/campain/', 'store');
    Route::get('/campain-user/{userId}', 'campainByUser')->middleware(['auth:sanctum', 'verifyUser']);
    Route::get('/campains', 'campainList');
    Route::get('/main-campains', 'mainCampain');
});

Route::controller(ReqCampainController::class)->group(function () {
    Route::get('/req-campain/{reqCamp}', 'show');
    Route::put('/req-campain/{reqCamp}', 'update')->middleware(['auth:sanctum']);
    Route::delete('/req-campain/{reqCamp}', 'destroy');
    Route::post('/req-campain', 'store')->middleware(['auth:sanctum']);
    Route::get('/req-campains', 'allReqCampains');
    Route::get('/req-campains/user/{userId}', 'reqCampByUser')->middleware(['auth:sanctum', 'verifyUser']);
    Route::get('/req-campains/download-proposal/{reqCamp}', 'download');
});
