<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Contactad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

class AdminContactController extends Controller
{
    public function index(){
         $contacts = Contactad::orderBy('id','DESC')->paginate(10);
        return view('admin.contact.list',compact('contacts'),[
            'title'=>'Contact list',
        ]);
       

    }
}
