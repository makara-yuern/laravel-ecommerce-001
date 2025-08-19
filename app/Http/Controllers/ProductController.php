<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['categories', 'collections', 'images'])->paginate(20);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = \App\Models\Category::with('children')->get();
        $collections = \App\Models\Collection::all();
        $attributes = \App\Models\Attribute::with('values')->get();
        $variants = \App\Models\ProductVariant::all();
        return view('products.create', compact('categories', 'collections', 'attributes', 'variants'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'sku' => 'nullable|string|unique:products,sku',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'status' => 'required|in:active,inactive',
        ]);
        $product = Product::create($data);
        // Attach categories, collections, variants, etc. if needed
        if ($request->has('categories')) {
            $product->categories()->sync($request->input('categories'));
        }
        if ($request->has('collections')) {
            $product->collections()->sync($request->input('collections'));
        }
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::with([
            'categories.parent',
            'collections',
            'images',
            'variants.attributeValues.attribute',
        ])->findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::with(['categories', 'collections', 'images', 'variants'])->findOrFail($id);
        $categories = \App\Models\Category::with('children')->get();
        $collections = \App\Models\Collection::all();
        $attributes = \App\Models\Attribute::with('values')->get();
        $variants = \App\Models\ProductVariant::all();
        return view('products.edit', compact('product', 'categories', 'collections', 'attributes', 'variants'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'sku' => 'nullable|string|unique:products,sku,' . $id,
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'status' => 'required|in:active,inactive',
        ]);
        $product->update($data);
        if ($request->has('categories')) {
            $product->categories()->sync($request->input('categories'));
        }
        if ($request->has('collections')) {
            $product->collections()->sync($request->input('collections'));
        }
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
