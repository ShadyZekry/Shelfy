<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rateable_id' => $this->faker->randomNumber(),
            'rateable_type' => $this->faker->randomElement(['App\Models\Book', 'App\Models\Author', 'App\Models\Publisher']),
        ];
    }
}
