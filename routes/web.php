<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\DashboardComponent;
use App\Livewire\Authentication\AdminLoginComponent;
use App\Livewire\Front\HomePageComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePageComponent::class)->name('home');
Route::get('/admin/login', AdminLoginComponent::class)->name('login');

Route::get('admin/dashboard', DashboardComponent::class)->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('dashboard', DashboardComponent::class)->name('dashboard');
// });

require __DIR__ . '/auth.php';
