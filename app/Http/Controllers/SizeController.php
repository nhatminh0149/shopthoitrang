<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\size;

class SizeController extends Controller
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
        $ds_size = size::all();
        return view('admin.size.danhsach_size')
            ->with('ds_size', $ds_size);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_size = size::all();
        return view('admin.size.tao_size')
            ->with('ds_size', $ds_size);
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
            'size_ten' => 'required|unique:size,size_ten',
        ],[
            'size_ten.required' => "Size không được để trống",
            'size_ten.unique' => "Size này đã tồn tại",
        ]);

        $size = new size();
        $size->size_id = $request->size_id;
        $size->size_ten = $request->size_ten;

        $size->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.size');
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
    public function edit($size_id)
    {
        $ds_size = size::where("size_id",  $size_id)->first();
    
        return view('admin.size.sua_size')
            ->with('ds_size', $ds_size);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $size_id)
    {
        $this->validate($request, [
            'size_ten' => 'required',
        ],[
            'size_ten.required' => "Size không được để trống",
        ]);

        $size = size::where('size_id', $size_id)->first();
        $size->size_id = $request->size_id;
        $size->size_ten = $request->size_ten;

        $size->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.size');
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
