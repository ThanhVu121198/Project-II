<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    
public function new(){
        $customer=Customer::orderBy('id','DESC')->where('status',0)->paginate(20);
        return view('admin.order.listorder',compact('customer'),[
            'title'=>'news orders'
        ]);
}
public function handle (){
    $customer=Customer::orderBy('id','DESC')->where('status',1)->paginate(20);
    return view('admin.order.listorder',compact('customer'),[
        'title'=>'orders processing'
    ]);
}
public function complete (){
    $customer=Customer::orderBy('id','DESC')->where('status',2)->paginate(20);
    return view('admin.order.comlist',compact('customer'),[
        'title'=>'completeds order'
    ]);
}
public function cancels(){
    $customer=Customer::orderBy('id','DESC')->where('status',3)->paginate(20);
    return view('admin.order.canlist',compact('customer'),[
        'title'=>'cancels order'
    ]);
}
public function orderdetail($id){
    $customer = Customer::find($id);
    $cs_id=$customer->id;
    $carts=Cart::where('customer_id',$cs_id)->with('product.productImages')->get();
    if($customer->status==0){
        return view('admin.order.ndetail',compact('customer','carts'),[
            'title'=>'Customer Detail'
        ]);
    }elseif($customer->status==1){
        return view('admin.order.pdetail',compact('customer','carts'),[
            'title'=>'Customer Detail'
        ]);
    }elseif($customer->status==2){
        return view('admin.order.cdetail',compact('customer','carts'),[
            'title'=>'Customer Detail'
        ]);
    }elseif($customer->status==3){
        return view('admin.order.candetail',compact('customer','carts'),[
            'title'=>'Customer Detail'
        ]);
    }
   
    }
    public function destroy($id){
        $carts=DB::table('carts')->where('customer_id',$id)->get();
        foreach($carts as $item){
            Cart::where('id', $item->id)->delete();
        }
        $customer= Customer::find($id);
        session()->flash('success','delete order success');
        $customer->delete($id);
        return redirect()->back();

    }
    public function confirmhandle($id){
        $customer= Customer::find($id);
        $customer->status=1;
        $customer->save();
        session()->flash('success','processing confirmation success');
        return redirect('/admin/order/new');
    }
    public function paymentconfirmation($id){
        $customer= Customer::find($id);
        $customer->status=2;
        $customer->save();
        session()->flash('success','payment confirmation success');
        return redirect('/admin/order/handle');
    }
    public function cancel($id){
        $customer= Customer::find($id);
        $customer->status=3;
        $customer->save();
        session()->flash('success','cansel order success');
        return redirect('/admin/order/cancels');
    }
    public function undocansel($id){
        $customer= Customer::find($id);
        $customer->status=0;
        $customer->save();
        session()->flash('success','undo cansel order success');
        return redirect('/admin/order/cancels');
    }

}
