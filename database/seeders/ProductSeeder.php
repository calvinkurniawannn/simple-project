<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Book A', 'price' => 10.99],
            ['name' => 'Book B', 'price' => 15.50],
            ['name' => 'Book C', 'price' => 20.00],
            ['name' => 'Book D', 'price' => 8.75],
            ['name' => 'Book E', 'price' => 12.40],
            ['name' => 'Book F', 'price' => 9.99],
            ['name' => 'Book G', 'price' => 18.20],
            ['name' => 'Book H', 'price' => 14.30],
            ['name' => 'Book I', 'price' => 7.80],
            ['name' => 'Book J', 'price' => 22.99],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'price' => $product['price'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}