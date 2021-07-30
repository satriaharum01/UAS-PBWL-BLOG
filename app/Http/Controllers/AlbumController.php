<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Album;

class AlbumController extends Controller
{
  
    public function index()
    {
         $rows = Album::paginate(10);
        return view('album.index', compact('rows'));
    }

    public function create()
    {
        $photos = Photos::all();
        return view('album.add', compact('photos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'album_name' => 'bail|required:album'
        ],
        [
            'album_name.required' => 'Isi Text !'
       ]);
       
        $rows=Album::create([
            'album_pho_id'  => $request->album_pho_id,
            'album_name'    => $request->album_name,
            'album_text'    => $request->album_text
        ]);
        
        return redirect('album');

    }

    public function edit($id)
    {
         $photos = Photos::All();
         $rows = Album::findOrFail($id);
        return view('album.edit', compact('rows','photos'));
    }

    public function update(Request $request, $id)
    {
         $rows = Album::find($id);
         $rows->update([
            'album_pho_id'  => $request->album_pho_id,
            'album_name'    => $request->album_name,
            'album_text'    => $request->album_text
         ]);

        return redirect('album');
    }

    public function destroy($id)
    {
        
        $rows = Album::findOrFail($id);
        $rows->delete();

        return redirect('album');
    
    }
}
