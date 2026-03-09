<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return view('welcome', ['name' => 'Kanat Kozhakhmet']);
});
Route::get('/info', [InfoController::class, 'index']);

Route::middleware(['auth', 'check.account'])->group(function () {

    Route::get('/dashboard', function () {
        return "Dashboard page";
    });

});

Route::get('/account-inactive', function () {
    return "Your account is not active.";
});
