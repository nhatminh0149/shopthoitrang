<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use App\phieunhapkho;
use App\chitietphieunhap;
use App\chitietsanpham;
use App\nhacungcap;
use App\danhmuc;
use App\loaisanpham;
use App\sanpham;
use App\mau;
use App\size;
use App\kho;
use App\user;
use App\admin;
use Auth;
session_start();

class PhieuNhapKhoController extends Controller
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
        $ds_pnk = phieunhapkho::all();
        //dd($ds_pnk);
        return view('admin.phieunhapkho.danhsach_pnk')
            ->with('ds_pnk', $ds_pnk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_kho = kho::all();
        $ds_mau = mau::all();
        $ds_size = size::all();
        $ds_ncc = nhacungcap::where('ncc_trangthai', '=', '1')->get();
        return view('admin.phieunhapkho.tao_pnk')
            ->with('ds_kho', $ds_kho)
            ->with('ds_mau', $ds_mau)
            ->with('ds_size', $ds_size)
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

    public function chitietphieunhapkho($pnk_id){
        $ds_pnk = phieunhapkho::find($pnk_id);

        $ds_pnk1 = DB::select(
            'SELECT *
            FROM phieunhapkho pnk
            JOIN admins ad ON ad.id = pnk.id
            JOIN nhacungcap ncc on ncc.ncc_id = pnk.ncc_id
            JOIN kho k ON k.kho_id = pnk.kho_id
            WHERE pnk.pnk_id = '.$pnk_id.' ');

        $ds_pnk2 = DB::select(
            'SELECT ctpn.pnk_id, sp.sp_ten, m.m_ten, s.size_ten ,ctpn.ctpn_soluong, ctpn.ctpn_gianhap, (ctpn.ctpn_soluong * ctpn.ctpn_gianhap) AS ThanhTien
            from chitietphieunhap ctpn
            LEFT JOIN sanpham sp ON sp.sp_id = ctpn.sp_id
            LEFT JOIN mau m ON m.m_id = ctpn.m_id
            LEFT JOIN size s ON s.size_id = ctpn.size_id
            WHERE ctpn.pnk_id = '.$pnk_id.' ');

        $ds_pnk3 = DB::select(
            'SELECT SUM(aaa.ctpn_soluong * aaa.ctpn_gianhap) AS TongTienPhieuNhap
            FROM (
                SELECT ctpn.ctpn_soluong, ctpn.ctpn_gianhap
                FROM phieunhapkho pnk
                JOIN chitietphieunhap ctpn ON pnk.pnk_id = ctpn.pnk_id
                WHERE pnk.pnk_id = '.$pnk_id.' ) AS aaa');
        

        return view('admin.phieunhapkho.chitiet_pnk')
            ->with('ds_pnk', $ds_pnk)
            ->with('ds_pnk1',  $ds_pnk1)
            ->with('ds_pnk2',  $ds_pnk2)
            ->with('ds_pnk3',  $ds_pnk3);
    }

    public function danhmuc_theoncc(Request $request){
        
        $data = danhmuc::select('dm_ten','dm_id')
                ->where('ncc_id',$request->ncc_id)->get();

        $output = '';
    
        $output = ' <option value="">--Chọn danh mục--</option>';
            
        foreach($data as $key => $value){
            $output.='<option value="'.$value->dm_id.'">'.$value->dm_ten.'</option>';
        }
        
        echo $output;          
    }

    public function loaisanpham_theodanhmuc(Request $request){
        
        $data = loaisanpham::select('lsp_ten','lsp_id')
                ->where('dm_id',$request->dm_id)->get();

        $output = '';
    
        $output = ' <option value="">--Chọn loại sản phẩm --</option>';
            
        foreach($data as $key => $value){
            $output.='<option value="'.$value->lsp_id.'">'.$value->lsp_ten.'</option>';
        }
        
        echo $output;          
    }

    public function sanpham_theoloaisanpham(Request $request){
        
        $data = sanpham::select('sp_ten','sp_id')
                ->where('lsp_id',$request->lsp_id)->get();

        $output = '';
    
        $output = ' <option value="">--Chọn sản phẩm --</option>';
            
        foreach($data as $key => $value){
            $output.='<option value="'.$value->sp_id.'">'.$value->sp_ten.'</option>';
        }
        
        echo $output;          
    }

    function insert(Request $request){
        if($request->ajax()){
            $rules = array(
                'dm_id.*'=>'required',
                'lsp_id.*'=>'required',
                'sp_id.*'=>'required',
                'ctpn_soluong.*'  => 'required'
            );
            $messages = [];
            $dm_id = $request->dm_id;
            //Hiển thị dòng chưa nhập tương ứng với giá trị nhóm id do $key bắt đầu từ 0 nên cần cộng 1 để hiển thị
            foreach($dm_id as $key => $val){
                $messages['dm_id.'.$key.'.required'] = 'Bạn chưa nhập dòng thứ '.($key + 1).' của cột Danh mục.';
                $messages['lsp_id.'.$key.'.required'] = 'Bạn chưa nhập dòng thứ '.($key + 1).' của cột Loại sản phẩm.';
                $messages['sp_id.'.$key.'.required'] = 'Bạn chưa nhập dòng thứ '.($key + 1).' của cột Tên sản phẩm.';
                $messages['ctpn_soluong.'.$key.'.required'] = 'Bạn chưa nhập dòng thứ '.($key + 1).' của cột Số lượng.';
            }
            $error = Validator::make($request->all(), $rules,$messages);
            if($error->fails()){
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }
  
            $pnk =new phieunhapkho();
            $pnk->pnk_id = $request->pnk_id;
            $pnk->pnk_ngaynhapkho = Carbon::now('Asia/Ho_Chi_Minh');
            $pnk->id=$request->id;
            $pnk->ncc_id=$request->ncc_id;
            $pnk->kho_id=$request->kho_id;
               
            $pnk->save();


            $m_id = $request->m_id;
            $size_id = $request->size_id;
            $sp_id = $request->sp_id; 
            $ctsp_soluong = $request->ctsp_soluong; 
            $ctpn_gianhap=$request->ctpn_gianhap; 

            for($count = 0; $count < count($sp_id); $count++){
                // $pn = new chitietphieunhap();

                // $pn->pnk_id = $pnk_id;
                // $pn->sp_id = $sp_id[$count];
                // $pn->m_id = $m_id[$count];
                // $pn->size_id = $size_id[$count];
                // $pn->ctpn_soluong  = $ctsp_soluong[$count];
                // $pn->ctpn_gianhap  = $ctpn_gianhap[$count];
                
                // $pn->save();
                DB::table('chitietphieunhap')
                    ->insert( 
                        [
                        'pnk_id'        => $pnk->pnk_id ,
                        'sp_id'         => $sp_id[$count],
                        'm_id'          => $m_id[$count],        
                        'size_id'       => $size_id[$count],        
                        'ctpn_soluong'  => $ctsp_soluong[$count],        
                        'ctpn_gianhap'  => $ctpn_gianhap[$count],        
                        ]
                    );
            }
            for($count1 = 0; $count1 < count($sp_id); $count1++){
                $product = DB::table('chitietsanpham')->where('sp_id',$sp_id[$count1])->where('m_id', $m_id[$count1])->where('size_id', $size_id[$count1])->get();
                foreach($product as $key => $value){
                    $value1 = $value->ctsp_soluong + $ctsp_soluong[$count1];
                    $data1 = array();
                    $data1['ctsp_soluong'] = $value1;
                    DB::table('chitietsanpham')->where('sp_id',$sp_id[$count1])->where('m_id', $m_id[$count1])->where('size_id', $size_id[$count1])->update($data1);
                }
            }

            

            return response()->json([
                'success'  => 'Phiếu nhập được tạo thành công.'
                
                //'success' => $sp_id[0]
                //'success' => $size_id[0]
            ]);
        }
    }

    public function pdf_pnk($pnk_id){
        $ds_pnk = phieunhapkho::find($pnk_id);

        $ds_pnk1 = DB::select(
            'SELECT *
            FROM phieunhapkho pnk
            JOIN admins ad ON ad.id = pnk.id
            JOIN nhacungcap ncc on ncc.ncc_id = pnk.ncc_id
            JOIN kho k ON k.kho_id = pnk.kho_id
            WHERE pnk.pnk_id = '.$pnk_id.' ');

        $ds_pnk2 = DB::select(
            'SELECT ctpn.pnk_id, sp.sp_ten, m.m_ten, s.size_ten ,ctpn.ctpn_soluong, ctpn.ctpn_gianhap, (ctpn.ctpn_soluong * ctpn.ctpn_gianhap) AS ThanhTien
            from chitietphieunhap ctpn
            LEFT JOIN sanpham sp ON sp.sp_id = ctpn.sp_id
            LEFT JOIN mau m ON m.m_id = ctpn.m_id
            LEFT JOIN size s ON s.size_id = ctpn.size_id
            WHERE ctpn.pnk_id = '.$pnk_id.' ');

        $ds_pnk3 = DB::select(
            'SELECT SUM(aaa.ctpn_soluong * aaa.ctpn_gianhap) AS TongTienPhieuNhap
            FROM (
                SELECT ctpn.ctpn_soluong, ctpn.ctpn_gianhap
                FROM phieunhapkho pnk
                JOIN chitietphieunhap ctpn ON pnk.pnk_id = ctpn.pnk_id
                WHERE pnk.pnk_id = '.$pnk_id.' ) AS aaa');
        

        $data = [
            'ds_pnk' => $ds_pnk,
            'ds_pnk1' => $ds_pnk1,
            'ds_pnk2' => $ds_pnk2,
            'ds_pnk3' => $ds_pnk3,
        ];
        $pdf = PDF::loadView('admin.phieunhapkho.pdf_pnk',$data);
        return $pdf->stream();
    }

}
