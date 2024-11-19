<?php

namespace Database\Factories;

use App\Models\Brands;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->optional()->paragraphs(3, true),
            'price' => $this->faker->randomFloat(2, 0, 10000), // Цена до 10 000 с точностью до двух знаков
            'category_id' => Category::inRandomOrder()->first()->id,
            'brand_id' => Brands::inRandomOrder()->first()->id,
        ];
    }
}
