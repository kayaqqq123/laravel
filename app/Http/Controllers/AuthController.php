<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function getLogin() {
        return view('auths.login');
    }

    public function getRegister() {
        return view('auths.register');
    }

    public function postRegister(Request $request) {
        $siswa = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Auth::loginUsingId($siswa->id);

        return redirect()->route('login');
    }

    public function postLogin(Request $request) {

        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboards');
        }else{
            return redirect('/login');
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }
}
