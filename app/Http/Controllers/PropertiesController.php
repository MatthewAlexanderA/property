<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Config;
use App\Models\Category;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        $property = Property::latest()->get();
        $config = Config::all();
        $category = Category::all();

        return view('home.property', compact('property', 'config', 'category'));
    }

    public function show($id)
    {
        $property = Property::find($id);
        $config = Config::all();
        $category = Category::all();

        return view('home.showproperty', compact('property', 'config', 'category'));
    }
}
