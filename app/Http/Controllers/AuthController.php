<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function prosesRegister(Request $request) 
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'alamat' => ['required', 'string'],
            'notelepon' => ['required', 'string'],
            'noktp' => ['required', 'string']
        ]);

        User::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'level' => 'user',
            'alamat'=> $request['alamat'],
            'notelepon' => $request['notelepon'],
            'noktp' => $request['noktp']
        ]);

        return redirect('/login');

        
    }

    public function login()
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required']
        ]);

        $data = User::where('email', $request['email'])->first();

        $credentials = $request->only('email', 'password', 'level');

        if(Auth::attempt($credentials)) {
            return redirect('/admin');
        }else{
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
