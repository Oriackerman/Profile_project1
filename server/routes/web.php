<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController; 

Route::get('/api/data', [DataController::class, 'fetchData']);


Route::get('/', function () {
    return view('welcome');
});

