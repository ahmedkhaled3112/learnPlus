<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // "name" => fake('ar_EG')->name(),
            "name" => fake()->name(),
            "phone" => fake()->phoneNumber(),
            "email" => fake()->safeEmail(),
            // "address" => fake('ar_EG')->address(),
            "address" => fake()->address(),
            "city_id" => rand(1, 29),
        ];
    }
}
