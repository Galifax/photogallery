<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Callback;
use App\Gallery;
use App\Stock;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $galleries = Gallery::getLastWorks();
        return view('index.index', compact('galleries'));
    }

    public function about()
    {
        $about = AboutUs::first();
        return view('about.index', compact('about'));
    }

    public function gallery()
    {
        $galleries = Gallery::getGalleries();
        return view('gallery.index', compact('galleries'));
    }

    public function pricing()
    {
        return view('pricing.index');
    }

    public function stocks()
    {
        $stocks = Stock::getStocks();
        return view('stocks.index', compact('stocks'));
    }

    public function contacts()
    {
        return view('contacts.index');
    }

    public function sendMessage(Request $request)
    {
        Callback::saveMessage($request);
        return redirect()->back();
    }


}
