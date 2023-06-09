<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



// Register Route 
Route::get('/create', [ AuthController::class, 'showCreate' ]) -> name('showCreate.page');
Route::post('/create', [ AuthController::class, 'create' ]) -> name('create.page');

// Store Route
Route::get('/', [ AuthController::class, 'store']) -> name('store.page');
// View Route
Route::get('/view/{id}', [ AuthController::class, 'view' ]) -> name('view.page');










