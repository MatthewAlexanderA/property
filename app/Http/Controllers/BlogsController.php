<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Config;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->get();
        $config = Config::all();

        return view('home.blog', compact('blog', 'config'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        $config = Config::all();

        return view('home.showblog', compact('config', 'blog'));
    }
}
