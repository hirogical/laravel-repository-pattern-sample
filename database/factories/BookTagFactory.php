<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\BookTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookTagFactory extends Factory
{
    protected $model = BookTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $book = Book::inRandomOrder()->first();
        $tag = Tag::inRandomOrder()->first();

        return [
            'book_id' => $book->id,
            'tag_id' => $tag->id
        ];
    }
}
