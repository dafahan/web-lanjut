<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{

    //LAYANAN
    public function viewLayanan(){
        return view('layananadmin', ['data' => Post::all()]);
    }

    public function createLayanan(){
        return view('createlayanan');
    }

    public function storeLayanan(Request $request){
        $layanan = new Post;
        $layanan->type = 'Layanan';
        $layanan->description = $request->deskripsi;
        $layanan->save();
        // return $request;
        return redirect('/#services');
    }

    public function detailLayanan($id){
        $data = Post::find($id);
        return view('detaillayanan', ['data' => $data]);
    }

    public function editLayanan($id){
        $data = Post::find($id);
        return view('editlayanan', ['data' => $data]);
    }
    
    public function updateLayanan(Request $request, $id){
        $post = Post::find($id);
        $post->description = $request->input('deskripsi');
        $post->update();
        return redirect('/#services');
    }


    //VISI
    public function viewVisi(){
        return view('visiadmin', ['data' => Post::all()]);
    }

    public function createVisi(){
        return view('createVisi');
    }

    public function storeVisi(Request $request){
        $visi = new Post;
        $visi->type = 'Visi';
        $visi->description = $request->deskripsi;
        $visi->save();
        // return $request;
        return redirect('/#why-us');
    }

    public function detailVisi($id){
        $data = Post::find($id);
        return view('detailvisi', ['data' => $data]);
    }

    public function editVisi($id){
        $data = Post::find($id);
        return view('editvisi', ['data' => $data]);
    }
    
    public function updateVisi(Request $request, $id){
        $post = Post::find($id);
        $post->description = $request->input('deskripsi');
        $post->update();
        return redirect('/#why-us');
    }

    //MISI
    public function viewMisi(){
        return view('misiadmin', ['data' => Post::all()]);
    }

    public function createMisi(){
        return view('createMisi');
    }

    public function storeMisi(Request $request){
        $misi = new Post;
        $misi->type = 'Misi';
        $misi->description = $request->deskripsi;
        $misi->save();
        // return $request;
        return redirect('/#why-us');
    }

    public function detailMisi($id){
        $data = Post::find($id);
        return view('detailmisi', ['data' => $data]);
    }

    public function editMisi($id){
        $data = Post::find($id);
        return view('editmisi', ['data' => $data]);
    }
    
    public function updateMisi(Request $request, $id){
        $post = Post::find($id);
        $post->description = $request->input('deskripsi');
        $post->update();
        return redirect('/#why-us');
    }

    //STRUKTUR
    public function viewStruktur(){
        return view('strukturadmin', ['data' => Post::all()]);
    }

    public function createStruktur(){
        return view('createStruktur');
    }

    public function storeStruktur(Request $request){
        $validatedData = $request->validate([
            'gambar' => 'required|image'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('struktur');
        }

        $struktur = new Post;

        $struktur->type = 'Struktur';
        $struktur->description = $request->deskripsi;
        $struktur->image = $validatedData['gambar'];
        $struktur->save();
        return redirect('/#team');
    }

    public function detailStruktur($id){
        $data = Post::find($id);
        // dd($data);
        return view('detailstruktur', ['data' => $data]);
    }

    public function editStruktur($id){
        $data = Post::find($id);
        // dd($data);
        return view('editstruktur', ['data' => $data]);
    }
    
    public function updateStruktur(Request $request, $id){
        $post = Post::find($id);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('struktur');
        }
        $post->image = $validatedData['gambar'];
        $post->update();
        return redirect('/#team');
    }
}
