<?php

namespace Database\Factories;

use App\Models\Brands;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

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
            'short_description' => $this->faker->sentence(), // Краткое описание
            'price' => $this->faker->numberBetween(1, 9999), // Целочисленное значение цены
            'img' => $this->faker->imageUrl(300, 300, 'cats'), // Используйте $this->faker вместо $faker
            'category_id' => Category::inRandomOrder()->first()->id,
            'brand_id' => Brands::inRandomOrder()->first()->id, // Исправлен на правильное название модели
        ];
    }
}