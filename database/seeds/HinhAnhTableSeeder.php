<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HinhAnhTableSeeder extends Seeder
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
                'ha_id'       => '1',
                'sp_id'       => '1',
                'ha_ten'      => 'aothunB1_den.jpg'
            ],
            [
                'ha_id'       => '2',
                'sp_id'       => '1',
                'ha_ten'      => 'aothunB1_trang.jpg'
            ],
            [
                'ha_id'       => '3',
                'sp_id'       => '2',
                'ha_ten'      => 'aothunB2_den.jpg'
            ],
            [
                'ha_id'       => '4',
                'sp_id'       => '2',
                'ha_ten'      => 'aothunB2_vang.jpg'
            ],
            [
                'ha_id'       => '5',
                'sp_id'       => '2',
                'ha_ten'      => 'aothunB2_xanh.jpg'
            ],
            [
                'ha_id'       => '6',
                'sp_id'       => '3',
                'ha_ten'      => 'aothunB3_den.jpg'
            ],
            [
                'ha_id'       => '7',
                'sp_id'       => '3',
                'ha_ten'      => 'aothunB3_trang.jpg'
            ],
            [
                'ha_id'       => '8',
                'sp_id'       => '3',
                'ha_ten'      => 'aothunB3_xanh.jpg'
            ],
            [
                'ha_id'       => '9',
                'sp_id'       => '4',
                'ha_ten'      => 'aothunB4_den.jpg'
            ],
            [
                'ha_id'       => '10',
                'sp_id'       => '4',
                'ha_ten'      => 'aothunB4_trang.jpg'
            ],
            [
                'ha_id'       => '11',
                'sp_id'       => '5',
                'ha_ten'      => 'aothunB5_trang.jpg'
            ],
            [
                'ha_id'       => '12',
                'sp_id'       => '5',
                'ha_ten'      => 'aothunB5_xanh.jpg'
            ],
            [
                'ha_id'       => '13',
                'sp_id'       => '6',
                'ha_ten'      => 'aosomiB1_den.jpg'
            ],
            [
                'ha_id'       => '14',
                'sp_id'       => '6',
                'ha_ten'      => 'aosomiB1_trang.jpg'
            ],
            [
                'ha_id'       => '15',
                'sp_id'       => '7',
                'ha_ten'      => 'aosomiB2_trang.jpg'
            ],
            [
                'ha_id'       => '16',
                'sp_id'       => '7',
                'ha_ten'      => 'aosomiB2_vang.jpg'
            ],
            [
                'ha_id'       => '17',
                'sp_id'       => '7',
                'ha_ten'      => 'aosomiB2_xanh.jpg'
            ],
            [
                'ha_id'       => '18',
                'sp_id'       => '8',
                'ha_ten'      => 'aosomiB3_den.jpg'
            ],
            [
                'ha_id'       => '19',
                'sp_id'       => '8',
                'ha_ten'      => 'aosomiB3_vang.jpg'
            ],
            [
                'ha_id'       => '20',
                'sp_id'       => '8',
                'ha_ten'      => 'aosomiB3_xanh.jpg'
            ],
            [
                'ha_id'       => '21',
                'sp_id'       => '9',
                'ha_ten'      => 'quanjeanB1_den.jpg'
            ],
            [
                'ha_id'       => '22',
                'sp_id'       => '10',
                'ha_ten'      => 'quanjeanB2_trang.jpg'
            ],
            [
                'ha_id'       => '23',
                'sp_id'       => '11',
                'ha_ten'      => 'quanjeanB3_den.jpg'
            ],
            [
                'ha_id'       => '24',
                'sp_id'       => '12',
                'ha_ten'      => 'quankakiB1_trang.jpg'
            ],
            [
                'ha_id'       => '25',
                'sp_id'       => '13',
                'ha_ten'      => 'quankakiB2_den.jpg'
            ],
            [
                'ha_id'       => '26',
                'sp_id'       => '14',
                'ha_ten'      => 'quankakiB3_xanh.jpg'
            ],
            [
                'ha_id'       => '27',
                'sp_id'       => '15',
                'ha_ten'      => 'aothunG1_trang.jpg'
            ],
            [
                'ha_id'       => '28',
                'sp_id'       => '15',
                'ha_ten'      => 'aothunG1_vang.jpg'
            ],
            [
                'ha_id'       => '29',
                'sp_id'       => '16',
                'ha_ten'      => 'aothunG2_den.jpg'
            ],
            [
                'ha_id'       => '30',
                'sp_id'       => '16',
                'ha_ten'      => 'aothunG2_trang.jpg'
            ],
            [
                'ha_id'       => '31',
                'sp_id'       => '17',
                'ha_ten'      => 'aothunG3_trang.jpg'
            ],
            [
                'ha_id'       => '32',
                'sp_id'       => '17',
                'ha_ten'      => 'aothunG3_vang.jpg'
            ],
            [
                'ha_id'       => '33',
                'sp_id'       => '18',
                'ha_ten'      => 'aothunG4_do.jpg'
            ],
            [
                'ha_id'       => '34',
                'sp_id'       => '18',
                'ha_ten'      => 'aothunG4_xanh.jpg'
            ],
            [
                'ha_id'       => '35',
                'sp_id'       => '19',
                'ha_ten'      => 'aothunG5_den.jpg'
            ],
            [
                'ha_id'       => '36',
                'sp_id'       => '19',
                'ha_ten'      => 'aothunG5_trang.jpg'
            ],
            [
                'ha_id'       => '37',
                'sp_id'       => '19',
                'ha_ten'      => 'aothunG5_vang.jpg'
            ],
            [
                'ha_id'       => '38',
                'sp_id'       => '20',
                'ha_ten'      => 'somiG1_trang.jpg'
            ],
            [
                'ha_id'       => '39',
                'sp_id'       => '20',
                'ha_ten'      => 'somiG1_xanh.jpg'
            ],
            [
                'ha_id'       => '40',
                'sp_id'       => '21',
                'ha_ten'      => 'somiG2_trang.jpg'
            ],
            [
                'ha_id'       => '41',
                'sp_id'       => '21',
                'ha_ten'      => 'somiG2_xanh.jpg'
            ],
            [
                'ha_id'       => '42',
                'sp_id'       => '22',
                'ha_ten'      => 'somiG3_den.jpg'
            ],
            [
                'ha_id'       => '43',
                'sp_id'       => '22',
                'ha_ten'      => 'somiG3_do.jpg'
            ],
            [
                'ha_id'       => '44',
                'sp_id'       => '23',
                'ha_ten'      => 'somiG4_do.jpg'
            ],
            [
                'ha_id'       => '45',
                'sp_id'       => '23',
                'ha_ten'      => 'somiG4_xanh.jpg'
            ],
            [
                'ha_id'       => '46',
                'sp_id'       => '24',
                'ha_ten'      => 'somiG5_den.jpg'
            ],
            [
                'ha_id'       => '47',
                'sp_id'       => '24',
                'ha_ten'      => 'somiG5_trang.jpg'
            ],
            [
                'ha_id'       => '48',
                'sp_id'       => '25',
                'ha_ten'      => 'quanshortG1_den.jpg'
            ],
            [
                'ha_id'       => '49',
                'sp_id'       => '25',
                'ha_ten'      => 'quanshortG1_xanh.jpg'
            ],
            [
                'ha_id'       => '50',
                'sp_id'       => '26',
                'ha_ten'      => 'quanshortG2_xanh.jpg'
            ],
            [
                'ha_id'       => '51',
                'sp_id'       => '27',
                'ha_ten'      => 'quanshortG3_den.jpg'
            ],
            [
                'ha_id'       => '52',
                'sp_id'       => '27',
                'ha_ten'      => 'quanshortG3_xanh.jpg'
            ],
            [
                'ha_id'       => '53',
                'sp_id'       => '28',
                'ha_ten'      => 'quanshortG4_den.jpg'
            ],
            [
                'ha_id'       => '54',
                'sp_id'       => '28',
                'ha_ten'      => 'quanshortG4_trang.jpg'
            ],
            [
                'ha_id'       => '55',
                'sp_id'       => '29',
                'ha_ten'      => 'quanshortG5_den.jpg'
            ],
            [
                'ha_id'       => '56',
                'sp_id'       => '29',
                'ha_ten'      => 'quanshortG5_xanh.jpg'
            ],
            [
                'ha_id'       => '57',
                'sp_id'       => '30',
                'ha_ten'      => 'quanjeanG1_den.jpg'
            ],
            [
                'ha_id'       => '58',
                'sp_id'       => '30',
                'ha_ten'      => 'quanjeanG1_xanh.jpg'
            ],
            [
                'ha_id'       => '59',
                'sp_id'       => '31',
                'ha_ten'      => 'quanjeanG2_trang.jpg'
            ],
            [
                'ha_id'       => '60',
                'sp_id'       => '31',
                'ha_ten'      => 'quanjeanG2_xanh.jpg'
            ],
            [
                'ha_id'       => '61',
                'sp_id'       => '32',
                'ha_ten'      => 'quanjeanG3_den.jpg'
            ],
            [
                'ha_id'       => '62',
                'sp_id'       => '32',
                'ha_ten'      => 'quanjeanG3_xanh.jpg'
            ],
            [
                'ha_id'       => '63',
                'sp_id'       => '33',
                'ha_ten'      => 'quanjeanG4_den.jpg'
            ],
            [
                'ha_id'       => '64',
                'sp_id'       => '33',
                'ha_ten'      => 'quanjeanG4_xanh.jpg'
            ],
            [
                'ha_id'       => '65',
                'sp_id'       => '34',
                'ha_ten'      => 'thundoiC1_den.jpg'
            ],
            [
                'ha_id'       => '66',
                'sp_id'       => '34',
                'ha_ten'      => 'thundoiC1_trang.jpg'
            ],
            [
                'ha_id'       => '67',
                'sp_id'       => '34',
                'ha_ten'      => 'thundoiC1_vang.jpg'
            ],
            [
                'ha_id'       => '68',
                'sp_id'       => '35',
                'ha_ten'      => 'thundoiC2_den.jpg'
            ],
            [
                'ha_id'       => '69',
                'sp_id'       => '35',
                'ha_ten'      => 'thundoiC2_trang.jpg'
            ],
            [
                'ha_id'       => '70',
                'sp_id'       => '36',
                'ha_ten'      => 'thundoiC3_den.jpg'
            ],
            [
                'ha_id'       => '71',
                'sp_id'       => '36',
                'ha_ten'      => 'thundoiC3_vang.jpg'
            ],
            [
                'ha_id'       => '72',
                'sp_id'       => '36',
                'ha_ten'      => 'thundoiC3_xanh.jpg'
            ],
            [
                'ha_id'       => '73',
                'sp_id'       => '37',
                'ha_ten'      => 'thundoiC4_den.jpg'
            ],
            [
                'ha_id'       => '74',
                'sp_id'       => '37',
                'ha_ten'      => 'thundoiC4_do.jpg'
            ],
            [
                'ha_id'       => '75',
                'sp_id'       => '37',
                'ha_ten'      => 'thundoiC4_xanh.jpg'
            ],
            [
                'ha_id'       => '76',
                'sp_id'       => '38',
                'ha_ten'      => 'thundoiC5_vang.jpg'
            ],
            [
                'ha_id'       => '77',
                'sp_id'       => '38',
                'ha_ten'      => 'thundoiC5_xanh.jpg'
            ],
            [
                'ha_id'       => '78',
                'sp_id'       => '39',
                'ha_ten'      => 'khoacdoiC1_den.jpg'
            ],
            [
                'ha_id'       => '79',
                'sp_id'       => '39',
                'ha_ten'      => 'khoacdoiC1_trang.jpg'
            ],
            [
                'ha_id'       => '80',
                'sp_id'       => '40',
                'ha_ten'      => 'khoacdoiC2_den.jpg'
            ],
            [
                'ha_id'       => '81',
                'sp_id'       => '40',
                'ha_ten'      => 'khoacdoiC2_vang.jpg'
            ],
            [
                'ha_id'       => '82',
                'sp_id'       => '40',
                'ha_ten'      => 'khoacdoiC2_xanh.jpg'
            ],
            [
                'ha_id'       => '83',
                'sp_id'       => '41',
                'ha_ten'      => 'khoacdoiC3_den.jpg'
            ],
            [
                'ha_id'       => '84',
                'sp_id'       => '41',
                'ha_ten'      => 'khoacdoiC3_vang.jpg'
            ],
            [
                'ha_id'       => '85',
                'sp_id'       => '41',
                'ha_ten'      => 'khoacdoiC3_xanh.jpg'
            ],
            [
                'ha_id'       => '86',
                'sp_id'       => '42',
                'ha_ten'      => 'khoacdoiC4_vang.jpg'
            ],
            [
                'ha_id'       => '87',
                'sp_id'       => '42',
                'ha_ten'      => 'khoacdoiC4_xanh.jpg'
            ],
            [
                'ha_id'       => '88',
                'sp_id'       => '43',
                'ha_ten'      => 'khoacdoiC5_vang.jpg'
            ],
            [
                'ha_id'       => '89',
                'sp_id'       => '43',
                'ha_ten'      => 'khoacdoiC5_xanh.jpg'
            ],
           
        ];
        DB::table('hinhanh')->insert($list);
    }
}
