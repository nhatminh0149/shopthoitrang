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
                'ctdh_soluong'  => '3',    
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
            [
                'ddh_id'        => '3',
                'sp_id'         => '3',
                'size_id'       => '2',
                'm_id'          => '1',
                'ctdh_soluong'  => '5',    
                'ctdh_dongia'   => '210000',    
            ],
            [
                'ddh_id'        => '4',
                'sp_id'         => '9',
                'size_id'       => '2',
                'm_id'          => '1',
                'ctdh_soluong'  => '5',    
                'ctdh_dongia'   => '350000',    
            ],
            [
                'ddh_id'        => '5',
                'sp_id'         => '9',
                'size_id'       => '2',
                'm_id'          => '1',
                'ctdh_soluong'  => '3',    
                'ctdh_dongia'   => '350000',    
            ],
            [
                'ddh_id'        => '5',
                'sp_id'         => '5',
                'size_id'       => '2',
                'm_id'          => '2',
                'ctdh_soluong'  => '3',    
                'ctdh_dongia'   => '250000',    
            ],
            [
                'ddh_id'        => '6',
                'sp_id'         => '24',
                'size_id'       => '1',
                'm_id'          => '1',
                'ctdh_soluong'  => '2',    
                'ctdh_dongia'   => '220000',    
            ],
            [
                'ddh_id'        => '6',
                'sp_id'         => '24',
                'size_id'       => '3',
                'm_id'          => '1',
                'ctdh_soluong'  => '2',    
                'ctdh_dongia'   => '220000',    
            ],
            [
                'ddh_id'        => '7',
                'sp_id'         => '25',
                'size_id'       => '1',
                'm_id'          => '1',
                'ctdh_soluong'  => '5',    
                'ctdh_dongia'   => '300000',    
            ],
            [
                'ddh_id'        => '7',
                'sp_id'         => '15',
                'size_id'       => '1',
                'm_id'          => '2',
                'ctdh_soluong'  => '5',    
                'ctdh_dongia'   => '200000',    
            ],
        ];
        DB::table('chitietdonhang')->insert($list);
    }
}
