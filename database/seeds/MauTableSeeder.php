<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MauTableSeeder extends Seeder
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
                'm_id'        => '1',
                'm_ten'       => 'Đen',        
            ],
            [
                'm_id'        => '2',
                'm_ten'       => 'Trắng',        
            ],
            [
                'm_id'        => '3',
                'm_ten'       => 'Xanh',        
            ],
            [
                'm_id'        => '4',
                'm_ten'       => 'Đỏ',        
            ],
            [
                'm_id'        => '5',
                'm_ten'       => 'Vàng',        
            ],
        ];
        DB::table('mau')->insert($list);
    }
}
