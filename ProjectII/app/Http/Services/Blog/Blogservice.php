<?php
namespace App\Http\Services\Blog;

use App\Models\Blog;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class Blogservice{
   
    // public function getAll(){
    //     return  ProductCategory::orderbyDesc('id')->paginate(20);
    // }
    public function destroy($request) {
        $id = $request->input('id');
        $category = Blog::where('id', $id)->first();

        if ($category) {
            return Blog::where('id', $id)->delete();
        }

        return false;
    }
    public function update($request,$blog):bool{
        // $menu->name=(String) $request->input('categories_name');
        // $menu->status=(int) $request->input('status');
        // $menu->save();
        $blog->title=(String) $request->input('title');
        $blog->category=(String) $request->input('category');
        $blog->content=(String) $request->input('content');
        
        $blog->save();
        // if(hash_file('img')){

        // }
        session()->flash('success','update success');
        return true;
    }
   
}