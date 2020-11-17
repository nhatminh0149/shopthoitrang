<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonDatHangTableSeeder extends Seeder
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
                'ddh_id'                => '1',
                'ddh_ngaylap'           => '2020-10-06 09:00:00',        
                'ddh_diachigiaohang'    => 'KTXB, đường 3/2',        
                'ddh_trangthai'         => '1',               
                'id'                    => '3',        
                'kh_id'                 => '1',        
                'htvc_id'               => '1',        
                'httt_id'               => '1',        
                'px_id'                 => '10',        
            ],
            [
                'ddh_id'                => '2',
                'ddh_ngaylap'           => '2020-10-07 10:00:00',        
                'ddh_diachigiaohang'    => 'Hẻm 51, đường 3/2',        
                'ddh_trangthai'         => '0',             
                'id'                    => NULL,        
                'kh_id'                 => '1',        
                'htvc_id'               => '3',        
                'httt_id'               => '1',        
                'px_id'                 => '10',        
            ],
        ];
        DB::table('dondathang')->insert($list);
    }
}
