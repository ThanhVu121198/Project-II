<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'shopping_cart';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function cartItems() {
        return $this->hasMany(ProductImage::class, 'shopping_cart_id', 'id');
    }

    public function users() {
        return $this->hasOne(PaymentDetails::class, 'shopping_cart_id', 'id');
    }
}
