<?php
namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        // $categoryProducts =  \DB::table('products_categories')->where('status', '=', 0)->get();
        view()->composer(
            'front.layout.master', 
            function ($view) {
                $view->with('categoryProducts', \DB::table('products_categories')->where('status', '=', 0)->get());
            }
        );

    }
}
