<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $hiddenInputs = $request->except('search', 'minprice', 'maxprice');

        if ($request->has('minprice')) {
            $hiddenPricesInputs = $request->only('minprice', 'maxprice');
        }

        return view('catalog', [
            'hiddenInputs' => $hiddenInputs,
            'hiddenPricesInputs' => $hiddenPricesInputs ?? [],
            'categories' => Category::all(),
            'products' => Product::latest()
                ->filter(
                    $request->all()
                )
                ->paginate(6)
                ->withQueryString(),
        ]);
    }
}
