<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\gia;
use App\nhacungcap;
use App\loaisanpham;
use App\sanpham;
use App\khachhang;
use App\dondathang;

class ThongKeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function doanhthu(){
        $nhacungcap_count = NhaCungCap::count();
        $loaisanpham_count = LoaiSanPham::count();
        $lsp_count_nam = LoaiSanPham::where('dm_id', '=', 1)->count();
        $lsp_count_nu = LoaiSanPham::where('dm_id', '=', 2)->count();
        $lsp_count_couple = LoaiSanPham::where('dm_id', '=', 3)->count();
        $sanpham_count = Sanpham::count();
        $sp_count_cokm = Sanpham::where('km_id', '<>', NULL)->count();
        $sp_count_kokm = Sanpham::where('km_id', '=', NULL)->count();
        $khachhang_count = Khachhang::count();
        $khachhang_count_hd = Khachhang::where('kh_trangthai', '=', 1)->count();
        $khachhang_count_kohd = Khachhang::where('kh_trangthai', '=', 0)->count();
        $dondathang_count = DonDatHang::count();
        $dondathang_count_duyet = DonDatHang::where('ddh_trangthai', '=', 1)->count();
        $dondathang_count_chuaduyet = DonDatHang::where('ddh_trangthai', '=', 0)->count();
        $sp1 = sanpham::where('sp_trangthai', 1)->get();
       
        //dd($sp_count_kokm);
        return view('admin.thongke.baocao_thongke', compact('nhacungcap_count', 'loaisanpham_count', 'lsp_count_nam', 'lsp_count_nu', 'lsp_count_couple', 'sanpham_count', 'sp_count_cokm', 'sp_count_kokm', 'khachhang_count', 'khachhang_count_hd', 'khachhang_count_kohd','dondathang_count', 'dondathang_count_duyet', 'dondathang_count_chuaduyet', 'sp1'));
    }

    public function biendong_gia(Request $request)
    {
        $data = $request->all();

        //$theongay = $data['theongay'];
        $sp_id = $data['sp_id'];

        $get = DB::table('gia')->where('sp_id', $sp_id)->get();
       // dd($get);

        foreach($get as $key => $val){
            $chart_data[] = array(
                'ngay' => $val->ngay,
                'giaban' => $val->giaban
            );
        }
        echo $data = json_encode($chart_data);

    }

    public function doanhthu_nam(Request $request){
        $parameter = [
            'nam' => $request->nam,
        ];
        // dd($parameter);
        $data = DB::select('
            SELECT month(ddh.ddh_ngaylap) AS thoiGian, SUM(htvc.htvc_chiphi + ctdh.ctdh_soluong * ctdh.ctdh_dongia) as tongThanhTien
            FROM dondathang ddh
            JOIN hinhthucvanchuyen htvc ON htvc.htvc_id = ddh.htvc_id
            JOIN chitietdonhang ctdh ON ddh.ddh_id = ctdh.ddh_id
            WHERE year(ddh.ddh_ngaylap) = :nam
            GROUP BY month(ddh.ddh_ngaylap)
        ', $parameter);

        return response()->json(array(
            'code'  => 200,
            'data' => $data,
        ));
    }

    // public function baocaotonkho(){
    //     $lsp = loaisanpham::where('lsp_trangthai', 1)->get();
    //     //dd($lsp);
    //     return view('admin.thongke.baocao_thongke')
    //         ->with('lsp',$lsp);
    // }
    public function post_baocaotonkho(Request $request){

        //$current_day = Carbon::now('Asia/Ho_Chi_Minh');
        
        //$date=date("Y-m-d", strtotime($current_day));
     
        $data= DB::table('sanpham')
                ->select('*')
                ->join('chitietsanpham', 'chitietsanpham.sp_id', '=', 'sanpham.sp_id')
                ->leftjoin('mau', 'mau.m_id', '=', 'chitietsanpham.m_id')
                ->leftjoin('size', 'size.size_id', '=', 'chitietsanpham.size_id')
                ->where('sanpham.sp_id',$request->sp_id_1)
                ->get();
        $output='';
        $output.='
                <thead>
                    <tr>
                        <th style="padding: 5px 8px;">Mã SP</th>
                        <th style="padding: 5px 8px;">Tên SP</th>
                        <th style="padding: 5px 8px;">Màu</th>
                        <th style="padding: 5px 8px;">Size</th>
                        <th style="padding: 5px 8px;">Số lượng tồn</th>
                        <th style="padding: 5px 8px;">Giá bán</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach ($data as $key => $value) {
                        $output.='
                            <tr>
                                <td style="padding: 5px 8px;">'.$value->sp_id .'</td>
                                <td style="padding: 5px 8px;">'.$value->sp_ten.'</td>
                                <td style="padding: 5px 8px;">'.$value->m_ten.'</td>
                                <td style="padding: 5px 8px;">'.$value->size_ten.'</td>
                                <td style="padding: 5px 8px;">'.$value->ctsp_soluong.'</td>
                                <td style="padding: 5px 8px;">'.number_format($value->sp_giaban,0,',',',').' đ</td>
                            </tr>';    
                    }
        $output.= "</tbody>";
        return $output; 
    }

    public function post_nguongbaodong(Request $request){

        //$current_day = Carbon::now('Asia/Ho_Chi_Minh');
        
        //$date=date("Y-m-d", strtotime($current_day));
     
        $data= DB::table('sanpham')
                ->select('*')
                ->join('chitietsanpham', 'chitietsanpham.sp_id', '=', 'sanpham.sp_id')
                ->leftjoin('mau', 'mau.m_id', '=', 'chitietsanpham.m_id')
                ->leftjoin('size', 'size.size_id', '=', 'chitietsanpham.size_id')
                ->where('chitietsanpham.ctsp_soluong', '<=', $request->nguong)
                ->get();
        $output='';
        $output.='
                <thead>
                    <tr>
                        <th style="padding: 5px 8px;">Mã SP</th>
                        <th style="padding: 5px 8px;">Tên SP</th>
                        <th style="padding: 5px 8px;">Màu</th>
                        <th style="padding: 5px 8px;">Size</th>
                        <th style="padding: 5px 8px;">Số lượng</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach ($data as $key => $value) {
                        $output.='
                            <tr>
                                <td style="padding: 5px 8px;">'.$value->sp_id .'</td>
                                <td style="padding: 5px 8px;">'.$value->sp_ten.'</td>
                                <td style="padding: 5px 8px;">'.$value->m_ten.'</td>
                                <td style="padding: 5px 8px;">'.$value->size_ten.'</td>
                                <td style="padding: 5px 8px;">'.$value->ctsp_soluong.'</td>
                            </tr>';    
                    }
        $output.= "</tbody>";
        return $output; 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
