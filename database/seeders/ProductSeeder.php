<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Product::create([
        'name' => 'Product 1',
        'quantity'=>'3',
        'description'=>'ndn',
        'price' => 10.99,
    ]);

    Product::create([
        'name' => 'Product 2',
        'quantity'=>'2',
        'description'=>'fgnsg',
        'price' => 19.99,
    ]);
}
}
