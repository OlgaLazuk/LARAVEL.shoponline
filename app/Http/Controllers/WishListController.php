<?php

namespace App\Http\Controllers;

use App\Services\WishListService;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    /**
    }
     * @var WishListService
     */

    private $wishListService;

    public function __construct(WishListService $wishListService)
    {
        $this->wishListService = $wishListService;
    }

    public function addToWishList(Request $request)
    {
        $this->wishListService->addToWishList($request->input('product_id'));

        return back();
    }

    public function showWishList()
    {
        $products = $this->wishListService->getProducts();

        return view('wishlist', compact('products'));
    }

    public function destroyWishList($id)
    {
        $this->wishListService->deleteFromWishList($id);
        return back();
    }
}
