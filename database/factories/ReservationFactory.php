<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $book = Book::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'book_id' => $book->id,
            'date' => $this->faker->date()
        ];
    }
}
