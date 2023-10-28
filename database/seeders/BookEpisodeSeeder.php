<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class BookEpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = ["Đề thi thử miễn phí", "Chủ đề 1: Cơ chế di truyền, biến dị", "Chủ đề 2: quy luật di truyền", "Chủ đề 3: Di truyền quần thể", "Chủ đề 4: ứng dụng di truyền và chọn giống", "Chủ đề 5: Tiến hóa ở các loài"];

        for ($i = 1; $i <= 5; $i++) {
            DB::table('episodes')->insert([
                ['book_id' => $i > 5 ? $i = 1 : $i, 'title' => Arr::random($title), 'created_at' => now()],
            ]);
        };
    }
}
