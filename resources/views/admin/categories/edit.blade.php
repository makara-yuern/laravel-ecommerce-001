@extends('admin.layouts.app')

@section('content')
<div class="product-create-card">
    <div class="product-create-header">
        <h1>Edit Category</h1>
    </div>
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="product-create-form">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}" required>
        </div>
        <div class="form-row">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ $category->slug }}">
        </div>
        <div class="form-row">
            <label for="parent_id">Parent Category</label>
            <select name="parent_id" id="parent_id">
                <option value="">None</option>
                @foreach(\App\Models\Category::getNestedCategories($categories) as $cat)
                    @if($category->id != $cat['id'])
                        <option value="{{ $cat['id'] }}" @if($category->parent_id == $cat['id']) selected @endif>{{ $cat['name'] }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-row">
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="1" @if($category->status) selected @endif>Active</option>
                <option value="0" @if(!$category->status) selected @endif>Inactive</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success save-btn">Update</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary cancel-btn">Cancel</a>
        </div>
    </form>
</div>
@endsection
