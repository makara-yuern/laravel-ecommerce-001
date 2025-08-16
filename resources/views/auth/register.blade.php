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
        <input id="profile" type="file" name="profile" accept="image/*" class="form-input">
        <div style="margin-top:10px;">
            <img id="profile-preview" src="#" alt="Profile Preview" style="display:none; max-width:120px; border-radius:8px;" />
        </div>
        @error('profile')<div class="error-message">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label for="isadmin" class="form-label">Is Admin:</label>
        <div style="display: flex; align-items: center; gap: 10px;">
            {{-- <span>Off</span> --}}
            <label class="toggle-switch" for="isadmin" style="position: relative; display: inline-block; width: 50px; height: 24px; cursor: pointer;">
                <input type="checkbox" id="isadmin" name="isadmin" value="1" style="width: 0; height: 0; opacity: 0;">
                <span class="slider"></span>
            </label>
            {{-- <span>On</span> --}}
        </div>
        @error('isadmin')<div class="error-message">{{ $message }}</div>@enderror
    </div>
    <div class="form-group form-actions">
        <button type="submit" class="btn-primary">Register</button>
        <a href="{{ route('login') }}" class="link-register">Already have an account? Login</a>
    </div>
</form>
@endsection