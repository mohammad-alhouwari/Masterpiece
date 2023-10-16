<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'image',
        'description',
        'longDescription',
        'stock_quantity',
        'price',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        
    ];

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
