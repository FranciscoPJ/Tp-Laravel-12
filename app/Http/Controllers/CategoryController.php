<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /* public function getIndex()
    {
        $posts = Post::all();
        $categories = Category::all();

        return view('category/index', compact('posts'), compact('categories'));
    }
    */

    // getIndex PREGUNTAR SI ES CON BLADE O JS, FILTRADO
    public function getIndex(Request $request)
{
    $categories = Category::all();
    $categoryId = $request->query('category');

    if ($categoryId) {        
        $posts = Post::where('id_category', $categoryId)->get();
    } else {
        $posts = Post::all();
    }

    return view('category.index', compact('posts', 'categories'));
}

    // Mostrar el post (getShow)
    public function getShow($id)
    {
        $post = Post::findOrFail($id);

        return view('category.show', compact('post'));
    }

    // getCreate
    public function getCreate()
    {
        $categories = Category::all(); // obtener todas las categorías
        return view('category/create', compact('categories'));
    }

    public function store(Request $request)
    {

        // Validacion
        $request->validate([
            'title' => 'required|string|max:255',
            'poster' => 'required|string',
            'id_category' => 'required|exists:categories,id',
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->habilitated = $request->has('habilitated') ? true : false;
        $post->content = $request->content;

        // Claves foráneas
        $post->id_user = auth()->id(); // Usuario autenticado
        $post->id_category = $request->id_category;

        $post->save();

        return redirect()->route('category.index');
    }

    // getEdit ($id)
    public function getEdit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all(); // Pasa las categorías

        return view('category.edit', compact('post', 'categories'));
    }

    // Actualizar el post (update)
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->habilitated = $request->has('habilitated');
        $post->content = $request->content;

        $post->save();

        return redirect('/category/show/' . $post->id);
    }
}
