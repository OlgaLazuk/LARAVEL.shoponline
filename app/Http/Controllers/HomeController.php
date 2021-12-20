<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
       public function index()
    {
        $categories = Category::query()
            ->limit(4)
            ->inRandomOrder()
            ->get();

        $products = Product::query()->min('price');

        return view('home.main', compact('products', 'categories'));
    }

    public function search(Request $request)
    {
        $categories = Category::all();

        $search = $request->get('search');
        $products = Product::query()
            ->where('name', 'LIKE', '%' . $search . '%')
            ->orderBy('name')
            ->paginate(4);

        if (!empty($products)) {
            return view('catalog.catalog', compact('products', 'categories'));
        }
    }
}
