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
                'km_ngaytao'        => '2020-10-18',        
                'km_ngayapdung'     => '2020-10-19',        
                'km_ngayketthuc'    => '2020-10-23',        
                'km_trangthai'      => '0',        
            ],
            [
                'km_id'             => '2',
                'km_ten'            => 'Nhân dịp Giáng sinh',        
                'km_mota'           => '',        
                'km_giatriphantram' => '10',        
                'km_ngaytao'        => '2020-12-14',        
                'km_ngayapdung'     => '2020-12-14',        
                'km_ngayketthuc'    => '2020-12-25', 
                'km_trangthai'      => '1',        
            ],
            [
                'km_id'             => '3',
                'km_ten'            => 'Tết Dương Lịch',        
                'km_mota'           => '',        
                'km_giatriphantram' => '10',        
                'km_ngaytao'        => '2020-12-25',        
                'km_ngayapdung'     => '2020-12-27',        
                'km_ngayketthuc'    => '2021-01-08', 
                'km_trangthai'      => '1',        
            ],
        ];
        DB::table('khuyenmai')->insert($list);
    }
}
