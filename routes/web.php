<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;

Route::get('/', function () {
    return redirect()->route('motor.index');
});

Route::resource('motor', MotorController::class)
    ->except(['show']);