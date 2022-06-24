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
    public function indexunread(){
        $contacts = Contactad::where('status',0)->orderBy('id','DESC')->paginate(10);
        return view('admin.contact.list',compact('contacts'),[
            'title'=>'Contact list',
        ]);
       
    }
    public function indexread(){
        $contacts = Contactad::where('status',1)->orderBy('id','DESC')->paginate(10);
        return view('admin.contact.list',compact('contacts'),[
            'title'=>'Contact list',
        ]);
       
    }
    public function get($id){
        $contact= Contact::find($id);
        if($contact->status==0){
            return view('admin.contact.get',compact('contact'),[
                'title'=>'new message',
            ]);
        }elseif($contact->status==1){
            return view('admin.contact.reading',compact('contact'),[
                'title'=>'reading',
            ]);
        }
      
       
    }
    public function read($id){
        $contact= Contact::find($id);
        $contact->status=1;
        $contact->save();
        return redirect('admin/contact');
    }
}
