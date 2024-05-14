<?php

namespace Tests\Feature\Livewire;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Livewire\Livewire;
use App\Livewire\DetailsComponent;

class DetailsComponentTest extends TestCase
{
    //use RefreshDatabase;

    public function testRenderComponent()
    {
        $data = [
            'title' => 'My Component Title',
        ];
        $component = $this->instance(DetailsComponent::class, $data);
        $component->render();

        $this->assertSee($data['title']);
    }

    public function test_can_render_details_component()
    {
        Livewire::test(DetailsComponent::class, ['slug' => 'armatura-8-mm-iran'])
            ->assertSee('details-component'); // Замените 'Your View Content' на содержимое вашего шаблона
    }

    public function test_can_add_product_to_cart()
    {
        $product = Product::factory()->create();

        Livewire::test(DetailsComponent::class, ['slug' => $product->slug])
            ->set('qty', 2) // Устанавливаем количество
            ->call('storeProduct', $product->id, $product->name, $product->sale_price);

        $this->assertTrue(Cart::instance('cart')->count() > 0);
    }

    public function test_can_decrement_qty()
    {
        Livewire::test(DetailsComponent::class, ['slug' => 'your-slug'])
            ->set('qty', 2)
            ->call('decrQty')
            ->assertSet('qty', 1); // Убедитесь, что значение уменьшается до 1, если количество равно 1
    }

    public function test_can_increment_qty()
    {
        Livewire::test(DetailsComponent::class, ['slug' => 'your-slug'])
            ->set('qty', 2)
            ->call('incrQty')
            ->assertSet('qty', 3); // Убедитесь, что значение увеличивается до 3, если количество равно 2
    }
}
