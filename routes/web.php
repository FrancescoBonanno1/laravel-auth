<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AutenticationModelController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    
    Route::resource('admin', AutenticationModelController::class);
});



require __DIR__.'/auth.php';
