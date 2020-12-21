<?php


use App\Admin;

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Admin::truncate();

    	Admin::create([
    		'name' => 'Admin',
    		'email' => 'admin@gmail.com',
    		'password' => bcrypt('password'),
    		'quyen' => 1,
    		'trangthai' => 1,
    	]);
    	Admin::create([
    		'name' => 'Khai Minh',
    		'email' => 'nhanvienkho@gmail.com',
    		'password' => bcrypt('nhanvienkho'),
			'quyen' => 2,
			'trangthai' => 1,
    	]);
    	Admin::create([
    		'name' => 'Nhật Minh',
    		'email' => 'nhanvienbanhang@gmail.com',
    		'password' => bcrypt('nhanvienbanhang'),
			'quyen' => 3,
			'trangthai' => 1,
    	]);
        
    }
}
