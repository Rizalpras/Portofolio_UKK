<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email harus memiliki format yang valid',
            'password.required' => 'Password tidak boleh kosong'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('project');
        }
    
        return redirect()->back()->with('error', 'Email atau Password yang Anda masukkan salah');
    }
    

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index')->with('success', 'Berhasil Keluar')->withInput();;
    }
}