<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;


Route::get('hello', [TestController::class, 'hello']);
Route::get('db', [TestController::class, 'hello']);