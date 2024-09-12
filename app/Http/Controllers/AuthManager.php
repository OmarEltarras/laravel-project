<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    
    public function login(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }
    public function register(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('register');
    }
    public function loginPost(){
        request()->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials=request()->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error","Login Details are not valid");
    }
    public function registerPost(){
        request()->validate([
            'name'=>'required',
            'email'=>['required','email','unique:users'],
            'password'=>'required',
        ]);
        $user=new User;
        $user->name=request()->name;
        $user->email=request()->email;
        $user->password=Hash::make(request()->password);
        $user->save();
        return redirect(route('login'))->with('message','registeration successfully,login to access the app');
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}