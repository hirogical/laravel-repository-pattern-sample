<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::factory()->count(10)->create();
    }
}
