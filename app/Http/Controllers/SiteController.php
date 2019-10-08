<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index.index');
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function blogShow()
    {
        return view('blog.show');
    }

    public function clients()
    {
        return view('clients.index');
    }

    public function contacts()
    {
        return view('contacts.index');
    }

    public function pricing()
    {
        return view('pricing.index');
    }

    public function gallery()
    {
        return view('gallery.index');
    }
}
