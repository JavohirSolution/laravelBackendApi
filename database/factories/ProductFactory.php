<?php

namespace Database\Factories;

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
        $i = 0;
        return [
            'category_id' => rand(1, 5),
            'name' => [
                'uz' => 'salom Bu oshib boruvchi raqam' . $i++,
                'en' => fake()->sentence(3),
            ],
            'price' => rand(50000, 1000000),
            'description' => [
                'uz' => 'Bu tarifi'.$i++,
                'en' => fake()->paragraph(5),
            ]
        ];
    }
}
