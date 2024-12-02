<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

require __DIR__.'/auth.php';
