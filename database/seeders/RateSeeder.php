<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rating = ["1", "1.5", "2", "2.5", "3", "3.5", "4", "4.5", "5"];
        for ($i = 1; $i <= 5; $i++) {
            DB::table('rates')->insert([
                ['book_id' => $i > 5 ? $i = 1 : $i, 'user_id' => $i > 5 ? $i = 1 : $i, 'rating' => Arr::random($rating), 'created_at' => now()],
            ]);
        };
    }
}
