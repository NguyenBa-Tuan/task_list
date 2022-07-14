<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index()
    {
        if(Auth::check()){
            echo 'Bạn đã đăng nhâp';
        }else{
            echo 'Bạn chưa đăng nhập';
        }
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        $userName = $request->name;
        $password = $request->password;
 
        if (Auth::attempt(['name'=>$userName, 'password'=>$password])) {
            return back()->with('login', 'Đăng nhập thành công');
        }
    }

    public function logout()
    {
        Auth::logout();

        return back()->with('logout', 'Đăng xuất thành công');
    }
}
