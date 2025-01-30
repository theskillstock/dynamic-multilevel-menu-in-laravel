<?php

use App\Http\Controllers\ActionhandlerController;
use App\Livewire\DashboardComponent;
use App\Livewire\Authentication\AdminLoginComponent;
use App\Livewire\Front\HomePageComponent;
use App\Livewire\Front\Menu\MenuEditComponent;
use App\Livewire\Front\Menu\MenuListComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePageComponent::class)->name('home');
Route::get('/admin/login', AdminLoginComponent::class)->name('login');

Route::get('admin/dashboard', DashboardComponent::class)->name('dashboard');
Route::get('/admin/menu', MenuListComponent::class)->name('menu.list');
Route::get('/admin/menu/{id}/edit', MenuEditComponent::class)->name('menu.edit');
Route::get('/admin/menu/{id}/delete', [ActionhandlerController::class,'deleteMenu'])->name('menu.delete');

