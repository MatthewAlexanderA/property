<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\About;
use App\Models\Property;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Config;
use App\Models\Category;

use App\Models\Visitor;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $property = Property::latest()->limit(8)->get();
        $testimonial = Testimonial::latest()->get();
        $blog = Blog::latest()->limit(9)->get();
        $config = Config::all();
        $category = Category::all();

        $ip_now = $_SERVER['REMOTE_ADDR'];

        $validated = [
            'ip_address' => $ip_now,
            'visit_date' => date('Y-m-d'),
        ];

        Visitor::create($validated);

        return view('home.index', compact('slider', 'about', 'property', 'testimonial', 'blog', 'config', 'category'));
    }
}
