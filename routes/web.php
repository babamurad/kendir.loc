<?php

use App\Livewire\Admin\CategoryComponent;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\HomeComponent;
use \App\Livewire\UserDashboardComponent;
use App\Livewire\RegisterUserComponent;
use App\Livewire\UserComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\CarouselComponent;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');

Route::get('user', UserComponent::class)->name('login');
Route::get('register', RegisterUserComponent::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', UserDashboardComponent::class)->name('dashboard');
});
Route::middleware(['auth','authadmin'])->group(function () {
    Route::get('admin/dashboard', DashboardComponent::class)->name('admin.dashboard');
    Route::get('admin/categories', CategoryComponent::class)->name('admin.categories');
    Route::get('admin/carousel', CarouselComponent::class)->name('admin.carousel');
});
