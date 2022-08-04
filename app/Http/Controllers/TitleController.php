<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = Title::all();
        return view('admin.title.edit', compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        $title = Title::all();
        return view('admin.title.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        $rules = [
            'property_title' => 'required',
            'property_desc' => 'required',
            'testimonial_title' => 'required',
            'testimonial_desc' => 'required',
            'blog_title' => 'required',
            'blog_desc' => 'required',
            'footer_title' => 'required',
            'footer_desc' => 'required',
            'footer_button' => 'required',
        ];

        $validated = $request->validate($rules);

        $title->update($validated);

        return redirect()->route('title.index')
            ->with('success', 'Update Success!');
    }
}
