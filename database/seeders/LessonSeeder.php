<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = ["Bài 1 - ADN, Gen ngày 2/6/2023", "Bài 2 - Nhân đôi ADN ngày 5/6/2023", "Bài 3 - Cấu trúc ARN và phiên mã ngày 8/6/2023", "Dịch mã và mối quan hệ giữa gen, mARN, prôtêin", "Bài 4. Dịch mã và mối quan hệ giữa gen, mARN, Prôtêin ngày 11/6/2023", "Nâng cao về ADN, mã di truyền"];
        for ($i = 1; $i <= 5; $i++) {
            DB::table('lessons')->insert([
                ['episode_id' => $i > 5 ? $i = 1 : $i, 'lesson_title' => Arr::random($title), 'video' => "https://www.youtube.com/watch?v=sMXkSWFlV28&list=PL8y3hWbcppt2nWBglaxrQm_A5sRjstdnK", 'status' => 0, 'created_at' => now()],
            ]);
        };
    }
}
