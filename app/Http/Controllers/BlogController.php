<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::latest()->paginate(500);

        return view('admin.blog.index', compact('blog'))
            ->with('i', (request()->input('page', 1) - 1) * 500);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|file|required',
            'date' => 'required',
        ]);

        $image = $request->file('image')->store('post-images/blog');

        $validated['image'] = $image;

        Blog::create($validated);

        return redirect()->route('blog.index')
            ->with('success', 'Add Success!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|file',
            'date' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-images/blog');
        };

        $blog->update($validated);

        return redirect()->route('blog.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }

        $blog->delete($blog->id);

        return redirect()->route('blog.index')
            ->with('success', 'Delete Success!');
    }

    public function deleteCheckedBlog(Request $request)
    {
        $ids = $request->ids;
        Blog::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
