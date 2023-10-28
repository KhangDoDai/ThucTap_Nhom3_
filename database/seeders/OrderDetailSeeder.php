<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $price = [12000, 10000, 15000, 18000, 20000, 22000];
        $quantity = [2, 4, 1, 3, 5];
        $discount = [10, 20, 30, 40, 50];

        for ($i = 1; $i <= 5; $i++) {
            DB::table('order_details')->insert([
                ['order_id' => $i, 'book_id' =>  $i, 'price' => Arr::random($price), 'quantity' =>  Arr::random($quantity), 'discount' =>  Arr::random($discount), 'created_at' => now()],
            ]);
        };
    }
}
