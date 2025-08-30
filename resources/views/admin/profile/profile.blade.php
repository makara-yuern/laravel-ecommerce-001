@extends('layouts.app')

@section('content')
<div class="profile-container">
    <p>Update your profile information</p>
    <div class="profile-info">
    <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('images/ecommerce03.jpg') }}" alt="Profile" class="profile-avatar" id="profilePreview" onclick="document.getElementById('avatar').click()">
    <form method="POST" action="{{ route('admin.profile.update') }}" class="profile-update-form" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="file" id="avatar" name="avatar" class="profile-input" accept="image/*" onchange="previewProfileImage(event)">
            <div class="profile-field">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="profile-input">
            </div>
            <div class="profile-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="profile-input">
            </div>
            <button type="submit" class="profile-save">Save Changes</button>
        </form>
    </div>
    <hr class="profile-divider">
</div>
@endsection
