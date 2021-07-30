<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Post;
use App\Models\Album;

class PhotosController extends Controller
{
    
    public function index()
    {
        $rows = Photos::paginate(10);
        return view('photos.index', compact('rows'));
    }

      public function create()
    {
        $post = Post::all();
        return view('photos.add', compact('post'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'pho_tittle' => 'bail|required:photos'
        ],
        [
            'pho_tittle.required' => 'Isi Text !'
       ]);
       

        $rows=Post::create([
            'pho_id'      => $request->post_id,
            'pho_post_id'      => $request->pho_post_id,
            'pho_date'      => $request->post_date,
            'post_tittle'      => $request->post_tittle,
            'post_text'      => $request->post_text,
            'gambar'      => $request->gambar
        ]);
        
        return redirect('photos'); 
          
    }
    
     public function edit($id)
    {
         $post = Post::all();
         $rows = Photos::findOrFail($id);
        return view('photos.edit', compact('rows','post'));
    }

    public function update(Request $request, $id)
    {
        $rows = Photos::findOrFail($id);
         $rows->update([
            'pho_post_id'      => $request->pho_post_id,
            'pho_date'      => $request->pho_date,
            'pho_slug'      => $request->pho_slug,
            'pho_title'      => $request->pho_title,
            'pho_text'      => $request->post_text,
            'gambar'    => $request->gambar
         ]);

        return redirect('photos');
    }

    public function destroy($id)
    {
        $rows = Photos::findOrFail($id);
        $rows->delete();

        return redirect('photos');

    }
}
