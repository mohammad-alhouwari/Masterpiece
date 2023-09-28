<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function Cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function Review()
    {
        return $this->hasMany(Review::class);
    }
    public function OrderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
}
