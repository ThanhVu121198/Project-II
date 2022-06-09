<?php

use App\Http\Controllers\Admin\Maincontroller;
use App\Http\Controllers\Admin\Menucontroller;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\User\loginController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front;
use App\Http\Controllers\Front\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichd
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

// Route::get('/category', [Front\CategoryController::class, 'index']);

Route::prefix('shop')->group(function () {
    Route::get('/product/{id}', [Front\ShopController::class, 'show']);

    Route::get('/', [Front\ShopController::class, 'index']);
});

// admin 
Route::get('admin/users/login',
[\App\Http\Controllers\Admin\User\loginController::class,'index'])->name('login');
route::post('admin/users/login/store',[loginController::class,'store']);
// route::get('admin/main',[Maincontroller::class,'index'])->name('admin')->middleware('aut');
Route::middleware(['auth'])->group(function(){

    route::prefix('admin')->group(function(){        
        route::get('main',[Maincontroller::class,'index']);
        route::get('/',[Maincontroller::class,'index'])->name('admin');
        // menu
        Route::prefix('menu')->group(function(){
            Route::get('add',[Menucontroller::class,'create']);
            Route::post('add',[Menucontroller::class,'store']);
            Route::get('list',[Menucontroller::class,'index']);
            Route::DELETE('destroy',[Menucontroller::class,'destroy']);
            Route::get('edit/{menu}',[Menucontroller::class,'show']);
            Route::post('edit/{menu}',[Menucontroller::class,'update']);

       
        }); 
        // product
        route::prefix('product')->group(function(){
            route::get('add',[ProductController::class,'create']);
            Route::post('add',[ProductController::class,'store']);
            Route::get('list',[ProductController::class,'index']);
            Route::DELETE('destroy',[Menucontroller::class,'destroy']);
            // Route::get('edit/{menu}',[Menucontroller::class,'show']);
            // Route::post('edit/{menu}',[Menucontroller::class,'update']);
        });
        // blog
        route::prefix('blog')->group(function(){
            route::get('add',[BlogController::class,'create']);
            Route::post('add',[BlogController::class,'store']);
            Route::get('list',[BlogController::class,'index']);
            Route::DELETE('destroy',[BlogControllerr::class,'destroy']);
            Route::get('edit/{blog}',[BlogController::class,'show']);
            Route::post('edit/{blog}',[BlogController::class,'update']);
        });
        
    });
});
//end admin

Route::get('/blog', [Front\BlogController::class, 'index']);

Route::get('/about', [Front\AboutController::class, 'index']);

Route::get('/faq', [Front\FAQController::class, 'index']);


Route::get('/contact', [Front\ContactController::class, 'index']);

Route::get('/account', [Front\MyAccountController::class, 'index']);

Route::get('/logout', [Front\LogoutController::class, 'index']);

Route::get('/wishList', [Front\WishlistController::class, 'index']);
