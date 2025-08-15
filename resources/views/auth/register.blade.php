@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('register') }}" class="register-form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Name:</label>
        <input 
        id="name" 
        type="text" 
        name="name" 
        value="{{ old('name') }}" 
        required 
        autofocus 
        class="form-input"
        >
        @error('name')
        <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input id="email" 
        type="email" 
        name="email" 
        value="{{ old('email') }}" 
        required 
        class="form-input"
        >
        @error('email')
        <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="form-label">Password:</label>
        <input 
        id="password" 
        type="password" 
        name="password" 
        required 
        class="form-input"
        >
        @error('password')
        <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="form-label">Confirm Password:</label>
        <input 
        id="password_confirmation" 
        type="password" 
        name="password_confirmation" 
        required 
        class="form-input"
        >
        @error('password_confirmation')
        <div class="error-message">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="profile" class="form-label">Profile Image:</label>
        <input id="profile" type="file" name="profile" accept="image/*" class="form-input" onchange="previewProfileImage(event)">
        <div style="margin-top:10px;">
            <img id="profile-preview" src="#" alt="Profile Preview" style="display:none; max-width:120px; border-radius:8px;" />
        </div>
        @error('profile')<div class="error-message">{{ $message }}</div>@enderror
    </div>
    <script>
    function previewProfileImage(event) {
        const input = event.target;
        const preview = document.getElementById('profile-preview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
    </script>
    <div class="form-group form-actions">
        <button type="submit" class="btn-primary">Register</button>
        <a href="{{ route('login') }}" class="link-register">Already have an account? Login</a>
    </div>
</form>
@endsection