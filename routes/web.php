<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en');
Route::get('/{locale}', [IndexController::class, 'index']);
