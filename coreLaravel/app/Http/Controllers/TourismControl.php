<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourismControl extends Controller
{
    //
    public function index()
    {
      return view('sites.tourism.home');
    }
    // destination
    public function destination($slug)
    {
      return view('sites.tourism.destination.'.$slug);
    }
    // category
    public function category($slug)
    {
      return view('sites.category.'.$slug);
    }
}
