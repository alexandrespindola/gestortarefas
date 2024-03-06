<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;

// out app
Route::middleware('CheckLogout')->group(function() {
    Route::get('/login', [Main::class, 'login'])->name('login');
    Route::post('/login_submit', [Main::class, 'login_submit'])->name('login_submit');
});

// in app
Route::middleware('CheckLogin')->group(function() {
    Route::get('/', [Main::class, 'index'])->name('index');
    Route::get('/logout', [Main::class, 'logout'])->name('logout');

    // tasks
    Route::get('/new_task', [Main::class, 'new_task'])->name('new_task');
    Route::post('/new_task_submit', [Main::class, 'new_task_submit'])->name('new_task_submit');
});
