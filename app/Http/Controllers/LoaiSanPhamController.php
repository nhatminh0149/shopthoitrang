<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\danhmuc;
use App\loaisanpham;
use App\sanpham;

class LoaiSanPhamController extends Controller
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
        $ds_lsp = loaisanpham::all();
        return view('admin.loaisanpham.danhsach_lsp')
            ->with('ds_lsp', $ds_lsp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_dm = danhmuc::where('dm_trangthai','=','1')->get();
        return view('admin.loaisanpham.tao_lsp')
            ->with('ds_dm', $ds_dm);
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
            'lsp_ten' => 'required|unique:loaisanpham,lsp_ten',
        ],[
            'lsp_ten.required' => "Loại sản phẩm không được để trống",
            'lsp_ten.unique' => "Loại sản phẩm này đã tồn tại",
        ]);

        $lsp = new loaisanpham();
        $lsp->lsp_id = $request->lsp_id;
        $lsp->lsp_ten = $request->lsp_ten;
        $lsp->lsp_trangthai = 1;
        $lsp->dm_id = $request->dm_id;

        $lsp->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.lsp');
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
    public function edit($lsp_id)
    {
        $ds_lsp = loaisanpham::where("lsp_id",  $lsp_id)->first();
        $ds_danhmuc = danhmuc::all();
    
        return view('admin.loaisanpham.sua_lsp')
            ->with('ds_lsp', $ds_lsp)
            ->with('ds_danhmuc', $ds_danhmuc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lsp_id)
    {
        $this->validate($request, [
            'lsp_ten' => 'required',
        ],[
            'lsp_ten.required' => "Loại sản phẩm không được để trống",
        ]);

        $lsp = loaisanpham::where('lsp_id', $lsp_id)->first();
        $lsp->lsp_id = $request->lsp_id;
        $lsp->lsp_ten = $request->lsp_ten;
        $lsp->lsp_trangthai = $request->lsp_trangthai;
        $lsp->dm_id = $request->dm_id;

        $sp = sanpham::where('lsp_id', $lsp->lsp_id)->get();
        foreach($sp as $sp){
            DB::table('sanpham')->where('lsp_id', $sp->lsp_id)
                                ->update(['sp_trangthai' => $request->lsp_trangthai]);
        }

        $lsp->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.lsp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lsp_id)
    {
        $lsp = loaisanpham::find($lsp_id);
        $lsp->lsp_trangthai = 0;
        
        $sp = sanpham::where('lsp_id', $lsp->lsp_id)->get();
        foreach($sp as $sp){
            DB::table('sanpham')->where('lsp_id', $sp->lsp_id)
                                ->update(['sp_trangthai' => 0]);
        }

        $lsp->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.lsp');
    }
}
