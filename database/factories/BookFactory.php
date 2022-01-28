<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $author = Author::inRandomOrder()->first();
        $publisher = Publisher::inRandomOrder()->first();

        return [
            'title' => $this->faker->word(),
            'author_id' => $author->id,
            'publisher_id' => $publisher->id,
            'date_of_publication' => $this->faker->date(),
            'isbn' => $this->faker->isbn13(),
            'price' => $this->faker->numberBetween(500, 10000),
            'pages' => $this->faker->numberBetween(100, 500),
            'language_code' => $this->faker->languageCode()
        ];
    }
}
