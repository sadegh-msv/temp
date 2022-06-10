<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;


    public function scopeTopViewProduct($query)
    {
        return $query->where('seen_product', '>', 500);
    }

    public function scopeTopSellProduct($query)
    {
        return $query->where('sell_count', '>', 25);
    }

    public function scopeLikeProduct($query, $name)
    {
        return $query->where('name', 'like', '%'.$name.'%');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);

    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

}
