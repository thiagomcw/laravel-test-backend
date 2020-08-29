<?php

use App\Http\Controllers\Api\ContractsController;
use App\Http\Controllers\Api\PropertiesController;
use Illuminate\Support\Facades\Route;


Route::resource('properties', PropertiesController::class, ['only' => ['index', 'destroy']]);

Route::resource('contracts', ContractsController::class, ['only' => ['index', 'destroy']]);
