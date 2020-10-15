<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiSanPhamTableSeeder extends Seeder
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
                'lsp_id'        => '1',
                'lsp_ten'       => 'Áo Thun Nam',
                'lsp_trangthai' => '1',    
                'dm_id'         => '1',    
            ],
            [
                'lsp_id'        => '2',
                'lsp_ten'       => 'Áo Sơ Mi Nam',
                'lsp_trangthai' => '1',    
                'dm_id'         => '1',    
            ],
            [
                'lsp_id'        => '3',
                'lsp_ten'       => 'Quần Jean Nam',
                'lsp_trangthai' => '1',    
                'dm_id'         => '1',    
            ],
            [
                'lsp_id'        => '4',
                'lsp_ten'       => 'Quần Kaki Nam',
                'lsp_trangthai' => '1',    
                'dm_id'         => '1',    
            ],
            [
                'lsp_id'        => '5',
                'lsp_ten'       => 'Áo Thun Nữ',
                'lsp_trangthai' => '1',    
                'dm_id'         => '2',    
            ],
            [
                'lsp_id'        => '6',
                'lsp_ten'       => 'Áo Sơ Mi Nữ',
                'lsp_trangthai' => '1',    
                'dm_id'         => '2',    
            ],
            [
                'lsp_id'        => '7',
                'lsp_ten'       => 'Quần Short Nữ',
                'lsp_trangthai' => '1',    
                'dm_id'         => '2',    
            ],
            [
                'lsp_id'        => '8',
                'lsp_ten'       => 'Quần Jean Nữ',
                'lsp_trangthai' => '1',    
                'dm_id'         => '2',    
            ],
            [
                'lsp_id'        => '9',
                'lsp_ten'       => 'Áo Thun Đôi',
                'lsp_trangthai' => '1',    
                'dm_id'         => '3',    
            ],
            [
                'lsp_id'        => '10',
                'lsp_ten'       => 'Áo Khoác Đôi',
                'lsp_trangthai' => '1',    
                'dm_id'         => '3',    
            ],
        
        ];
        DB::table('loaisanpham')->insert($list);
    }
}
