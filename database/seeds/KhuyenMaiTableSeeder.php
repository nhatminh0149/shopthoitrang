<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhuyenMaiTableSeeder extends Seeder
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
                'km_id'             => '1',
                'km_ten'            => 'Nhân dịp 20/10',        
                'km_mota'           => '',        
                'km_giatriphantram' => '10',        
                'km_ngaytao' => '2020-10-18',        
                'km_ngayapdung' => '2020-10-19',        
                'km_ngayketthuc' => '2020-10-23',        
                'km_trangthai' => '1',        
            ],
            [
                'km_id'             => '2',
                'km_ten'            => 'Nhà giáo Việt Nam 20/11',        
                'km_mota'           => '',        
                'km_giatriphantram' => '20',        
                'km_ngaytao' => '2020-10-15',        
                'km_ngayapdung' => '2020-10-16',        
                'km_ngayketthuc' => '2020-10-21', 
                'km_trangthai' => '1',        
            ],
        ];
        DB::table('khuyenmai')->insert($list);
    }
}
