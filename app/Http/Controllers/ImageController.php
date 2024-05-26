<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class ImageController 
{
    public function create()
    {
        return view('image.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        Images::create(['image_path' => $imageName]);

        return back()
            ->with('success','You have successfully uploaded the image.')
            ->with('image', $imageName);
    }
}
