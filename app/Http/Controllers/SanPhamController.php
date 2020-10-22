<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\kho;
use App\khuyenmai;
use App\danhmuc;
use App\loaisanpham;
use App\sanpham;
use App\hinhanh;
use App\chitietphieunhap;
use App\gia;

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
        // $ds_sp = sanpham::all();
    //    foreach($ds_sp as $ds_sp){
    //        $gianhap = $ds_sp->chitietphieunhap;
    //        //$ds_sp->chitietphieunhap->ctpn_gianhap;
    //       foreach($gianhap as $gianhap){
    //           //$gianhap->ctpn_gianhap;
    //           dd($gianhap->ctpn_gianhap);
    //       }
    //    }
    //    $ds_sp = DB::select('SELECT sp.*, ctpn.ctpn_gianhap
    //    FROM sanpham sp
    //    JOIN chitietphieunhap ctpn ON sp.sp_id = ctpn.sp_id');
        //$ds_ctpn = chitietphieunhap::all()
        $ds_sp = DB::select('SELECT *
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            RIGHT JOIN sanpham sp ON abc.sp_id = sp.sp_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            JOIN kho k ON k.kho_id = sp.kho_id
            LEFT JOIN khuyenmai km ON km.km_id = sp.km_id');
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
        $ds_gia = gia::all();
        return view('admin.sanpham.tao_sp')
            ->with('ds_kho', $ds_kho)
            ->with('ds_lsp', $ds_lsp)
            ->with('ds_km', $ds_km)
            ->with('ds_gia', $ds_gia);
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
            'giaban' => 'required|digits:6',
            //'sp_hinh' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
            // Cú pháp dùng upload nhiều file 
            //'sp_hinhanhlienquan.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ],[
            'sp_ten.required' => "Tên sản phẩm không được để trống",
            'sp_ten.unique' => "Tên sản phẩm này đã tồn tại",
            'sp_mota.required' => "Mô tả sản phẩm không được để trống",
            'giaban.required' => "Giá sản phẩm không được để trống",
            'giaban.digits' => "Giá sản phẩm phải ở dạng số 6 kí tự",
        ]);

        $sp = new sanpham();
        $sp->sp_id = $request->sp_id;
        $sp->sp_ten = $request->sp_ten;
        //$sp->sp_soluong = 0;
        $sp->sp_mota = $request->sp_mota;
        $sp->sp_trangthai = 1;
        $sp->lsp_id = $request->lsp_id;
        $sp->km_id = $request->km_id;
        $sp->kho_id = $request->kho_id;
        $sp->save();
        // if($request->hasFile('sp_hinh')){
            
        //     $file = $request->sp_hinh;
    
        //     // Lưu tên hình vào column sp_hinh
        //     $sp->sp_hinh = $file->getClientOriginalName();
            
        //     // Chép file vào thư mục "photos"
        //     $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        // }

       
         //Tạo ngày có  giá mới trong bảng giá
        $gia = new gia();
        $gia->id_gia = $request->id_gia;
        $gia->ngay = Carbon::now('Asia/Ho_Chi_Minh');
        $gia->giaban = $request->giaban;
        $gia->sp_id = $sp->sp_id;
        
        $gia->save();

        //Lưu hình ảnh liên quan
        // if($request->hasFile('sp_hinhanhlienquan')) {
            
        //     $files = $request->sp_hinhanhlienquan;

        //     // duyệt từng ảnh và thực hiện lưu
        //     foreach ($request->sp_hinhanhlienquan as $index => $file) {
                
        //         $file->storeAs('public/photos', $file->getClientOriginalName());
        //         // Tạo đối tưọng HinhAnh
        //         $hinhAnh = new HinhAnh();
        //         $hinhAnh->sp_id = $sp->sp_id;
        //         $hinhAnh->ha_id = ($index + 1);
        //         $hinhAnh->ha_ten = $file->getClientOriginalName();
        //         $hinhAnh->save();
        //     }
        // }

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
    public function edit($sp_id)
    {
        $ds_sp = sanpham::where("sp_id",  $sp_id)->first();
        $ds_kho = kho::all();
        $ds_lsp = loaisanpham::where('lsp_trangthai', '=', '1')->get();
        $ds_km = khuyenmai::where('km_trangthai', '=', '1')->get();
        $ds_gia = gia::where("sp_id", $sp_id)->orderBy('id_gia', 'desc')->first()->giaban;

        return view('admin.sanpham.sua_sp')
            ->with('ds_sp', $ds_sp)
            ->with('ds_kho', $ds_kho)
            ->with('ds_lsp', $ds_lsp)
            ->with('ds_km', $ds_km)
            ->with('ds_gia', $ds_gia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sp_id)
    {
        $this->validate($request, [
            'sp_ten' => 'required',
            'sp_mota' => 'required',
            'giaban' => 'required',
            //'sp_hinh' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
            //'sp_hinhanhlienquan.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ],[
            'sp_ten.required' => "Tên sản phẩm không được để trống",
            // 'sp_ten.unique' => "Tên sản phẩm này đã tồn tại",
            'sp_mota.required' => "Mô tả sản phẩm không được để trống",
            'sp_mota.required' => "Giá sản phẩm không được để trống",
        ]);

        $sp = sanpham::where('sp_id', $sp_id)->first();
        $sp->sp_ten = $request->sp_ten;
        //$sp->sp_soluong = $request->sp_soluong;
        $sp->sp_mota = $request->sp_mota;
        $sp->sp_trangthai = $request->sp_trangthai;
        $sp->lsp_id = $request->lsp_id;
        $sp->km_id = $request->km_id;
        $sp->kho_id = $request->kho_id;
        $sp->save();
        
        //Tạo ngày có  giá mới trong bảng giá
        $gia = new gia();
        $gia->id_gia = $request->id_gia;
        $gia->ngay = Carbon::now('Asia/Ho_Chi_Minh');
        $gia->giaban = $request->giaban;
        $gia->sp_id = $sp_id;
        
        $gia->save();

        Session::flash('alert-success', 'Cập nhật sản phẩm thành công');
        
        return redirect()->route('admin.sp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sp_id)
    {
        $sp = sanpham::find($sp_id);
        $sp->sp_trangthai = 0;
        $sp->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.sp');
    }
}
