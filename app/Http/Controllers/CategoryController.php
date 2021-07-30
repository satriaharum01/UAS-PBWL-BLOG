<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
   
    public function index()
    {
        $rows = Category::All();
        return view('category.index', compact('rows'));
    }

    public function create()
    {
        return view('category.add');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'cat_name' => 'bail|required:category'
        ],
        [
            'cat_name.required' => 'Isi Text !'
       ]);

       Category::create([
            'cat_name' => $request->cat_name,
            'cat_text' => $request->cat_text
       ]);

       return redirect('/category'); 
    }


    public function edit($id)
    {
        
        $rows = Category::findOrFail($id);
        return view('category.edit', compact('rows'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cat_name' => 'bail|required:category'
        ],
        [
            'cat_name.required' => 'Isi Text !'
        ]);

        $rows = Category::findOrFail($id);
        $rows->update([
            'cat_name' => $request->cat_name,
            'cat_text' => $request->cat_text
        ]);

        return redirect('category');
    }

    public function destroy($id)
    {
        $rows = Category::findOrFail($id);
        $rows->delete();
    }
}
