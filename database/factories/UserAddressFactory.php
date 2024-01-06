<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAddress>
 */
class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            "latitude" => fake()->latitude(),
            "longitude" => fake()->longitude(),
            "region" => fake()->timezone('UZ'),
            "district" => fake()->timezone(),
            "street" => fake()->secondaryAddress(),
            "home" => fake()->randomNumber(3),
        ];
    }
}
