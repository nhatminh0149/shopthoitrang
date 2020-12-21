<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\admin;

class NhanVienController extends Controller
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
        $ds_nv = admin::all();
        return view('admin.nhanvien.danhsach_nv')
            ->with('ds_nv', $ds_nv);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_nv = admin::all();
        return view('admin.nhanvien.tao_nv')
            ->with('ds_nv', $ds_nv);
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
            'name'          => 'required',
            'email'         => 'required|email|unique:admins,email',
            'password'      => 'required|min:6',
            're_password'   => 'same:password',
            'quyen'         => 'required',
        ],[
            'name.required'         => "Tên nhân viên không được để trống",
            'email.required'        => "Email nhân viên không được để trống",
            'email.email'           => "Email không đúng định dạng",
            'email.unique'          => "Email này đã tồn tại",
            'password.required'     => "Mật khẩu nhân viên không được để trống",
            'password.min'          => "Mật khẩu nhân viên ít nhất 6 kí tự",
            're_password.same'      => "Mật khẩu không giống nhau. Vui lòng nhập lại",   
            'quyen.required'        => "Quyền nhân viên không được để trống",
        ]);

        $nv = new admin();
        $nv->id = $request->id;
        $nv->name = $request->name;
        $nv->email = $request->email;
        $nv->password = bcrypt($request->password);
        $nv->quyen = $request->quyen;
        $nv->trangthai = 1;

        $nv->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.nv');
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
        $ds_nv = admin::where("id",  $id)->first();
        return view('admin.nhanvien.sua_nv')
            ->with('ds_nv', $ds_nv);
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
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required|email',
            'password'      => 'required|min:6',
            're_password'   => 'same:password',
            'quyen'         => 'required',
        ],[
            'name.required'         => "Tên nhân viên không được để trống",
            'email.required'        => "Email nhân viên không được để trống",
            'email.email'           => "Email không đúng định dạng",
            // 'email.unique'          => "Email này đã tồn tại",
            'password.required'     => "Mật khẩu nhân viên không được để trống",
            'password.min'          => "Mật khẩu nhân viên ít nhất 6 kí tự",
            're_password.same'      => "Mật khẩu không giống nhau. Vui lòng nhập lại",   
            'quyen.required'        => "Quyền nhân viên không được để trống",
        ]);

        $nv = admin::where('id', $id)->first();
        $nv->id = $request->id;
        $nv->name = $request->name;
        $nv->email = $request->email;
        $nv->password = bcrypt($request->password);
        $nv->quyen = $request->quyen;
        $nv->trangthai = $request->trangthai;

        $nv->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.nv');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nv = admin::find($id);
        $nv->trangthai = 0;
        $nv->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.nv');
    }
}
