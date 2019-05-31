<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Destination;
use App\Location;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('sites.user.destinations.create', ['categories' => $categories, 'locations' => $locations]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'address' => 'required',
            'images' => 'required',
        ]);

        // catch request images
        $images = $request->file('images')->store('destinations');

        Destination::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->name, '-'),
            'description' => $request->description,
            'location_id' => $request->location_id,
            'images' => $images
        ]);

        return redirect('/admin/destinations');
    }

    public function edit($destination)
    {
        $locations = Location::all();
        $categories = Category::all();
        $destinations = Destination::findOrFail($destination);

        return view('sites.user.destinations.edit', ['locations' => $locations, 'categories' => $categories, 'destinations' => $destinations]);
    }

    public function update(Request $request, $destination)
    {
        $destinations = Destination::findOrFail($destination);

        $images = $destinations->images;

        if ($request->hasFile('images')) {
            if ($destinations->images != null) {
                unlink(public_path('storage/' . $destinations->images));
            }
            $images = $request->file('images')->store('destinations');
        }

        $destinations->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->name, '-'),
            'description' => $request->description,
            'location_id' => $request->location_id,
            'images' => $images
        ]);
    }
}
