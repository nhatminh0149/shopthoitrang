<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\kho;
use Storage;


class KhoController extends Controller
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
        $ds_kho = Kho::all();
        return view('admin.kho.danhsach_kho')
            ->with('ds_kho', $ds_kho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_kho = kho::all();
        return view('admin.kho.tao_kho')
            ->with('ds_kho', $ds_kho);
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
            'kho_ten' => 'required|unique:kho,kho_ten',
            'kho_diachi' => 'required',
        ],[
            'kho_ten.required' => "Tên kho không được để trống",
            'kho_ten.unique' => "Tên kho này đã tồn tại",
            'kho_diachi.required' => "Địa chỉ kho không được để trống",   
        ]);

        $kho = new kho();
        $kho->kho_id = $request->kho_id;
        $kho->kho_ten = $request->kho_ten;
        $kho->kho_diachi = $request->kho_diachi;

        $kho->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.kho');
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
    public function edit($kho_id)
    {
        $ds_kho = Kho::where("kho_id",  $kho_id)->first();;
        return view('admin.kho.sua_kho')
            ->with('ds_kho', $ds_kho);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kho_id)
    {
        $this->validate($request, [
            'kho_ten' => 'required',
            'kho_diachi' => 'required',
        ],[
            'kho_ten.required' => "Tên kho không được để trống",
            'kho_diachi.required' => "Địa chỉ kho không được để trống",
        ]);

        $kho = kho::where("kho_id",  $kho_id)->first();;
        $kho->kho_id = $request->kho_id;
        $kho->kho_ten = $request->kho_ten;
        $kho->kho_diachi = $request->kho_diachi;
        
        $kho->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.kho');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kho_id)
    {
        $kho = kho::where("kho_id",  $kho_id)->first();
        $kho->delete();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.kho');
    }
}
