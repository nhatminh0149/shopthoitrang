<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\sanpham;
use App\mau;
use App\size;
use App\hinhanh;
use App\chitietsanpham;

class ChiTietSanPhamController extends Controller
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
        $ds_ctsp = chitietsanpham::all();
        return view('admin.chitietsanpham.danhsach_ctsp')
            ->with('ds_ctsp', $ds_ctsp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_mau = mau::all();
        $ds_size = size::all();
        $ds_sp = sanpham::where('sp_trangthai', '=', '1')->get();
        $ds_ha = hinhanh::all();
        return view('admin.chitietsanpham.tao_ctsp')
            ->with('ds_mau', $ds_mau)
            ->with('ds_size', $ds_size)
            ->with('ds_sp', $ds_sp)
            ->with('ds_ha', $ds_ha);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ctsp = new chitietsanpham();
        $ctsp->sp_id = $request->sp_id;
        $ctsp->m_id = $request->m_id;
        $ctsp->size_id = $request->size_id;
        $ctsp->ha_id = $request->ha_id;
        $ctsp->ctsp_soluong = 0;

        $ctsp->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.ctsp');
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
