<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhuongXaTableSeeder extends Seeder
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
                'px_id'        => '1',
                'px_ten'       => 'Phường Cái Khế',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '2',
                'px_ten'       => 'Phường An Hòa',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '3',
                'px_ten'       => 'Phường Thới Bình',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '4',
                'px_ten'       => 'Phường An Nghiệp',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '5',
                'px_ten'       => 'Phường An Cư',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '6',
                'px_ten'       => 'Phường An Hội',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '7',
                'px_ten'       => 'Phường Tân An',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '8',
                'px_ten'       => 'Phường An Lạc',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '9',
                'px_ten'       => 'Phường An Phú',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '10',
                'px_ten'       => 'Phường Xuân Khánh',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '11',
                'px_ten'       => 'Phường Hưng Lợi',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '12',
                'px_ten'       => 'Phường An Khánh',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '13',
                'px_ten'       => 'Phường An Bình',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '1', //Quận Ninh Kiều        
            ],
            [
                'px_id'        => '14',
                'px_ten'       => 'Phường Châu Văn Liêm',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '2', //Quận Ô Môn      
            ],
            [
                'px_id'        => '15',
                'px_ten'       => 'Phường Thới Hòa',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '2', //Quận Ô Môn      
            ],
            [
                'px_id'        => '16',
                'px_ten'       => 'Phường Thới Long',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '2', //Quận Ô Môn      
            ],
            [
                'px_id'        => '17',
                'px_ten'       => 'Phường Long Hưng',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '2', //Quận Ô Môn      
            ],
            [
                'px_id'        => '18',
                'px_ten'       => 'Phường Thới An',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '2', //Quận Ô Môn      
            ],
            [
                'px_id'        => '19',
                'px_ten'       => 'Phường Phước Thới',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '2', //Quận Ô Môn      
            ],
            [
                'px_id'        => '20',
                'px_ten'       => 'Phường Trường Lạc',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '2', //Quận Ô Môn      
            ],
            [
                'px_id'        => '21',
                'px_ten'       => 'Phường Bình Thủy',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '3', //Quận Bình Thủy      
            ],
            [
                'px_id'        => '22',
                'px_ten'       => 'Phường Trà An',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '3', //Quận Bình Thủy      
            ],
            [
                'px_id'        => '23',
                'px_ten'       => 'Phường Trà Nóc',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '3', //Quận Bình Thủy      
            ],
            [
                'px_id'        => '24',
                'px_ten'       => 'Phường Thới An Đông',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '3', //Quận Bình Thủy      
            ],
            [
                'px_id'        => '25',
                'px_ten'       => 'Phường An Thới',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '3', //Quận Bình Thủy      
            ],
            [
                'px_id'        => '26',
                'px_ten'       => 'Phường Bùi Hữu Nghĩa',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '3', //Quận Bình Thủy      
            ],
            [
                'px_id'        => '27',
                'px_ten'       => 'Phường Long Hòa',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '3', //Quận Bình Thủy      
            ],
            [
                'px_id'        => '28',
                'px_ten'       => 'Phường Long Tuyền',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '3', //Quận Bình Thủy      
            ],
            [
                'px_id'        => '29',
                'px_ten'       => 'Phường Lê Bình',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '4', //Quận Cái Răng     
            ],
            [
                'px_id'        => '30',
                'px_ten'       => 'Phường Hưng Phú',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '4', //Quận Cái Răng     
            ],
            [
                'px_id'        => '31',
                'px_ten'       => 'Phường Hưng Thạnh',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '4', //Quận Cái Răng     
            ],
            [
                'px_id'        => '32',
                'px_ten'       => 'Phường Ba Láng',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '4', //Quận Cái Răng     
            ],
            [
                'px_id'        => '33',
                'px_ten'       => 'Phường Thường Thạnh',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '4', //Quận Cái Răng     
            ],
            [
                'px_id'        => '34',
                'px_ten'       => 'Phường Phú Thứ',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '4', //Quận Cái Răng     
            ],
            [
                'px_id'        => '35',
                'px_ten'       => 'Phường Tân Phú',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '4', //Quận Cái Răng     
            ],
            [
                'px_id'        => '36',
                'px_ten'       => 'Phường Thốt Nốt',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '37',
                'px_ten'       => 'Phường Thới Thuận',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '38',
                'px_ten'       => 'Phường Thuận An',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '39',
                'px_ten'       => 'Phường Tân Lộc',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '40',
                'px_ten'       => 'Phường Trung Nhứt',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '41',
                'px_ten'       => 'Phường Thạnh Hoà',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '42',
                'px_ten'       => 'Phường Trung Kiên',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '43',
                'px_ten'       => 'Phường Tân Hưng',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '44',
                'px_ten'       => 'Phường Thuận Hưng',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '5', //Quận Thốt Nốt   
            ],
            [
                'px_id'        => '45',
                'px_ten'       => 'Xã Vĩnh Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '46',
                'px_ten'       => 'Thị trấn Thanh An',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '47',
                'px_ten'       => 'Thị trấn Vĩnh Thạnh',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '48',
                'px_ten'       => 'Xã Thạnh Mỹ',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '49',
                'px_ten'       => 'Xã Vĩnh Trinh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '50',
                'px_ten'       => 'Xã Thạnh An',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '51',
                'px_ten'       => 'Xã Thạnh Tiến',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '52',
                'px_ten'       => 'Xã Thạnh Thắng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '53',
                'px_ten'       => 'Xã Thạnh Lợi',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '54',
                'px_ten'       => 'Xã Thạnh Qưới',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '6', //Huyện Vĩnh Thạnh   
            ],
            [
                'px_id'        => '55',
                'px_ten'       => 'Xã Trung An',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '56',
                'px_ten'       => 'Xã Trung Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '57',
                'px_ten'       => 'Xã Thạnh Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '58',
                'px_ten'       => 'Xã Trung Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '59',
                'px_ten'       => 'Thị trấn Cờ Đỏ',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '60',
                'px_ten'       => 'Xã Thới Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '61',
                'px_ten'       => 'Xã Đông Hiệp',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '62',
                'px_ten'       => 'Xã Đông Thắng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '63',
                'px_ten'       => 'Xã Thới Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '64',
                'px_ten'       => 'Xã Thới Xuân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '7', //Huyện Cờ Đỏ  
            ],
            [
                'px_id'        => '65',
                'px_ten'       => 'Thị trấn Phong Điền',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '8', //Huyện Phong Điền 
            ],
            [
                'px_id'        => '66',
                'px_ten'       => 'Xã Nhơn Ái',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '8', //Huyện Phong Điền 
            ],
            [
                'px_id'        => '67',
                'px_ten'       => 'Xã Giai Xuân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '8', //Huyện Phong Điền 
            ],
            [
                'px_id'        => '68',
                'px_ten'       => 'Xã Tân Thới',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '8', //Huyện Phong Điền 
            ],
            [
                'px_id'        => '69',
                'px_ten'       => 'Xã Trường Long',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '8', //Huyện Phong Điền 
            ],
            [
                'px_id'        => '70',
                'px_ten'       => 'Xã Mỹ Khánh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '8', //Huyện Phong Điền 
            ],
            [
                'px_id'        => '71',
                'px_ten'       => 'Xã Nhơn Nghĩa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '8', //Huyện Phong Điền 
            ],
            [
                'px_id'        => '72',
                'px_ten'       => 'Thị trấn Thới Lai',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '73',
                'px_ten'       => 'Xã Thới Thạnh',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '74',
                'px_ten'       => 'Xã Tân Thạnh',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '75',
                'px_ten'       => 'Xã Xuân Thắng',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '76',
                'px_ten'       => 'Xã Đông Thuận',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '77',
                'px_ten'       => 'Xã Thới Tân',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '78',
                'px_ten'       => 'Xã Trường Thắng',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '79',
                'px_ten'       => 'Xã Định Môn',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '80',
                'px_ten'       => 'Xã Trường Thành',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '81',
                'px_ten'       => 'Xã Trường Xuân',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '82',
                'px_ten'       => 'Xã Trường Xuân A',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '83',
                'px_ten'       => 'Xã Trường Xuân B',        
                'px_loai'      => 'Xã ',        
                'qh_id'        => '9', //Huyện Thới Lai 
            ],
            [
                'px_id'        => '84',
                'px_ten'       => 'Phường 1',        
                'px_loai'      => 'Phường ',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '85',
                'px_ten'       => 'Phường 3',        
                'px_loai'      => 'Phường ',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '86',
                'px_ten'       => 'Phường 4',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '87',
                'px_ten'       => 'Phường 5',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '88',
                'px_ten'       => 'Phường 7',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '89',
                'px_ten'       => 'Xã Vị Tân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '90',
                'px_ten'       => 'Xã Hoả Lựu',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '91',
                'px_ten'       => 'Xã Tân Tiến',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '92',
                'px_ten'       => 'Xã Hoả Tiến',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '10', //Thành Phố Vị Thanh
            ],
            [
                'px_id'        => '93',
                'px_ten'       => 'Phường Ngã Bảy',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '11', //Thị xã Ngã Bảy
            ],
            [
                'px_id'        => '94',
                'px_ten'       => 'Phường Lái Hiếu',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '11', //Thị xã Ngã Bảy
            ],
            [
                'px_id'        => '95',
                'px_ten'       => 'Phường Hiệp Thành',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '11', //Thị xã Ngã Bảy
            ],
            [
                'px_id'        => '96',
                'px_ten'       => 'Thị trấn Một Ngàn',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '97',
                'px_ten'       => 'Xã Tân Hoà',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '98',
                'px_ten'       => 'Thị trấn Bảy Ngàn',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '99',
                'px_ten'       => 'Xã Trường Long Tây',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '100',
                'px_ten'       => 'Xã Trường Long A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '101',
                'px_ten'       => 'Xã Nhơn Nghĩa A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '102',
                'px_ten'       => 'Thị trấn Rạch Gòi',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '103',
                'px_ten'       => 'Xã Thạnh Xuân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '104',
                'px_ten'       => 'Thị trấn Cái Tắc',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '105',
                'px_ten'       => 'Xã Tân Phú Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '12', //Huyện Châu Thành A
            ],
            [
                'px_id'        => '106',
                'px_ten'       => 'Thị trấn Ngã Sáu',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '107',
                'px_ten'       => 'Xã Đông Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '108',
                'px_ten'       => 'Xã Phú An',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '109',
                'px_ten'       => 'Xã Đông Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '110',
                'px_ten'       => 'Xã Phú Hữu',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '111',
                'px_ten'       => 'Xã Phú Tân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '112',
                'px_ten'       => 'Thị trấn Mái Dầm',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '113',
                'px_ten'       => 'Xã Đông Phước',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '114',
                'px_ten'       => 'Xã Đông Phước A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '13', //Huyện Châu Thành
            ],
            [
                'px_id'        => '115',
                'px_ten'       => 'Thị trấn Kinh Cùng',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '116',
                'px_ten'       => 'Thị trấn Cây Dương',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '117',
                'px_ten'       => 'Xã Tân Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '118',
                'px_ten'       => 'Xã Bình Thành',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '119',
                'px_ten'       => 'Xã Thạnh Hòa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '120',
                'px_ten'       => 'Xã Long Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '121',
                'px_ten'       => 'Xã Phụng Hiệp',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '122',
                'px_ten'       => 'Xã Phương Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '123',
                'px_ten'       => 'Xã Hiệp Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '124',
                'px_ten'       => 'Xã Tân Phước Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '125',
                'px_ten'       => 'Xã Phương Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '126',
                'px_ten'       => 'Xã Tân Long',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '127',
                'px_ten'       => 'Thị trấn Búng Tàu',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '14', //Huyện Phụng Hiệp
            ],
            [
                'px_id'        => '128',
                'px_ten'       => 'Thị trấn Nàng Mau',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '129',
                'px_ten'       => 'Xã Vị Trung',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '130',
                'px_ten'       => 'Xã Vị Thuỷ',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '131',
                'px_ten'       => 'Xã Vị Thắng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '132',
                'px_ten'       => 'Xã Vĩnh Thuận Tây',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '133',
                'px_ten'       => 'Xã Vĩnh Trung',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '134',
                'px_ten'       => 'Xã Vĩnh Tường',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '135',
                'px_ten'       => 'Xã Vị Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '136',
                'px_ten'       => 'Xã Vị Thanh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '137',
                'px_ten'       => 'Xã Vị Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '15', //Huyện Vị Thuỷ
            ],
            [
                'px_id'        => '138',
                'px_ten'       => 'Xã Thuận Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '16', //Huyện Long Mỹ
            ],
            [
                'px_id'        => '139',
                'px_ten'       => 'Xã Thuận Hòa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '16', //Huyện Long Mỹ
            ],
            [
                'px_id'        => '140',
                'px_ten'       => 'Xã Vĩnh Thuận Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '16', //Huyện Long Mỹ
            ],
            [
                'px_id'        => '141',
                'px_ten'       => 'Xã Vĩnh Viễn',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '16', //Huyện Long Mỹ
            ],
            [
                'px_id'        => '142',
                'px_ten'       => 'Xã Vĩnh Viễn A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '16', //Huyện Long Mỹ
            ],
            [
                'px_id'        => '143',
                'px_ten'       => 'Xã Lương Tâm',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '16', //Huyện Long Mỹ
            ],
            [
                'px_id'        => '144',
                'px_ten'       => 'Xã Lương Nghĩa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '16', //Huyện Long Mỹ
            ],
            [
                'px_id'        => '145',
                'px_ten'       => 'Xã Xà Phiên',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '16', //Huyện Long Mỹ
            ],
            [
                'px_id'        => '146',
                'px_ten'       => 'Phường Thuận An',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '147',
                'px_ten'       => 'Phường Trà Lồng',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '148',
                'px_ten'       => 'Phường Bình Thạnh',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '149',
                'px_ten'       => 'Phường Vĩnh Tường',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '150',
                'px_ten'       => 'Xã Long Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '151',
                'px_ten'       => 'Xã Long Trị',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '152',
                'px_ten'       => 'Xã Long Trị A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '153',
                'px_ten'       => 'Xã Long Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '154',
                'px_ten'       => 'Xã Tân Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '17', //Thị xã Long Mỹ
            ],
            [
                'px_id'        => '155',
                'px_ten'       => 'Phường 5',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '156',
                'px_ten'       => 'Phường 7',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '157',
                'px_ten'       => 'Phường 8',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '158',
                'px_ten'       => 'Phường 6',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '159',
                'px_ten'       => 'Phường 2',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '160',
                'px_ten'       => 'Phường 1',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '161',
                'px_ten'       => 'Phường 4',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '162',
                'px_ten'       => 'Phường 3',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '163',
                'px_ten'       => 'Phường 9',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '164',
                'px_ten'       => 'Phường 10',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '18', //Thành phố Sóc Trăng
            ],
            [
                'px_id'        => '165',
                'px_ten'       => 'Thị trấn Châu Thành',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '19', //Huyện Châu Thành
            ],
            [
                'px_id'        => '166',
                'px_ten'       => 'Xã Hồ Đắc Kiện',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '19', //Huyện Châu Thành
            ],
            [
                'px_id'        => '167',
                'px_ten'       => 'Xã Phú Tâm',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '19', //Huyện Châu Thành
            ],
            [
                'px_id'        => '168',
                'px_ten'       => 'Xã Thuận Hòa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '19', //Huyện Châu Thành
            ],
            [
                'px_id'        => '169',
                'px_ten'       => 'Thị trấn Kế Sách',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '170',
                'px_ten'       => 'Thị trấn An Lạc Thôn',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '171',
                'px_ten'       => 'Xã Xuân Hòa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '172',
                'px_ten'       => 'Xã Phong Nẫm',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '173',
                'px_ten'       => 'Xã An Lạc Tây',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '174',
                'px_ten'       => 'Xã Trinh Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '175',
                'px_ten'       => 'Xã Ba Trinh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '176',
                'px_ten'       => 'Xã Thới An Hội',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '177',
                'px_ten'       => 'Xã Nhơn Mỹ',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '178',
                'px_ten'       => 'Xã Kế Thành',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '179',
                'px_ten'       => 'Xã Kế An',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '180',
                'px_ten'       => 'Xã Đại Hải',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '181',
                'px_ten'       => 'Xã An Mỹ',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '20', //Huyện Kế Sách
            ],
            [
                'px_id'        => '182',
                'px_ten'       => 'Thị trấn Huỳnh Hữu Nghĩa',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '183',
                'px_ten'       => 'Xã Long Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '184',
                'px_ten'       => 'Xã Hưng Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '185',
                'px_ten'       => 'Xã Mỹ Hương',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '186',
                'px_ten'       => 'Xã Mỹ Tú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '187',
                'px_ten'       => 'Xã Mỹ Phước',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '188',
                'px_ten'       => 'Xã Thuận Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '189',
                'px_ten'       => 'Xã Mỹ Thuận',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '190',
                'px_ten'       => 'Xã Phú Mỹ',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '21', //Huyện Mỹ Tú
            ],
            [
                'px_id'        => '191',
                'px_ten'       => 'Thị trấn Cù Lao Dung',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '22', //Huyện Cù Lao Dung
            ],
            [
                'px_id'        => '192',
                'px_ten'       => 'Xã An Thạnh 1',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '22', //Huyện Cù Lao Dung
            ],
            [
                'px_id'        => '193',
                'px_ten'       => 'Xã An Thạnh Tây',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '22', //Huyện Cù Lao Dung
            ],
            [
                'px_id'        => '194',
                'px_ten'       => 'Xã An Thạnh Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '22', //Huyện Cù Lao Dung
            ],
            [
                'px_id'        => '195',
                'px_ten'       => 'Xã Đại Ân 1',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '22', //Huyện Cù Lao Dung
            ],
            [
                'px_id'        => '196',
                'px_ten'       => 'Xã An Thạnh 2',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '22', //Huyện Cù Lao Dung
            ],
            [
                'px_id'        => '197',
                'px_ten'       => 'Xã An Thạnh 3',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '22', //Huyện Cù Lao Dung
            ],
            [
                'px_id'        => '198',
                'px_ten'       => 'Xã An Thạnh Nam',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '22', //Huyện Cù Lao Dung
            ],
            [
                'px_id'        => '199',
                'px_ten'       => 'Thị trấn Long Phú',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '200',
                'px_ten'       => 'Xã Song Phụng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '201',
                'px_ten'       => 'Xã Hậu Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '202',
                'px_ten'       => 'Thị trấn Đại Ngãi',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '203',
                'px_ten'       => 'Xã Long Đức',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '204',
                'px_ten'       => 'Xã Trường Khánh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '205',
                'px_ten'       => 'Xã Phú Hữu',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '206',
                'px_ten'       => 'Xã Tân Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '207',
                'px_ten'       => 'Xã Châu Khánh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '208',
                'px_ten'       => 'Xã Tân Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '209',
                'px_ten'       => 'Xã Long Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '23', //Huyện Long Phú
            ],
            [
                'px_id'        => '210',
                'px_ten'       => 'Thị trấn Mỹ Xuyên',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '211',
                'px_ten'       => 'Xã Đại Tâm',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '212',
                'px_ten'       => 'Xã Tham Đôn',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '213',
                'px_ten'       => 'Xã Thạnh Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '214',
                'px_ten'       => 'Xã Ngọc Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '215',
                'px_ten'       => 'Xã Thạnh Quới',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '216',
                'px_ten'       => 'Xã Hòa Tú 1',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '217',
                'px_ten'       => 'Xã Gia Hòa 1',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '218',
                'px_ten'       => 'Xã Ngọc Tố',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '219',
                'px_ten'       => 'Xã Gia Hòa 2',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '220',
                'px_ten'       => 'Xã Hòa Tú 2',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '24', //Huyện Mỹ Xuyên
            ],
            [
                'px_id'        => '221',
                'px_ten'       => 'Thị trấn Phú Lộc',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '222',
                'px_ten'       => 'Thị trấn Hưng Lợi',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '223',
                'px_ten'       => 'Xã Lâm Tân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '224',
                'px_ten'       => 'Xã Thạnh Tân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '225',
                'px_ten'       => 'Xã Lâm Kiết',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '226',
                'px_ten'       => 'Xã Tuân Tức',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '227',
                'px_ten'       => 'Xã Vĩnh Thành',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '228',
                'px_ten'       => 'Xã Thạnh Trị',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '229',
                'px_ten'       => 'Xã Vĩnh Lợi',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '230',
                'px_ten'       => 'Xã Châu Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '25', //Huyện Thạnh Trị
            ],
            [
                'px_id'        => '231',
                'px_ten'       => 'Phường 1',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '26', //Thị xã Ngã Năm
            ],
            [
                'px_id'        => '232',
                'px_ten'       => 'Phường 2',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '26', //Thị xã Ngã Năm
            ],
            [
                'px_id'        => '233',
                'px_ten'       => 'Xã Vĩnh Quới',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '26', //Thị xã Ngã Năm
            ],
            [
                'px_id'        => '234',
                'px_ten'       => 'Xã Tân Long',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '26', //Thị xã Ngã Năm
            ],
            [
                'px_id'        => '235',
                'px_ten'       => 'Xã Long Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '26', //Thị xã Ngã Năm
            ],
            [
                'px_id'        => '236',
                'px_ten'       => 'Phường 3',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '26', //Thị xã Ngã Năm
            ],
            [
                'px_id'        => '237',
                'px_ten'       => 'Xã Mỹ Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '26', //Thị xã Ngã Năm
            ],
            [
                'px_id'        => '238',
                'px_ten'       => 'Xã Mỹ Quới',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '26', //Thị xã Ngã Năm
            ],
            [
                'px_id'        => '239',
                'px_ten'       => 'Phường 1',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '240',
                'px_ten'       => 'Phường 2',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '241',
                'px_ten'       => 'Phường Khánh Hòa',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '242',
                'px_ten'       => 'Xã Hòa Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '243',
                'px_ten'       => 'Xã Vĩnh Hiệp',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '244',
                'px_ten'       => 'Xã Vĩnh Hải',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '245',
                'px_ten'       => 'Xã Lạc Hòa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '246',
                'px_ten'       => 'Xã Vĩnh Tân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '247',
                'px_ten'       => 'Xã Lai Hòa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '27', //Thị xã Vĩnh Châu
            ],
            [
                'px_id'        => '248',
                'px_ten'       => 'Thị trấn Trần Đề',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '249',
                'px_ten'       => 'Xã Liêu Tú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '250',
                'px_ten'       => 'Xã Lịch Hội Thượng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '251',
                'px_ten'       => 'Thị trấn Lịch Hội Thượng',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '252',
                'px_ten'       => 'Xã Trung Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '253',
                'px_ten'       => 'Xã Tài Văn',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '254',
                'px_ten'       => 'Xã Viên An',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '255',
                'px_ten'       => 'Xã Thạnh Thới An',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '256',
                'px_ten'       => 'Xã Thạnh Thới Thuận',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '257',
                'px_ten'       => 'Xã Viên Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '28', //Huyện Trần Đề
            ],
            [
                'px_id'        => '258',
                'px_ten'       => 'Phường 1',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '259',
                'px_ten'       => 'Phường 2',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '260',
                'px_ten'       => 'Phường 3',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '261',
                'px_ten'       => 'Phường 5',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '262',
                'px_ten'       => 'Phường 7',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '263',
                'px_ten'       => 'Phường 8',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '264',
                'px_ten'       => 'Phường Nhà Mát',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '265',
                'px_ten'       => 'Xã Vĩnh Trạch',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '266',
                'px_ten'       => 'Xã Vĩnh Trạch Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '267',
                'px_ten'       => 'Xã Hiệp Thành',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '29', //Thành phố Bạc Liêu
            ],
            [
                'px_id'        => '268',
                'px_ten'       => 'Thị trấn Ngan Dừa',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '269',
                'px_ten'       => 'Xã Ninh Quới',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '270',
                'px_ten'       => 'Xã Ninh Quới A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '271',
                'px_ten'       => 'Xã Ninh Hòa',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '272',
                'px_ten'       => 'Xã Lộc Ninh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '273',
                'px_ten'       => 'Xã Vĩnh Lộc',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '274',
                'px_ten'       => 'Xã Vĩnh Lộc A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '275',
                'px_ten'       => 'Xã Ninh Thạnh Lợi A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '276',
                'px_ten'       => 'Xã Ninh Thạnh Lợi',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '30', //Huyện Hồng Dân
            ],
            [
                'px_id'        => '277',
                'px_ten'       => 'Thị trấn Phước Long',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '31', //Huyện Phước Long
            ],
            [
                'px_id'        => '278',
                'px_ten'       => 'Xã Vĩnh Phú Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '31', //Huyện Phước Long
            ],
            [
                'px_id'        => '279',
                'px_ten'       => 'Xã Vĩnh Phú Tây',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '31', //Huyện Phước Long
            ],
            [
                'px_id'        => '280',
                'px_ten'       => 'Xã Phước Long',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '31', //Huyện Phước Long
            ],
            [
                'px_id'        => '281',
                'px_ten'       => 'Xã Hưng Phú',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '31', //Huyện Phước Long
            ],
            [
                'px_id'        => '282',
                'px_ten'       => 'Xã Vĩnh Thanh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '31', //Huyện Phước Long
            ],
            [
                'px_id'        => '283',
                'px_ten'       => 'Xã Phong Thạnh Tây A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '31', //Huyện Phước Long
            ],
            [
                'px_id'        => '284',
                'px_ten'       => 'Xã Phong Thạnh Tây B',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '31', //Huyện Phước Long
            ],
            [
                'px_id'        => '285',
                'px_ten'       => 'Thị trấn Châu Hưng',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '32', //Huyện Vĩnh Lợi
            ],
            [
                'px_id'        => '286',
                'px_ten'       => 'Xã Vĩnh Hưng',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '32', //Huyện Vĩnh Lợi
            ],
            [
                'px_id'        => '287',
                'px_ten'       => 'Xã Vĩnh Hưng A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '32', //Huyện Vĩnh Lợi
            ],
            [
                'px_id'        => '288',
                'px_ten'       => 'Xã Châu Hưng A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '32', //Huyện Vĩnh Lợi
            ],
            [
                'px_id'        => '289',
                'px_ten'       => 'Xã Hưng Thành',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '32', //Huyện Vĩnh Lợi
            ],
            [
                'px_id'        => '290',
                'px_ten'       => 'Xã Hưng Hội',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '32', //Huyện Vĩnh Lợi
            ],
            [
                'px_id'        => '291',
                'px_ten'       => 'Xã Châu Thới',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '32', //Huyện Vĩnh Lợi
            ],
            [
                'px_id'        => '292',
                'px_ten'       => 'Xã Long Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '32', //Huyện Vĩnh Lợi
            ],
            [
                'px_id'        => '293',
                'px_ten'       => 'Thị trấn Gành Hào',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '294',
                'px_ten'       => 'Xã Long Điền Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '295',
                'px_ten'       => 'Xã Long Điền Đông A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '296',
                'px_ten'       => 'Xã Long Điền',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '297',
                'px_ten'       => 'Xã Long Điền Tây',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '298',
                'px_ten'       => 'Xã Điền Hải',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '299',
                'px_ten'       => 'Xã An Trạch',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '300',
                'px_ten'       => 'Xã An Trạch A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '301',
                'px_ten'       => 'Xã An Phúc',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '302',
                'px_ten'       => 'Xã Định Thành',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '303',
                'px_ten'       => 'Xã Định Thành A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '33', //Huyện Đông Hải
            ],
            [
                'px_id'        => '304',
                'px_ten'       => 'Thị trấn Hòa Bình',        
                'px_loai'      => 'Thị trấn',        
                'qh_id'        => '34', //Huyện Hòa Bình
            ],
            [
                'px_id'        => '305',
                'px_ten'       => 'Xã Minh Diệu',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '34', //Huyện Hòa Bình
            ],
            [
                'px_id'        => '306',
                'px_ten'       => 'Xã Vĩnh Bình',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '34', //Huyện Hòa Bình
            ],
            [
                'px_id'        => '307',
                'px_ten'       => 'Xã Vĩnh Mỹ B',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '34', //Huyện Hòa Bình
            ],
            [
                'px_id'        => '308',
                'px_ten'       => 'Xã Vĩnh Hậu',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '34', //Huyện Hòa Bình
            ],
            [
                'px_id'        => '309',
                'px_ten'       => 'Xã Vĩnh Hậu A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '34', //Huyện Hòa Bình
            ],
            [
                'px_id'        => '310',
                'px_ten'       => 'Xã Vĩnh Mỹ A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '34', //Huyện Hòa Bình
            ],
            [
                'px_id'        => '311',
                'px_ten'       => 'Xã Vĩnh Thịnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '34', //Huyện Hòa Bình
            ],
            [
                'px_id'        => '312',
                'px_ten'       => 'Phường 1',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '313',
                'px_ten'       => 'Phường Hộ Phòng',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '314',
                'px_ten'       => 'Phường Láng Tròn',        
                'px_loai'      => 'Phường',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '315',
                'px_ten'       => 'Xã Phong Thạnh Đông',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '316',
                'px_ten'       => 'Xã Phong Tân',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '317',
                'px_ten'       => 'Xã Tân Phong',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '318',
                'px_ten'       => 'Xã Phong Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '319',
                'px_ten'       => 'Xã Phong Thạnh A',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '320',
                'px_ten'       => 'Xã Phong Thạnh Tây',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
            [
                'px_id'        => '321',
                'px_ten'       => 'Xã Tân Thạnh',        
                'px_loai'      => 'Xã',        
                'qh_id'        => '35', //Thị xã Giá Rai
            ],
                 
        ];
        DB::table('phuongxa')->insert($list);
    }
}
