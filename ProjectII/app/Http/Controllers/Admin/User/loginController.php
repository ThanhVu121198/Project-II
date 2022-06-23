<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\c;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;
class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('admin.users.login', ['title'=>'login admin']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated=$request->validate([
            'email'=>'required|email:rfc,dns',
            'password'=>'required'
      ]);
      if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'level'=>1
      ],$request->input('remember')
      )){
        return redirect()->route('admin');
        // echo "oke";
      }else{
        // Session::flash('error', 'email or password not true');
        return redirect()->back();
      }

    // if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'level'=>0])) {
    //       echo "ok";  
    // }
    // $User = New User();
    //         $User->shopping_cart_id = 0;
    //         $User->name = 'quang anh';
    //         $User->email = 'quanganhle.dev@gmail.com';
    //         $User->password = Hash::make('123456');
    //         $User->avatar = 'avatar.png';
    //         $User->level=1;
    //         $User->status = 0;
    //         $User->save();
       
    // }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
    public function logout(){
      Auth::logout();
      return redirect('admin/users/login');
    }
 
    public function create()
    {
      return view('admin.users.register', ['title'=>'register admin']);
    }
    public function request(RegisterRequest $request){
      $User = New User();
            $file_name = $request->file('avatar')->getClientOriginalName();
            $User->shopping_cart_id = 0;
            $User->name = $request->name;
            $User->email = $request->email;
            $User->password =Hash::make($request->password);
            $User->avatar = $file_name;
            $User->level=1;
            $User->description =$request->desc;
            $User->status = 0;
            $request->file('avatar')->move('front/images/avatar/',$file_name);
            $User->save();
            session()->flash('success','register new admin success');
            return redirect()->back();
    }
}
