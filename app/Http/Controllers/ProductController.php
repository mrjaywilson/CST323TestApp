<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::all();

        return view('product.list')->with('products', $products);
    }

    public function create(Request $request)
    {
        Product::create([
           'name' => $request['name'],
           'description' => $request['description'],
           'value' => $request['value'],
        ]);

        $products = Product::all();

        return view('product.list')->with('products', $products);
    }

    public function new()
    {
        return view('product.new');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product', $product);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect(route('product-list'))->with('products', Product::all());
    }

    public function update(Request $request)
    {
        $product = Product::find($request['id']);

        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->value = $request['value'];

        $product->save();

        return redirect(route('product-list'))->with('products', Product::all());
    }

    public function read($id)
    {
        $product = Product::find($id);
        return view('product.index')->with('product', $product);
    }
}
