<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use Illuminate\Auth\EloquentUserProvider;
// use Illuminate\Auth\AuthManager;
// use Illuminate\Auth\SessionGuard;
// use Illuminate\Foundation\Auth\User;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        //xác nhận 2 trường này là bắt buộc
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        //lấy email,password
        $credentials = $request->only('email', 'password');
        // dd(Auth::attempt(['user_email'=>$credentials['email'],'user_password'=>$credentials['password']]));
        //Kiểm tra auth 
        if (Auth::attempt(['user_email' => $credentials['email'], 'password' => $credentials['password']])) {
            // $this->name = Auth::user();
            // session::put('users',$this->name);
            // dd($request->session()->has('users'));
            // return redirect()->intended("dashboard")->with(['user' => Auth::user()]);
            return redirect()->intended("dashboard")->withSuccess('Logined success');
        }


        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function customRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,user_email',
            'password' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'user_name' => $data['name'],
            'user_email' => $data['email'],
            'user_password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard(Request $request)
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect("login")->withSuccess('You are not alowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('dashboard');
    }

    public function show(Request $request, $id)
    {
        $value = $request->session()->all;

        //
    }
}
