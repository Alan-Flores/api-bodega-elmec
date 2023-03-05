<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->buy = $request->buy;
        $product->sale = $request->sale;
        $product->brand = $request->brand;
        $product->group_id = $request->group_id;
        $product->state = $request->state;

        $product->save();
    }


    public function show(string $id)
    {
        $product = Product::find($id);
        return $product;
    }


    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($request->$id);
        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->buy = $request->buy;
        $product->sale = $request->sale;
        $product->brand = $request->brand;
        $product->group_id = $request->group_id;
        $product->state = $request->state;

        $product->save();
        return $product;
    }

    public function destroy(string $id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
