<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Schema::disableForeignKeyConstraints();
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
        	HinhAnhTableSeeder::class,
        	PhieuNhapKhoTableSeeder::class,
        	ChiTietPhieuNhapTableSeeder::class,
        	GiaTableSeeder::class,
        	ChiTietSanPhamTableSeeder::class,
        	TinhThanhPhoTableSeeder::class,
        	QuanHuyenTableSeeder::class,
        	PhuongXaTableSeeder::class,
        	DonDatHangTableSeeder::class,
        	ChiTietDonHangTableSeeder::class,
        ]);

    }
}
