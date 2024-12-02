<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

Route::get('manager/dashboard', function () {
    return view('manager.dashboard');
})->name('manager.dashboard');
require __DIR__.'/auth.php';
