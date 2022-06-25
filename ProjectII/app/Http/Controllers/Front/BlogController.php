<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function show($id) {
        $blog = Blog::findOrFail($id);
        return view('front.blog.show',compact('blog'));
    }

    public function index(Request $request) {
        $blogs = Blog::all();

        return view('front.blog.index',compact('blogs'));
    }
}