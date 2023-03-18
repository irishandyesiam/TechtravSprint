<?php

use App\Http\Controllers\Api\UserController;
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

// Route::apiResource('users', UserController::class);

Route::prefix('users')
->name('users.')
->group(function () {
    Route::get('/', [userController::class, 'index'])->name('index');
    Route::post('/', [userController::class, 'store'])->name('store');
    Route::get('/', [userController::class, 'show'])->name('show');
    Route::put('/', [userController::class, 'update'])->name('update');
    Route::delete('/', [userController::class, 'destory'])->name('destory');
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
