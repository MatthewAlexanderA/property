<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Title;
use App\Models\Config;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $blog = Blog::latest()->get();
        $config = Config::all();
        $title = Title::all();

        $blog = Blog::when($request->search, function ($query) use ($request) {
            $query->where('title', 'like', "%{$request->search}%");;
        })->latest()->paginate(500);

        $blog->appends($request->only('search'));

        return view('home.blog', compact('blog', 'config', 'title'));
    }

    public function show($id)
    {
        $blog = Blog::where('title', $id)->first();
        $config = Config::all();
        $title = Title::all();

        return view('home.showblog', compact('config', 'blog', 'title'));
    }
}
