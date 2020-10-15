<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\khuyenmai;
use App\sanpham;

class KhuyenMaiController extends Controller
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
        $ds_km = khuyenmai::all();
        return view('admin.khuyenmai.danhsach_km')
            ->with('ds_km', $ds_km);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_km = khuyenmai::all();
        return view('admin.khuyenmai.tao_km')
            ->with('ds_km', $ds_km);
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
            'km_ten' => 'required|unique:khuyenmai,km_ten',
            'km_giatriphantram' => 'required',
            'km_ngaytao' => 'required',
            'km_ngayapdung' => 'required',
            'km_ngayketthuc' => 'required',
        ],[
            'km_ten.required' => "Tên khuyến mãi không được để trống",
            'km_ten.unique' => "Tên khuyến mãi này đã tồn tại",
            'km_giatriphantram.required' => "Giá trị phần trăm giảm không được để trống",   
            'km_ngaytao.required' => "Ngày tạo khuyến mãi không được để trống",   
            'km_ngayapdung.required' => "Ngày áp dụng không được để trống",   
            'km_ngayketthuc.required' => "Ngày kết thúc không được để trống",   
        ]);

        $km = new khuyenmai();
        $km->km_id = $request->km_id;
        $km->km_ten = $request->km_ten;
        $km->km_mota = $request->km_mota;
        $km->km_giatriphantram = $request->km_giatriphantram;
        $km->km_ngaytao = $request->km_ngaytao;
        $km->km_ngayapdung = $request->km_ngayapdung;
        $km->km_ngayketthuc = $request->km_ngayketthuc;
        $km->km_trangthai = 1;

        $km->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.km');
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
    public function edit($km_id)
    {
        $ds_km = khuyenmai::where('km_id', $km_id)->first();
        return view('admin.khuyenmai.sua_km')
            ->with('ds_km', $ds_km);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'km_ten' => 'required',
            'km_giatriphantram' => 'required',
            'km_ngaytao' => 'required',
            'km_ngayapdung' => 'required',
            'km_ngayketthuc' => 'required',
        ],[
            'km_ten.required' => "Tên khuyến mãi không được để trống",
            'km_giatriphantram.required' => "Giá trị phần trăm giảm không được để trống",   
            'km_ngaytao.required' => "Ngày tạo khuyến mãi không được để trống",   
            'km_ngayapdung.required' => "Ngày áp dụng không được để trống",   
            'km_ngayketthuc.required' => "Ngày kết thúc không được để trống",   
        ]);

        $km = new khuyenmai();
        $km->km_id = $request->km_id;
        $km->km_ten = $request->km_ten;
        $km->km_mota = $request->km_mota;
        $km->km_giatriphantram = $request->km_giatriphantram;
        $km->km_ngaytao = $request->km_ngaytao;
        $km->km_ngayapdung = $request->km_ngayapdung;
        $km->km_ngayketthuc = $request->km_ngayketthuc;
        $km->km_trangthai = $request->km_trangthai;

        $km->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.km');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($km_id)
    {
        $km = khuyenmai::find($km_id);
        $km->km_trangthai = 0;

        $km->delete();

        $km->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.km');
    }
}
