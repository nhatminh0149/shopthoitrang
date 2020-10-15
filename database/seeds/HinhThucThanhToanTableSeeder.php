<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HinhThucThanhToanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=[
            [
                'httt_id'        => '1',
                'httt_ten'       => 'Thanh toán khi nhận hàng',
                'httt_trangthai'  => '1',    
            ],
            [
                'httt_id'        => '2',
                'httt_ten'       => 'Thanh toán Paypal',
                'httt_trangthai'  => '1',    
            ],
        ];
        DB::table('hinhthucthanhtoan')->insert($list);
    }
}
