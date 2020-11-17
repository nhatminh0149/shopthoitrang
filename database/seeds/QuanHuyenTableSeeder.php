<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuanHuyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'qh_id'         => 1,
                'qh_ten'        => 'Quận Ninh Kiều',
                'qh_loai'       => 'Quận',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 2,
                'qh_ten'        => 'Quận Ô Môn',
                'qh_loai'       => 'Quận',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 3,
                'qh_ten'        => 'Quận Bình Thủy',
                'qh_loai'       => 'Quận',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 4,
                'qh_ten'        => 'Quận Cái Răng',
                'qh_loai'       => 'Quận',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 5,
                'qh_ten'        => 'Quận Thốt Nốt',
                'qh_loai'       => 'Quận',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 6, 
                'qh_ten'        => 'Huyện Vĩnh Thạnh',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 7, 
                'qh_ten'        => 'Huyện Cờ Đỏ',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 8, 
                'qh_ten'        => 'Huyện Phong Điền',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 9, 
                'qh_ten'        => 'Huyện Thới Lai',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 1, //TPCT
            ],              
            [
                'qh_id'         => 10, 
                'qh_ten'        => 'Thành Phố Vị Thanh',
                'qh_loai'       => 'Thành phố',
                'tinhtp_id'     => 2, //Hậu Giang
            ],              
            [
                'qh_id'         => 11, 
                'qh_ten'        => 'Thị xã Ngã Bảy',
                'qh_loai'       => 'Thị xã',
                'tinhtp_id'     => 2, //Hậu Giang
            ],              
            [
                'qh_id'         => 12, 
                'qh_ten'        => 'Huyện Châu Thành A',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 2, //Hậu Giang
            ],              
            [
                'qh_id'         => 13, 
                'qh_ten'        => 'Huyện Châu Thành',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 2, //Hậu Giang
            ],              
            [
                'qh_id'         => 14, 
                'qh_ten'        => 'Huyện Phụng Hiệp',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 2, //Hậu Giang
            ],              
            [
                'qh_id'         => 15, 
                'qh_ten'        => 'Huyện Vị Thủy',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 2, //Hậu Giang
            ],              
            [
                'qh_id'         => 16, 
                'qh_ten'        => 'Huyện Long Mỹ',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 2, //Hậu Giang
            ],              
            [
                'qh_id'         => 17, 
                'qh_ten'        => 'Thị xã Long Mỹ',
                'qh_loai'       => 'Thị xã',
                'tinhtp_id'     => 2, //Hậu Giang
            ],              
            [
                'qh_id'         => 18, 
                'qh_ten'        => 'Thành phố Sóc Trăng',
                'qh_loai'       => 'Thành phố',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 19, 
                'qh_ten'        => 'Huyện Châu Thành',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 20, 
                'qh_ten'        => 'Huyện Kế Sách',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 21, 
                'qh_ten'        => 'Huyện Mỹ Tú',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 22, 
                'qh_ten'        => 'Huyện Cù Lao Dung',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 23, 
                'qh_ten'        => 'Huyện Long Phú',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 24, 
                'qh_ten'        => 'Huyện Mỹ Xuyên',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 25, 
                'qh_ten'        => 'Huyện Thạnh Trị',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 26, 
                'qh_ten'        => 'Thị xã Ngã Năm',
                'qh_loai'       => 'Thị xã',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 27, 
                'qh_ten'        => 'Thị xã Vĩnh Châu',
                'qh_loai'       => 'Thị xã',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 28, 
                'qh_ten'        => 'Huyện Trần Đề',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 3, //Sóc Trăng
            ],              
            [
                'qh_id'         => 29, 
                'qh_ten'        => 'Thành phố Bạc Liêu',
                'qh_loai'       => 'Thành phố',
                'tinhtp_id'     => 4, //Bạc Liêu
            ],              
            [
                'qh_id'         => 30, 
                'qh_ten'        => 'Huyện Hồng Dân',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 4, //Bạc Liêu
            ],              
            [
                'qh_id'         => 31, 
                'qh_ten'        => 'Huyện Phước Long',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 4, //Bạc Liêu
            ],              
            [
                'qh_id'         => 32, 
                'qh_ten'        => 'Huyện Vĩnh Lợi',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 4, //Bạc Liêu
            ],              
            [
                'qh_id'         => 33, 
                'qh_ten'        => 'Huyện Đông Hải',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 4, //Bạc Liêu
            ],              
            [
                'qh_id'         => 34, 
                'qh_ten'        => 'Huyện Hòa Bình',
                'qh_loai'       => 'Huyện',
                'tinhtp_id'     => 4, //Bạc Liêu
            ],              
            [
                'qh_id'         => 35, 
                'qh_ten'        => 'Thị xã Giá Rai',
                'qh_loai'       => 'Thị xã',
                'tinhtp_id'     => 4, //Bạc Liêu
            ],                         
        ];
        DB::table('quanhuyen')->insert($list);
    }
}
