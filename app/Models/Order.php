<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

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
