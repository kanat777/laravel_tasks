<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return view('welcome', ['name' => 'Kanat Kozhakhmet']);
});
Route::get('/info', [InfoController::class, 'index']);
