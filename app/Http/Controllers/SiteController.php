<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index.index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function gallery()
    {
        return view('gallery.index');
    }

    public function pricing()
    {
        return view('pricing.index');
    }

    public function stocks()
    {
        return view('stocks.index');
    }

    public function contacts()
    {
        return view('contacts.index');
    }


}
