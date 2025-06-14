<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class NavigationController extends Controller
{
    public function viewShop()
    {
        $products = Product::all();
        return view('content.shop', compact('products'));
    }

    public function viewProductDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('content.product-detail', compact('product'));
    }
}