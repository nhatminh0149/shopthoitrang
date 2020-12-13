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
                'ddh_ngaylap'           => '2019-01-09 09:00:00',        
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
                'ddh_ngaylap'           => '2019-02-07 10:00:00',        
                'ddh_diachigiaohang'    => 'Hẻm 51, đường 3/2',        
                'ddh_trangthai'         => '1',             
                'id'                    => '3',        
                'kh_id'                 => '3',        
                'htvc_id'               => '3',        
                'httt_id'               => '1',        
                'px_id'                 => '10',        
            ],
            [
                'ddh_id'                => '3',
                'ddh_ngaylap'           => '2019-03-07 10:00:00',        
                'ddh_diachigiaohang'    => 'Hẻm 51, đường 3/2',        
                'ddh_trangthai'         => '1',             
                'id'                    => '3',        
                'kh_id'                 => '2',        
                'htvc_id'               => '3',        
                'httt_id'               => '1',        
                'px_id'                 => '10',        
            ],
            [
                'ddh_id'                => '4',
                'ddh_ngaylap'           => '2019-05-09 10:00:00',        
                'ddh_diachigiaohang'    => 'Số 22, Cách mạng tháng 8',        
                'ddh_trangthai'         => '1',             
                'id'                    => '3',        
                'kh_id'                 => '1',        
                'htvc_id'               => '4',        
                'httt_id'               => '1',        
                'px_id'                 => '312',        
            ],
            [
                'ddh_id'                => '5',
                'ddh_ngaylap'           => '2019-07-27 10:00:00',        
                'ddh_diachigiaohang'    => 'Số 23A, đường Hòa Bình',        
                'ddh_trangthai'         => '1',             
                'id'                    => '3',        
                'kh_id'                 => '2',        
                'htvc_id'               => '4',        
                'httt_id'               => '1',        
                'px_id'                 => '160',        
            ],
            [
                'ddh_id'                => '6',
                'ddh_ngaylap'           => '2019-09-27 10:00:00',        
                'ddh_diachigiaohang'    => 'Số 27B, đường Lê Lợi',        
                'ddh_trangthai'         => '1',             
                'id'                    => '3',        
                'kh_id'                 => '2',        
                'htvc_id'               => '4',        
                'httt_id'               => '1',        
                'px_id'                 => '84',        
            ],
            [
                'ddh_id'                => '7',
                'ddh_ngaylap'           => '2019-12-27 10:00:00',        
                'ddh_diachigiaohang'    => 'Số 27B, đường Lê Lợi',        
                'ddh_trangthai'         => '1',             
                'id'                    => '3',        
                'kh_id'                 => '2',        
                'htvc_id'               => '4',        
                'httt_id'               => '1',        
                'px_id'                 => '84',        
            ],
        ];
        DB::table('dondathang')->insert($list);
    }
}
