@extends('admin.layouts.app')

@section('content')
<div class="detail-card">
    <h2>Collection Details</h2>
    <ul class="detail-list">
        <li><span class="detail-label">ID:</span> <span class="detail-value">{{ $collection->id }}</span></li>
        <li><span class="detail-label">Name:</span> <span class="detail-value">{{ $collection->name }}</span></li>
    </ul>
    <a href="{{ route('collections.index') }}" class="btn-action view btn-back-list">← Back to List</a>
</div>
@endsection
