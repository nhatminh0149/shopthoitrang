<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\hinhthucvanchuyen;
use App\hinhthucthanhtoan;
use App\dondathang;
use App\chitietdonhang;
use App\phieunhapkho;
use App\chitietphieunhap;
use App\chitietsanpham;
use App\nhacungcap;
use App\danhmuc;
use App\loaisanpham;
use App\sanpham;
use App\khachhang;
use App\hinhanh;
use App\khuyenmai;
use App\mau;
use App\size;
use App\kho;
use App\gia;
use App\tinhthanhpho;
use App\quanhuyen;
use App\phuongxa;
use App\user;
use App\admin;
use Cart;
use Auth;
use Mail;
use App\Mail\OrderMailer;
session_start();
class FrontendController extends Controller
{
        /**
     * Action hiển thị view Trang chủ
     * GET /
     */
    public function index(Request $request){
        $loc_hinh = DB::select(
            'SELECT sp.sp_id, sp.sp_ten, ha.ha_ten, g.giaban, km.km_giatriphantram
            FROM danhmuc dm
            JOIN loaisanpham lsp ON dm.dm_id = lsp.dm_id
            JOIN sanpham sp ON lsp.lsp_id = sp.lsp_id
            JOIN chitietsanpham ctsp ON ctsp.sp_id = sp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN gia g ON sp.sp_id = g.sp_id
            LEFT JOIN khuyenmai km ON km.km_id = sp.km_id
            WHERE lsp.lsp_id = 1 AND dm.dm_trangthai = 1 AND lsp.lsp_trangthai = 1 AND sp.sp_trangthai = 1
            GROUP BY sp.sp_ten
            LIMIT 4');
        
        $loc_hinh1 = DB::select(
            'SELECT sp.sp_id, sp.sp_ten, ha.ha_ten, g.giaban, km.km_giatriphantram
            FROM danhmuc dm
            JOIN loaisanpham lsp ON dm.dm_id = lsp.dm_id
            JOIN sanpham sp ON lsp.lsp_id = sp.lsp_id
            JOIN chitietsanpham ctsp ON ctsp.sp_id = sp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN gia g ON sp.sp_id = g.sp_id
            LEFT JOIN khuyenmai km ON km.km_id = sp.km_id
            WHERE lsp.lsp_id = 5 AND dm.dm_trangthai = 1 AND lsp.lsp_trangthai = 1 AND sp.sp_trangthai = 1
            GROUP BY sp.sp_ten
            LIMIT 4 ');
        $loc_hinh2 = DB::select(
            'SELECT sp.sp_id, sp.sp_ten, ha.ha_ten, g.giaban, km.km_giatriphantram
            FROM danhmuc dm
            JOIN loaisanpham lsp ON dm.dm_id = lsp.dm_id
            JOIN sanpham sp ON lsp.lsp_id = sp.lsp_id
            JOIN chitietsanpham ctsp ON ctsp.sp_id = sp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN gia g ON sp.sp_id = g.sp_id
            LEFT JOIN khuyenmai km ON km.km_id = sp.km_id
            WHERE lsp.lsp_id = 10 AND dm.dm_trangthai = 1 AND lsp.lsp_trangthai = 1 AND sp.sp_trangthai = 1
            GROUP BY sp.sp_ten
            LIMIT 4 ');
        return view('frontend.index')
                ->with('loc_hinh', $loc_hinh)
                ->with('loc_hinh1', $loc_hinh1)
                ->with('loc_hinh2', $loc_hinh2);
    }

    /**
     * Action hiển thị danh sách Sản phẩm
     */
    public function sanpham(Request $request){
        $ds_sp = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            WHERE sp.sp_trangthai = 1
            GROUP BY sp.sp_ten ');
        // $ds_sp = DB::table('sanpham')
        //     ->select('sanpham.sp_ten', 'hinhanh.ha_ten', 'gia.giaban', 'sanpham.sp_id', 'khuyenmai.km_giatriphantram')
        //     ->join('chitietsanpham', 'chitietsanpham.sp_id', '=', 'sanpham.sp_id')
        //     ->join('hinhanh', 'hinhanh.ha_id', '=', 'chitietsanpham.ha_id')
        //     ->join('gia', 'gia.sp_id', '=', 'sanpham.sp_id')
        //     ->leftjoin('khuyenmai', 'khuyenmai.km_id', '=', 'sanpham.km_id')
        //     ->where('sanpham.sp_trangthai', '=', '1')
        //     ->groupBy('sanpham.sp_ten')
        //     ->paginate(9);
        //dd($ds_sp);
        // Hiển thị view `frontend.index` với dữ liệu truyền vào
        return view('frontend.pages.sanpham.sanpham')
                ->with('ds_sp', $ds_sp);
    }

    //Lọc sản phẩm theo đồ nam
    public function sanpham_donam(Request $request){
        // $ds_donam = DB::table('danhmuc')
        //     ->select('sanpham.sp_ten', 'hinhanh.ha_ten', 'gia.giaban', 'sanpham.sp_id', 'khuyenmai.km_giatriphantram')
        //     ->join('loaisanpham', 'loaisanpham.dm_id', '=', 'danhmuc.dm_id')
        //     ->join('sanpham', 'sanpham.lsp_id', '=', 'loaisanpham.lsp_id')
        //     ->join('hinhanh', 'hinhanh.sp_id', '=', 'sanpham.sp_id')
        //     ->join('gia', 'gia.sp_id', '=', 'sanpham.sp_id')
        //     ->leftjoin('khuyenmai', 'khuyenmai.km_id', '=', 'sanpham.km_id')
        //     ->where('sanpham.sp_trangthai', '=', '1')
        //     ->where('danhmuc.dm_id', '=', '1')
        //     ->groupBy('sanpham.sp_ten')
        //     ->paginate(9);

        $ds_donam = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id, dm.dm_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            JOIN danhmuc dm ON dm.dm_id = lsp.dm_id
            WHERE sp.sp_trangthai = 1 AND dm.dm_id = 1
            GROUP BY sp.sp_ten ');
        //dd($ds_donam);
        return view('frontend.pages.sanpham.donam') 
            ->with('ds_donam', $ds_donam);         
    }

    //Lọc sản phẩm theo đồ nam -> áo thun nam
    public function sanpham_donam_aothunnam(Request $request){
        $ds_aothunnam = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 1
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.donam_aothunnam')
                ->with('ds_aothunnam', $ds_aothunnam); 
                
    }

    //Lọc sản phẩm theo đồ nam -> áo sơ mi nam
    public function sanpham_donam_aosominam(Request $request){
        $ds_aosominam = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 2
            GROUP BY sp.sp_ten 
            ');
        return view('frontend.pages.sanpham.donam_aosominam')
                ->with('ds_aosominam', $ds_aosominam); 
                
    }

    //Lọc sản phẩm theo đồ nam -> quần jean nam
    public function sanpham_donam_quanjeannam(Request $request){
        $ds_quanjeannam = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 3
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.donam_quanjeannam')
                ->with('ds_quanjeannam', $ds_quanjeannam); 
                
    }

    //Lọc sản phẩm theo đồ nam -> quần kaki nam
    public function sanpham_donam_quankakinam(Request $request){
        $ds_quankakinam = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 4
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.donam_quankakinam')
                ->with('ds_quankakinam', $ds_quankakinam); 
                
    }

    //Lọc sản phẩm theo đồ nữ
    public function sanpham_donu(Request $request){
        // $ds_donu = DB::table('danhmuc')
        //     ->select('sanpham.sp_ten', 'hinhanh.ha_ten', 'gia.giaban', 'sanpham.sp_id', 'khuyenmai.km_giatriphantram')
        //     ->join('loaisanpham', 'loaisanpham.dm_id', '=', 'danhmuc.dm_id')
        //     ->join('sanpham', 'sanpham.lsp_id', '=', 'loaisanpham.lsp_id')
        //     ->join('hinhanh', 'hinhanh.sp_id', '=', 'sanpham.sp_id')
        //     ->join('gia', 'gia.sp_id', '=', 'sanpham.sp_id')
        //     ->leftjoin('khuyenmai', 'khuyenmai.km_id', '=', 'sanpham.km_id')
        //     ->where('sanpham.sp_trangthai', '=', '1')
        //     ->where('danhmuc.dm_id', '=', '2')
        //     ->groupBy('sanpham.sp_ten')
        //     ->paginate(9);

        $ds_donu = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id, dm.dm_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            JOIN danhmuc dm ON dm.dm_id = lsp.dm_id
            WHERE sp.sp_trangthai = 1 AND dm.dm_id = 2
            GROUP BY sp.sp_ten ');
        //dd($ds_donam);
        return view('frontend.pages.sanpham.donu') 
            ->with('ds_donu', $ds_donu);         
    }

    //Lọc sản phẩm theo đồ nữ -> áo thun nữ
    public function sanpham_donu_aothunnu(Request $request){
        $ds_aothunnu = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 5
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.donu_aothunnu')
                ->with('ds_aothunnu', $ds_aothunnu); 
                
    }

    //Lọc sản phẩm theo đồ nữ -> áo sơ mi nữ
    public function sanpham_donu_aosominu(Request $request){
        $ds_aosominu = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 6
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.donu_aosominu')
                ->with('ds_aosominu', $ds_aosominu); 
                
    }

    //Lọc sản phẩm theo đồ nữ -> quần short nữ
    public function sanpham_donu_quanshortnu(Request $request){
        $ds_quanshortnu = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 7
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.donu_quanshortnu')
                ->with('ds_quanshortnu', $ds_quanshortnu); 
                
    }

    //Lọc sản phẩm theo đồ nữ -> quần jean nữ
    public function sanpham_donu_quanjeannu(Request $request){
        $ds_quanjeannu = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 8
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.donu_quanjeannu')
                ->with('ds_quanjeannu', $ds_quanjeannu); 
                
    }

    //Lọc sản phẩm theo đồ đôi
    public function sanpham_dodoi(Request $request){
        // $ds_dodoi = DB::table('danhmuc')
        //     ->select('sanpham.sp_ten', 'hinhanh.ha_ten', 'gia.giaban', 'sanpham.sp_id', 'khuyenmai.km_giatriphantram')
        //     ->join('loaisanpham', 'loaisanpham.dm_id', '=', 'danhmuc.dm_id')
        //     ->join('sanpham', 'sanpham.lsp_id', '=', 'loaisanpham.lsp_id')
        //     ->join('hinhanh', 'hinhanh.sp_id', '=', 'sanpham.sp_id')
        //     ->join('gia', 'gia.sp_id', '=', 'sanpham.sp_id')
        //     ->leftjoin('khuyenmai', 'khuyenmai.km_id', '=', 'sanpham.km_id')
        //     ->where('sanpham.sp_trangthai', '=', '1')
        //     ->where('danhmuc.dm_id', '=', '3')
        //     ->groupBy('sanpham.sp_ten')
        //     ->paginate(9);

        $ds_dodoi = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id, dm.dm_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            JOIN danhmuc dm ON dm.dm_id = lsp.dm_id
            WHERE sp.sp_trangthai = 1 AND dm.dm_id = 3
            GROUP BY sp.sp_ten ');
        //dd($ds_donam);
        return view('frontend.pages.sanpham.dodoi') 
            ->with('ds_dodoi', $ds_dodoi);         
    }

    //Lọc sản phẩm theo đồ đôi -> áo thun đôi
    public function sanpham_dodoi_aothundoi(Request $request){
        $ds_aothundoi = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 9
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.dodoi_aothundoi')
                ->with('ds_aothundoi', $ds_aothundoi); 
                
    }

    //Lọc sản phẩm theo đồ đôi -> áo khoác đôi
    public function sanpham_dodoi_aokhoacdoi(Request $request){
        $ds_aokhoacdoi = DB::select(
            'SELECT sp.sp_id ,sp.sp_ten, ha.ha_ten, abc.giaban, km.km_giatriphantram, lsp.lsp_id
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND lsp.lsp_id = 10
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.dodoi_aokhoacdoi')
                ->with('ds_aokhoacdoi', $ds_aokhoacdoi); 
                
    }

    //hiển thị trang chi tiết sản phẩm
    public function chitietsanpham($sp_id){
        
        $ctsp = DB::select(
           'SELECT sp.sp_id, sp.sp_ten, sp.sp_mota, g.giaban, lsp.lsp_ten, km.km_giatriphantram, s.size_id ,s.size_ten, m.m_id, ha.ha_ten, g.id_gia
           FROM sanpham sp 
           JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
           JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
           JOIN gia g ON g.sp_id = sp.sp_id
           left JOIN size s ON s.size_id = ctsp.size_id
           LEFT JOIN mau m ON m.m_id = ctsp.m_id
           LEFT JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id 
           LEFT JOIN khuyenmai km ON km.km_id = sp.km_id
           WHERE sp.sp_trangthai = 1 AND sp.sp_id = '.$sp_id.'
           ORDER BY g.id_gia desc
            ');

        $mau = DB::select(
            'SELECT ctsp.m_id, m.m_ten
            FROM chitietsanpham ctsp
            left JOIN mau m ON ctsp.m_id = m.m_id
            WHERE ctsp.sp_id = '.$sp_id.'
            GROUP BY ctsp.m_id
        ');

        $size = DB::select(
            'SELECT ctsp.size_id, s.size_ten
            FROM chitietsanpham ctsp
            left JOIN size s ON ctsp.size_id = s.size_id
            WHERE ctsp.sp_id = '.$sp_id.'
            GROUP BY ctsp.size_id
        ');

        $hinhanh = DB::select(
            'SELECT ctsp.ha_id, ha.ha_ten, ctsp.m_id, m.m_ten
            FROM chitietsanpham ctsp
            LEFT JOIN hinhanh ha ON ctsp.ha_id = ha.ha_id
            left JOIN mau m ON m.m_id = ctsp.m_id
            WHERE ctsp.sp_id = '.$sp_id.'
            GROUP BY ctsp.ha_id');
        $hinhanh1 = DB::select(
            'SELECT ctsp.ha_id, ha.ha_ten
            FROM chitietsanpham ctsp
            LEFT JOIN hinhanh ha ON ctsp.ha_id = ha.ha_id
            WHERE ctsp.sp_id = '.$sp_id.'
            GROUP BY ctsp.ha_id');
        //dd( $hinhanh);
       return view('frontend.pages.sanpham.chitietsanpham')
                ->with('ctsp', $ctsp)
                ->with('mau', $mau)
                ->with('size', $size)
                ->with('hinhanh', $hinhanh)
                ->with('hinhanh1', $hinhanh1);
    }

    //Lọc giá dưới 250,000 đ
    public function duoi250(Request $request){
        $duoi250 = DB::select(
            ' SELECT *
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND abc.giaban < 250000
            GROUP BY sp.sp_ten
            '
        );
        return view('frontend.pages.sanpham.locgia')
                ->with('duoi250', $duoi250); 
                
    }

    //Lọc giá từ 250,000 đến dưới 350,000
    public function g2535(Request $request){
        $duoi250 = DB::select(
            ' SELECT *
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND abc.giaban BETWEEN 250000 AND 349999
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.locgia')
                ->with('duoi250', $duoi250); 
                
    }

    //Lọc giá từ 350,000 đến dưới 500,000
    public function g3550(Request $request){
        $duoi250 = DB::select(
            ' SELECT *
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND abc.giaban BETWEEN 350000 AND 499999
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.locgia')
                ->with('duoi250', $duoi250); 
                
    }

    //Lọc giá từ 500 trở lên
    public function tren500(Request $request){
        $duoi250 = DB::select(
            ' SELECT *
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND abc.giaban >= 500000
            GROUP BY sp.sp_ten 
            '
        );
        return view('frontend.pages.sanpham.locgia')
                ->with('duoi250', $duoi250); 
                
    }

    /** * Action hiển thị view Liên hệ * GET /lienhe */ 
    public function lienhe()
    {
        return view('frontend.pages.lienhe.lienhe');
    }

    public function themvaogiohang(Request $request) {
        $this->validate($request, [
            'color__radio' => 'required',
            'size'         => 'required',
        ],[
            'color__radio.required' => "Vui lòng chọn màu sản phẩm",
            'size.required'         => "Vui lòng chọn size sản phẩm", 
        ]);

        $sp_id = $request->spid_hidden;
        $m_id = $request->color__radio;
        //dd($m_id);
        $size_id = $request->size;
        $qty = $request->qty;
        
        $sp = sanpham::find($sp_id);
        //dd($sp);
        $km = khuyenmai::where('km_id','=',$sp->km_id)->first();
        //dd($km);
        $gia = gia::where('sp_id','=',$sp_id)->orderBy('id_gia', 'DESC')->first();
        $mau = mau::find($m_id);
        //dd($gia);
        $size = size::find($size_id);
        $image = DB::table('chitietsanpham')
                        ->select('hinhanh.ha_id', 'hinhanh.ha_ten', 'chitietsanpham.sp_id', 'chitietsanpham.ctsp_soluong')
                        ->join('hinhanh', 'chitietsanpham.ha_id', '=', 'hinhanh.ha_id')
                        ->where('chitietsanpham.sp_id', '=', $sp_id)
                        ->where('chitietsanpham.m_id', '=', $m_id)
                        ->where('chitietsanpham.size_id', '=', $size_id)
                        ->first();
        //dd($image);
    
        //$cart = Cart::content();
        //dd($cart);

        if($qty <= $image->ctsp_soluong){
            $data['id'] = $sp_id;
            $data['qty'] = $qty;
            $data['name'] = $sp->sp_ten;
            if($sp->km_id == null){
                $data['price']= $gia->giaban;
            }
            else{
                $data['price'] = $gia->giaban - ($gia->giaban * $km->km_giatriphantram/100);
            }
            $data['options']['color'] = $mau->m_ten;
            $data['options']['size'] = $size->size_ten;
            $data['options']['image'] = $image->ha_ten;
            $data['options']['km'] = $km->km_giatriphantram ?? 0;
    
            //Cart::destroy();
            Cart::add($data);

            Session::flash('alert-success', 'Bạn đã thêm sản phẩm vào giỏ hàng thành công');
            return Redirect::to('/sanpham'.$sp_id);
        }
        elseif($image->ctsp_soluong == 0){
            Session::flash('alert-danger', 'Sản phẩm bạn chọn đã hết hàng.');
            return Redirect::to('/sanpham'.$sp_id);
        }
        else{
            Session::flash('alert-danger', 'Sản phẩm bạn chọn chỉ còn ' .$image->ctsp_soluong. ' cái');
            return Redirect::to('/sanpham'.$sp_id);
        }
    }

    public function giohang(Request $request)
    {
        $kh_id = session()->get('kh_id');
        $khachhang = khachhang::find($kh_id);
        return view('frontend.pages.giohang.ds_giohang_new');
    }

    public function xoasptronggiohang($rowId)
    {
        Cart::update($rowId,0);
        return redirect()->route('frontend.giohang');
    }

    public function capnhatsoluongsptronggiohang(Request $request)
    {
        $color = $request->cart_color;
        $size = $request->cart_size;
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        $sp_id=$request->Id_cart;

        $mau = mau::where('m_ten', $color)->first();
        $m_id = $mau->m_id;
        $size = size::where('size_ten', $size)->first();
        $size_id = $size->size_id;
        //dd($size_id);
        $ctsp_update = DB::table('chitietsanpham')
                ->where('chitietsanpham.sp_id', '=', $sp_id)
                ->where('chitietsanpham.m_id', '=', $m_id)
                ->where('chitietsanpham.size_id', '=', $size_id)
                ->first(); 
        //dd($ctsp_update);

        if($qty<=$ctsp_update->ctsp_soluong){
            Session::flash('alert-success', 'Bạn đã cập nhật số lượng sản phẩm thành công');
            Cart::update($rowId,$qty);
            return redirect()->route('frontend.giohang');
        }
        else{
            Session::flash('alert-danger', 'Bạn đã nhập vượt quá số lượng sản phẩm trong kho');
            return redirect()->route('frontend.giohang');
        }
    }

    

    public function thutucthanhtoan(){
        $kh_id = session()->get('kh_id');
        $khachhang = khachhang::find($kh_id);
        $hinhthucvanchuyen = hinhthucvanchuyen::where('htvc_trangthai', '=', '1')->get();
        $hinhthucthanhtoan = hinhthucthanhtoan::where('httt_trangthai', '=', '1')->get();
        $tinhtp = tinhthanhpho::all();
        
        return view('frontend.pages.giohang.thutuc_thanhtoan')
                ->with('hinhthucvanchuyen', $hinhthucvanchuyen)
                ->with('hinhthucthanhtoan', $hinhthucthanhtoan)
                ->with('tinhtp', $tinhtp);
    }

    public function chonthanhpho(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="tinhtp_id"){
                $select_quanhuyen = quanhuyen::where('tinhtp_id',$data['ma_id'])->orderby('qh_id','ASC')->get();
                //dd($select_quanhuyen);
                    $output.='<option>---Chọn quận/huyện---</option>';
                foreach($select_quanhuyen as $key => $quanhuyen){
                    $output.='<option value="'.$quanhuyen->qh_id.'">'.$quanhuyen->qh_ten.'</option>';
                }

            }else{

                $select_phuongxa = phuongxa::where('qh_id',$data['ma_id'])->orderby('px_id','ASC')->get();
                $output.='<option>---Chọn phường/xã---</option>';
                foreach($select_phuongxa as $key => $phuongxa){
                    $output.='<option value="'.$phuongxa->px_id.'">'.$phuongxa->px_ten.'</option>';
                }
            }
            echo $output;
        }   
    }

    // public function tinhphivanchuyen(Request $request){
    //     $data = $request->all();
    //     $output = '';
    //     //if($data['htvc_id']){
    //         $feeship = hinhthucvanchuyen::where('htvc_id',$data['htvc_id'])->first();
    //         //dd($feeship);
    //         //if($feeship){
    //             // $count_feeship = $feeship->count();
    //             // if($count_feeship > 0){
    //             //      foreach($feeship as $key => $fee){
    //             //         Session::put('fee',$fee->htvc_chiphi);
    //             //         Session::save();
    //             //     }
    //             // }else{ 
    //             //     Session::put('fee',30000);
    //             //     Session::save();
    //             // }
    //             $output.= $feeship->htvc_chiphi;
    //         //}
    //         echo $output;
    //     //} 
    // }
    public function tinhphivanchuyen(Request $request){
        $data = $request->all();
        $output = '';
        $feeship = hinhthucvanchuyen::where('htvc_id',$data['htvc_id'])->first();
        $output.= $feeship->htvc_chiphi;
        echo $output;
    }

    public function dathang(Request $request){
    
        $dataMail = [];

        try {

        //     session(['cost_id' => $request->id]);
        // session(['url_prev' => url()->previous()]);
        // $vnp_TmnCode = "76ONYK81"; //Mã website tại VNPAY 
        // $vnp_HashSecret = "TAJVGPYXDKRVLSIYFDTFYLPXVFKREZSE"; //Chuỗi bí mật
        // $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        // $vnp_Returnurl = route('frontend.home');
        // $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        // $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        // $vnp_OrderType = 'billpayment';
        // $vnp_Amount = $request->input('amount') * 100;
        // $vnp_Locale = 'vn';
        // $vnp_IpAddr = request()->ip();

        // $inputData = array(
        //     "vnp_Version" => "2.0.0",
        //     "vnp_TmnCode" => $vnp_TmnCode,
        //     "vnp_Amount" => $vnp_Amount,
        //     "vnp_Command" => "pay",
        //     "vnp_CreateDate" => date('YmdHis'),
        //     "vnp_CurrCode" => "VND",
        //     "vnp_IpAddr" => $vnp_IpAddr,
        //     "vnp_Locale" => $vnp_Locale,
        //     "vnp_OrderInfo" => $vnp_OrderInfo,
        //     "vnp_OrderType" => $vnp_OrderType,
        //     "vnp_ReturnUrl" => $vnp_Returnurl,
        //     "vnp_TxnRef" => $vnp_TxnRef,
        // );

        // if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        //     $inputData['vnp_BankCode'] = $vnp_BankCode;
        // }
        // ksort($inputData);
        // $query = "";
        // $i = 0;
        // $hashdata = "";
        // foreach ($inputData as $key => $value) {
        //     if ($i == 1) {
        //         $hashdata .= '&' . $key . "=" . $value;
        //     } else {
        //         $hashdata .= $key . "=" . $value;
        //         $i = 1;
        //     }
        //     $query .= urlencode($key) . "=" . urlencode($value) . '&';
        // }

        // $vnp_Url = $vnp_Url . "?" . $query;
        // if (isset($vnp_HashSecret)) {
        //    // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
        //     $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
        //     $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        // }
        

            $ddh = new Dondathang();
            $ddh->ddh_ngaylap = Carbon::now('Asia/Ho_Chi_Minh');
            $ddh->ddh_diachigiaohang = $request->ddh_diachigiaohang;
            $ddh->ddh_trangthai = 0;
            $ddh->id = NULL;
            $ddh->kh_id = Session::get('kh_id');

            $khachhang = khachhang::find($ddh->kh_id);

            $dataMail['khachhang'] = $khachhang->toArray();

            $ddh->htvc_id = $request->htvc_id;
            $ddh->httt_id = $request->httt_id;
            $ddh->px_id = $request->px_id;

            // $px = phuongxa::where('px_id', '=', $request->px_id)->first();
            // $px_ten = $px
            // $qh = quanhuyen::where('qh_id', '=', $px->qh_id);
            // $tp = tinhthanhpho::where('tinhtp_id', '=', $qh->tinhtp_id);

            $ddh->save();
            $dataMail['dondathang'] = $ddh->toArray();
            // $dataMail['px_ten'][] = $px->px_ten;
            //$dataMail['tinhthanhpho'][] = $tp->tinhtp_ten;
            //Cart::destroy();       
    
            $content = Cart::content();
            $content1 = Cart::content();
    
            if (count($content) > 0) {
                foreach ($content as $key => $item) {
                    $ctdh = new Chitietdonhang();
                    $ctdh->ddh_id = $ddh->ddh_id;
                    $ctdh->sp_id = $item->id;
                        
                    $size = size::where('size_ten', '=', $item->options->size)->first();
                    $ctdh->size_id = $size->size_id;
    
                    $color = mau::where('m_ten', '=', $item->options->color)->first();
                    $ctdh->m_id = $color->m_id;
    
                    $ctdh->ctdh_soluong = $item->qty;
                    $ctdh->ctdh_dongia = $item->price;
                    $ctdh->save();
                    $dataMail['dondathang']['chitiet'][] = $ctdh->toArray();
                    $dataMail['sp_ten'][] = $item->name;
                    
                    //$dataMail['dondathang']['giohang'][] = $item;
                }
            }
            
            // dd($aaa);
            Mail::to($khachhang->kh_email)
                ->send(new OrderMailer($dataMail));
    
            if (count($content1) > 0) {
                foreach ($content1 as $key => $item1) {
                    $id = $item1->id;
                    $qty = $item1->qty;
    
                    $size = size::where('size_ten', '=', $item1->options->size)->first();
                    $size_id = $size->size_id;
    
                    $color = mau::where('m_ten', '=', $item1->options->color)->first();
                    $m_id = $color->m_id;
    
                    $product = DB::table('chitietsanpham')->where('sp_id',$id)->where('m_id', $m_id)->where('size_id', $size_id)->get();
    
                    foreach ($product as $key => $value) {
                        $value = $value->ctsp_soluong-$qty;
            
                        $data = array();
                        $data['ctsp_soluong'] = $value;
                        
                        DB::table('chitietsanpham')->where('sp_id', $id)->where('m_id', $m_id)->where('size_id', $size_id)->update($data);  
                    }
                }
            }
    
            Cart::destroy();
            
        }
        catch(ValidationException $e) {
            return response()->json(array(
                'code'  => 500,
                'message' => $e,
                'redirectUrl' => route('frontend.home')
            ));
        } 
        catch(Exception $e) {
            throw $e;
        }
        // return response()->json(array(
        //     'code'  => 200,
        //     'message' => 'Tạo đơn hàng thành công!',
        //     'redirectUrl' => route('frontend.orderFinish')
        // ));

        // return redirect($vnp_Url);
       
    }

    public function dathang_thanhcong(Request $request){
        return view('frontend.pages.giohang.kq_thanhtoan');
    }

    public function getDangnhap()
    {
        return view('frontend.pages.dangnhap.kh_dangnhap');
    }

    public function getDangky()
    {
        return view('frontend.pages.dangnhap.kh_dangky');
    }

    public function postDangnhap(Request $request)
    {
        $this->validate($request, [
            'kh_email' => 'required|email',
            'kh_matkhau' => 'required|min:6',
        ],[
            'kh_email.required'     => "Vui lòng nhập Email",
            'kh_email.email'        => "Email ko đúng định. Vui lòng nhập tài khoản",
            'kh_matkhau.required'   => "Vui lòng nhập mật khẩu", 
            'kh_matkhau.min'        => "Mật khẩu phải ít nhất có 6 kí tự", 
        ]);

        $khachhang = khachhang::where("kh_email", $request->kh_email)
                              ->where("kh_matkhau", md5($request->kh_matkhau))->first();
        if($khachhang){
            $request->session()->put('kh_id', $khachhang->kh_id);
            $request->session()->put('kh_taikhoan', $khachhang->kh_taikhoan);
            $request->session()->put('kh_matkhau', $khachhang->kh_matkhau);
            $request->session()->put('kh_hoten', $khachhang->kh_hoten);
            $request->session()->put('kh_email', $khachhang->kh_email);
            $request->session()->put('kh_sdt', $khachhang->kh_sdt);
            $request->session()->put('kh_trangthai', $khachhang->kh_trangthai);
            // $request->session()->put('kh_diaChi', $khachhang->kh_diaChi);
            // $request->session()->put('kh_dienThoai', $khachhang->kh_dienThoai);
            return redirect()->route('frontend.giohang');
        }
        else{
            return redirect()->back()->with( ['flag' => 'danger', 'message' => "Đăng nhập không thành công"] );  
        }
        
    }

    public function postDangky(Request $request)
    {
        $this->validate($request, [
            'kh_taikhoan' => 'required',
            'kh_matkhau' => 'required|min:6',
            're_kh_matkhau' => 'same:kh_matkhau',
            'kh_hoten' => 'required',
            'kh_email' => 'required|email|unique:khachhang,kh_email',
            // 'kh_diaChi' => 'required',
            'kh_sdt' => 'required|digits:10',
        ],[
            'kh_taikhoan.required' => "Tên tài khoản của khách hàng không được để trống",
            'kh_matkhau.required' => "Mật khẩu của khách hàng không được để trống", 
            'kh_matkhau.min' => "Mật khẩu phải ít nhất có 6 kí tự", 
            're_kh_matkhau.same' => "Mật khẩu không giống nhau",
            'kh_hoten.required' => "Họ tên của khách hàng không được để trống", 
            'kh_email.required' => "Email của khách hàng không được để trống", 
            'kh_email.email' => "Email không đúng định dạng", 
            'kh_email.unique' => "Email này đã tồn tại. Quý khách vui lòng sử dụng email khác.", 
            'kh_sdt.required' => "SĐT của khách hàng không được để trống", 
            'kh_sdt.digits' => "SĐT của khách hàng phải là số 10 kí tự", 
        ]);

        $kh = new khachhang();
        $kh->kh_id = $request->kh_id;
        $kh->kh_taikhoan = $request->kh_taikhoan;
        $kh->kh_matkhau = md5($request->kh_matkhau);
        $kh->kh_hoten = $request->kh_hoten;
        $kh->kh_email = $request->kh_email;
        $kh->kh_sdt = $request->kh_sdt;
        $kh->kh_trangthai = 1; // Chưa kích hoạt

        $kh->save();
        
        return redirect()->back()->with('thanhcong', "Quý khách tạo tài khoản thành công!");
    }

    public function postDangxuat(Request $request){
        try{
            if($request->session()->exists('kh_id')){
                $request->session()->forget('kh_id');
            }
            if($request->session()->exists('kh_taikhoan')){
                $request->session()->forget('kh_taikhoan');
            }
            if($request->session()->exists('kh_matkhau')){
                $request->session()->forget('kh_matkhau');
            }
            if($request->session()->exists('kh_hoten')){
                $request->session()->forget('kh_hoten');
            }
            if($request->session()->exists('kh_email')){
                $request->session()->forget('kh_email');
            }
            if($request->session()->exists('kh_sdt')){
                $request->session()->forget('kh_sdt');
            }
            if($request->session()->exists('kh_trangthai')){
                $request->session()->forget('kh_trangthai');
            }
            return redirect()->route('frontend.home');
        }
        catch (Exception $ex){
            return response(['error'=>true, 'message'=>$ex->getMessage()], 200);
        }
    }

    public function timkiemsp(Request $request)
    {
        //$search = $request->search;
        $search = '%'.$request->q.'%';
        //dd($search);
        $timkiem = DB::select(
            ' SELECT *
            FROM 
                (SELECT g1.*
                FROM gia g1 
                LEFT JOIN gia g2 ON (g1.sp_id = g2.sp_id AND g1.id_gia < g2.id_gia)
                WHERE g2.id_gia IS NULL) AS abc
            right JOIN sanpham sp ON abc.sp_id = sp.sp_id
            left JOIN khuyenmai km ON km.km_id = sp.km_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN loaisanpham lsp ON lsp.lsp_id = sp.lsp_id
            WHERE sp.sp_trangthai = 1 AND sp.sp_ten LIKE "'.$search.'"
            GROUP BY sp.sp_ten 
            '
        ); 

        return view('frontend.pages.sanpham.sanpham')
                ->with('ds_sp', $timkiem);
    }
}