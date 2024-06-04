<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('login_admin');
    }

    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
        'email' => 'required|email:rfc,dns',
        'password' => 'required'
    ]);
    if (Auth::attempt($credentials)) {
        // apabila Session berhasil maka simpan dan hubungkan
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
        // APABILA AUTHENTICATION ......
        return back()->with('loginError','Login failed !');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
