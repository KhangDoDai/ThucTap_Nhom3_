<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = ["Toán cao cấp", "Lý cao cấp", "Hóa dành cho mất người mất gốc", "Bộ đề ôn thi tốt nghiệp môn sinh học", "Tiếng anh cơ bản cho người mới bắt đầu", "Những bài văn tham khảo cho ôn thi tốt nghiệp môn ngữ văn"];
        $author = ["Thầy Tính", "Thầy Lý", "Thầy Hiếu", "Cô Ngọc", "Cô Mai"];
        $price = 100000;
        $discount = 5;
        for ($i = 1; $i <= 5; $i++) {
            DB::table('books')->insert([
                ['category_id' => $i > 5 ? $i = 1 : $i, 'title' => Arr::random($title), 'author' =>  Arr::random($author), "description" => Str::random(50), 'price' => $price + 100000, 'discount' => $discount + 5, 'quantity' => rand(10, 50), 'status' => 0, 'created_at' => now()],
            ]);
        };
    }
}
