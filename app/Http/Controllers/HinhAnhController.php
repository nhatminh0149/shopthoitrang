<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\hinhanh;
use App\sanpham;

class HinhAnhController extends Controller
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
        $ds_ha = hinhanh::all();
        return view('admin.hinhanh.danhsach_hinhanh')
            ->with('ds_ha', $ds_ha);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_sp = sanpham::where('sp_trangthai','=', '1')->get();
        return view('admin.hinhanh.tao_hinhanh')
            ->with('ds_sp', $ds_sp);
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
            'ha_ten' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ],[
        ]);

        $ha = new hinhanh();
        $ha->ha_id = $request->ha_id;
        $ha->sp_id = $request->sp_id;

        if($request->hasFile('ha_ten')){
            
            $file = $request->ha_ten;
    
            // Lưu tên hình vào column ha_ten
            $ha->ha_ten = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $ha->ha_ten);
        }

        $ha->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.hinhanh');
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
    public function edit($ha_id)
    {
        $ds_ha = hinhanh::where("ha_id",  $ha_id)->first();
        $ds_sp = sanpham::where('sp_trangthai','=', '1')->get();
        
        return view('admin.hinhanh.sua_hinhanh')
            ->with('ds_ha', $ds_ha)
            ->with('ds_sp', $ds_sp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ha_id)
    {
        $this->validate($request, [
            'ha_ten' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ],[
        ]);

        $ha = hinhanh::where('ha_id', $ha_id)->first();
        $ha->sp_id = $request->sp_id;

        if($request->hasFile('ha_ten')){

            // Xóa hình cũ để tránh rác
            Storage::delete('public/photos/' . $ha->ha_ten);

            // Upload hình mới
            $file = $request->ha_ten;
    
            // Lưu tên hình vào column ha_ten
            $ha->ha_ten = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $ha->ha_ten);
        }

        $ha->save();

        Session::flash('alert-success', 'Cập nhật hình ảnh sản phẩm thành công');
        
        return redirect()->route('admin.hinhanh');
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
