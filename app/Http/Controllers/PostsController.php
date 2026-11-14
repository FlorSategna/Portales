<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')->get();

            foreach ($posts as $post) {
            $post->format_date = date('d/m/Y', strtotime($post->published_at));
        }

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(int $id)
    {
        $post = Post::findOrFail($id);
        $post->format_date = date('d/m/Y', strtotime($post->published_at));

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function create()
    {
        if (!session()->has('user_id')) {
            return redirect()->route('auth.login.form');
        }

        return view('posts.create');
    }

    public function store(Request $request)
    {
        if (!session()->has('user_id')) {
            return redirect()->route('auth.login.form');
        }

        $request->validate([
            'title' => 'required|min:2|max:100',
            'category' => 'required|in:Urbana,De viaje',
            'content' => 'required|min:10',
            'published_at' => 'required|date|before_or_equal:today',
            'tag' => 'required|min:2|max:100',
        ], [
            'title.required' => 'El título es un campo obligatorio.',
            'title.min' => 'El título debe tener al menos :min caracteres.',
            'title.max' => 'El título no puede tener más de :max caracteres.',

            'category.required' => 'La categoría es un campo obligatorio.',
            'category.in' => 'La categoría debe ser Urbana o De viaje.',

            'content.required' => 'El contenido del post es un campo obligatorio.',
            'content.min' => 'El contenido del post debe tener al menos :min caracteres.',

            'published_at.required' => 'La fecha de publicación es un campo obligatorio.',
            'published_at.date' => 'La fecha de publicación debe ser una fecha válida.',
            'published_at.before_or_equal' => 'La fecha de publicación debe ser anterior o igual a la fecha actual.',

            'tag.required' => 'La etiqueta es un campo obligatorio.',
            'tag.min' => 'La etiqueta debe tener al menos :min caracteres.',
            'tag.max' => 'La etiqueta no puede tener más de :max caracteres.',
        ]);

        $data = $request->only(['title', 'category', 'content', 'published_at', 'tag']);
        $post = Post::create($data);
        return to_route('posts.index')
            ->with('feedback.message', 'El nuevo post "' . $post->title . '" ha sido creado con éxito.');
    }

    public function edit(int $id)
    {
        if (!session()->has('user_id')) {
        return redirect()->route('auth.login.form');
        }
        return view('posts.edit', [
            'post' => Post::findOrFail($id),
        ]);
    }

    public function update(Request $request, int $id)
    {
        if (!session()->has('user_id')) {
        return redirect()->route('auth.login.form');
        }
        $request->validate([
            'title' => 'required|min:2|max:100',
            'category' => 'required|in:Urbana,De viaje',
            'content' => 'required|min:10',
            'published_at' => 'required|date|before_or_equal:today',
            'tag' => 'required|min:2|max:100',
        ], [
            'title.required' => 'El título es un campo obligatorio.',
            'title.min' => 'El título debe tener al menos :min caracteres.',
            'title.max' => 'El título no puede tener más de :max caracteres.',

            'category.required' => 'La categoría es un campo obligatorio.',
            'category.in' => 'La categoría debe ser Urbana o De viaje.',

            'content.required' => 'El contenido del post es un campo obligatorio.',
            'content.min' => 'El contenido del post debe tener al menos :min caracteres.',

            'published_at.required' => 'La fecha de publicación es un campo obligatorio.',
            'published_at.date' => 'La fecha de publicación debe ser una fecha válida.',
            'published_at.before_or_equal' => 'La fecha de publicación debe ser anterior o igual a la fecha actual.',

            'tag.required' => 'La etiqueta es un campo obligatorio.',
            'tag.min' => 'La etiqueta debe tener al menos :min caracteres.',
            'tag.max' => 'La etiqueta no puede tener más de :max caracteres.',
        ]);

        $post = Post::findOrFail($id);
        $data = $request->only(['title', 'category', 'content', 'published_at', 'tag']);
        $post->update($data);

        return to_route('posts.index')
            ->with('feedback.message', 'El post "' . $post->title . '" se ha actualizado con éxito.');
    }

    public function delete(int $id)
    {
        if (!session()->has('user_id')) {
            return redirect()->route('auth.login.form');
        }

        $post = Post::findOrFail($id);
        $post->format_date = date('d/m/Y', strtotime($post->published_at));

        return view('posts.delete', [
            'post' => $post,
        ]);
    }

    public function destroy(int $id)
    {
        if (!session()->has('user_id')) {
            return redirect()->route('auth.login.form');
        }

        $post = Post::findOrFail($id);
        $post->delete();

        return to_route('posts.index')
            ->with('feedback.message', 'El post "' . $post->title . '" se ha eliminado con éxito.');
    }
}