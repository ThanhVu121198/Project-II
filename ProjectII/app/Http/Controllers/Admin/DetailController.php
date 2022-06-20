<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\DetailRequest;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function store($id,DetailRequest $request){
        $detail= new ProductDetail();
        $detail->color=$request->color;
        $detail->size=$request->size;
        $detail->qty=$request->qty;
        $detail->product_id=$id;
        $detail->save();
        session()->flash('success','create new detail success');
        return redirect()->back();

    }
    public function destroy($id){
     
        $dt = ProductDetail::where('id', $id)->first();

        if ($dt) {
            ProductDetail::where('id', $id)->delete();
            session()->flash('success','delete detail success');
        }
        return redirect()->back();
        
    }
}
