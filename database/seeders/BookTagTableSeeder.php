<?php

namespace Database\Seeders;

use App\Models\BookTag;
use Illuminate\Database\Seeder;

class BookTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookTag::factory()->count(10)->create();
    }
}
