<?php

namespace App\Providers;

use App\ViewComposers\CartCountComposer;
use App\ViewComposers\CategoriesComposer;
use App\ViewComposers\ShowListComposer;
use App\ViewComposers\SumComposer;
use App\ViewComposers\WishListCountComposer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

//        $cart = Session::get('cart', []);
//        view()->composer('*', function ($view) use ($cart){
//            $view->with(['cart' =>$cart]);
//        });


        View::composer('*', CategoriesComposer::class);
        View::composer('*', CartCountComposer::class);
        View::composer('*', WishListCountComposer::class);
//        View::composer('*', ShowListComposer::class);
//        View::composer('*', SumComposer::class);

        view()->share('site_name');
    }
}
