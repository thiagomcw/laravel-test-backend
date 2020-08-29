<?php

use App\Http\Controllers\ContractsController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('web.properties.index');
});

Route::resource('properties', PropertiesController::class, ['only' => ['index', 'create', 'store']]);

Route::resource('contracts', ContractsController::class, ['only' => ['index', 'create', 'store']]);
