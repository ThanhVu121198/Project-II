<?php

use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\User\loginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('front.index');
    return \App\Models\User::all();
});
Route::get('admin/users/login',
[\App\Http\Controllers\Admin\User\loginController::class,'index'])->name('login');
route::post('admin/users/login/store',[loginController::class,'store']);
// route::get('admin/main',[Maincontroller::class,'index'])->name('admin')->middleware('aut');
Route::middleware(['auth'])->group(function(){
    route::prefix('admin')->group(function(){
        route::get('admin/main',[Maincontroller::class,'index']);
        route::get('admin',[Maincontroller::class,'index'])->name('admin');
    });
   
    route::get('admin/main',[Maincontroller::class,'index']);
});