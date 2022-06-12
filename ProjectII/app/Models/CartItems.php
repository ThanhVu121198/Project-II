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

    public $timestamps = false;
    ///////////////////////////////
    protected $fillable = [
        'customer_id',
        'product_id',
        'pty',
        'price'
    ];
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    ////////////////////////////////////////////

    public function productDetails() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function shopping_cart() {
        return $this->belongsTo(Product::class, 'shopping_cart_id', 'id');
    }


}
