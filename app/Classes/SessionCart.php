<?php
declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\CartInterface;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Session\SessionManager;

class SessionCart implements CartInterface
{
    private SessionManager $session;
    public function __construct(SessionManager $session)
    {
        $this->session = $session;
    }

    public function add(int $productId): void
    {
        $products = $this->session->get('cart');

        if ( ! $products ) {
            $this->session->put('cart', [$productId => 1]);

            return;
        }

        if (isset($products[$productId])) {
            $products[$productId]++;
        } else {
            $products[$productId] = 1;
        }

        $this->session->put('cart', $products);
    }

    public function remove(int $productId): void
    {
        $products = $this->session->get('cart');

        unset($products[$productId]);

        $this->session->put('cart', $products);
    }

    public function changeQuantity(int $productId, int $amount): void
    {
        $products = $this->session->get('cart');

        $products[$productId] = $amount;

        $this->session->put('cart', $products);
    }

    public function getProducts(): ?Collection
    {
        if ($this->session->has('cart')) {

            $productsArr = $this->session->get('cart');

            $products = Product::findMany(array_keys($productsArr));

            $products->each(function (Product $product) use ($productsArr) {
                $product->setAttribute('quantity', $productsArr[$product->id]);
            });

            return $products;
        }

        return null;
    }

    public function countItems()
    {

    }

    public function totalPrice()
    {

    }
}
