<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index() {

        $featureProducts = Product::where('featured',0)->get();

        $bestSellerProducts = Product::where('best_seller',0)->get();

        $latestProducts = Product::where('latest',0)->get();
        // dd($featureProducts);

        return view('front.index', compact('featureProducts','bestSellerProducts','latestProducts'));
    }
}
