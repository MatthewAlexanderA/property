<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Config;
use App\Models\Category;
use App\Models\Title;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index(Request $request)
    {
        $property = Property::latest()->get();
        $config = Config::all();
        $category = Category::all();
        $title = Title::all();

        if ($request->area || $request->bed || $request->bath || $request->category) {
            // $price = explode(';', $request->price);
            $property = Property::select('*')
                ->where('area', '<', $request->area)
                ->where('bed', '=', $request->bed)
                ->where('bath', '=', $request->bath)
                ->where('category', '=', $request->category)
                // ->where('price', '<=', $request->price1)
                // ->where('price', '>=', $request->price2)
                // ->whereBetween('price', [$price[0], $price[1]])
                ->get();
        }

        if ($request->reset) {
            $property = Property::select('*')
                ->where('area', '<', '')
                ->where('bed', '=', '')
                ->where('bath', '=', '')
                ->where('category', '=', '')
                ->get();
        }

        return view('home.property', compact('property', 'config', 'category', 'title'));
    }

    public function show($id)
    {
        $property = Property::find($id);
        $config = Config::all();
        $category = Category::all();
        $title = Title::all();

        return view('home.showproperty', compact('property', 'config', 'category', 'title'));
    }
}
