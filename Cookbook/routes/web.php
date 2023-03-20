<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/', function () {
    $service = resolve( name:\App\Services\DataFromTasty\Service::class);

    dd($service->recipes());
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::apiResource('recipes', RecipeController::class)
    ->only(['index'])
    ->middleware(['auth', 'verified']);

Route::controller(App\Http\Controllers\Api\RecipeController::class)->group(function (){
    Route::get('/add_recipe', 'create');
    Route::post('/add_recipe', 'store');
    Route::get('/edit_recipe/{recipe_id}', 'edit');
    Route::put('/update_recipe/{recipe_id}', 'update');
    Route::delete('/delete_recipe/{recipe_id}', 'destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
