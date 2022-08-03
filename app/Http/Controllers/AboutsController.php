<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Config;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index()
    {
        $about = About::all();
        $testimonial = Testimonial::latest()->get();
        $blog = Blog::latest()->limit(3)->get();
        $config = Config::all();

        return view('home.about', compact('about', 'testimonial', 'blog', 'config',));
    }
}
