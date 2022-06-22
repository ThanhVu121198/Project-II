<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primarykey = 'id';
    protected $guarded = [];


    public function productCategory() {
        return $this->hasOne(ProductCategory::class, 'id', 'product_category_id');
    }

    public function productImages() {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function productDetails() {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function productComments() {
        return $this->hasMany(productComment::class, 'product_id', 'id');
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
    public function scopeSearch($query){
        if($key=request()->key){
            $query=$query->where('name','like','%'.$key.'%');
        }
        return $query;
    }

}
