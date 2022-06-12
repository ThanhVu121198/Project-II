<?php
namespace App\Http\Services\Menu;

use App\Models\ProductCategory;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class Menuservice{
    public function create($request){

       try{
        ProductCategory::create([
            'name'=>(string) $request->input('categories_name'),
            'status'=>(int) $request->input('status')
        ]);
        // dd($request->input());
        // echo"1";
        session()->flash('success','create a new categories success');
       }catch(\Exception $err){
        session()->flash('error',$err->getMessage());
        return false;
        // dd($request->input());
       }
       return true;
    }
    // public function getAll(){
    //     return  ProductCategory::orderbyDesc('id')->paginate(20);
    // }
    public function destroy($request) {
        $id = $request->input('id');
        $category = ProductCategory::where('id', $id)->first();

        if ($category) {
            return ProductCategory::where('id', $id)->delete();
        }

        return false;
    }
    public function update($request,$menu):bool{
        $menu->name=(String) $request->input('categories_name');
        $menu->status=(int) $request->input('status');
        $menu->save();
        session()->flash('success','update success');
        return true;
    }
    
}