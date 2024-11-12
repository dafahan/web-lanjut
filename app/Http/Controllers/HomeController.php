<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;


class HomeController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $userRole = Auth::user()->role;
          if ($userRole === 'customer') {
                return redirect('beranda');
            }
         }
        return view('home');
    }

    public function manageaccount(){
        if(auth()->user()->role !== 'Super Admin'){
            abort(403);
        }
        $users = User::select('*')->get();
        $i = 1;
        $data = [
            'users' => $users,
            'i' => $i
        ];
        return view('manageaccount', $data);
    }

    public function activateaccount($id){
        $user = User::find($id);
        $user->active = 1;
        $user->save();
        return redirect('manageaccount');
    }

    public function produk(){
        return view('produk');
    }

    public function layanan(){
        $data = Post::where('type', 'Layanan')->first();
        return view('lp', ['data' => $data]);
    }
    public function sejarah(){
        return view('sejarah');
    }
    public function visimisi(){
        $visi = Post::where('type', 'Visi')->first();
        $misi = Post::where('type', 'Misi')->first();

        return view('visimisi', ['visi' => $visi, 'misi' => $misi,]);
    }
    public function struktur(){
        return view('struktur');
    }

    public function landingpage(){
        $data = Post::where('type', 'Layanan')->first();
        $visi = Post::where('type', 'Visi')->first();
        $misi = Post::where('type', 'Misi')->first();
        $struktur = Post::where('type', 'Struktur')->first();
        return view('lp', ['data' => $data, 'visi' => $visi, 'misi' => $misi, 'struktur' => $struktur]);
    }



}
