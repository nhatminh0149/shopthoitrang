<?php


use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::truncate();
    	// for ($i=0; $i < 50; $i++) { 
	    // 	// create user
	    //     User::create([
	    //     	'username' => str_random(10),
	    //     	'email'   =>  str_random(10).'@gmail.com',
	    //     	'password' => bcrypt('secret'),
	    //     ]);
		// }
		
		User::create([
    		'username' => 'Phúc Lê',
    		'email' => 'Phucxautrai114@gmail.com',
    		'password' => bcrypt('letanphuc'),
    		'hoten' => 'Lê Tấn Phúc',
    		'sdt' => '0916112233',
    		'trangthai' => '1',
		]);
		
		User::create([
    		'username' => 'Quế Anh',
    		'email' => 'queanhst98@gmail.com',
    		'password' => bcrypt('queanh'),
    		'hoten' => 'Đường Quế Anh',
    		'sdt' => '0916334455',
    		'trangthai' => '1',
		]);
		
		User::create([
    		'username' => 'Di Di',
    		'email' => 'nguyenduy171298@gmail.com',
    		'password' => bcrypt('didididi'),
    		'hoten' => 'Nguyễn Phước Duy',
    		'sdt' => '0916667788',
    		'trangthai' => '1',
    	]);
    }
}
