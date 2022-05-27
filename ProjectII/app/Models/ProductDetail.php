<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function products() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function cartItems() {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
