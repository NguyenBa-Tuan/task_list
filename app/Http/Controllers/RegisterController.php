<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreRegister;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    public function store(StoreRegister $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        
        $user = $request->all();
        
        $user['password'] = bcrypt($request->password);
        
        User::create($user);

        return redirect('/register')->with('register' , 'đăng kí thành công');
    }
}
