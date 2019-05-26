<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryControl extends Controller
{
    //
    public function index()
    {
      return view('sites.gallery.home');
    }
}
