<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function view()
    {
        return view('login', [
            'security' => Str::random(5)
        ]);
    }

    public function attempt(Request $req)
    {
        // dd($req->all());
        $req->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:8',
            'security' => 'required'
        ]);

        if ($req->security != $req->security_text) {
            return redirect()->route('login.view')->with('error', 'Security code Salah');
        } else {
            $user = User::where('username', $req->username)->first();
            if ($user) {
                if ($user->password == md5($req->password)) {
                    return redirect()->route('users.index')->with('success', 'Login Berhasil');
                } else {
                    return redirect()->route('login.view')->with('error', 'Password Salah');
                }
            } else {
                return redirect()->route('login.view')->with('error', 'Username Salah');
            }
        }
    }
}
