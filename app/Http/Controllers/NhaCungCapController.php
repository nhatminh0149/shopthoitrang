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

class NhaCungCapController extends Controller
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
        $ds_ncc = nhacungcap::all();
        return view('admin.nhacungcap.danhsach_ncc')
            ->with('ds_ncc', $ds_ncc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_ncc = nhacungcap::all();
        return view('admin.nhacungcap.tao_ncc')
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
            'ncc_ten' => 'required|unique:nhacungcap,ncc_ten',
            'ncc_diachi' => 'required',
            'ncc_sdt' => 'required|unique:nhacungcap,ncc_sdt|digits:10',
        ],[
            'ncc_ten.required' => "Tên NCC không được để trống",
            'ncc_ten.unique' => "Tên NCC này đã tồn tại",
            'ncc_diachi.required' => "Địa chỉ NCC không được để trống",   
            'ncc_sdt.required' => "SĐT NCC không được để trống",
            'ncc_sdt.unique' => "SĐT NCC này đã tồn tại",
            'ncc_sdt.digits' => "SĐT NCC phải ở dạng số 10 kí tự",
        ]);

        $ncc = new nhacungcap();
        $ncc->ncc_id = $request->ncc_id;
        $ncc->ncc_ten = $request->ncc_ten;
        $ncc->ncc_diachi = $request->ncc_diachi;
        $ncc->ncc_sdt = $request->ncc_sdt;
        $ncc->ncc_trangthai = 1;

        $ncc->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.ncc');
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
    public function edit($ncc_id)
    {
        $ds_ncc = nhacungcap::where("ncc_id",  $ncc_id)->first();;
        return view('admin.nhacungcap.sua_ncc')
            ->with('ds_ncc', $ds_ncc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ncc_id)
    {
        $this->validate($request, [
            'ncc_ten' => 'required',
            'ncc_diachi' => 'required',
            'ncc_sdt' => 'required|digits:10',
        ],[
            'ncc_ten.required' => "Tên NCC không được để trống",
            'ncc_diachi.required' => "Địa chỉ NCC không được để trống",   
            'ncc_sdt.required' => "SĐT NCC không được để trống",
            'ncc_sdt.digits' => "SĐT NCC phải ở dạng số 10 kí tự",
        ]);

        $ncc = nhacungcap::where("ncc_id",  $ncc_id)->first();
        $ncc->ncc_id = $request->ncc_id;
        $ncc->ncc_ten = $request->ncc_ten;
        $ncc->ncc_diachi = $request->ncc_diachi;
        $ncc->ncc_sdt = $request->ncc_sdt;
        $ncc->ncc_trangthai = $request->ncc_trangthai;

        $dm = danhmuc::where('ncc_id', $ncc_id)->get();
        foreach($dm as $dm){
            DB::table('danhmuc')->where('ncc_id', $dm->ncc_id)
                                ->update(['dm_trangthai' => $request->ncc_trangthai]);

            $lsp = loaisanpham::where('dm_id', $dm->dm_id)->get();
            foreach($lsp as $lsp){
                DB::table('loaisanpham')->where('dm_id', $lsp->dm_id)
                                    ->update(['lsp_trangthai' => $request->ncc_trangthai]);
                
                $sp = sanpham::where('lsp_id', $lsp->lsp_id)->get();
                foreach($sp as $sp){
                    DB::table('sanpham')->where('lsp_id', $sp->lsp_id)
                                        ->update(['sp_trangthai' => $request->ncc_trangthai]);
                }
            }
        }

        $ncc->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.ncc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ncc_id)
    {
        $ncc = nhacungcap::find($ncc_id);
        $ncc->ncc_trangthai = 0;

        $dm = danhmuc::where('ncc_id', $ncc_id)->get();
        foreach($dm as $dm){
            DB::table('danhmuc')->where('ncc_id', $dm->ncc_id)
                                ->update(['dm_trangthai' => 0]);

            $lsp = loaisanpham::where('dm_id', $dm->dm_id)->get();
            foreach($lsp as $lsp){
                DB::table('loaisanpham')->where('dm_id', $lsp->dm_id)
                                    ->update(['lsp_trangthai' => 0]);
                
                $sp = sanpham::where('lsp_id', $lsp->lsp_id)->get();
                foreach($sp as $sp){
                    DB::table('sanpham')->where('lsp_id', $sp->lsp_id)
                                        ->update(['sp_trangthai' => 0]);
                }
            }
        }

        //$ncc->delete();
        $ncc->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.ncc');
    }
}
