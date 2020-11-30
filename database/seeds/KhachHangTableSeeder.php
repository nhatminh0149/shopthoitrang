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
                'kh_taikhoan'       => 'Phúc Lê',
                'kh_matkhau'    => md5('letanphuc'),       
                'kh_hoten'    => 'Lê Tấn Phúc',       
                'kh_email'    => 'Phucxautrai114@gmail.com',       
                'kh_sdt'    => '0916112233', 
                'kh_hinhdaidien'  => 'phucle.jpg',
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
        ];
        DB::table('khachhang')->insert($list);
    }
}
