<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PhieuNhapKhoTableSeeder extends Seeder
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
                'pnk_id'            => '1',
                'pnk_ngaynhapkho'   => '2020-10-01',
                'id'                => '2',  
                'ncc_id'            => '1',      
                'kho_id'            => '1',      
            ],
            [
                'pnk_id'            => '2',
                'pnk_ngaynhapkho'   => '2020-10-01',
                'id'                => '2',  
                'ncc_id'            => '1',      
                'kho_id'            => '1',      
            ],
            [
                'pnk_id'            => '3',
                'pnk_ngaynhapkho'   => '2020-10-02',
                'id'                => '2',  
                'ncc_id'            => '1',      
                'kho_id'            => '1',      
            ],
            [
                'pnk_id'            => '4',
                'pnk_ngaynhapkho'   => '2020-10-03',
                'id'                => '2',  
                'ncc_id'            => '1',      
                'kho_id'            => '1',      
            ],
            [
                'pnk_id'            => '5',
                'pnk_ngaynhapkho'   => '2020-10-05',
                'id'                => '2',  
                'ncc_id'            => '2',      
                'kho_id'            => '2',      
            ],
            [
                'pnk_id'            => '6',
                'pnk_ngaynhapkho'   => '2020-10-05',
                'id'                => '2',  
                'ncc_id'            => '2',      
                'kho_id'            => '2',      
            ],
            [
                'pnk_id'            => '7',
                'pnk_ngaynhapkho'   => '2020-10-06',
                'id'                => '2',  
                'ncc_id'            => '2',      
                'kho_id'            => '2',      
            ],
            [
                'pnk_id'            => '8',
                'pnk_ngaynhapkho'   => '2020-10-07',
                'id'                => '2',  
                'ncc_id'            => '3',      
                'kho_id'            => '3',      
            ],
            [
                'pnk_id'            => '9',
                'pnk_ngaynhapkho'   => '2020-10-07',
                'id'                => '2',  
                'ncc_id'            => '3',      
                'kho_id'            => '3',      
            ],
        ];
        DB::table('phieunhapkho')->insert($list);
    }
}
