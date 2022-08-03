<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Config;
use App\Models\Category;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index(Request $request)
    {
        $property = Property::latest()->get();
        $config = Config::all();
        $category = Category::all();

        if ($request->area || $request->bed || $request->bath || $request->category || $request->price1 || $request->price2) {
            // $price = explode(';', $request->price);
            $property = Property::select('*')
                ->where('area', '<', '{$request->area}')
                ->where('bed', '=', '{$request->bed}')
                ->where('bath', '=', '{$request->bath}')
                ->where('category', '=', '{$request->category}')
                // ->where('price', '<=', $request->price1)
                // ->where('price', '>=', $request->price2)
                // ->whereBetween('price', [$price[0], $price[1]])
                ->get();
        }

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
