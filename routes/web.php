<?php

use App\Http\Controllers\FilminhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('filminho.index');
});

Route::resource('filminho', FilminhoController::class);
