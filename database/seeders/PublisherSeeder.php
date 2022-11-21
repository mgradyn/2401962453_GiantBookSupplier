<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::firstOrCreate([
            'name' => "Scholastic",
            'address' => "557 Broadway, New York, NY",
            'phone' => "+603 8605 3522",
            'email' => "customersupport@scholastic.asia",
            'image' => "scholastic.jpg",
        ]);

        Publisher::firstOrCreate([
            'name' => "Palazzo",
            'address' => "15 Church Road London SW13 9HE",
            'phone' => "+44 (0)208 878 8747",
            'email' => "info@palazzoeditions.com",
            'image' => "palazzo.jpg",
        ]);

        Publisher::firstOrCreate([
            'name' => "Dover",
            'address' => "31 2nd St, Mineola, NY 11501, United States",
            'phone' => "+1 516-294-7000",
            'email' => "doversupport@dover.com",
            'image' => "dover.jpg",
        ]);
    }
}
