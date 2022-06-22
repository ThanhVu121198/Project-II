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
        // $carts = Session::get('carts')
        // $productImg = Product::findOrFail();
        return view('front.cart.index', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts')

        ]);
    }

    // public function showMaster()
    // {
    //     $products = $this->cartService->getProduct();
    //     // $carts = Session::get('carts')
    //     // $productImg = Product::findOrFail();
    //     return view('front.layout.master', [
    //         'title' => 'Giỏ Hàng',
    //         'products' => $products,
    //         'carts' => Session::get('carts')
    //         'minicarts' => Session::get('mini-carts')
    //     ]);
    // }

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

    public function addCart(Request $request)
    {
        
        dd($request->input('address'));
        // $this->cartService->addCart($request);
        //dd($request->input());
        // return redirect()->back();
    }
}
