<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\About;
use App\Models\Property;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Config;
use App\Models\Title;
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
        $property = Property::latest()->limit(6)->get();
        $testimonial = Testimonial::latest()->get();
        $blog = Blog::latest()->limit(3)->get();
        $config = Config::all();
        $category = Category::all();
        $title = Title::all();

        $ip_now = $_SERVER['REMOTE_ADDR'];

        $validated = [
            'ip_address' => $ip_now,
            'visit_date' => date('Y-m-d'),
        ];

        Visitor::create($validated);

        return view('home.index', compact('slider', 'about', 'property', 'testimonial', 'blog', 'config', 'category', 'title'));
    }

    // public function filter(Request $request)
    // {
    //     if (!empty($request->area) && !empty($request->bed) && !empty($request->bath) && !empty($request->category)) {
    //         $property = Property::latest()->get();
    //         $config = Config::all();
    //         $category = Category::all();
    //         $title = Title::all();
    //         $property = Property::select('*')
    //             ->where('area', '<', $request->area)
    //             ->where('bed', '=', $request->bed)
    //             ->where('bath', '=', $request->bath)
    //             ->where('category', '=', $request->category)
    //             ->get();
    //         return view('home.property', compact('property', 'config', 'category', 'title'));
    //     } elseif (empty($request->area) && empty($request->bed) && empty($request->bath) && empty($request->category)) {
    //         $slider = Slider::all();
    //         $about = About::all();
    //         $property = Property::latest()->limit(6)->get();
    //         $testimonial = Testimonial::latest()->get();
    //         $blog = Blog::latest()->limit(3)->get();
    //         $config = Config::all();
    //         $category = Category::all();
    //         $title = Title::all();
    //         $request->session()->flash('successMsg', 'Please Fill All Filter');
    //         return view('home.index', compact('slider', 'about', 'property', 'testimonial', 'blog', 'config', 'category', 'title'));
    //     } elseif ($request->area || $request->bed || $request->bath || $request->category) {
    //         $slider = Slider::all();
    //         $about = About::all();
    //         $property = Property::latest()->limit(6)->get();
    //         $testimonial = Testimonial::latest()->get();
    //         $blog = Blog::latest()->limit(3)->get();
    //         $config = Config::all();
    //         $category = Category::all();
    //         $title = Title::all();
    //         $request->session()->flash('successMsg', 'Please Fill All Filter');
    //         return view('home.index', compact('slider', 'about', 'property', 'testimonial', 'blog', 'config', 'category', 'title'));
    //     }
    // }
}
