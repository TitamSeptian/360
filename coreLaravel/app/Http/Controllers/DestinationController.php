<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Destination;
use App\Location;
use App\Http\Requests\DestinationValidate;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('sites.user.destinations.create', ['categories' => $categories, 'locations' => $locations]);
    }

    public function store(DestinationValidate $request)
    {
        // catch request images
        $images = $request->file('images')->store('destinations/' . str_replace(' ', '-', $request->name));

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

    public function update(DestinationValidate $request, $destination)
    {

        $destinations = Destination::findOrFail($destination);

        if ($request->images) {
            if ($destinations->images != null) {
                unlink(public_path('storage/' . $destinations->images));
            }
            $images = $request->file('images')->store('destinations/' . str_replace('-', ' ', $request->name));
        } else {
            $images = $destinations->images;
        }

        $destinations->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->name, '-'),
            'description' => $request->description,
            'location_id' => $request->location_id,
            'images' => $images
        ]);

        return redirect('/admin/destinations');
    }

    public function delete($destination)
    {
        $data = Destination::findOrFail($destination);

        if ($data->images != null) {
            unlink(public_path('storage/' . $data->images));
            $data->delete();
        }

        $data->delete();

        return redirect('/admin/destinations');
    }
}
