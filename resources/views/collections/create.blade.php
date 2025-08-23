@extends('layouts.app')

@section('content')
<div class="collection-create-card">
    <div class="collection-create-header">
        <h1>Add Collection</h1>
    </div>
    <form action="{{ route('collections.store') }}" method="POST" class="collection-create-form">
        @csrf
        <div class="form-row">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success save-btn">Save</button>
            <a href="{{ route('collections.index') }}" class="btn btn-secondary cancel-btn">Cancel</a>
        </div>
    </form>
</div>
@endsection
