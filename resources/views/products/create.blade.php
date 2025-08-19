@extends('layouts.app')

@section('content')
<div class="product-create-card">
    <div class="product-create-header">
        <h1>Add Product</h1>
    </div>
    <form action="{{ route('products.store') }}" method="POST" class="product-create-form">
        @csrf
        <div class="form-row">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-row">
            <label for="sku">SKU</label>
            <input type="text" name="sku" id="sku">
        </div>
        <div class="form-row">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" step="0.01" required>
        </div>
        <div class="form-row">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" required>
        </div>
        <div class="form-row">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <div class="form-row">
            <label for="categories">Categories</label>
            <select name="categories[]" id="categories" multiple>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-row">
            <label for="collections">Collections</label>
            <select name="collections[]" id="collections" multiple>
                @foreach($collections as $col)
                    <option value="{{ $col->id }}">{{ $col->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success save-btn">Save</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary cancel-btn">Cancel</a>
        </div>
    </form>
</div>
@endsection
