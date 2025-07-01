<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/sample', [AdminController::class, 'sample'])->name('view.sample');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

    // Employee Resource Routes
    Route::resource('employees', EmployeeController::class)->names([
        'index' => 'admin.employees.index',
        'create' => 'admin.employees.create',
        'store' => 'admin.employees.store',
        'show' => 'admin.employees.show',  // this route will handle the 'show' method with the ID parameter
        'edit' => 'admin.employees.edit',
        'update' => 'admin.employees.update',
        'destroy' => 'admin.employees.destroy',
    ]);

    // Leave Resource Routes
    Route::resource('leave', LeaveController::class)->names([
        'index' => 'admin.leave.index',
        'create' => 'admin.leave.create',
        'store' => 'admin.leave.store',
        'show' => 'admin.leave.show',
        'edit' => 'admin.leave.edit',
        'update' => 'admin.leave.update',
        'destroy' => 'admin.leave.destroy',
    ]);

    // Payroll Resource Routes
    Route::resource('payroll', PayrollController::class)->names([
        'index' => 'admin.payroll.index',
        'create' => 'admin.payroll.create',
        'store' => 'admin.payroll.store',
        'show' => 'admin.payroll.show',
        'edit' => 'admin.payroll.edit',
        'update' => 'admin.payroll.update',
        'destroy' => 'admin.payroll.destroy',
    ]);

    // User Resource Routes
    Route::resource('user', UserController::class)->names([
        'index' => 'admin.user.index',
        'create' => 'admin.user.create',
        'store' => 'admin.user.store',
        'show' => 'admin.user.show',
        'edit' => 'admin.user.edit',
        'update' => 'admin.user.update',
        'destroy' => 'admin.user.destroy',
    ]);

    // Schedule Resource Routes
    Route::resource('schedule', ScheduleController::class)->names([
        'index' => 'admin.schedule.index',
        'create' => 'admin.schedule.create',
        'store' => 'admin.schedule.store',
        'show' => 'admin.schedule.show',
        'edit' => 'admin.schedule.edit',
        'update' => 'admin.schedule.update',
        'destroy' => 'admin.schedule.destroy',
    ]);
});

// Include Authentication Routes
require __DIR__.'/auth.php';