<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $products = Product::query()
            ->inRandomOrder()
            ->paginate(6);

        return view('catalog.catalog', compact('categories', 'products'));
    }

    public function category(Request $request, Category $category)
    {
        $categories = Category::all();
        $products = $category->products()
            ->paginate(4);

        return view('catalog.catalog',
            compact('categories', 'products'));
    }

    public function product(Request $request, $category, $product)
    {
        return view('catalog.product');
    }

    public function sort(Request $request)
    {
        $categories = Category::all();

        $products = Product::query()
            ->orderBy('created_at', 'DESC')
            ->paginate(6);

        if (!empty($products)) {
            return view('catalog.catalog', compact('products', 'categories'));
        }
    }
}
