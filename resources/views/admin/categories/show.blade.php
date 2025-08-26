@extends('admin.layouts.app')

@section('content')
<div class="detail-card">
    <h2>Category Details</h2>
    <ul class="detail-list">
        <li><span class="detail-label">ID:</span> <span class="detail-value">{{ $category->id }}</span></li>
        <li><span class="detail-label">Name:</span> <span class="detail-value">{{ $category->name }}</span></li>
        <li><span class="detail-label">Slug:</span> <span class="detail-value">{{ $category->slug }}</span></li>
        <li><span class="detail-label">Parent:</span> <span class="detail-value">{{ $category->parent ? $category->parent->name : '-' }}</span></li>
        <li><span class="detail-label">Status:</span> <span class="detail-value">{{ $category->status ? 'Active' : 'Inactive' }}</span></li>
    </ul>
    <a href="{{ route('categories.index') }}" class="btn-action view btn-back-list">← Back to List</a>
</div>
@endsection
