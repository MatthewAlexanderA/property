<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'desc' => 'required',
        ]);

        // $link = 'https://wa.me/' . $request->wa . '?text=Name:%20' . $request->name . '%0AEmail:%20' . $request->email . '%0ABooking%20Date:%20' . $request->date . '%0ADescription:%20' . $request->desc;

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'desc' => $request->desc,
        ];

        Mail::to('matthewalexander.wan@gmail.com')->send(new SendMail($data));

        return back()->with('success', 'Send Email Success');
    }
}
