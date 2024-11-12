<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session;
use Illuminate\Session\Store;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role;

            if ($userRole === 'Admin') {
                return redirect('home');
            } elseif ($userRole === 'Customer') {
                return redirect('/customer/beranda');
            }
         }
        // else {
        //     $request->validate([
        //         'email' => 'required|email',
        //         'password' => 'required'
        //     ]);

        //     $email = $request->input('email');
        //     $password = $request->input('password');

        //     if (Auth::attempt(['email' => $email, 'password' => $password])) {
        //         $userRole = Auth::user()->role;

        //         if ($userRole === 'Admin') {
        //             return redirect('home');
        //         } elseif ($userRole === 'Customer') {
        //             return redirect('customer/dashboard');
        //         }
        //     } else {
        //         return redirect('login')->withErrors(['message' => 'Invalid credentials or inactive account.']);
        //     }
        // }
        return view('login');
    }


    public function actionlogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        // $data =[
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')
        // ];

        if(Auth::Attempt(['email' => $email, 'password' => $password, 'active' => 1,'role'=>'Admin'])){
            return redirect('home');
        }
        else if(Auth::Attempt(['email' => $email, 'password' => $password, 'active' => 0,'role'=>'Customer'])){
            return redirect('');
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
