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
        $blog = Blog::where('id', $id)->first();
       
        if ($blog) {
            $destinal='front/images/blog/medium-size/'.$blog->image;
            if(file_exists($destinal)){
                unlink($destinal);
            }
            return Blog::where('id', $id)->delete();
        }

        return false;
    }
    public function update($request,$blog):bool{
        $blog->save();
        if($request->hash_file('img')){
            $file_name = $request->file('img')->getClientOriginalName();
            $blog->title=(String) $request->input('title');
            $blog->category=(String) $request->input('category');
            $blog->content=(String) $request->input('content');
            $blog->image=$file_name;
            $request->file('img')->move('front/images/blog/medium-size/',$file_name);
        }else{
            $blog->title=(String) $request->input('title');
            $blog->category=(String) $request->input('category');
            $blog->content=(String) $request->input('content');
        }
        
            session()->flash('success','update success');
            return true;
        }
     
    }
   
