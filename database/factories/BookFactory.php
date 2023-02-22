<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'author_id' => \App\Models\Author::factory(),
            'isbn' => $this->faker->isbn13,
            'publisher_id' => \App\Models\Publisher::factory(),
            'published_date' => $this->faker->date(max: 'now'),
            'pages' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->text,
            'language' => $this->faker->languageCode,
            'country' => $this->faker->country,
            'series' => \App\Models\Series::factory(),
        ];
    }
}
