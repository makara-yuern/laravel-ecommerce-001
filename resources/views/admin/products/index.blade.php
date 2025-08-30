@extends('layouts.app')

@section('content')
@include('layouts.notification')
<div class="product-index-card">
    <div class="product-index-header">
        <h1>Product List</h1>
        <a href="{{ route('admin.products.create') }}" class="btn add-product-btn">+ Add Product</a>
    </div>
    <form method="GET" action="{{ route('admin.products.index') }}" class="product-filter-bar">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or SKU" class="form-control">
        <select name="status" class="form-control">
            <option value="">All Status</option>
            <option value="active" @if(request('status')=='active') selected @endif>Active</option>
            <option value="inactive" @if(request('status')=='inactive') selected @endif>Inactive</option>
        </select>
        <button type="submit" class="btn btn-info">Filter</button>
    </form>
    <div class="product-table-wrapper">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>SKU</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Categories</th>
                <th>Collections</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>
                    @php
                        $mainImage = $product->images->where('is_main', true)->first() ?? $product->images->first();
                    @endphp
                    @if($mainImage)
                        <img src="{{ asset('storage/' . $mainImage->url) }}" alt="Product Image" class="image-preview-item">
                    @else
                        <span class="no-image">No image</span>
                    @endif
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->sku }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <span class="badge status-badge {{ $product->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                        {{ ucfirst($product->status) }}
                    </span>
                </td>
                <td>
                    @foreach($product->categories as $cat)
                        <span class="badge bg-info">{{ $cat->name }}</span>
                    @endforeach
                </td>
                <td>
                    @foreach($product->collections as $col)
                        <span class="badge bg-success">{{ $col->name }}</span>
                    @endforeach
                </td>
                <td class="product-actions">
                    <a href="{{ route('admin.products.show', $product->id) }}" class="btn-action view">View</a>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn-action edit">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="action">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action delete" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    </div>
    <div class="product-pagination">
        {{ $products->links() }}
    </div>
</div>
@endsection