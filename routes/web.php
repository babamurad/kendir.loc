<?php

use App\Livewire\Admin\CategoryComponent;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\HomeComponent;
use \App\Livewire\UserDashboardComponent;
use App\Livewire\RegisterUserComponent;
use App\Livewire\UserComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\CarouselComponent;
use \App\Livewire\Admin\ProductComponent;
use \App\Livewire\Admin\AddProductComponent;
use \App\Livewire\Admin\ProductEditComponent;
use \App\Livewire\ShopComponent;
use \App\Livewire\CartComponent;
use \App\Livewire\CategoryComponent as ProductCategory;
use \App\Livewire\WishlistComponent;
use \App\Livewire\SearchComponent;
use \App\Livewire\DetailsComponent;

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
Route::get('shop', ShopComponent::class)->name('shop');
Route::get('category/{slug}', ProductCategory::class)->name('product.category');
Route::get('cart', CartComponent::class)->name('cart');
Route::get('wishlist', WishlistComponent::class)->name('wishlist');
Route::get('search', SearchComponent::class)->name('product.search');
Route::get('details/{slug}', DetailsComponent::class)->name('product.details');

Route::get('user', UserComponent::class)->name('user');
Route::get('register', RegisterUserComponent::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', UserDashboardComponent::class)->name('dashboard');

});
Route::middleware(['auth','authadmin'])->group(function () {
    Route::get('admin/dashboard', DashboardComponent::class)->name('admin.dashboard');
    Route::get('admin/categories', CategoryComponent::class)->name('admin.categories');
    Route::get('admin/carousel', CarouselComponent::class)->name('admin.carousel');
    Route::get('admin/products', ProductComponent::class)->name('admin.products');
    Route::get('admin/create-product', AddProductComponent::class)->name('admin.create-product');
    Route::get('admin/edit-product/{product_id}', ProductEditComponent::class)->name('admin.edit-product');
});
