<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // $categoryProducts =  \DB::table('products_categories')->where('status', '=', 0)->get();
        view()->composer(
            'front.layout.master', 
            function ($view) {
                $view->with('categoryProducts', \DB::table('products_categories')->where('status', '=', 0)->get());
            }
        );

    }
}
