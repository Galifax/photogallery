<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Callback;
use App\Category;
use App\Gallery;
use App\Stock;
use App\CallMe;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $category = Category::getCategories();
        return view('index.index', compact('category'));
    }

    public function about()
    {
        $about = AboutUs::where('id', 2)->first();
        return view('about.index', compact('about'));
    }
    public function requisites()
    {
        $about = AboutUs::where('id', 3)->first();
        return view('requisites.index', compact('about'));
    }

    public function gallery()
    {
        $galleries = Gallery::getGalleries();
        return view('gallery.index', compact('galleries'));
    }

    public function pricingShow($slug)
    {
        $categories = Category::getCategories();
        $category = Category::getBySlug($slug);
        $gallery = Gallery::where('category_id', $category->id)
            ->paginate(20);
        return view('pricing.show', compact('categories', 'category', 'gallery'));
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

    public function callMe(Request $request)
    {
        $call = new CallMe;
        $call->name = $request->name;
        $call->phone = $request->phone;
        $call->save();
        return redirect()->back();
    }


}
