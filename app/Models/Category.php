<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $product
 * @property-read int|null $product_count
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

 public function scopeFilter($query, array $filters)
    {

         $query->when($filters['search'] ?? false, fn ($query, $search)=>
            $query->where(fn($query)=>
                $query->where('name', 'like', '%' . $search. '%')));

        $query->when($filters['category'] ?? false, fn ($query, $category)=>
            $query->whereHas('category', fn($query) =>
                $query->where('category_id', $category)));

        $query->when($filters['m'] ?? false, fn ($query, $author)=>
            $query->whereHas('maxprice', fn($query) =>
                $query->where('price', '<', 500)));


    }
 
 
 
 
    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
