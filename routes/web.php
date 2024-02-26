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
use \App\Livewire\ChekoutComponent;
use \App\Livewire\ThankYouComponent;
use \App\Livewire\TermsComponent;
use App\Livewire\ContactComponent;
use \App\Livewire\Admin\AdminContactComponent;
use \App\Livewire\Admin\AdminMessageComponent;
use \App\Livewire\Admin\AdminArchiveMessageComponent;

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
Route::get('checkout', ChekoutComponent::class)->name('checkout');
Route::get('checkout', ChekoutComponent::class)->name('checkout');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
Route::get('/terms', TermsComponent::class)->name('terms');
Route::get('/contacts', ContactComponent::class)->name('contacts');


Route::get('user', UserComponent::class)->name('user');
Route::get('register', RegisterUserComponent::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', UserDashboardComponent::class)->name('dashboard');

});
Route::middleware(['auth','authadmin'])->prefix('admin')->group(function () {
    Route::get('dashboard', DashboardComponent::class)->name('admin.dashboard');
    Route::get('categories', CategoryComponent::class)->name('admin.categories');
    Route::get('carousel', CarouselComponent::class)->name('admin.carousel');
    Route::get('products', ProductComponent::class)->name('admin.products');
    Route::get('create-product', AddProductComponent::class)->name('admin.create-product');
    Route::get('edit-product/{product_id}', ProductEditComponent::class)->name('admin.edit-product');
    Route::get('orders', \App\Livewire\Admin\OrderComponent::class)->name('admin.orders');
    Route::get('orders/{order_id}', \App\Livewire\Admin\OrderDetailsComponent::class)->name('admin.order-details');
    Route::get('contacts', AdminContactComponent::class)->name('admin.contacts');
    Route::get('archive-messages', AdminArchiveMessageComponent::class)->name('admin.archive-messages');
    Route::get('message/{id}', AdminMessageComponent::class)->name('admin.message');
});

