<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoldPriceController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [GoldPriceController::class, 'index']);   