<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session;
use Illuminate\Session\Store;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('home');
        }
        else{
            return view('login');
        }
    }

    public function actionlogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $data =[
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if(Auth::Attempt(['email' => $email, 'password' => $password, 'active' => 1])){
            return redirect('home');
        }
        else{
            return redirect('/login');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('/');
    }
}
