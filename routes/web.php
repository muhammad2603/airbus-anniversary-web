<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\EngineeringPillarsModel;

Route::get('/', [HomeController::class, "index"]);
