<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class BookImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image = ["hoa.jpg", "ly11.jpg", "nguvan12.jpg", "anhvan12.jpg", "toan11.jpg", "toan10.jpg"];
        for ($i = 1; $i <= 5; $i++) {
            DB::table('book_images')->insert([
                ['book_id' => $i > 5 ? $i = 1 : $i, 'image_name' => Arr::random($image), 'size' => 1000 + 1000, 'created_at' => now()],
            ]);
        };
    }
}
