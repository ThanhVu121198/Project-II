<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        return view('front.cart.index');
    }

    // protected $cartService;

    // public function __construct(CartService $cartService)
    // {
    //     $this->cartService = $cartService;
    // }

    // public function index1(Request $request)
    // {
    //     $result = $this->cartService->create($request);
    //     if ($result === false) {
    //         return redirect()->back();
    //     }

    //     return redirect('/carts');
    // }

    // public function show()
    // {
    //     $products = $this->cartService->getProduct();

    //     return view('carts.list', [
    //         'title' => 'Giỏ Hàng',
    //         'products' => $products,
    //         'carts' => Session::get('carts')
    //     ]);
    // }

    // public function update(Request $request)
    // {
    //     $this->cartService->update($request);

    //     return redirect('/carts');
    // }

    // public function remove($id = 0)
    // {
    //     $this->cartService->remove($id);

    //     return redirect('/carts');
    // }

    // public function addCart(Request $request)
    // {
    //     $this->cartService->addCart($request);

    //     return redirect()->back();
    // }
}
