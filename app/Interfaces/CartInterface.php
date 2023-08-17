<?php

declare(strict_types=1);

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CartInterface
{
    public function add(int $productId): void;
    public function remove(int $productId): void;
    public function changeQuantity(int $productId, int $amount): void;
    public function getProducts(): ?Collection;
    public function countItems();
    public function totalPrice();
}
