<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function beranda()
    {
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
