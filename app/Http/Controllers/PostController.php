<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Menampilkan halaman beranda dengan 3 artikel terbaru.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $posts = Post::latest()->take(3)->get();
        return view('home', compact('posts'));
    }

    /**
     * Menampilkan daftar semua artikel.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('posts.show', compact('posts'));
    }

    /**
     * Menampilkan detail artikel berdasarkan slug.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }
}
