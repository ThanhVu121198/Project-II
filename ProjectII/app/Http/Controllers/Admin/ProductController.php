<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Requests\Productrequest;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
    //
    public function index(){
        
    }
    public function create(){
        $cate = ProductCategory::all();
        return view('admin.product.add',compact('cate'),[
            'title'=>'Add a new product'
        ]);
        
    }
    public function store(ProductRequest $request){
        $product = new Product();
        $product->name=$request->name;
        $product->product_category_id=$request->categories;
        $product->description=$request->desc;
        $product->content=$request->content;
        $product->price=$request->price;
        $product->qty=$request->qty;
        $product->discount=$request->discount;
        $product->weight=$request->weight;
        $product->tag=$request->desc;
        $product->featured=$request->featured;
        $product->status=$request->status;
        $product->save(); 
        $product_id=$product->id;
        //


        $file_name1 = $request->file('img1')->getClientOriginalName();
        $product_img1= new ProductImage();
        $product_img1->product_id=$product_id;
        $product_img1->path=$file_name1;
        $request->file('img1')->move('front/images/product/small-size/',$file_name1);
        $product_img1->save();
        //
        // $file_name2 = $request->file('img2')->getClientOriginalName();
        // $product_img2= new ProductImage();
        // $product_img2->product_id=$product_id;
        // $product_img2->path=$file_name2;
        // $request->file('img2')->move('public/front/images/product/small-size/',$file_name2);
        // $product_img2->save();
        // //
        
        // $file_name3 = $request->file('img3')->getClientOriginalName();
        // $product_img3= new ProductImage();
        // $product_img3->product_id=$product_id;
        // $product_img3->path=$file_name3;
        // $request->file('img3')->move('public/front/images/product/small-size/',$file_name3);
        // $product_img3->save();

    }
}
