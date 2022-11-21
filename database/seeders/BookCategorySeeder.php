<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book_category;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book_category::firstOrCreate([
            'book_id' => 1,
            'category_id' => 1
        ]);
        Book_category::firstOrCreate([
            'book_id' => 1,
            'category_id' => 3
        ]);
        Book_category::firstOrCreate([
            'book_id' => 2,
            'category_id' => 1
        ]);
        Book_category::firstOrCreate([
            'book_id' => 2,
            'category_id' => 4
        ]);
        Book_category::firstOrCreate([
            'book_id' => 3,
            'category_id' => 2
        ]);
        Book_category::firstOrCreate([
            'book_id' => 3,
            'category_id' => 3
        ]);
        Book_category::firstOrCreate([
            'book_id' => 4,
            'category_id' => 1
        ]);
        Book_category::firstOrCreate([
            'book_id' => 4,
            'category_id' => 3
        ]);
        Book_category::firstOrCreate([
            'book_id' => 5,
            'category_id' => 2
        ]);
        Book_category::firstOrCreate([
            'book_id' => 5,
            'category_id' => 3
        ]);
        Book_category::firstOrCreate([
            'book_id' => 6,
            'category_id' => 1
        ]);
        Book_category::firstOrCreate([
            'book_id' => 6,
            'category_id' => 3
        ]);
        Book_category::firstOrCreate([
            'book_id' => 7,
            'category_id' => 2
        ]);
        Book_category::firstOrCreate([
            'book_id' => 8,
            'category_id' => 2
        ]);
        Book_category::firstOrCreate([
            'book_id' => 8,
            'category_id' => 4
        ]);
        Book_category::firstOrCreate([
            'book_id' => 9,
            'category_id' => 2
        ]);
        Book_category::firstOrCreate([
            'book_id' => 9,
            'category_id' => 3
        ]);
        Book_category::firstOrCreate([
            'book_id' => 10,
            'category_id' => 1
        ]);
        Book_category::firstOrCreate([
            'book_id' => 10,
            'category_id' => 2
        ]);
        Book_category::firstOrCreate([
            'book_id' => 10,
            'category_id' => 3
        ]);
        Book_category::firstOrCreate([
            'book_id' => 11,
            'category_id' => 2
        ]);
        Book_category::firstOrCreate([
            'book_id' => 12,
            'category_id' => 3
        ]);
    }
}
