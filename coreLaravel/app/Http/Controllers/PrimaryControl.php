<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimaryControl extends Controller
{
    // home
    public function index()
    {
      return view('sites.home');
    }
    // about
    public function about()
    {
      return view('sites.about');
    }
    // example
    public function example()
    {
      return view('sites.example');
    }
    // login
    public function login()
    {
      return view('sites.login');
    }
    // register
    public function register()
    {
      return view('sites.register');
    }
    // discovery
    public function discovery($slug)
    {
      return view('sites.discovery.'.$slug);
    }
    // search
    public function search(Request $keyword)
    {
      return view('sites.result',[
        "key" => $keyword
      ]);
    }
}
