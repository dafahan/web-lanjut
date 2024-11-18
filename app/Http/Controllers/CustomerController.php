<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;



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

    public function storePengajuan(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'jenis_asuransi' => 'required',
            'keterangan' => 'nullable|string',
            'file_ktp' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
            'file_dokumen_pendukung' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
            'file_bukti_asuransi' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // Simpan data ke database
        $pengajuan = new Pengajuan();
        $pengajuan->id = $request->id;
        $pengajuan->nama = $request->nama;
        $pengajuan->telepon = $request->telepon;
        $pengajuan->jenis_asuransi = $request->jenis_asuransi;
        $pengajuan->keterangan = $request->keterangan;

        // Simpan file jika ada
        if ($request->hasFile('file_ktp')) {
            $pengajuan->file_ktp = $request->file('file_ktp')->store('uploads');
        }
        if ($request->hasFile('file_dokumen_pendukung')) {
            $pengajuan->file_dokumen_pendukung = $request->file('file_dokumen_pendukung')->store('uploads');
        }
        if ($request->hasFile('file_bukti_asuransi')) {
            $pengajuan->file_bukti_asuransi = $request->file('file_bukti_asuransi')->store('uploads');
        }

        $pengajuan->save();

        // Redirect ke halaman pengajuan dengan pesan sukses
        return redirect()->route('beranda')->with('status', 'Pengajuan berhasil diajukan');
    }

    public function statuspengajuan(){
        $status = Pengajuan::where('user_id', auth()->id())->first();

        return view('customer.statuspengajuan', compact('status'));
    }

    
    // public function cekStatusPengajuan(Request $request){
    //     $id_pengajuan = $request->get('id_pengajuan');

    //     // Cari status pengajuan berdasarkan ID
    //     $status = Pengajuan::where('id', $id_pengajuan)->first();

    //     if ($status) {
    //         return view('statuspengajuan', compact('status'));
    //     } else {
    //         return redirect()->route('statuspengajuan')->with('error', 'Pengajuan tidak ditemukan');
    //     }
    // }


    public function kecelakaan()
    {
        return view('customer.kecelakaan');
    }

    public function kesehatan()
    {
        return view('customer.kesehatan');
    }
}
