<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function index1() {
        return view('front.cart.index');
    }

    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {
        $result = $this->cartService->create($request);

        if ($result === false) {
            return redirect()->back();
        }
        return redirect('/cart');
    }

    public function show()
    {
        $products = $this->cartService->getProduct();
        return view('front.cart.index', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts')

        ]);
    }

    public function update(Request $request)
    {

        $this->cartService->update($request);

        return redirect('/cart');
    }

    public function remove($id = 0)
    {
        $this->cartService->remove($id);

        return redirect('/cart');
    }
}
