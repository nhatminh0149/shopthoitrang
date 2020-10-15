<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeTableSeeder extends Seeder
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
                'size_id'        => '1',
                'size_ten'       => 'S',        
            ],
            [
                'size_id'        => '2',
                'size_ten'       => 'M',        
            ],
            [
                'size_id'        => '3',
                'size_ten'       => 'L',        
            ],
        ];
        DB::table('size')->insert($list);
    }
}
