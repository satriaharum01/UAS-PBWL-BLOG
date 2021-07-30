<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    
    public function index()
    {
        $rows = Post::paginate(10);
        return view('post.index', compact('rows'));
    }

    
    public function create()
    {
        $cat = Category::All();
        return view('post.add', compact('cat')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'bail|required:post'
        ],
        [
            'post_title.required' => 'Isi Text !'
       ]);
        $rows=Post::create([
            'post_id'      => $request->post_id,
            'post_cat_id'      => $request->post_cat_id,
            'post_date'      => $request->post_date,
            'post_slug'      => $request->post_slug,
            'post_title'      => $request->post_title,
            'post_text'      => $request->post_text
        ]);
        
        return redirect('post'); 
    }

    public function edit($id)
    {
        $cat = Category::All();
        $rows = Post::findOrFail($id);
        return view('post.edit', compact('rows','cat'));
    }

    public function update(Request $request, $id)
    {
        $rows = Post::findOrFail($id);
         $rows->update([
            'post_cat_id'      => $request->post_cat_id,
            'post_date'      => $request->post_date,
            'post_slug'      => $request->post_slug,
            'post_tittle'      => $request->post_tittle,
            'post_text'      => $request->post_text 
         ]);

        return redirect('post');
    }

   
    public function destroy($id)
    {
        $rows = Post::findOrFail($id);
        $rows->delete();

        return redirect('post');
    }
}
