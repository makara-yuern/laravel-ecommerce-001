@extends('admin.layouts.app')

@section('content')
<div class="product-create-card">
    <div class="product-create-header">
        <h1>Add Category</h1>
    </div>
    <form action="{{ route('admin.categories.store') }}" method="POST" class="product-create-form">
        @csrf
        <div class="form-row">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-row">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug">
        </div>
        <div class="form-row">
            <label for="parent_id">Parent Category</label>
            <select name="parent_id" id="parent_id">
                <option value="">None</option>
                @foreach(\App\Models\Category::getNestedCategories($categories) as $cat)
                    <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-row">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="1" selected>Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success save-btn">Save</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary cancel-btn">Cancel</a>
        </div>
    </form>
</div>
@endsection
