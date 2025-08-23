@extends('layouts.app')

@section('content')
@include('layouts.notification')
<div class="collection-index-card">
    <div class="collection-index-header">
        <h1>Collections</h1>
        <a href="{{ route('collections.create') }}" class="btn btn-primary add-collection-btn">+ Add Collection</a>
    </div>
    <form method="GET" action="{{ route('collections.index') }}" class="product-filter-bar" style="margin-bottom:1.5rem;display:flex;gap:1rem;align-items:center;">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name" class="form-control">
        <button type="submit" class="btn btn-info">Filter</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($collections as $collection)
                <tr>
                    <td>{{ $collection->id }}</td>
                    <td>{{ $collection->name }}</td>
                    <td>
                        <a href="{{ route('collections.show', $collection->id) }}" class="btn-action view">View</a>
                        <a href="{{ route('collections.edit', $collection->id) }}" class="btn-action edit">Edit</a>
                        <form action="{{ route('collections.destroy', $collection->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No collections found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
