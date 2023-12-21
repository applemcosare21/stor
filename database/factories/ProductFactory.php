<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => fake()->randomElement(Order::pluck('id')),
            'product_name' => fake()->randomElement(['safeguard','tanduay','mio','bukidrice','ricecooker','tv','iphone19pro','laptop']),
            'product_brand' => fake()->randomElement(['tintin','parasalobot','brom','lovu','labarn'])
        ];
    }
}
