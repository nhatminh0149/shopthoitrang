<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	AdminTableSeeder::class,
        	UserTableSeeder::class,
        	KhoTableSeeder::class,
        	NhaCungCapTableSeeder::class,
        	DanhMucTableSeeder::class,
        	LoaiSanPhamTableSeeder::class,
        	MauTableSeeder::class,
        	SizeTableSeeder::class,
        	HinhThucVanChuyenTableSeeder::class,
        	KhuyenMaiTableSeeder::class,
        	SanPhamTableSeeder::class,
        	HinhThucThanhToanTableSeeder::class,
        	KhachHangTableSeeder::class,
        ]);

    }
}
