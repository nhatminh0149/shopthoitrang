<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiaTableSeeder extends Seeder
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
                'id_gia'      => '1',
                'ngay'        => '2020-10-18 00:00:00',
                'giaban'      => '200000',        
                'sp_id'       => '1',        
            ],
            [
                'id_gia'      => '2',
                'ngay'        => '2020-10-18 00:10:00',
                'giaban'      => '200000',        
                'sp_id'       => '2',        
            ],
            [
                'id_gia'      => '3',
                'ngay'        => '2020-10-18 00:10:05',
                'giaban'      => '250000',        
                'sp_id'       => '3',        
            ],
            [
                'id_gia'      => '4',
                'ngay'        => '2020-10-18 00:10:07',
                'giaban'      => '200000',        
                'sp_id'       => '4',        
            ],
            [
                'id_gia'      => '5',
                'ngay'        => '2020-10-18 00:10:08',
                'giaban'      => '250000',        
                'sp_id'       => '5',        
            ],
            [
                'id_gia'      => '6',
                'ngay'        => '2020-10-18 00:10:10',
                'giaban'      => '280000',        
                'sp_id'       => '6',        
            ],
            [
                'id_gia'      => '7',
                'ngay'        => '2020-10-18 00:10:12',
                'giaban'      => '300000',        
                'sp_id'       => '7',        
            ],
            [
                'id_gia'      => '8',
                'ngay'        => '2020-10-18 00:10:14',
                'giaban'      => '270000',        
                'sp_id'       => '8',        
            ],
            [
                'id_gia'      => '9',
                'ngay'        => '2020-10-18 00:10:16',
                'giaban'      => '350000',        
                'sp_id'       => '9',        
            ],
            [
                'id_gia'      => '10',
                'ngay'        => '2020-10-18 00:10:18',
                'giaban'      => '350000',        
                'sp_id'       => '10',        
            ],
            [
                'id_gia'      => '11',
                'ngay'        => '2020-10-18 00:10:20',
                'giaban'      => '350000',        
                'sp_id'       => '11',        
            ],
            [
                'id_gia'      => '12',
                'ngay'        => '2020-10-18 00:10:22',
                'giaban'      => '315000',        
                'sp_id'       => '12',        
            ],
            [
                'id_gia'      => '13',
                'ngay'        => '2020-10-18 00:10:24',
                'giaban'      => '315000',        
                'sp_id'       => '13',        
            ],
            [
                'id_gia'      => '14',
                'ngay'        => '2020-10-18 00:10:25',
                'giaban'      => '315000',        
                'sp_id'       => '14',        
            ],
            [
                'id_gia'      => '15',
                'ngay'        => '2020-10-18 00:10:27',
                'giaban'      => '200000',        
                'sp_id'       => '15',        
            ],
            [
                'id_gia'      => '16',
                'ngay'        => '2020-10-18 00:10:30',
                'giaban'      => '200000',        
                'sp_id'       => '16',        
            ],
            [
                'id_gia'      => '17',
                'ngay'        => '2020-10-18 00:10:32',
                'giaban'      => '180000',        
                'sp_id'       => '17',        
            ],
            [
                'id_gia'      => '18',
                'ngay'        => '2020-10-18 00:10:35',
                'giaban'      => '200000',        
                'sp_id'       => '18',        
            ],
            [
                'id_gia'      => '19',
                'ngay'        => '2020-10-18 00:10:38',
                'giaban'      => '200000',        
                'sp_id'       => '19',        
            ],
            [
                'id_gia'      => '20',
                'ngay'        => '2020-10-18 00:10:40',
                'giaban'      => '230000',        
                'sp_id'       => '20',        
            ],
            [
                'id_gia'      => '21',
                'ngay'        => '2020-10-18 00:10:42',
                'giaban'      => '230000',        
                'sp_id'       => '21',        
            ],
            [
                'id_gia'      => '22',
                'ngay'        => '2020-10-18 00:10:45',
                'giaban'      => '230000',        
                'sp_id'       => '22',        
            ],
            [
                'id_gia'      => '23',
                'ngay'        => '2020-10-18 00:10:48',
                'giaban'      => '230000',        
                'sp_id'       => '23',        
            ],
            [
                'id_gia'      => '24',
                'ngay'        => '2020-10-18 00:10:50',
                'giaban'      => '220000',        
                'sp_id'       => '24',        
            ],
            [
                'id_gia'      => '25',
                'ngay'        => '2020-10-18 00:10:52',
                'giaban'      => '300000',        
                'sp_id'       => '25',        
            ],
            [
                'id_gia'      => '26',
                'ngay'        => '2020-10-18 00:10:55',
                'giaban'      => '300000',        
                'sp_id'       => '26',        
            ],
            [
                'id_gia'      => '27',
                'ngay'        => '2020-10-18 00:10:57',
                'giaban'      => '300000',        
                'sp_id'       => '27',        
            ],
            [
                'id_gia'      => '28',
                'ngay'        => '2020-10-18 00:10:59',
                'giaban'      => '300000',        
                'sp_id'       => '28',        
            ],
            [
                'id_gia'      => '29',
                'ngay'        => '2020-10-18 00:11:01',
                'giaban'      => '200000',        
                'sp_id'       => '29',        
            ],
            [
                'id_gia'      => '30',
                'ngay'        => '2020-10-18 00:11:03',
                'giaban'      => '300000',        
                'sp_id'       => '30',        
            ],
            [
                'id_gia'      => '31',
                'ngay'        => '2020-10-18 00:11:05',
                'giaban'      => '350000',        
                'sp_id'       => '31',        
            ],
            [
                'id_gia'      => '32',
                'ngay'        => '2020-10-18 00:11:08',
                'giaban'      => '350000',        
                'sp_id'       => '32',        
            ],
            [
                'id_gia'      => '33',
                'ngay'        => '2020-10-18 00:11:10',
                'giaban'      => '350000',        
                'sp_id'       => '33',        
            ],
            [
                'id_gia'      => '34',
                'ngay'        => '2020-10-18 00:11:12',
                'giaban'      => '250000',        
                'sp_id'       => '34',        
            ],
            [
                'id_gia'      => '35',
                'ngay'        => '2020-10-18 00:11:14',
                'giaban'      => '250000',        
                'sp_id'       => '35',        
            ],
            [
                'id_gia'      => '36',
                'ngay'        => '2020-10-18 00:11:16',
                'giaban'      => '250000',        
                'sp_id'       => '36',        
            ],
            [
                'id_gia'      => '37',
                'ngay'        => '2020-10-18 00:11:18',
                'giaban'      => '280000',        
                'sp_id'       => '37',        
            ],
            [
                'id_gia'      => '38',
                'ngay'        => '2020-10-18 00:11:20',
                'giaban'      => '280000',        
                'sp_id'       => '38',        
            ],
            [
                'id_gia'      => '39',
                'ngay'        => '2020-10-18 00:11:22',
                'giaban'      => '500000',        
                'sp_id'       => '39',        
            ],
            [
                'id_gia'      => '40',
                'ngay'        => '2020-10-18 00:11:24',
                'giaban'      => '600000',        
                'sp_id'       => '40',        
            ],
            [
                'id_gia'      => '41',
                'ngay'        => '2020-10-18 00:11:26',
                'giaban'      => '600000',        
                'sp_id'       => '41',        
            ],
            [
                'id_gia'      => '42',
                'ngay'        => '2020-10-18 00:11:28',
                'giaban'      => '600000',        
                'sp_id'       => '42',        
            ],
            [
                'id_gia'      => '43',
                'ngay'        => '2020-10-07 00:11:30',
                'giaban'      => '800000',        
                'sp_id'       => '43',        
            ],
            [
                'id_gia'      => '44',
                'ngay'        => '2020-10-20 01:12:30',
                'giaban'      => '500000',        
                'sp_id'       => '43',        
            ],
            [
                'id_gia'      => '45',
                'ngay'        => '2020-10-25 10:11:30',
                'giaban'      => '800000',        
                'sp_id'       => '43',        
            ],
            [
                'id_gia'      => '46',
                'ngay'        => '2020-10-30 10:11:30',
                'giaban'      => '400000',        
                'sp_id'       => '43',        
            ],
            [
                'id_gia'      => '47',
                'ngay'        => '2020-11-10 10:11:30',
                'giaban'      => '750000',        
                'sp_id'       => '43',        
            ],
            [
                'id_gia'      => '48',
                'ngay'        => '2020-11-20 10:11:30',
                'giaban'      => '350000',        
                'sp_id'       => '43',        
            ],
            [
                'id_gia'      => '49',
                'ngay'        => '2020-11-25 10:11:30',
                'giaban'      => '500000',        
                'sp_id'       => '43',        
            ],
            [
                'id_gia'      => '50',
                'ngay'        => '2020-12-05 10:11:30',
                'giaban'      => '800000',        
                'sp_id'       => '43',        
            ],
            [
                'id_gia'      => '51',
                'ngay'        => '2020-10-07 00:11:30',
                'giaban'      => '900000',        
                'sp_id'       => '41',        
            ],
            [
                'id_gia'      => '52',
                'ngay'        => '2020-10-20 01:12:30',
                'giaban'      => '400000',        
                'sp_id'       => '41',        
            ],
            [
                'id_gia'      => '53',
                'ngay'        => '2020-10-25 10:11:30',
                'giaban'      => '800000',        
                'sp_id'       => '41',        
            ],
            [
                'id_gia'      => '54',
                'ngay'        => '2020-10-30 10:11:30',
                'giaban'      => '300000',        
                'sp_id'       => '41',        
            ],
            [
                'id_gia'      => '55',
                'ngay'        => '2020-11-10 10:11:30',
                'giaban'      => '750000',        
                'sp_id'       => '41',        
            ],
            [
                'id_gia'      => '56',
                'ngay'        => '2020-11-20 10:11:30',
                'giaban'      => '300000',        
                'sp_id'       => '41',        
            ],
            [
                'id_gia'      => '57',
                'ngay'        => '2020-11-25 10:11:30',
                'giaban'      => '400000',        
                'sp_id'       => '41',        
            ],
            [
                'id_gia'      => '58',
                'ngay'        => '2020-12-05 10:11:30',
                'giaban'      => '600000',        
                'sp_id'       => '41',        
            ],
        ];
        DB::table('gia')->insert($list);
    }
}
