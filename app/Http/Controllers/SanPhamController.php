<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\kho;
use App\khuyenmai;
use App\danhmuc;
use App\loaisanpham;
use App\sanpham;

class SanPhamController extends Controller
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
        $ds_sp = sanpham::all();
        return view('admin.sanpham.danhsach_sp')
            ->with('ds_sp', $ds_sp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_kho = kho::all();
        $ds_lsp = loaisanpham::where('lsp_trangthai', '=', '1')->get();
        $ds_km = khuyenmai::where('km_trangthai', '=', '1')->get();
        return view('admin.sanpham.tao_sp')
            ->with('ds_kho', $ds_kho)
            ->with('ds_lsp', $ds_lsp)
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
            'sp_ten' => 'required|unique:sanpham,sp_ten',
            'sp_mota' => 'required',
            'sp_hinh' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ],[
            'sp_ten.required' => "Tên sản phẩm không được để trống",
            'sp_ten.unique' => "Tên sản phẩm này đã tồn tại",
            'sp_mota.required' => "Mô tả sản phẩm không được để trống",
        ]);

        $sp = new sanpham();
        $sp->sp_id = $request->sp_id;
        $sp->sp_ten = $request->sp_ten;
        $sp->sp_soluong = 0;
        $sp->sp_mota = $request->sp_mota;
        $sp->sp_trangthai = 1;
        $sp->lsp_id = $request->lsp_id;
        $sp->km_id = $request->km_id;
        $sp->kho_id = $request->kho_id;

        if($request->hasFile('sp_hinh'))
        {
            $file = $request->sp_hinh;
    
            // Lưu tên hình vào column sp_hinh
            $sp->sp_hinh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        }

        $sp->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.sp');
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
