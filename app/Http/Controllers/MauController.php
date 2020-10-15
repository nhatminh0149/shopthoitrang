<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\mau;

class MauController extends Controller
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
        $ds_mau = mau::all();
        return view('admin.mau.danhsach_mau')
            ->with('ds_mau', $ds_mau);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_mau = mau::all();
        return view('admin.mau.tao_mau')
            ->with('ds_mau', $ds_mau);
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
            'm_ten' => 'required|unique:mau,m_ten',
        ],[
            'm_ten.required' => "Màu không được để trống",
            'm_ten.unique' => "Màu này đã tồn tại",
        ]);

        $mau = new mau();
        $mau->m_id = $request->m_id;
        $mau->m_ten = $request->m_ten;

        $mau->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.mau');
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
    public function edit($m_id)
    {
        $ds_mau = mau::where("m_id",  $m_id)->first();
    
        return view('admin.mau.sua_mau')
            ->with('ds_mau', $ds_mau);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $m_id)
    {
        $this->validate($request, [
            'm_ten' => 'required',
        ],[
            'm_ten.required' => "Màu không được để trống",
        ]);

        $mau = mau::where('m_id', $m_id)->first();
        $mau->m_id = $request->m_id;
        $mau->m_ten = $request->m_ten;

        $mau->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.mau');
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
