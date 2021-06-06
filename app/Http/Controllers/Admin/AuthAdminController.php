<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AuthAdminController extends Controller

{
    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except(['logout']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLogin()
    {
        return view('auth.login_admin');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $data = Admin::where('username', $request->username)->firstOrFail();
        if (Hash::check($request->password, $data->password)) {
            session(['berhasil_login' => true]);
            return redirect('/admin/dashboard');
        }
        return redirect('/admin/login')->with('message','Email Atau Password Salah !!');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
    