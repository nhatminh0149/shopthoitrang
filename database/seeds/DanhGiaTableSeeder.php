<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhGiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime();
        $list=[
            [
                'dg_id'             => '1',
                'dg_noidung'        => 'Đẹp, chất lượng tốt',
                'dg_ngaydanhgia'    => '2020-10-06 09:00:00',    
                'sp_id'             => '39',    
                'kh_id'             => '1',    
                'dg_trangthai'      => '1',    
                'dg_parent_comment' => '0',    
            ],
            [
                'dg_id'             => '2',
                'dg_noidung'        => 'Goodddddd',
                'dg_ngaydanhgia'    => '2020-11-06 09:30:00',    
                'sp_id'             => '39',    
                'kh_id'             => '2',    
                'dg_trangthai'      => '1',    
                'dg_parent_comment' => '0',    
            ],
            [
                'dg_id'             => '3',
                'dg_noidung'        => 'Đẹppppppp',
                'dg_ngaydanhgia'    => '2020-11-10 09:30:00',    
                'sp_id'             => '40',    
                'kh_id'             => '3',    
                'dg_trangthai'      => '1',    
                'dg_parent_comment' => '0',    
            ],
           
        ];
        DB::table('danhgia')->insert($list);
    }
}
