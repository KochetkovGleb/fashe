<?php

namespace App\Http\Controllers;

use App\Classes\CartFactory;
use App\Classes\SessionCart;
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
        $this->cart->add(3);

        $products = $this->cart->getProducts();

        return view('cart.index', compact('products'));
    }

    public function store(Request $request, $productId)
    {

    }
}

