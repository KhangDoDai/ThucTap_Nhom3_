<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = ["Sách có giảm giá ko thầy ?", "Sách này có khóa nâng cao không thầy", "Sách của thầy rất hay và chi tiết", "Sách thầy rất hay mọi người nên ủng hộ"];

        for ($i = 1; $i <= 5; $i++) {
            DB::table('comments')->insert([
                ['lesson_id' => $i, 'user_id' => $i, 'comment' =>  Arr::random($comments), 'created_at' => now()],
            ]);
        };
    }
}
