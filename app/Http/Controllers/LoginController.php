<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreLogin;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function store(StoreLogin $request)
    {
        // $request->validate([
        //     'name' => ['required'],
        //     'password' => ['required'],
        // ],[
        //     'name.required' => 'Bạn phải nhập tên user',
        //     'password.required' => 'Bạn phải nhập mật khẩu user',
        // ]);

        $userName = $request->name;
        $password = $request->password;
 
        if (Auth::attempt(['name'=>$userName, 'password'=>$password])) {
            if(Auth::user()->role == 0) return view('admin.home'); 
            else return view('user.home');
            return redirect()->route('admin.index')->with('login', 'Đăng nhập thành công');
        }

        return back()->with('loginErr', 'Đăng nhập thất bại');
    }

    public function logout()
    {
        Auth::logout();

        return back()->with('logout', 'Đăng xuất thành công');
    }
}
