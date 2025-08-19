@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <div class="mb-3">
        <strong>SKU:</strong> {{ $product->sku }}
    </div>
    <div class="mb-3">
        <strong>Price:</strong> ${{ number_format($product->price, 2) }}
    </div>
    <div class="mb-3">
        <strong>Stock:</strong> {{ $product->stock }}
    </div>
    <div class="mb-3">
        <strong>Status:</strong> {{ ucfirst($product->status) }}
    </div>
    <div class="mb-3">
        <strong>Categories:</strong>
        @foreach($product->categories as $cat)
            <span class="badge bg-info">{{ $cat->name }}</span>
        @endforeach
    </div>
    <div class="mb-3">
        <strong>Collections:</strong>
        @foreach($product->collections as $col)
            <span class="badge bg-success">{{ $col->name }}</span>
        @endforeach
    </div>
    <div class="mb-3">
        <strong>Description:</strong>
        <p>{{ $product->description }}</p>
    </div>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
</div>
