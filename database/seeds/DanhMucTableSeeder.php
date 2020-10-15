<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucTableSeeder extends Seeder
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
                'dm_id'        => '1',
                'dm_ten'       => 'Đồ Nam',
                'dm_trangthai' => '1',    
                'ncc_id'       => '1',    
            ],
            [
                'dm_id'        => '2',
                'dm_ten'       => 'Đồ Nữ',
                'dm_trangthai' => '1',    
                'ncc_id'       => '2',    
            ],
            [
                'dm_id'        => '3',
                'dm_ten'       => 'Đồ Đôi',
                'dm_trangthai' => '1',    
                'ncc_id'       => '3',    
            ],
        ];
        DB::table('danhmuc')->insert($list);
    }
}
