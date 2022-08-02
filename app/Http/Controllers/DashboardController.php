<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Visitor;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $property = Property::count();
        $testimonial = Testimonial::count();
        $blog = Blog::count();
        $slider = Slider::count();
        $category = Category::count();

        $visit_t = Visitor::count();
        $visit_d = Visitor::where('visit_date', date('Y-m-d'))->count();
        $visit_u = Visitor::distinct()->get('ip_address')->count();

        return view('admin.dashboard', compact('property', 'testimonial', 'blog', 'slider', 'category', 'visit_t', 'visit_d', 'visit_u'));
    }
}
