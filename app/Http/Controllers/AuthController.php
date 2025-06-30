<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showloginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Arahkan berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'mitra') {
            return redirect()->route('mitra.dashboard');
        } elseif ($user->role === 'user') {
            return redirect()->route('user.dashboard');
        }
    }

    return back()->withErrors(['email' => 'Email atau password salah']);
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
