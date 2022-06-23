<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
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

        $featureProducts = Product::where('featured',0)->get();

        $bestSellerProducts = Product::where('best_seller',0)->get();

        $latestProducts = Product::where('latest',0)->get();
        // dd($featureProducts);

        return view('front.index', compact('featureProducts','bestSellerProducts','latestProducts'));
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
