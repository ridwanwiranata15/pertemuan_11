<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function Signup(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/task');
        }else{
             return redirect()->back();
        }
    }
    public function signin(Request $request){
        $validateRequest = $request->validate([
            "email" => 'required',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = new User();
        $user->name =$validateRequest["name"];
        $user->email = $validateRequest["email"];
        $user->password = password_hash($validateRequest['password'], PASSWORD_DEFAULT);
        $user->role =  $validateRequest['role'];
        $user->save();
        return redirect('/login')->with('message', 'Selamat anda masuk');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
