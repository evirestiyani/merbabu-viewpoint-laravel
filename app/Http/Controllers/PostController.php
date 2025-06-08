<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        return view('home', compact('posts'));
    }

    public function panduan()
    {
        return view('panduan');
    }

    public function peralatan()
    {
        return view('peralatan');
    }
     public function spot()
    {
        return view('spot');
    }
       public function gallery()
    {
        return view('gallery');
    }
}
