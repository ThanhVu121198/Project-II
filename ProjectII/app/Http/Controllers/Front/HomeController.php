<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index() {

        $featureProducts = Product::where('featured',0)->where('status','=', 0)->take(8)->get();

        $bestSellerProducts = Product::where('best_seller',0)->where('status','=', 0)->take(8)->get();

        $latestProducts = Product::where('latest',0)->where('status','=', 0)->get();
        
        $newProducts = Product::where('status','=', 0)->orderBy('id', 'desc')->with('productImages')->take(10)->get();


        $newBlogs = Blog::orderBy('id', 'desc')->take(6)->get();

        // $categories = ProductCategory::where('status','=', 0)->get();
        

        return view('front.index', compact('featureProducts','bestSellerProducts','latestProducts','newProducts','newBlogs'));
    }

    public function addCart($id)
    {
        //check id khong ton tai
        $data = [
            $id,
            1
        ];
        // dd($data);
        $result = $this->cartService->createHome($data);
        if ($result === false) {
            return redirect()->back();
        }
        return redirect('/cart');
    }

}
