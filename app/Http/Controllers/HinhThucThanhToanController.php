<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\hinhthucthanhtoan;

class HinhThucThanhToanController extends Controller
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
        $ds_httt = hinhthucthanhtoan::all();
        return view('admin.hinhthucthanhtoan.danhsach_httt')
            ->with('ds_httt', $ds_httt);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_httt = hinhthucthanhtoan::all();
        return view('admin.hinhthucthanhtoan.tao_httt')
            ->with('ds_httt', $ds_httt);
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
            'httt_ten' => 'required|unique:hinhthucthanhtoan,httt_ten',
        ],[
            'httt_ten.required' => "Hình thức thanh toán không được để trống",
            'httt_ten.unique' => "Hình thức thanh toán này đã tồn tại",
        ]);

        $httt = new hinhthucthanhtoan();
        $httt->httt_id = $request->httt_id;
        $httt->httt_ten = $request->httt_ten;
        $httt->httt_trangthai = 1;

        $httt->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.httt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($httt_id)
    {
        $ds_httt = hinhthucthanhtoan::where("httt_id",  $httt_id)->first();
    
        return view('admin.hinhthucthanhtoan.sua_httt')
            ->with('ds_httt', $ds_httt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $httt_id)
    {
        $this->validate($request, [
            'httt_ten' => 'required',
        ],[
            'httt_ten.required' => "Hình thức thanh toán không được để trống",
        ]);

        $httt = hinhthucthanhtoan::where('httt_id', $httt_id)->first();
        $httt->httt_id = $request->httt_id;
        $httt->httt_ten = $request->httt_ten;
        $httt->httt_trangthai = $request->httt_trangthai;

        $httt->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.httt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($httt_id)
    {
        $httt = hinhthucthanhtoan::find($httt_id);
        $httt->httt_trangthai = 0;

        $httt->save();

        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.httt');
    }
}
