<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogeditRequest;
use App\Http\Requests\BlogRequest;
use App\Http\Services\Blog\Blogservice;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogAdmincontroller extends Controller
{
    //
    protected $blogservice;
    public function __construct(Blogservice $blogservice)
    {
        $this->blogservice = $blogservice;
    }
    public function index(){
        $data= Blog::orderBy('id','ASC')->search()->paginate(10);
        return view('admin.blog.list',compact('data'),[
            'title'=>'List blog'
        ]);
    }
    public function create(){
        return view('admin.blog.add',[
            'title'=>'Add a new blog'
        ]);

    }
    public function store(BlogRequest $request){
        $file_name = $request->file('img')->getClientOriginalName();
        $blog=new Blog();
        $blog->title = $request->title;
        $blog->user_id = 0;
        $blog->category = $request->category;
        $blog->content = $request->content;
        $blog->image =$file_name;
        $request->file('img')->move('front/images/blog/medium-size/',$file_name);
        $blog->save();
        session()->flash('success','create a new categories success');
        return redirect('admin/blog/list');
    }
    public function destroy(Request $request)
    {
        $result = $this->blogservice->destroy($request);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'delete success'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
    public function show(Blog $blog){
        // dd($blog);
           return view('admin.blog.edit',[
          'title'=>'edit blog',
          'blog'=>$blog
        ]
        );

    }
    public function update(Blog $blog,BlogeditRequest $request){
        $this->blogservice->update($request,$blog);
        return redirect('admin/blog/list');
    }
}
