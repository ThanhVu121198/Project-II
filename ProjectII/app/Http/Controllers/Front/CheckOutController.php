<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index() {
        return view('front.checkout.index');
    }

    public function addCart(Request $request)
    {
        // dd($request->all());
        $this->cartService->addCart($request);
        return redirect()->route('home');
    }
}
