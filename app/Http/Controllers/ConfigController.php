<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::all();
        return view('admin.config.edit', compact('config'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        $config = Config::all();
        return view('admin.config.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        $rules = [
            'title' => 'required',
            'favicon' => 'file',
            'logo' => 'file',
            'metadata' => 'required',
            'fb' => 'required',
            'twit' => 'required',
            'in' => 'required',
            'ig' => 'required',
            'yt' => 'required',
            'wa' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($request->file('favicon')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['favicon'] = $request->file('favicon')->store('post-images/config');
        };

        if ($request->file('logo')) {
            if ($request->oldImageLogo) {
                Storage::delete($request->oldImageLogo);
            }
            $validated['logo'] = $request->file('logo')->store('post-images/config');
        };

        $config->update($validated);

        return redirect()->route('config.index')
            ->with('success', 'Update Success!');
    }
}
