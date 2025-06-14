<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->save();

    return redirect()->route('content.shop')->with('success', 'Product updated successfully');
}

}