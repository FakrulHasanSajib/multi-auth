<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::prefix('admin')->group(function ():void{
    Route::middleware(['auth', 'verified'])->group(function ():void{
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        });
    });