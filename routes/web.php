<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\LiburanController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('Liburan', [LiburanController::class, "index"]);