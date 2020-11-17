<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinhThanhPhoTableSeeder extends Seeder
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
                'tinhtp_id'        => '1',
                'tinhtp_ten'       => 'Thành phố Cần Thơ',        
                'tinhtp_loai'       => 'Thành phố Trung ương',        
            ],
            [
                'tinhtp_id'        => '2',
                'tinhtp_ten'       => 'Tỉnh Hậu Giang',        
                'tinhtp_loai'       => 'Tỉnh',        
            ],
            [
                'tinhtp_id'        => '3',
                'tinhtp_ten'       => 'Tỉnh Sóc Trăng',        
                'tinhtp_loai'       => 'Tỉnh',        
            ],
            [
                'tinhtp_id'        => '4',
                'tinhtp_ten'       => 'Tỉnh Bạc Liêu',        
                'tinhtp_loai'       => 'Tỉnh',        
            ],
        ];
        DB::table('tinhthanhpho')->insert($list);
    }
}
