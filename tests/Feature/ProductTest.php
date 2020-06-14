<?php

namespace Tests\Feature;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function all_product_can_be_fetched()
    {
        $this->get('/products')
            ->assertSuccessful()
            ->assertJsonStructure([
                '*' => ['id', 'title', 'is_featured', 'slug', 'price', 'description', 'images_url', 'category' => ['id', 'name', 'image_url']]
            ]);
    }

    /** @test */
    public function a_product_can_be_view_with_slug()
    {
        $product = Product::create([
            'title' => 'Test',
            'price' => 12,
            'category_id' => 1,
            'images_url' => 'test',
            'is_featured' => 1
        ]);
        $this->get("/products/$product->slug")
            ->assertSuccessful()
            ->assertSeeText($product->title);
    }
}
