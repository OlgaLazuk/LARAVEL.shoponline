<?php


namespace App\Services;


use App\Models\Product;
use Illuminate\Support\Facades\Session;

class WishListService
{
    public function addToWishList($productId)
    {
        $wishlist = Session::get('wishlist', []);
        $wishlist[$productId] = ($wishlist[$productId] ?? 0) + 1;
        Session::put('wishlist', $wishlist);

    }

    public function getProducts(){
        $wishlist = collect(Session::get('wishlist', [])) ;
        $ids = $wishlist->keys();
        return Product::query()
            ->whereIn('id', $ids)
            ->get();
    }

    public function deleteFromWishList($productId){
        $products = Session::all();
        unset($products['wishlist'][$productId]);
        Session::put($products);
    }
}
