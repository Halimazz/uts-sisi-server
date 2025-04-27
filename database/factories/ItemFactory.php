<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(7),
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 1, 999),
            'quantity' => $this->faker->numberBetween(1, 100),
            'category_id' => Category::factory(),
            'supplier_id' => Supplier::factory(),
            'created_by' => Admin::factory(),
        ];
    }
}
