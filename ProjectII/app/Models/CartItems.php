<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    protected $table = 'cart_items';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function productDetails() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function shopping_cart() {
        return $this->belongsTo(Product::class, 'shopping_cart_id', 'id');
    }
}
