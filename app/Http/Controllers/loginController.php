<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function Register (Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',//sesuikan name input
            'password' => 'required|string',
            'username'  => 'required|string',
        ]);

        //sesuaikan nama di tabel data base
      $result =  User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'id_kategori' => $request->id_kategori,
        ]);

        if($result){
            return redirect()->route('transaksi')->with('succses','register berhasil ');
            //sesuikan nama route
        }else{
            return redirect()->back()->with('falied','daftar gagal');
        }

    }
    public function Login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');
        if (!auth()->attempt($credentials)) {
            return redirect('login');
        }
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect('/dashboard');
        }else{
            return redirect('/dasboarduser');
        }
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            //sesuaikan nama route
            $user=Auth::user();
            if($user && $user->role === 'admin'){
                return redirect()->route('index')->with('succses','login berhasil');
            }else{
                return redirect()->route('login.page')->with('succses','login berhasil');
    
            }
        }
    }
    public function halamanR($id_kategori){
        $data = Kategori::where('id',$id_kategori)->get();
        return view('tamplate.register',['data'=>$data]);
    }
    public function Logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');       
    }
    public function halamanL(){
        return view('tamplate.login');
    }
    public function ChangePassword(){
         return view('admin.change-password');
    }
    
}
