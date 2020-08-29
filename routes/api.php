<?php

use App\Http\Controllers\Api\PropertiesController;
use Illuminate\Support\Facades\Route;


Route::resource('properties', PropertiesController::class, ['only' => ['index', 'destroy']]);
