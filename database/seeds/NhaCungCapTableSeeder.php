<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaCungCapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'ncc_id'        => '1',
                'ncc_ten'       => 'Công Ty TNHH May Mặc Dony',
                'ncc_diachi'    => '142/4 Bàu Cát 2, P.12, Q. Tân Bình Tp. Hồ Chí Minh',
                'ncc_sdt'       => '0923675818',
                'ncc_trangthai' => '1',
            ],     
            [
                'ncc_id'        => '2',
                'ncc_ten'       => 'Thời Trang Thiết Kế Cao Cấp Liveevil',
                'ncc_diachi'    => '172 Phố Huế, Q. Hai Bà Trưng, Hà Nội',
                'ncc_sdt'       => '0918757480',
                'ncc_trangthai' => '1',
            ],     
            [
                'ncc_id'        => '3',
                'ncc_ten'       => 'Công Ty TNHH Sản Xuất & Thương Mại Vĩnh Tài',
                'ncc_diachi'    => '351/7 Lê Văn Sỹ, Phường 13, Quận 3, Tp. Hồ Chí Minh',
                'ncc_sdt'       => '0903738111',
                'ncc_trangthai' => '1',
            ],     
               
        ];
        DB::table('nhacungcap')->insert($list);
    }
}
