<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials =$request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        //dd($credentials); buat ga bisa masuk/ login terus ditampilin pake array codingan

        //buat chek user udah masuk/login
        if (Auth::attempt($credentials)){
            //buat cek user aktif apa belom
            if(Auth::user()->status != 'active')
            {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not Active yet. Please contact admin!');
                return redirect('login');
            }

            $request->session()->regenerate();
            //cek apakah dia admin
            if(Auth::user()->roles_id == 1)
            {
                return redirect('dashboard');
            }

            //cek apakah dia client
            if(Auth::user()->roles_id == 2)
            {
                return redirect('profile');
            }

        }

        //kalo gagal login
        Session::flash('status', 'failed');
        Session::flash('message', 'Invalid Login');
        return redirect('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('logout');
    }

    public function register()
    {
        return view('register');
    }

    public function regis(Request $request)
    {
        //validate data mesuk atau tidak
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:13',
            'address' => 'required|max:255',
        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Regist success! Wait admin to approve');
        return redirect('register');
    }
}
