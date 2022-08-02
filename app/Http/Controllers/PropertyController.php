<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::latest()->paginate(500);
        $category = Category::all();

        return view('admin.property.index', compact('property', 'category'))
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
            'image' => 'image|file|required',
            'category' => 'required',
            'name' => 'required',
            'location' => 'required',
            'bath' => 'required',
            'bed' => 'required',
            'room' => 'required',
            'area' => 'required',
            'price' => 'required',
            'side_image1' => 'image|file',
            'side_image1' => 'image|file',
            'side_image1' => 'image|file',
            'side_image1' => 'image|file',
            'content' => 'required',
        ]);

        $image = $request->file('image')->store('post-images/property');

        $validated['image'] = $image;
        if ($request->file('side_image1')) {
            $side_image1 = $request->file('side_image1')->store('post-images/property');
            $validated['side_image1'] = $side_image1;
        };
        if ($request->file('side_image2')) {
            $side_image2 = $request->file('side_image2')->store('post-images/property');
            $validated['side_image2'] = $side_image2;
        };
        if ($request->file('side_image3')) {
            $side_image3 = $request->file('side_image3')->store('post-images/property');
            $validated['side_image3'] = $side_image3;
        };
        if ($request->file('side_image4')) {
            $side_image4 = $request->file('side_image4')->store('post-images/property');
            $validated['side_image4'] = $side_image4;
        };

        Property::create($validated);

        return redirect()->route('property.index')
            ->with('success', 'Add Success!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $category = Category::all();
        return view('admin.property.edit', compact('property', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $rules = [
            'image' => 'image|file',
            'category' => 'required',
            'name' => 'required',
            'location' => 'required',
            'bath' => 'required',
            'bed' => 'required',
            'room' => 'required',
            'area' => 'required',
            'price' => 'required',
            'side_image1' => 'image|file',
            'side_image1' => 'image|file',
            'side_image1' => 'image|file',
            'side_image1' => 'image|file',
            'content' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-images/property');
        };

        if ($request->file('side_image1')) {
            if ($request->oldSideImage1) {
                Storage::delete($request->oldSideImage1);
            }
            $validated['side_image1'] = $request->file('side_image1')->store('post-images/property');
        };

        if ($request->file('side_image2')) {
            if ($request->oldSideImage2) {
                Storage::delete($request->oldSideImage2);
            }
            $validated['side_image2'] = $request->file('side_image2')->store('post-images/property');
        };

        if ($request->file('side_image3')) {
            if ($request->oldSideImage3) {
                Storage::delete($request->oldSideImage3);
            }
            $validated['side_image3'] = $request->file('side_image3')->store('post-images/property');
        };

        if ($request->file('side_image4')) {
            if ($request->oldSideImage4) {
                Storage::delete($request->oldSideImage4);
            }
            $validated['side_image4'] = $request->file('side_image4')->store('post-images/property');
        };

        $property->update($validated);

        return redirect()->route('property.index')
            ->with('success', 'Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        if ($property->image) {
            Storage::delete($property->image);
        }
        if ($property->side_image4) {
            Storage::delete($property->side_image4);
        }
        if ($property->side_image4) {
            Storage::delete($property->side_image4);
        }
        if ($property->side_image4) {
            Storage::delete($property->side_image4);
        }
        if ($property->side_image4) {
            Storage::delete($property->side_image4);
        }

        $property->delete($property->id);

        return redirect()->route('property.index')
            ->with('success', 'Delete Success!');
    }

    public function deleteCheckedproperty(Request $request)
    {
        $ids = $request->ids;
        Property::whereIn('id', $ids)->delete();
        return response()->json(['success' => "Delete Success!"]);
    }
}
