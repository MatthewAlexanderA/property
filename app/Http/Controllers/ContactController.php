<?php

namespace App\Http\Controllers;

use App\Models\Config;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $config = Config::all();

        return view('home.contact', compact('config'));
    }
}
