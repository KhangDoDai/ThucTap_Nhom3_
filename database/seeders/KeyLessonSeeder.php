<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class KeyLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('keys_lesson')->insert([
                ['book_id' => $i, 'user_id' => $i, 'key_lesson' => 200000, 'created_at' => now()],
            ]);
        };
    }
}
