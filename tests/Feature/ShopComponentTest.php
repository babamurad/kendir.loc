<?php

namespace Tests\Feature;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Post;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Livewire;
use Tests\TestCase;

class ShopComponentTest extends TestCase
{
    public function test_render_method()
    {
        Livewire::test('shop-component')
            ->set('category_id', [4])
            ->call('render')
            ->assertSee('Categories')
            ->assertSee('Products')
            ->assertSee('Latest Products')
            ->assertSee('New Arrivals')
            ->assertSee('Brands')
            ->assertSee('Manufacturers')
            ->assertSee('Post');
    }

    public function test_getCategoryProducts_method()
    {
        $category = Category::factory()->create();

        Livewire::test('shop-component')
            ->call('getCategoryProducts', $category->id)
            ->assertSee('Category Name');
    }

    public function test_checkBrand_method()
    {
        $brand = Brand::factory()->create();

        Livewire::test('shop-component')
            ->call('checkBrand', $brand->id)
            ->assertSet('check_brands', [$brand->id]);
    }

    public function test_checkManuf_method()
    {
        $manufacturer = Manufacturer::factory()->create();

        Livewire::test('shop-component')
            ->call('checkManuf', $manufacturer->id)
            ->assertSet('check_manufs', [$manufacturer->id]);
    }

    public function test_store_method()
    {
        $product = Product::factory()->create();

        Livewire::test('shop-component')
            ->call('store', $product->id, $product->name, $product->sale_price)
            ->assertEmitted('addToCart')
            ->assertSessionHas('success');
    }

    public function test_addToWishlist_method()
    {
        $product = Product::factory()->create();

        Livewire::test('shop-component')
            ->call('addToWishlist', $product->id, $product->name, $product->sale_price)
            ->assertEmitted('addToWishlist');
    }

    public function test_removeWishlist_method()
    {
        $product = Product::factory()->create();

        Livewire::test('shop-component')
            ->call('removeWishlist', $product->id)
            ->assertEmitted('removeFromWishlist');
    }

    public function test_addToCompare_method()
    {
        $product = Product::factory()->create();

        Livewire::test('shop-component')
            ->call('addToCompare', $product->id, $product->name, $product->sale_price)
            ->assertEmitted('addToCompare');
    }

    public function test_removeCompare_method()
    {
        $product = Product::factory()->create();

        Livewire::test('shop-component')
            ->call('removeCompare', $product->id)
            ->assertEmitted('removeCompare');
    }

    public function test_selectCategory_method()
    {
        $category = Category::factory()->create();

        Livewire::test('shop-component')
            ->call('selectCategory', $category->id)
            ->assertSee('Category Name')
            ->assertSet('category_id', $category->id);
    }

    public function test_allCategory_method()
    {
        Livewire::test('shop-component')
            ->call('allCategory')
            ->assertSet('category_id', '');
    }

    public function test_productDetails_method()
    {
        $product = Product::factory()->create();

        Livewire::test('shop-component')
            ->call('productDetails', $product->id)
            ->assertSet('id', $product->id)
            ->assertSet('name', $product->name)
            ->assertSet('sslug', $product->slug)
            ->assertSet('image', $product->image)
            ->assertSet('sale_price', $product->sale_price);
    }

    public function test_qtyInc_method()
    {
        Livewire::test('shop-component')
            ->set('pqty', 1)
            ->call('qtyInc')
            ->assertSet('pqty', 2);
    }

    public function test_qtyDec_method()
    {
        Livewire::test('shop-component')
            ->set('pqty', 2)
            ->call('qtyDec')
            ->assertSet('pqty', 1);
    }
}
