<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
    public function beranda()
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role;
            if ($userRole === 'admin') {
                return redirect('home');
            } 
         }
        // $userRole = Auth::user()->role;

        // dd($userRole);

        return view('customer.beranda');
    }

    public function pengajuan()
    {
        return view('customer.pengajuan');
    }

    public function life()
    {
        return view('customer.life');
    }

    public function health()
    {
        return view('customer.health');
    }

    public function vehicle()
    {
        return view('customer.vehicle');
    }
}
