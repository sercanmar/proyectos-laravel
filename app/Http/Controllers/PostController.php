<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 
    public function index()
    {
        $post = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts')); 
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


  //  public function create()
    //{
       // return view('posts.create');
    //}

    public function nuevoPrueba()
    {
        $post = Post::create([
            'titulo' => 'Título ' . rand(1, 100),
            'contenido' => 'Contenido ' . rand(1, 100)
        ]);

        return redirect()->route('posts.index');
    }


    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'titulo' => 'Título ' . rand(1, 100),
            'contenido' => 'Contenido ' . rand(1, 100)
        ]);

        return redirect()->route('posts.index');
    }
}


/** 
    public function store(Request $request)
    {
        
        $request->validate([

            'titulo' => 'required|string|max:100',
            'contenido' =>'required|string|max:500'
          ]);

       
      
        Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,

        ]);

        return redirect()->route('posts.index');
    }

   

   
    public function edit(Post $post)
    {
        return view('posts.edit', compact('posts'));
    }

    
    public function update(Request $request, Post $post)
    {
       
        $request->validate([

            'titulo' => 'required|string|max:100',
            'contenido' =>'required|string|max:500'
          ]);

    
        
        $post->update([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);

        return redirect()->route('posts.index');
    }

 
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
*/