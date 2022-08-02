<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(About $about)
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|file',
            'img' => 'image|file',
        ];

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-images/about');
        };
        if ($request->file('img')) {
            if ($request->oldImg) {
                Storage::delete($request->oldImg);
            }
            $validated['img'] = $request->file('img')->store('post-images/about');
        };

        $about->update($validated);

        return redirect()->route('about.index')
            ->with('success', 'Update Success!');
    }
}
