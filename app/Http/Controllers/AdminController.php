<?php

namespace App\Http\Controllers;

use App\User;
use App\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }



    public function users()
    {   
        $users = Admin::getAllUsers();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $users = user::all();
        return view('admin.users.create')
            ->with('users', $users);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
            're_password' => 'same:password',
            'hoten' => 'required',
            'email' => 'required|email|unique:users,email',
            'sdt' => 'required|digits:10',
        ],[
            'username.required' => "Tài khoản khách hàng không được để trống",
            'username.unique' => "Tài khoản này đã tồn tại",
            'password.required' => "Mật khẩu khách hàng không được để trống",
            'password.min' => "Mật khẩu khách hàng ít nhất 6 kí tự",
            're_password.same' => "Mật khẩu không giống nhau. Vui lòng nhập lại",
            'hoten.required' => "Họ tên khách hàng không được để trống",
            'email.required' => "Email khách hàng không được để trống",
            'email.email' => "Email không đúng định dạng",
            'email.unique' => "Email này đã tồn tại",
            'sdt.required' => "SĐT của khách hàng không được để trống",
            'sdt.digits' => "SĐT của khách hàng phải là số 10 kí tự ",
        ]);

        $user = new user();
        $user->id = $request->id;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->hoten = $request->hoten;
        $user->email = $request->email;
        $user->sdt = $request->sdt;
        $user->trangthai = 1;

        $user->save();

        Session::flash('alert-info', 'Thêm mới thành công');
        
        return redirect()->route('admin.users');
    }

    public function edit($username)
    {
        $user = Admin::findUser($username);
        return view('admin.users.edit', compact('user'));
    }

    // public function edit($id)
    // {
    //     $user = user::where("id",  $id)->first();
    
    //     return view('admin.users.edit')
    //         ->with('user', $user);
    // }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:6',
            're_password' => 'same:password',
            'hoten' => 'required',
            'email' => 'required|email',
            'sdt' => 'required|digits:10',
        ],[
            'username.required' => "Tài khoản khách hàng không được để trống",
            'password.required' => "Mật khẩu khách hàng không được để trống",
            'password.min' => "Mật khẩu khách hàng ít nhất 6 kí tự",
            're_password.same' => "Mật khẩu không giống nhau. Vui lòng nhập lại",
            'hoten.required' => "Họ tên khách hàng không được để trống",
            'email.required' => "Email khách hàng không được để trống",
            'email.email' => "Email không đúng định dạng",
            // 'kh_email.unique' => "Email này đã tồn tại",
            'sdt.required' => "SĐT của khách hàng không được để trống",
            'sdt.digits' => "SĐT của khách hàng phải là số 10 kí tự ",
        ]);

        $user = user::where('id', $id)->first();
        $user->id = $request->id;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->hoten = $request->hoten;
        $user->email = $request->email;
        $user->sdt = $request->sdt;
        $user->trangthai = $request->trangthai;

        $user->save();

        Session::flash('alert-success', 'Cập nhật thành công');
        
        return redirect()->route('admin.users');
    }

    // public function update(Request $request, User $user)
    // {
    //     $type = request('type');

    //     switch ($type) {
    //         case 1:
    //             return AdminController::updateDetails($request, $user);
    //             break;

    //         case 2:
    //             return AdminController::updatePassword($request, $user);
    //             break;
            
    //         default:
    //             return redirect()->route('admin.user.edit', $user->username);
    //             break;
    //     }

        
    // }


    // public static function updateDetails(Request $request, User $user)
    // {
    //     $request->validate([
    //         // 'username' => 'required|alpha|min:6|unique:users',
    //         'username' => 'required|min:6|unique:users',
    //     ]);
    //     $user->update($request->all());
    //     Session::flash('alert-success', 'Cập nhật thành công');
    //     return redirect()->route('admin.user.edit', $user->username);
    // }


    // public static function updatePassword(Request $request, User $user)
    // {
    //     $request->validate([
    //         'password' => 'required|alphanum|min:6|confirmed',
    //     ]);

    //     $user->update($request->all());
    //     // session()->flash('success', 'Password successfully updates');
    //     Session::flash('alert-success', 'Cập nhật thành công');
    //     return redirect()->route('admin.user.edit', $user->username);
    // }

    public function destroy($id)
    {
        $user = user::find($id);
        $user->trangthai = 0;
        $user->save();
        Session::flash('alert-danger', 'Xóa thành công');
        return redirect()->route('admin.users');
    }
}
