<?php

use App\Http\Controllers\Admin\Blog\BlogAdmincontroller;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\Maincontroller;
use App\Http\Controllers\Admin\Menucontroller;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\User\loginController;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\OrderController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/addCartHome/{id}', [HomeController::class, 'addCart']);

// Route::get('/category', [Front\CategoryController::class, 'index']);

Route::prefix('shop')->group(function () {
    Route::get('/product/{id}', [Front\ShopController::class, 'show']);

    Route::get('/', [Front\ShopController::class, 'index']);

    Route::post('/product/{id}', [Front\ShopController::class,'postComment']);

    Route::get('/{categoryName}', [Front\ShopController::class, 'category']);
});

// admin 
Route::get('admin/users/login',[\App\Http\Controllers\Admin\User\loginController::class,'index'])->name('login');
route::post('admin/users/login/store',[loginController::class,'store']);
// route::get('admin/main',[Maincontroller::class,'index'])->name('admin')->middleware('aut');
Route::middleware(['auth'])->group(function() {

    route::prefix('admin')->group(function() {
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
            Route::get('destroy/{id}',[ProductController::class,'destroy']);
            Route::get('edit/{id}',[ProductController::class,'show']);
            Route::post('edit/{id}',[ProductController::class,'update']);
             // productget
            route::get('productget/{id}',[ProductController::class,'get']);
            //img
            Route::post('addimg/{id}',[ImageController::class,'store']);
            Route::get('deleteimg/{id}',[ImageController::class,'destroy']);
            //detail
            Route::post('adddetail/{id}',[DetailController::class,'store']);
            Route::get('deletedetail/{id}',[DetailController::class,'destroy']);
        });
        route::prefix('order')->group(function(){
            route::get('new',[OrderController::class,'new']);
            route::get('handle',[OrderController::class,'handle']);
            route::get('complete',[OrderController::class,'complete']);
            route::get('detail/{id}',[OrderController::class,'orderdetail']);
            route::get('delete/{id}',[OrderController::class,'destroy']);
            route::get('cd/{id}',[OrderController::class,'confirmhandle']);
            route::get('pc/{id}',[OrderController::class,'paymentconfirmation']);

          
        });
        // productget
        // blog
        route::prefix('blog')->group(function(){
            route::get('add',[BlogAdmincontroller::class,'create']);
            Route::post('add',[BlogAdmincontroller::class,'store']);
            Route::get('list',[BlogAdmincontroller::class,'index']);
            Route::DELETE('destroy',[BlogAdmincontroller::class,'destroy']);
            Route::get('edit/{blog}',[BlogAdmincontroller::class,'show']);
            Route::post('edit/{blog}',[BlogAdmincontroller::class,'update']);
        });
        // 

         Route::get('logout',[loginController::class,'logout']);
         Route::get('register',[loginController::class,'create']);
         Route::post('register',[loginController::class,'request']);
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



// cart -
Route::get('/cart', [Front\CartController::class, 'show']);
Route::post('/add-cart', [Front\CartController::class, 'index']);
Route::post('/update-cart', [Front\CartController::class, 'update']);
Route::get('/cart/delete/{id}', [Front\CartController::class, 'remove']);
Route::post('carts', [Front\CartController::class, 'addCart']);

Route::get('/checkOut', [Front\CheckOutController::class, 'index']);
Route::post('/checkout2', [Front\CheckOutController::class, 'addCart']);
