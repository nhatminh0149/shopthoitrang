<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\nhacungcap;
use App\danhmuc;
use App\loaisanpham;
use App\sanpham;

class DanhMucController extends Controller
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
        $ds_danhmuc = danhmuc::all();
        return view('admin.danhmuc.danhsach_danhmuc')
            ->with('ds_danhmuc', $ds_danhmuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_ncc = nhacungcap::where('ncc_trangthai','=','1')->get();
        return view('admin.danhmuc.tao_danhmuc')
            ->with('ds_ncc', $ds_ncc);
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
            'dm_ten' => 'required|unique:danhmuc,dm_ten',
        ],[
            'dm_ten.required' => "Danh mục không được để trống",
            'dm_ten.unique' => "Danh mục này đã tồn tại",
        ]);

        $dm = new danhmuc();
        $dm->dm_id = $request->dm_id;
        $dm->dm_ten = $request->dm_ten;
        $dm->ncc_id = $request->ncc_id;
        $dm->dm_trangthai = 1;

        $dm->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.danhmuc');
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
    public function edit($dm_id)
    {
        $ds_danhmuc = danhmuc::where("dm_id",  $dm_id)->first();
        $ds_ncc = nhacungcap::where('ncc_trangthai','=','1')->get();
    
        return view('admin.danhmuc.sua_danhmuc')
            ->with('ds_danhmuc', $ds_danhmuc)
            ->with('ds_ncc', $ds_ncc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dm_id)
    {
        $this->validate($request, [
            'dm_ten' => 'required',
        ],[
            'dm_ten.required' => "Danh mục không được để trống",
        ]);

        $dm = danhmuc::where('dm_id', $dm_id)->first();
        $dm->dm_id = $request->dm_id;
        $dm->dm_ten = $request->dm_ten;
        $dm->dm_trangthai = $request->dm_trangthai;
        $dm->ncc_id = $request->ncc_id;
        
        $lsp = loaisanpham::where('dm_id', $dm_id)->get();
        foreach($lsp as $lsp){
            DB::table('loaisanpham')->where('dm_id', $lsp->dm_id)
                                ->update(['lsp_trangthai' => $request->dm_trangthai]);
                
            $sp = sanpham::where('lsp_id', $lsp->lsp_id)->get();
            foreach($sp as $sp){
                DB::table('sanpham')->where('lsp_id', $sp->lsp_id)
                                    ->update(['sp_trangthai' => $request->dm_trangthai]);
            }
        }

        $dm->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.danhmuc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dm_id)
    {
        $dm = danhmuc::find($dm_id);
        $dm->dm_trangthai = 0;
        
        $lsp = loaisanpham::where('dm_id', $dm_id)->get();
        foreach($lsp as $lsp){
            DB::table('loaisanpham')->where('dm_id', $lsp->dm_id)
                                ->update(['lsp_trangthai' => 0]);
                
            $sp = sanpham::where('lsp_id', $lsp->lsp_id)->get();
            foreach($sp as $sp){
                DB::table('sanpham')->where('lsp_id', $sp->lsp_id)
                                    ->update(['sp_trangthai' => 0]);
            }
        }

        $dm->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.danhmuc');
    }
}
