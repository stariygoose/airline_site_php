<?php

use App\Http\Controllers\AirportsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('main-page');
});

Route::get('airports', [AirportsController::class, 'index']);