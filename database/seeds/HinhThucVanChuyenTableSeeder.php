<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HinhThucVanChuyenTableSeeder extends Seeder
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
                'htvc_id'        => '1',
                'htvc_ten'       => 'Nhận trực tiếp tại cửa hàng',
                'htvc_chiphi'    => '0',    
                'htvc_diengiai'  => 'Áp dụng cho quý khách trong nội ô. Nhận hàng trực tiếp tại cửa hàng.',    
                'htvc_trangthai'  => '1',    
            ],
            [
                'htvc_id'        => '2',
                'htvc_ten'       => 'Nhận hàng trực tiếp qua bưu điện',
                'htvc_chiphi'    => '0',    
                'htvc_diengiai'  => 'Áp dụng cho các tỉnh thành. Quý khách sẽ thanh toán phí vận chuyển của bưu điện.',    
                'htvc_trangthai'  => '1',    
            ],
            [
                'htvc_id'        => '3',
                'htvc_ten'       => 'Giao hàng trong khu vực nội ô thành phố',
                'htvc_chiphi'    => '10000',    
                'htvc_diengiai'  => 'Nhận hàng trong ngày hoặc từ 1 đến 2 ngày.', 
                'htvc_trangthai'  => '1',       
            ],
            [
                'htvc_id'        => '4',
                'htvc_ten'       => 'Chuyển phát tiêu chuẩn',
                'htvc_chiphi'    => '20000',    
                'htvc_diengiai'  => 'Áp dụng cho các tỉnh thành. Nhận hàng trong vòng từ 3 đến 5 ngày.', 
                'htvc_trangthai'  => '1',       
            ],
            [
                'htvc_id'        => '5',
                'htvc_ten'       => 'Chuyển phát nhanh',
                'htvc_chiphi'    => '30000',    
                'htvc_diengiai'  => 'Áp dụng cho các tỉnh thành. Nhận hàng trong vòng từ 1 đến 2 ngày', 
                'htvc_trangthai'  => '1',       
            ],
        ];
        DB::table('hinhthucvanchuyen')->insert($list);
    }
}
