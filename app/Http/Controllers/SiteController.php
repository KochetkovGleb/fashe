<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        return view('index', [
            'products' => Product::with('category')->take(8)->get(),
            'newProducts' => Product::where('is_new', 1)->take(4)->get()
        ]);

    }
}
