<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'products_categories';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function products() {
        return $this->hasMany(Product::class, 'product_category_id', 'id');
    }
    public function scopeSearch($query){
        if($key=request()->key){
            $query=$query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
}
