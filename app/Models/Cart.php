<?php

namespace App\Models;

use App\Interfaces\CartInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cart
 *
 * @property int $id
 * @property int $user_id
 * @property string $products
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereProducts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUserId($value)
 * @mixin \Eloquent
 */
class Cart extends Model implements CartInterface
{
    use HasFactory;

    public function add(int $productId): void
    {

    }

    public function remove(int $productId): void
    {
        // TODO: Implement remove() method.
    }

    public function changeQuantity(int $productId, int $amount): void
    {
        // TODO: Implement changeQuantity() method.
    }

    public function getProducts(): Collection
    {
        // TODO: Implement getProducts() method.
    }

    public function countItems()
    {
        // TODO: Implement countItems() method.
    }

    public function totalPrice()
    {
        // TODO: Implement totalPrice() method.
    }

}
