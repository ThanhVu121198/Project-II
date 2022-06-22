<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProducteditRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Requests\Productrequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductDetail;
use Faker\Core\File;
use Illuminate\Support\Facades\DB;
use delete;

class ProductController extends Controller
{
    //
    public function index(){
    
        $data= Product::orderBy('id','DESC')->search()->paginate(20);
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
  
        $file_name1 = $request->file('img1')->getClientOriginalName();
        $product_img1= new ProductImage();
        $product_img1->product_id=$product_id;
        $product_img1->path='small-size/'.$file_name1;
        $request->file('img1')->move('front/images/product/small-size/',$file_name1);
        $product_img1->save();
        $ids=(String)$product_id;
        $link='admin/product/productget/'.$ids;
        session()->flash('success','create product detail success');
        return redirect($link);
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
    public function get($id){
        $detail = DB::table('product_details')->where('product_id',$id)->get();
        $img = DB::table('product_images')->where('product_id',$id)->get();
        $product = Product:: find($id);
        // dd($product);
        return view('admin.product.detail',compact('detail','img','product'),[
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
        $product_img = Product::find($id)->productImages;
     foreach($product_img as $value){
        $destinal='front/images/product/'.$value->path;
        if(file_exists($destinal)){
            unlink($destinal);
        }
        ProductImage::where('id', $value->id)->delete();
     }
        // $product_detail=Product::find($id)->productDetails;
        // foreach($product_detail as $detail){
        //     ProductDetail::where('id', $detail->id)->delete();  
        // }
        $product=Product::find($id);
        session()->flash('success','delete product success');
        $product->delete($id);
        return redirect()->back();
    }
}