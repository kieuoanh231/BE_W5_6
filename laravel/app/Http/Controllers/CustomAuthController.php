<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use Illuminate\Auth\EloquentUserProvider;
// use Illuminate\Foundation\Auth\User;

class CustomAuthController extends Controller
{
    private $name;
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        //xác nhận 2 trường này là bắt buộc
        $request->validate([
            'user_email' => 'required',
            'user_password' => 'required',
        ]);
        //lấy email,password
        $credentials = $request->only('user_email', 'user_password');
        // dd(Auth::attempt($credentials));
        //Kiểm tra auth 
        if (Auth::attempt($credentials)) {
            // $this->name = Auth::user();
            return redirect()->intended('register')->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function register()
    {
        // dd($this->name);
        return view('auth.register');
    }

    public function customRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'user_name' => $data['name'],
            'user_email' => $data['email'],
            'user_password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
