<?php

use App\Livewire\Admin\CategoryComponent;
use App\Livewire\Admin\DashboardComponent;
use App\Livewire\Admin\CarouselComponent;
use \App\Livewire\Admin\ProductComponent;
use \App\Livewire\Admin\AddProductComponent;
use \App\Livewire\Admin\ProductEditComponent;
use \App\Livewire\Admin\AdminContactComponent;
use \App\Livewire\Admin\AdminMessageComponent;
use \App\Livewire\Admin\AdminArchiveMessageComponent;
use \App\Livewire\Admin\PostComponent;
use \App\Livewire\Admin\CreatePostComponent;
use \App\Livewire\Admin\EditPostComponent;
use \App\Livewire\Admin\AdminAboutUsComponent;
use \App\Livewire\Admin\BrandComponent;
use \App\Livewire\Admin\ManufacturerComponent;
use \App\Livewire\Admin\ProductOptionsComponent;

use App\Livewire\HomeComponent;
use \App\Livewire\UserDashboardComponent;
use App\Livewire\RegisterUserComponent;
use App\Livewire\UserComponent;
use Illuminate\Support\Facades\Route;
use \App\Livewire\ShopComponent;
use \App\Livewire\CartComponent;
use \App\Livewire\CategoryComponent as ProductCategory;
use \App\Livewire\CategoryDetailsComponent;
use \App\Livewire\WishlistComponent;
use \App\Livewire\SearchComponent;
use \App\Livewire\DetailsComponent;
use \App\Livewire\ChekoutComponent;
use \App\Livewire\ThankYouComponent;
use \App\Livewire\TermsComponent;
use App\Livewire\ContactComponent;
use App\Livewire\PostComponent as Posts;
use App\Livewire\PostDetailComponent;
use App\Livewire\AboutUsComponent;
use App\Livewire\EditProfileComponent;
use App\Livewire\OrderHistoryComponent;
use App\Livewire\UserOrderDetailsComponent;
use App\Livewire\UserAddresessComponent;
use App\Livewire\UserEditAddresessComponent;
use App\Livewire\UserPasswordComponent;
use App\Livewire\CompareComponent;
use \App\Http\Controllers\LocalizationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('locale/{locale?}', [LocalizationController::class, 'setLang'])->name('locale');

Route::middleware(\App\Http\Middleware\Localization::class)->group(function (){
    Route::get('/', HomeComponent::class)->name('home');
    Route::get('shop/{id?}', ShopComponent::class)->name('shop');

    Route::get('category/{slug}', CategoryDetailsComponent::class)->name('product.category');
    Route::get('cart', CartComponent::class)->name('cart');
    Route::get('wishlist', WishlistComponent::class)->name('wishlist');
    Route::get('search', SearchComponent::class)->name('product.search');
    Route::get('details/{slug}', DetailsComponent::class)->name('product.details');
    Route::get('checkout', ChekoutComponent::class)->name('checkout');

    Route::get('calculator', \App\Livewire\Calculator\CalculatorComponent::class)->name('calculator');

    Route::get('thank-you', ThankyouComponent::class)->name('thankyou');
    Route::get('terms', TermsComponent::class)->name('terms');
    Route::get('contacts', ContactComponent::class)->name('contacts');
    Route::get('posts', Posts::class)->name('posts');
    Route::get('post/{id}', PostDetailComponent::class)->name('post-detail');
    Route::get('about-us', AboutUsComponent::class)->name('about-us');
    Route::get('compare', CompareComponent::class)->name('compare');

    Route::get('user', UserComponent::class)->name('user');
    Route::get('register', RegisterUserComponent::class)->name('register');

//    Route::prefix('calculator')->group(function () {
//
//    });

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', UserDashboardComponent::class)->name('dashboard');
    Route::get('edit-profile', EditProfileComponent::class)->name('edit-profile');
    Route::get('order-history', OrderHistoryComponent::class)->name('order-history');
    Route::get('order-details/{id?}', UserOrderDetailsComponent::class)->name('order-details');
    Route::get('addresses', UserAddresessComponent::class)->name('addresses');
    Route::get('edit-address', UserEditAddresessComponent::class)->name('edit-address');
    Route::get('password', UserPasswordComponent::class)->name('password');
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
    Route::get('posts', PostComponent::class)->name('admin.posts');
    Route::get('create-post', CreatePostComponent::class)->name('admin.create-post');
    Route::get('edit-post/{id}', EditPostComponent::class)->name('admin.edit-post');
    Route::get('about-us', AdminAboutUsComponent::class)->name('admin.about-us');
    Route::get('brands', BrandComponent::class)->name('admin.brands');
    Route::get('manufacturers', ManufacturerComponent::class)->name('admin.manufacturers');
    Route::get('options', ProductOptionsComponent::class)->name('admin.options');
});
});




