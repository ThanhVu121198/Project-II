<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Http\Services\Product\ImageSevice;
use Illuminate\Http\Request;
use App\Models\ProductImage;
class ImageController extends Controller
{
    //
    
    public function create($id){

    }
    public function store($id,ImageRequest $request){
        $file_name= $request->file('img')->getClientOriginalName();
        $product_img= new ProductImage();
        $product_img->product_id=$id;
        $product_img->path='small-size/'.$file_name;
        $request->file('img')->move('front/images/product/small-size/',$file_name);
        $product_img->save();
        session()->flash('success','add new product image success');
        return redirect()->back();
    }
  
    public function destroy($id)
    {
        $img = ProductImage::where('id', $id)->first();

        if ($img) {
            $destinal='front/images/product/'.$img->path;
            if(file_exists($destinal)){
                unlink($destinal);
            }
            ProductImage::where('id', $id)->delete();
            session()->flash('success','delete image success');
        }
        return redirect()->back();
    }

}
