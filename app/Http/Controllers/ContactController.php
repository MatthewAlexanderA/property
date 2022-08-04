<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Title;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $config = Config::all();
        $title = Title::all();

        return view('home.contact', compact('config', 'title'));
    }
}
