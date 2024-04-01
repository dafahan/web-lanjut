<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(){
        $doc = Document::orderBy('id','DESC')->get();
        return view('lp',['docs'=>$doc]);
    }
    
    
    //upload function
    public function upload(Request $request)
    
    {
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx',
        ]);
        $file = $request->file('document');
        $originalName = $file->getClientOriginalName();
        $fileName = time() . '_' . $file->getClientOriginalName();
        $validatedData['document'] = $request->file('document')->store('dokumen');
    
        $doc = new Document;
        $doc->file_name = $fileName;
        $doc->original_name = $originalName;
        $doc->save();
        return redirect()->back()->with('success', 'Document uploaded successfully.');
    }
    
    //download function
    public function download($id)
    {
        $document = Document::find($id);
        $filePath = storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);
    }

    //DOKUMEN LAYANAN
    public function viewDokumenLayanan(){
        return view('layananadmin', ['data' => Document::all()]);
    }

    public function createDokumenLayanan(){
        return view('createdokumenlayanan');
    }

    public function storeDokumenLayanan(Request $request){
        $dokumen = new Document;
        $dokumen->description = $request->deskripsi;
        $dokumen->save();
        // return $request;
        return redirect('/#services');
    }

    // public function detailLayanan($id){
    //     $data = Post::find($id);
    //     return view('detaillayanan', ['data' => $data]);
    // }

    // public function editLayanan($id){
    //     $data = Post::find($id);
    //     return view('editlayanan', ['data' => $data]);
    // }
    
    // public function updateLayanan(Request $request, $id){
    //     $post = Post::find($id);
    //     $post->description = $request->input('deskripsi');
    //     $post->update();
    //     return redirect('/#services');
    // }
}
