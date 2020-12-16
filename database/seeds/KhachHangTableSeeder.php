<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangTableSeeder extends Seeder
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
                'kh_id'        => '1',
                'kh_taikhoan'       => 'Minh Minh',
                'kh_matkhau'    => md5('minhminh'),       
                'kh_hoten'    => 'Trần Lê Nhật Minh',       
                'kh_email'    => 'tranlenhatminh97@gmail.com',       
                'kh_sdt'    => '0916990092', 
                'kh_hinhdaidien'  => 'minhminh.jpg',
                'kh_trangthai'    => '1',       
            ],
            [
                'kh_id'        => '2',
                'kh_taikhoan'       => 'Quế Anh',
                'kh_matkhau'    => md5('queanh'),       
                'kh_hoten'    => 'Đường Quế Anh',       
                'kh_email'    => 'queanhst98@gmail.com',       
                'kh_sdt'    => '0916334455',     
                'kh_hinhdaidien'  => 'queanh.jpg', 
                'kh_trangthai'    => '1',       
            ],
            [
                'kh_id'        => '3',
                'kh_taikhoan'       => 'Di Di',
                'kh_matkhau'    => md5('didididi'),       
                'kh_hoten'    => 'Nguyễn Phước Duy',       
                'kh_email'    => 'nguyenduy171298@gmail.com',       
                'kh_sdt'    => '0916667788', 
                'kh_hinhdaidien'  => 'meomeo.jpg',      
                'kh_trangthai'    => '1',       
            ],
            [
                'kh_id'        => '4',
                'kh_taikhoan'       => 'Sơn Tùng',
                'kh_matkhau'    => md5('sontung'),       
                'kh_hoten'    => 'Nguyễn Thanh Tùng',       
                'kh_email'    => 'sontung@gmail.com',       
                'kh_sdt'    => '0916000999', 
                'kh_hinhdaidien'  => 'sontung.jpg',      
                'kh_trangthai'    => '0',       
            ],
            [
                'kh_id'        => '5',
                'kh_taikhoan'  => 'Hari Won',
                'kh_matkhau'   => md5('hariwon'),       
                'kh_hoten'    => 'Lưu Esther',       
                'kh_email'    => 'hariwon@gmail.com',       
                'kh_sdt'      => '0916000888', 
                'kh_hinhdaidien'  => 'hariwon.jpg',      
                'kh_trangthai'    => '0',       
            ],
        ];
        DB::table('khachhang')->insert($list);
    }
}
