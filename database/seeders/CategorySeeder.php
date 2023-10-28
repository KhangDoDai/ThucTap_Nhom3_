<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ["Toán", "Lý", "Hóa", "Sinh", "Anh Văn", "Ngữ Văn"];
        for ($i = 0; $i < 5; $i++) {
            DB::table('categories')->insert([
                ['name' => Arr::random($categories), 'status' =>  0, 'created_at' => now()],
            ]);
        };
    }
}
