<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', 'HomeController@welcome');

Auth::routes();
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/home', 'HomeController@index')->name('home');


//BACKEND
Route::prefix('admin')->group(function()
{

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	
	
	//QUẢN LÝ USERS (KHÁCH HÀNG)
	Route::get('/users', 'AdminController@users')->name('admin.users');
	Route::get('/users/{username}', 'AdminController@edit')->name('admin.user.edit');
	// Route::post('/users/{user}', 'AdminController@update')->name('admin.user.update');
	Route::get('/users_create', 'AdminController@create')->name('admin.user.create');
	Route::post('/users_store', 'AdminController@store')->name('admin.user.store');
	Route::post('/users/{id}', 'AdminController@update')->name('admin.user.update');
	Route::get('/users_delete/{id}', 'AdminController@destroy')->name('admin.user.destroy');

	//QUẢN LÝ KHO
	Route::get('/kho', 'KhoController@index')->name('admin.kho');
	Route::get('/kho_create', 'KhoController@create')->name('admin.kho.create');
	Route::post('/kho_store', 'KhoController@store')->name('admin.kho.store');
	Route::get('/kho_edit{kho_id}', 'KhoController@edit')->name('admin.kho.edit');
	Route::post('/kho_update/{kho_id}', 'KhoController@update')->name('admin.kho.update');
	Route::get('/kho_delete/{kho_id}', 'KhoController@destroy')->name('admin.kho.destroy');
	
	//QUẢN LÝ NHÀ CUNG CẤP
	Route::get('/ncc', 'NhaCungCapController@index')->name('admin.ncc');
	Route::get('/ncc_create', 'NhaCungCapController@create')->name('admin.ncc.create');
	Route::post('/ncc_store', 'NhaCungCapController@store')->name('admin.ncc.store');
	Route::get('/ncc_edit{kho_id}', 'NhaCungCapController@edit')->name('admin.ncc.edit');
	Route::post('/ncc_update/{ncc_id}', 'NhaCungCapController@update')->name('admin.ncc.update');
	Route::get('/ncc_delete/{ncc_id}', 'NhaCungCapController@destroy')->name('admin.ncc.destroy');

	//QUẢN LÝ DANH MỤC
	Route::get('/danhmuc', 'DanhMucController@index')->name('admin.danhmuc');
	Route::get('/danhmuc_create', 'DanhMucController@create')->name('admin.danhmuc.create');
	Route::post('/danhmuc_store', 'DanhMucController@store')->name('admin.danhmuc.store');
	Route::get('/danhmuc_edit{dm_id}', 'DanhMucController@edit')->name('admin.danhmuc.edit');
	Route::post('/danhmuc_update/{dm_id}', 'DanhMucController@update')->name('admin.danhmuc.update');
	Route::get('/danhmuc_delete/{dm_id}', 'DanhMucController@destroy')->name('admin.danhmuc.destroy');
	
	//QUẢN LÝ LOẠI SẢN PHẨM
	Route::get('/loaisanpham', 'LoaiSanPhamController@index')->name('admin.lsp');
	Route::get('/loaisanpham_create', 'LoaiSanPhamController@create')->name('admin.lsp.create');
	Route::post('/loaisanpham_store', 'LoaiSanPhamController@store')->name('admin.lsp.store');
	Route::get('/loaisanpham_edit{lsp_id}', 'LoaiSanPhamController@edit')->name('admin.lsp.edit');
	Route::post('/loaisanpham_update/{lsp_id}', 'LoaiSanPhamController@update')->name('admin.lsp.update');
	Route::get('/loaisanpham_delete/{lsp_id}', 'LoaiSanPhamController@destroy')->name('admin.lsp.destroy');
	
	//QUẢN LÝ MÀU
	Route::get('/mau', 'MauController@index')->name('admin.mau');
	Route::get('/mau_create', 'MauController@create')->name('admin.mau.create');
	Route::post('/mau_store', 'MauController@store')->name('admin.mau.store');
	Route::get('/mau_edit{lsp_id}', 'MauController@edit')->name('admin.mau.edit');
	Route::post('/mau_update/{lsp_id}', 'MauController@update')->name('admin.mau.update');

	//QUẢN LÝ SIZE
	Route::get('/size', 'SizeController@index')->name('admin.size');
	Route::get('/size_create', 'SizeController@create')->name('admin.size.create');
	Route::post('/size_store', 'SizeController@store')->name('admin.size.store');
	Route::get('/size_edit{size_id}', 'SizeController@edit')->name('admin.size.edit');
	Route::post('/size_update/{size_id}', 'SizeController@update')->name('admin.size.update');
	
	//QUẢN LÝ HÌNH THỨC VẬN CHUYỂN
	Route::get('/htvc', 'HinhThucVanChuyenController@index')->name('admin.htvc');
	Route::get('/htvc_create', 'HinhThucVanChuyenController@create')->name('admin.htvc.create');
	Route::post('/htvc_store', 'HinhThucVanChuyenController@store')->name('admin.htvc.store');
	Route::get('/htvc_edit{htvc_id}', 'HinhThucVanChuyenController@edit')->name('admin.htvc.edit');
	Route::post('/htvc_update/{htvc_id}', 'HinhThucVanChuyenController@update')->name('admin.htvc.update');
	Route::get('/htvc_delete/{htvc_id}', 'HinhThucVanChuyenController@destroy')->name('admin.htvc.destroy');
	
	//QUẢN LÝ HÌNH THỨC THANH TOÁN
	Route::get('/httt', 'HinhThucThanhToanController@index')->name('admin.httt');
	Route::get('/httt_create', 'HinhThucThanhToanController@create')->name('admin.httt.create');
	Route::post('/httt_store', 'HinhThucThanhToanController@store')->name('admin.httt.store');
	Route::get('/httt_edit{httt_id}', 'HinhThucThanhToanController@edit')->name('admin.httt.edit');
	Route::post('/httt_update/{httt_id}', 'HinhThucThanhToanController@update')->name('admin.httt.update');
	Route::get('/httt_delete/{httt_id}', 'HinhThucThanhToanController@destroy')->name('admin.httt.destroy');

	//QUẢN LÝ KHÁCH HÀNG
	// Route::get('/kh', 'KhachHangController@index')->name('admin.kh');
	// Route::get('/kh_create', 'KhachHangController@create')->name('admin.kh.create');
	// Route::post('/kh_store', 'KhachHangController@store')->name('admin.kh.store');
	// Route::get('/kh_edit{kh_id}', 'KhachHangController@edit')->name('admin.kh.edit');
	// Route::post('/kh_update/{kh_id}', 'KhachHangController@update')->name('admin.kh.update');
	// Route::get('/kh_delete/{kh_id}', 'KhachHangController@destroy')->name('admin.kh.destroy');

	//QUẢN LÝ KHUYẾN MÃI
	Route::get('/km', 'KhuyenMaiController@index')->name('admin.km');
	Route::get('/km_create', 'KhuyenMaiController@create')->name('admin.km.create');
	Route::post('/km_store', 'KhuyenMaiController@store')->name('admin.km.store');
	Route::get('/km_edit{km_id}', 'KhuyenMaiController@edit')->name('admin.km.edit');
	Route::post('/km_update/{km_id}', 'KhuyenMaiController@update')->name('admin.km.update');
	Route::get('/km_delete/{km_id}', 'KhuyenMaiController@destroy')->name('admin.km.destroy');

	//QUẢN LÝ SẢN PHẨM
	Route::get('/sp', 'SanPhamController@index')->name('admin.sp');
	Route::get('/sp_create', 'SanPhamController@create')->name('admin.sp.create');
	Route::post('/sp_store', 'SanPhamController@store')->name('admin.sp.store');
	Route::get('/sp_edit{sp_id}', 'SanPhamController@edit')->name('admin.sp.edit');
	Route::post('/sp_update/{sp_id}', 'SanPhamController@update')->name('admin.sp.update');
	Route::get('/sp_delete/{sp_id}', 'SanPhamController@destroy')->name('admin.sp.destroy');

	//QUẢN LÝ PHIẾU NHẬP KHO
	Route::get('/pnk', 'PhieuNhapKhoController@index')->name('admin.pnk');
	Route::get('/chitietphieunhapkho/{pnk_id}','PhieuNhapKhoController@chitietphieunhapkho')->name('admin.pnk.chitiet');
	Route::get('/pnk_create', 'PhieuNhapKhoController@create')->name('admin.pnk.create');
	Route::post('/pnk_store', 'PhieuNhapKhoController@store')->name('admin.pnk.store');
	Route::get('/danhmuc_theoncc','PhieuNhapKhoController@danhmuc_theoncc');
	Route::get('/loaisanpham_theodanhmuc','PhieuNhapKhoController@loaisanpham_theodanhmuc');
	Route::get('/sanpham_theoloaisanpham','PhieuNhapKhoController@sanpham_theoloaisanpham');
	Route::get('/size_ctpn','PhieuNhapKhoController@size');
	Route::post('/dynamic-field/insert', 'PhieuNhapKhoController@insert')->name('admin.dynamic-field.insert');

	//QUẢN LÝ HÌNH ẢNH SẢN PHẨM
	Route::get('/hinhanh', 'HinhAnhController@index')->name('admin.hinhanh');
	Route::get('/hinhanh_create', 'HinhAnhController@create')->name('admin.hinhanh.create');
	Route::post('/hinhanh_store', 'HinhAnhController@store')->name('admin.hinhanh.store');
	Route::get('/hinhanh_edit{ha_id}', 'HinhAnhController@edit')->name('admin.hinhanh.edit');
	Route::post('/hinhanh_update/{ha_id}', 'HinhAnhController@update')->name('admin.hinhanh.update');
	
	//QUẢN LÝ CHI TIẾT SẢN PHẨM
	Route::get('/ctsp', 'ChiTietSanPhamController@index')->name('admin.ctsp');
	Route::get('/ctsp_create', 'ChiTietSanPhamController@create')->name('admin.ctsp.create');
	Route::post('/ctsp_store', 'ChiTietSanPhamController@store')->name('admin.ctsp.store');
	
});

//Thực hiện tạo giao diện trang chủ Frontend
Route::get('/', 'FrontendController@index')->name('frontend.home');

