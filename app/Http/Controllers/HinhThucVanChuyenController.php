<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\hinhthucvanchuyen;

class HinhThucVanChuyenController extends Controller
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
        $ds_htvc = hinhthucvanchuyen::all();
        return view('admin.hinhthucvanchuyen.danhsach_htvc')
            ->with('ds_htvc', $ds_htvc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_htvc = hinhthucvanchuyen::all();
        return view('admin.hinhthucvanchuyen.tao_htvc')
            ->with('ds_htvc', $ds_htvc);
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
            'htvc_ten' => 'required|unique:hinhthucvanchuyen,htvc_ten',
            'htvc_chiphi' => 'required',
        ],[
            'htvc_ten.required' => "Hình thức vận chuyển không được để trống",
            'htvc_ten.unique' => "Hình thức vận chuyển này đã tồn tại",
            'htvc_chiphi.required' => "Chi phí vận chuyển không được để trống",
        ]);

        $htvc = new hinhthucvanchuyen();
        $htvc->htvc_id = $request->htvc_id;
        $htvc->htvc_ten = $request->htvc_ten;
        $htvc->htvc_chiphi = $request->htvc_chiphi;
        $htvc->htvc_diengiai = $request->htvc_diengiai;
        $htvc->htvc_trangthai = 1;

        $htvc->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.htvc');
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
    public function edit($htvc_id)
    {
        $ds_htvc = hinhthucvanchuyen::where("htvc_id",  $htvc_id)->first();
    
        return view('admin.hinhthucvanchuyen.sua_htvc')
            ->with('ds_htvc', $ds_htvc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $htvc_id)
    {
        $this->validate($request, [
            'htvc_ten' => 'required',
            'htvc_chiphi' => 'required',
        ],[
            'htvc_ten.required' => "Hình thức vận chuyển không được để trống",
            'htvc_chiphi.required' => "Chi phí vận chuyển không được để trống",
        ]);

        $htvc = hinhthucvanchuyen::where('htvc_id', $htvc_id)->first();
        $htvc->htvc_id = $request->htvc_id;
        $htvc->htvc_ten = $request->htvc_ten;
        $htvc->htvc_chiphi = $request->htvc_chiphi;
        $htvc->htvc_diengiai = $request->htvc_diengiai;
        $htvc->htvc_trangthai = $request->htvc_trangthai;

        $htvc->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.htvc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($htvc_id)
    {
        $htvc = hinhthucvanchuyen::find($htvc_id);
        $htvc->htvc_trangthai = 0;
        $htvc->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.htvc');
    }
}
