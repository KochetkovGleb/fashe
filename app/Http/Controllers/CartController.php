<?php

namespace App\Http\Controllers;

use App\Classes\CartFactory;
use App\Interfaces\CartInterface;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private CartInterface $cart;

    public function __construct()
    {
        $this->cart = CartFactory::create(
            auth()->user()
        );
    }

    public function index()
    {
        $products = $this->cart->getProducts();

        return view('cart.index', compact('products'));
    }

    public function store(Request $request)
    {
        $productId = $request->get('productId');

        $this->cart->add($productId);

        return 'Success!';

//        return redirect()->route('cart');
    }
}

