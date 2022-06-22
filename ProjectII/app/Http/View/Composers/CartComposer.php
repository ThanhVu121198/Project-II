<?php


namespace App\Http\View\Composers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartComposer
{
    // protected $users;

    public function __construct()
    {
    }

    // public function compose(View $view)
    // {
    //     $carts = Session::get('carts');
    //     if (is_null($carts)) return [];

    //     $productId = array_keys($carts);
    //     $products = Product::select('id', 'name', 'price')
    //         ->whereIn('id', $productId)
    //         ->get();

    //     $view->with('products', $products);
    // }
    public function compose(View $view)
    {
        // dd(1);
        $carts = Session::get('carts');
        if(is_null($carts)) {
            $products =[];
        }
        else{
            $productId = array_keys($carts);
            $products = Product::select('id', 'name', 'price')
                ->where('active', 1)
                ->whereIn('id', $productId)
                ->get();

        }
        $view->with('products',$products);

    }
}
