<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Mango',
            'description' => 'This is mango fruit.',
        ]);

        Product::create([
            'title' => 'Banana',
            'description' => 'This is banana fruit',
        ]);
    }
}
