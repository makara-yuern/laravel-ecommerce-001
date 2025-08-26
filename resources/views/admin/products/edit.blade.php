@extends('admin.layouts.app')

@section('content')
<div class="product-create-card">
    <div class="product-create-header">
        <h1>Edit Product</h1>
    </div>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" class="product-create-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
    </div>
    <div class="form-row">
        <label for="sku">SKU</label>
        <input type="text" name="sku" id="sku" value="{{ $product->sku }}">
    </div>
    <div class="form-row">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" step="0.01" value="{{ $product->price }}" required>
    </div>
    <div class="form-row">
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>
    </div>
    <div class="form-row">
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="active" @if($product->status=='active') selected @endif>Active</option>
            <option value="inactive" @if($product->status=='inactive') selected @endif>Inactive</option>
        </select>
    </div>
    <div class="form-row">
        <label for="images">Product Images</label>
        <input type="file" name="images[]" id="images" multiple accept="image/*">
    </div>
    @if($product->images && $product->images->count())
        <div class="form-row">
            <label>Current Images:</label>
            <div class="image-preview">
                @foreach($product->images as $img)
                    <div>
                        <img src="{{ asset('storage/' . $img->url) }}" alt="Product Image" class="image-preview-item">
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <div class="form-row">
        <label for="categories">Categories</label>
        <select name="categories[]" id="categories" multiple>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" @if($product->categories->contains($cat->id)) selected @endif>{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-row">
        <label for="collections">Collections</label>
        <select name="collections[]" id="collections" multiple>
            @foreach($collections as $col)
                <option value="{{ $col->id }}" @if($product->collections->contains($col->id)) selected @endif>{{ $col->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-success save-btn">Update</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary cancel-btn">Cancel</a>
    </div>
    </form>
</div>
@endsection
