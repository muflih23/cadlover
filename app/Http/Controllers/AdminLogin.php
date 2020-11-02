<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Hash;
use Auth;
use Session;

class AdminLogin extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $dataLogin = Admin::where('username',$username)->first();
        if($dataLogin) 
        {
            if(Hash::check($password, $dataLogin->password))
            {
                session_start();
                $_SESSION['admin']=$dataLogin;
                return redirect('/admin');
            }
            else
            {
                return redirect('/') -> with('alert', 'username atau password salah!');
            }
        }
        /*$credentials = [
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]; 
        dd($credentials);*/
        
    }

    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('/');
    }

    public function adminHome(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else 
        {
            return view('admin_home');
        }
    }
}
