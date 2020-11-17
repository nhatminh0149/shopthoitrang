<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\admin;
use App\user;
use App\hinhanh;
use App\sanpham;
use App\chitietsanpham;
use App\dondathang;
use App\chitietdonhang;
use App\khachhang;
use App\hinhthucvanchuyen;
use App\hinhthucthanhtoan;
use App\quanhuyen;
use App\phuongxa;
use App\tinhthanhpho;
session_start();

class DonDatHangController extends Controller
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
        $ds_ddh = DB::select(
            'SELECT ddh.*, kh.kh_taikhoan, px.px_ten, qh.qh_ten, ttp.tinhtp_ten
            FROM dondathang ddh
            JOIN khachhang kh ON ddh.kh_id = kh.kh_id
            JOIN phuongxa px ON ddh.px_id = px.px_id
            JOIN quanhuyen qh ON px.qh_id = qh.qh_id
            JOIN tinhthanhpho ttp ON qh.tinhtp_id = ttp.tinhtp_id'
        );
        //dd($ds_ddh);
        //$qh = quanhuyen::where('qh_id', $ds_ddh->px_id);
        //dd($qh);
        return view('admin.dondathang.danhsach_ddh')
            ->with('ds_ddh', $ds_ddh);
    }

    public function chitietdonhang($ddh_id){
        $ds_ddh = dondathang::find($ddh_id);

        $ds_ddh1 = DB::select(
            'SELECT *
            FROM dondathang ddh
            JOIN khachhang kh ON ddh.kh_id = kh.kh_id
            JOIN hinhthucvanchuyen htvc ON htvc.htvc_id = ddh.htvc_id
            JOIN hinhthucthanhtoan httt ON httt.httt_id = ddh.httt_id
            JOIN phuongxa px ON ddh.px_id = px.px_id
            JOIN quanhuyen qh ON px.qh_id = qh.qh_id
            JOIN tinhthanhpho ttp ON qh.tinhtp_id = ttp.tinhtp_id
            LEFT JOIN admins ad ON ad.id = ddh.id
            WHERE ddh.ddh_id = '.$ddh_id.' ');

        $ds_ddh2 = DB::select(
            'SELECT *
            from chitietdonhang ctdh
            LEFT JOIN sanpham sp ON sp.sp_id = ctdh.sp_id
            LEFT JOIN mau m ON m.m_id = ctdh.m_id
            LEFT JOIN size s ON s.size_id = ctdh.size_id
            WHERE ctdh.ddh_id = '.$ddh_id.' ');

        $ds_ddh3 = DB::select(
            'SELECT SUM(aaa.ctdh_soluong * aaa.ctdh_dongia) AS TongTienDonHang
            FROM (
                SELECT ctdh.ctdh_soluong, ctdh.ctdh_dongia
                FROM dondathang ddh
                JOIN chitietdonhang ctdh ON ddh.ddh_id = ctdh.ddh_id
                WHERE ddh.ddh_id = '.$ddh_id.' ) AS aaa');
        

        return view('admin.dondathang.chitiet_ddh')
                ->with('ds_ddh', $ds_ddh)
                ->with('ds_ddh1',  $ds_ddh1)
                ->with('ds_ddh2',  $ds_ddh2)
                ->with('ds_ddh3',  $ds_ddh3);
    }

    public function active($ddh_id){
        $ddh = DonDatHang::find($ddh_id);
        $ddh->ddh_trangthai = 1;
        if(isset(Auth::user()->name)){
            $ddh->id=Auth::user()->id;
        }
        $ddh->save();
        Session::flash('alert-success', 'Xử lý đơn hàng thành công');
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
