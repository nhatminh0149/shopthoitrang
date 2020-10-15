<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\khachhang;

class KhachHangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds_kh = khachhang::all();
        return view('admin.khachhang.danhsach_kh')
            ->with('ds_kh', $ds_kh);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_kh = khachhang::all();
        return view('admin.khachhang.tao_kh')
            ->with('ds_kh', $ds_kh);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kh_taikhoan' => 'required',
            'kh_matkhau' => 'required|min:6',
            're_kh_matkhau' => 'same:kh_matkhau',
            'kh_hoten' => 'required',
            'kh_email' => 'required|email|unique:khachhang,kh_email',
            'kh_sdt' => 'required|digits:10',
        ],[
            'kh_taikhoan.required' => "Tài khoản khách hàng không được để trống",
            'kh_matkhau.required' => "Mật khẩu khách hàng không được để trống",
            'kh_matkhau.min' => "Mật khẩu khách hàng ít nhất 6 kí tự",
            're_kh_matkhau.same' => "Mật khẩu không giống nhau. Vui lòng nhập lại",
            'kh_hoten.required' => "Họ tên khách hàng không được để trống",
            'kh_email.required' => "Email khách hàng không được để trống",
            'kh_email.email' => "Email không đúng định dạng",
            'kh_email.unique' => "Email này đã tồn tại",
            'kh_sdt.required' => "SĐT của khách hàng không được để trống",
            'kh_sdt.digits' => "SĐT của khách hàng phải là số 10 kí tự ",
        ]);

        $kh = new khachhang();
        $kh->kh_id = $request->kh_id;
        $kh->kh_taikhoan = $request->kh_taikhoan;
        $kh->kh_matkhau = md5($request->kh_matkhau);
        $kh->kh_hoten = $request->kh_hoten;
        $kh->kh_email = $request->kh_email;
        $kh->kh_sdt = $request->kh_sdt;
        $kh->kh_trangthai = 1;

        $kh->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.kh');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kh_id)
    {
        $ds_kh = khachhang::where("kh_id",  $kh_id)->first();
    
        return view('admin.khachhang.sua_kh')
            ->with('ds_kh', $ds_kh);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kh_id)
    {
        $this->validate($request, [
            'kh_taikhoan' => 'required',
            'kh_matkhau' => 'required|min:6',
            're_kh_matkhau' => 'same:kh_matkhau',
            'kh_hoten' => 'required',
            'kh_email' => 'required|email',
            'kh_sdt' => 'required|digits:10',
        ],[
            'kh_taikhoan.required' => "Tài khoản khách hàng không được để trống",
            'kh_matkhau.required' => "Mật khẩu khách hàng không được để trống",
            'kh_matkhau.min' => "Mật khẩu khách hàng ít nhất 6 kí tự",
            're_kh_matkhau.same' => "Mật khẩu không giống nhau. Vui lòng nhập lại",
            'kh_hoten.required' => "Họ tên khách hàng không được để trống",
            'kh_email.required' => "Email khách hàng không được để trống",
            'kh_email.email' => "Email không đúng định dạng",
            // 'kh_email.unique' => "Email này đã tồn tại",
            'kh_sdt.required' => "SĐT của khách hàng không được để trống",
            'kh_sdt.digits' => "SĐT của khách hàng phải là số 10 kí tự ",
        ]);

        $kh = khachhang::where('kh_id', $kh_id)->first();
        $kh->kh_id = $request->kh_id;
        $kh->kh_taikhoan = $request->kh_taikhoan;
        $kh->kh_matkhau = md5($request->kh_matkhau);
        $kh->kh_hoten = $request->kh_hoten;
        $kh->kh_email = $request->kh_email;
        $kh->kh_sdt = $request->kh_sdt;
        $kh->kh_trangthai = $request->kh_trangthai;

        $kh->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.kh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kh_id)
    {
        $kh = khachhang::find($kh_id);
        $kh->kh_trangthai = 0;
        $kh->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.kh');
    }
}
