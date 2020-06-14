<?php

namespace App\Http\Controllers;

use App\Product;
// use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return response()->json($products, 200);
    }

    public function view(Product $product)
    {
        return view('product.view', compact('product'));
    }
}
