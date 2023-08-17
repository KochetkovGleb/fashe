<?php
declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\CartInterface;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class CartFactory
{
    public static function create(?User $user): CartInterface
    {
        if ($user) {
            return $user->cart;
        } else {
            return new SessionCart(Session::getFacadeRoot());
        }
    }
}
