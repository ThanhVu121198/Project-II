<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\ProductCategory;
class ShopController extends Controller
{
    public function show($id) {
        $product = Product::findOrFail($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);

        if ($countRating != 0) {
            $avgRating = $sumRating/$countRating;
        }

        $relatedProducts = Product::where('product_category_id', $product->product_category_id)->where('tag', $product->tag)->limit(4)->get();

        return view('front.shop.show', compact('product','avgRating','relatedProducts'));
    }

    public function postComment(Request $request) {
        ProductComment::create($request->all());

        return redirect()->back();
    }


    public function index(Request $request) {

        $categories = ProductCategory::all();

        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? '1';
        $search = $request->search ?? '';

        $products = Product::where('name', 'like', '%' . $search . '%');

        $products = $this->sortAndPagination($products,$sortBy,$perPage);

        return view('front.shop.index', compact('categories','products'));
    }

    public function category($categoryName, Request $request) {
        $categories = ProductCategory::all();

        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? '1';

        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();

        $products = $this->sortAndPagination($products,$sortBy,$perPage);
        return view('front.shop.index', compact('categories','products'));
    }

    public function sortAndPagination($products,$sortBy,$perPage) {
        switch ($sortBy) {
            case '1':
            case '2':
                $products = $products->orderBy('id');
                Break;  
            case '3':
                $products = $products->orderBy('id');
                Break; 
            case '4':
                $products = $products->orderBy('id');
                Break;  
            case '5':
                $products = $products->orderByDesc('price');
                Break; 
            case '6':
                $products = $products->orderBy('price');
                Break;  
            default: 
                $products = $products->orderBy('id');
        }

        
        $products = $products->paginate(12);

        $products->appends(['sort_by' => $sortBy, 'show' => $perPage]);
        return $products;
    }

}
