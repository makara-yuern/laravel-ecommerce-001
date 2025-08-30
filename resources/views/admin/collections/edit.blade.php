@extends('layouts.app')

@section('content')
<div class="product-create-card">
    <div class="product-create-header">
        <h1>Edit Collection</h1>
    </div>
    <form action="{{ route('admin.collections.update', $collection->id) }}" method="POST" class="product-create-form">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $collection->name }}" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success save-btn">Update</button>
            <a href="{{ route('admin.collections.index') }}" class="btn btn-secondary cancel-btn">Cancel</a>
        </div>
    </form>
</div>
@endsection
