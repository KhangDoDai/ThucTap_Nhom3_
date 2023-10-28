<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ["Sách có giảm giá ko thầy ?", "Sách này có khóa nâng cao không thầy", "Sách của thầy rất hay và chi tiết", "Sách thầy rất hay mọi người nên ủng hộ"];
        $phones = ["0941295047", "0941295048", "0941295049", "0941295051", "0941295052", "0941295053"];
        $emails = ["taintpc04608@fpt.edu.vn", "duongnhpc01313@fpt.edu.vn", "datttpc02990@fpt.edu.vn", "tuongnkpc02817@fpt.edu.vn", "khangnhdpc02940@fpt.edu.vn"];
        $address = ["Ninh Kiều", "Bình Thủy, Nguyễn Việt Dũng", "Cách mạng tháng 8", "Nguyễn Văn Linh"];
        $note = ["Để trước cổng nếu em không có nhà", "Tới địa chỉ r, gọi số 0941295047 để em ra lấy"];
        $total = [1000000, 2000000, 3000000, 4000000, 5000000];
        for ($i = 1; $i <= 5; $i++) {
            DB::table('orders')->insert([
                ['user_id' => $i, 'customer_name' =>  Arr::random($names), 'customer_phone' => Arr::random($phones), 'customer_mail' =>  Arr::random($emails), 'customer_address' =>  Arr::random($address), 'note' => Arr::random($note), 'total' => Arr::random($total), 'status' => 0, 'created_at' => now()],
            ]);
        };
    }
}
