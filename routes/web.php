<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



// Register Route Page
Route::get('/', [ AuthController::class, 'showCreate' ]) -> name('showCreate.page');
Route::post('/', [ AuthController::class, 'create' ]) -> name('create.page');













