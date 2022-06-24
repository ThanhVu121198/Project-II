<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProducteditRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Requests\Productrequest;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductDetail;
use Faker\Core\File;
use Illuminate\Support\Facades\DB;
use delete;
use Illuminate\Support\Carbon;
class ProductController extends Controller
{
    //
    public function index(){
    
        $data= Product::orderBy('id','DESC')->with('productImages')->search()->paginate(20);
        return view('admin.product.list',compact('data'),[
            'title'=>'Product list'
        ]);
        
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
        $file_name1 =time().$request->file('img1')->getClientOriginalName();
        $request->file('img1')->move('front/images/product/small-size/',$file_name1);
        $product_img1= new ProductImage();
        $product_img1->product_id=$product_id;
        $product_img1->path='small-size/'.$file_name1;
        $product_img1->save();
        $ids=(String)$product_id;
        $link='admin/product/productget/'.$ids;
        session()->flash('success','create product detail success');
        return redirect($link);
  

    }
    public function get($id){
        // $detail = DB::table('product_details')->where('product_id',$id)->get();
        $img = DB::table('product_images')->where('product_id',$id)->get();
        $product = Product:: find($id);
        // dd($product);
        return view('admin.product.detail',compact('img','product'),[
            'title'=>'product '.$product->name
        ]);
    }
    public function show($id){
        $cate = ProductCategory::all();
        $product= Product::find($id);
        return view('admin.product.edit',compact('cate','product'),[
            'title'=>'Edit product'
        ]);
    }
    public function update($id,ProducteditRequest $request){
        $product=Product::find($id);
        $product->name=$request->name;
        $product->product_category_id=$request->categories;
        $product->description=$request->desc;
        $product->content=$request->content;
        $product->price=$request->price;
        $product->qty=$request->qty;
        $product->weight=$request->weight;
        $product->featured=$request->featured;
        $product->status=$request->status;
        $product->save();
        session()->flash('success','Update product success');
        return redirect('admin/product/list');
    }
    public function destroy($id){
        $carts=Cart::all();
        $num=0;
        $product=Product::find($id);
        $product_id=$product->id;
        foreach($carts as $cart){
            if($cart->product_id==$product_id){
                $num++;
            }
        }
        if($num==0){
        $product_img = Product::find($id)->productImages;
        foreach($product_img as $value){
        $destinal='front/images/product/'.$value->path;
        if(file_exists($destinal)){
            unlink($destinal);
        }
        ProductImage::where('id', $value->id)->delete();
                 }
        $productdelete=Product::find($id);
        session()->flash('success','delete product success');
        $productdelete->delete($id);
        return redirect()->back();
        }else{
            $productupdate=Product::find($id);
            $productupdate->status=1;
            $productupdate->save();
            session()->flash('error','cant delete product if this product is have order, product is stopselling update');
            return redirect()->back();
        }
    }
}