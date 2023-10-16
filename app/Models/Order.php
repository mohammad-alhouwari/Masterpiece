<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'city',
        'note',
        'street_address',
        'post_code',
        'discount_id',
        'status',
        'total-quantity',
        'total-price',
        'payment_method',
    ];

    public function OrderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }

}