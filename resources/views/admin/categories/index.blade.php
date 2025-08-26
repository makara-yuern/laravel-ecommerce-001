@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.notification')
<div class="category-index-card">
    <div class="category-index-header">
        <h1>Categories</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn add-category-btn">+ Add Category</a>
    </div>
    <form method="GET" action="{{ route('admin.categories.index') }}" class="product-filter-bar">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or slug" class="form-control">
        <select name="status" class="form-control">
            <option value="">All Status</option>
            <option value="1" @if(request('status')==='1') selected @endif>Active</option>
            <option value="0" @if(request('status')==='0') selected @endif>Inactive</option>
        </select>
        <button type="submit" class="btn btn-info">Filter</button>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Parent</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->parent ? $category->parent->name : '-' }}</td>
                    <td>
                        @if($category->status)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.categories.show', $category->id) }}" class="btn-action view">View</a>
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn-action edit">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="action">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No categories found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
