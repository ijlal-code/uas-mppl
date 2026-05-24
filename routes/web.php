<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('/kost/detail-dummy', function () {
    return view('kost.show'); // Ini mengarah ke folder views/kost/show.blade.php
});

require __DIR__.'/auth.php';