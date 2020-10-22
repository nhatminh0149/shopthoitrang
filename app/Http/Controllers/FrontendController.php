<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
use App\mau;
use App\size;
use App\kho;
use App\user;
use App\admin;
use Auth;

class FrontendController extends Controller
{
        /**
     * Action hiển thị view Trang chủ
     * GET /
     */
    public function index(Request $request)
    {
        $loc_hinh = DB::select(
            'SELECT distinct sp.sp_ten ,ha.ha_ten, g.giaban
            FROM danhmuc dm 
            JOIN loaisanpham lsp ON dm.dm_id = lsp.dm_id
            JOIN sanpham sp ON lsp.lsp_id = sp.lsp_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN gia g ON g.sp_id = sp.sp_id
            WHERE dm.dm_id = 1
            LIMIT 4 ');
        $loc_hinh1 = DB::select(
            'SELECT distinct sp.sp_ten ,ha.ha_ten, g.giaban
            FROM danhmuc dm 
            JOIN loaisanpham lsp ON dm.dm_id = lsp.dm_id
            JOIN sanpham sp ON lsp.lsp_id = sp.lsp_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN gia g ON g.sp_id = sp.sp_id
            WHERE dm.dm_id = 2
            LIMIT 4 ');
        $loc_hinh2 = DB::select(
            'SELECT distinct sp.sp_ten ,ha.ha_ten, g.giaban
            FROM danhmuc dm 
            JOIN loaisanpham lsp ON dm.dm_id = lsp.dm_id
            JOIN sanpham sp ON lsp.lsp_id = sp.lsp_id
            JOIN chitietsanpham ctsp ON sp.sp_id = ctsp.sp_id
            JOIN hinhanh ha ON ha.ha_id = ctsp.ha_id
            JOIN gia g ON g.sp_id = sp.sp_id
            WHERE dm.dm_id = 3
            LIMIT 4 ');
        return view('frontend.index')
                ->with('loc_hinh', $loc_hinh)
                ->with('loc_hinh1', $loc_hinh1)
                ->with('loc_hinh2', $loc_hinh2);
    }
}
