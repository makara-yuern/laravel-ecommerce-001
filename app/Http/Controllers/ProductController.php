<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['categories', 'collections', 'images'])->paginate(20);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = \App\Models\Category::with('children')->get();
        $collections = \App\Models\Collection::all();
        $attributes = \App\Models\Attribute::with('values')->get();
        $variants = \App\Models\ProductVariant::all();
        return view('admin.products.create', compact('categories', 'collections', 'attributes', 'variants'));
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
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);
        $product = Product::create($data);
        if ($request->has('categories')) {
            $product->categories()->sync($request->input('categories'));
        }
        if ($request->has('collections')) {
            $product->collections()->sync($request->input('collections'));
        }
        // Handle image upload
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $idx => $img) {
                $path = $img->store('products', 'public');
                $product->images()->create([
                    'url' => $path,
                    'is_main' => $idx === 0 ? true : false,
                ]);
            }
        }
        return redirect()->route('admin.products.index')->with(KEY_SUCCESS, 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::with([
            'categories.parent',
            'collections',
            'images',
            'variants.attributeValues.attribute',
        ])->findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::with(['categories', 'collections', 'images', 'variants'])->findOrFail($id);
        $categories = \App\Models\Category::with('children')->get();
        $collections = \App\Models\Collection::all();
        $attributes = \App\Models\Attribute::with('values')->get();
        $variants = \App\Models\ProductVariant::all();
        return view('admin.products.edit', compact('product', 'categories', 'collections', 'attributes', 'variants'));
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
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);
        $product->update($data);
        if ($request->has('categories')) {
            $product->categories()->sync($request->input('categories'));
        }
        if ($request->has('collections')) {
            $product->collections()->sync($request->input('collections'));
        }
        // Handle new image uploads (add to existing images)
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $img) {
                $path = $img->store('products', 'public');
                $product->images()->create([
                    'url' => $path,
                    'is_main' => false,
                ]);
            }
        }
        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
