<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\sanpham;
use App\khachhang;
use App\danhgia;

class DanhgiaController extends Controller
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
    public function index(){
        $ds_danhgia = danhgia::orderBy('dg_trangthai', 'ASC')->get();
        // $ds_danhgia = DB::table('danhgia')
        //             ->select('*')
        //             ->join('khachhang', 'khachhang.kh_id', '=', 'danhgia.kh_id')
        //             ->join('sanpham', 'sanpham.sp_id', '=', 'danhgia.sp_id')
        //             ->orderBy('dg_trangthai')
        //             ->get();
        
        //$product = DB::table('chitietsanpham')->where('sp_id',$id)->where('m_id', $m_id)->where('size_id', $size_id)->get();
        //dd($ds_danhgia);
        return view('admin.danhgia.danhsach_danhgia')
            ->with('ds_danhgia', $ds_danhgia);
    }

    public function reply_comment(Request $request){
        $data = $request->all();
        $comment = new danhgia();
        $comment->dg_noidung = $data['dg_noidung'];
        $comment->dg_ngaydanhgia = Carbon::now('Asia/Ho_Chi_Minh');
        $comment->sp_id = $data['sp_id'];
        $comment->kh_id = $data['kh_id'];
        $comment->dg_trangthai = 1;
        $comment->dg_parent_comment = $data['dg_id'];
        $comment->save();
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
