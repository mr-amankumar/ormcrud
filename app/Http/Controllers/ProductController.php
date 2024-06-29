<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.home', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $products = new product;
        $products->name = $request->name;
        $products->age = $request->age;
        $products->city = $request->city;
        $products->email = $request->email;
        $products->phone = $request->phone;
        $products->save();
        return redirect()->route('product.index')->with('success', 'Product Added Successfully');
        // dd($products);
    }

    public function show(string $id)
    {
        $products = Product::find($id);
        // dd($products);
        // return $products;
        return view('product.show', compact('products'));
    }

    public function edit(string $id)
    {
        // dd($product);
        $products = Product::find($id);
        // dd($products);
        return view('product.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products = new product;
        $products->name = $request->name;
        $products->age = $request->age;
        $products->city = $request->city;
        $products->email = $request->email;
        $products->phone = $request->phone;
        $products->save();

        return redirect()->route('product.index')->with('success', 'Product Updated Successfully');
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->route('product.index')->with('success', 'Product Deleted Successfully');
    }
}
