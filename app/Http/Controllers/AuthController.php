<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()  {
        return view('/login');
    }
    public function index()  {
        return view('register');
    }
    public function registered(Request $request)  {
        $validated = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'phone' => 'required|max:255',
            'age' => 'required|max:255',
            'addres' => 'required|max:255',
            'role_id' => 'required',
            
        ]);
        
        // membuat data mdimasukan ke database
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        // dd($request->password);
        Session::flash('status','success');
        Session::flash('message','registration is successful, please log in to the login page');
        return redirect('register');
         }
    public function authenticating(Request $request)  {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $validasi = Auth::attempt($credentials);
      
    // cek apakah login valid
    if ($validasi) {
          
     
            // section biara tidak di tendang
            // biar yang inactive tidak bisa  login
            $request->session()->regenerate();
        // fitur berhasil login
        // jika user itu admin
        if(Auth::user()->role_id == 1){
            return redirect('dashboard');
        }
        // jika user client
        if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3){
            return redirect('profile');
        }
            // return redirect();
        }
        Session::flash('status','failed');
        Session::flash('message','login invalid');
        return redirect('/login');
    }
    public function logout(Request $request){
        Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('login');
    }

    // registrasi
  
    
}
