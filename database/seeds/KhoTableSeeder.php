<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhoTableSeeder extends Seeder
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
                'kho_id'        => '1',
                'kho_ten'       => 'Kho 1',
                'kho_diachi'    => 'Quận Ninh Kiều, TPCT',       
            ],
            [
                'kho_id'        => '2',
                'kho_ten'       => 'Kho 2',
                'kho_diachi'    => 'Quận Cái Răng, TPCT',       
            ],
            [
                'kho_id'        => '3',
                'kho_ten'       => 'Kho 3',
                'kho_diachi'    => 'Quận 3, TPHCM',       
            ],
        ];
        DB::table('kho')->insert($list);
    }
}
