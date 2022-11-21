<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate([
            'name' => "Action",
        ]);
        Category::firstOrCreate([
            'name' => "Drama",
        ]);
        Category::firstOrCreate([
            'name' => "Fiction",
        ]);
        Category::firstOrCreate([
            'name' => "History",
        ]);
    }
}
