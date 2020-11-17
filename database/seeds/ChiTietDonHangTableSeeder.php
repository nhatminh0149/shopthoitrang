<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietDonHangTableSeeder extends Seeder
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
                'ddh_id'        => '1',
                'sp_id'         => '1',
                'size_id'       => '1',
                'm_id'          => '1',
                'ctdh_soluong'  => '1',    
                'ctdh_dongia'   => '200000',    
            ],
            [
                'ddh_id'        => '1',
                'sp_id'         => '3',
                'size_id'       => '1',
                'm_id'          => '1',
                'ctdh_soluong'  => '1',    
                'ctdh_dongia'   => '210000',    
            ],
            [
                'ddh_id'        => '2',
                'sp_id'         => '3',
                'size_id'       => '2',
                'm_id'          => '1',
                'ctdh_soluong'  => '2',    
                'ctdh_dongia'   => '210000',    
            ],
        ];
        DB::table('chitietdonhang')->insert($list);
    }
}
