@extends('admin.layouts.app')

@section('content')
<div class="detail-card">
    <h2>{{ $product->name }}</h2>
    <ul class="detail-list">
        <li><span class="detail-label">SKU:</span> <span class="detail-value">{{ $product->sku }}</span></li>
        <li><span class="detail-label">Price:</span> <span class="detail-value">${{ number_format($product->price, 2) }}</span></li>
        <li><span class="detail-label">Stock:</span> <span class="detail-value">{{ $product->stock }}</span></li>
        <li><span class="detail-label">Status:</span> <span class="detail-value">{{ ucfirst($product->status) }}</span></li>
        <li><span class="detail-label">Categories:</span> <span class="detail-value">@foreach($product->categories as $cat)<span class="badge bg-info">{{ $cat->name }}</span> @endforeach</span></li>
        <li><span class="detail-label">Collections:</span> <span class="detail-value">@foreach($product->collections as $col)<span class="badge bg-success">{{ $col->name }}</span> @endforeach</span></li>
    </ul>
    <a href="{{ route('admin.products.index') }}" class="btn-action view btn-back-list">← Back to List</a>
</div>
@endsection