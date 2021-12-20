<?php


namespace App\ViewComposers;


use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class WishListCountComposer
{
    public function compose(View $view)
    {
//      dump(Session::get('wishlist'));
        $wishlistCount = Session::get('wishlist');
        if (isset($wishlistCount)) {
            $showWishList = count($wishlistCount);
        } else {
            $showWishList = 0;
        }
        $view->with('showWishList',  $showWishList);

    }
}
