@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('register') }}" class="register-form" enctype="multipart/form-data">
    @csrf
    <div class="form-group-register">
        <label for="name" class="form-label-register">Name:</label>
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
    <div class="form-group-register">
        <label for="email" class="form-label-register">Email:</label>
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
    <div class="form-group-register">
        <label for="password" class="form-label-register">Password:</label>
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
    <div class="form-group-register">
        <label for="password_confirmation" class="form-label-register">Confirm Password:</label>
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
    <div class="form-group-register">
        <label for="profile" class="form-label-register">Profile Image:</label>
        <input id="profile" type="file" name="profile" accept="image/*" class="form-input">
        <div>
            <img id="profile-preview" src="#" alt="Profile Preview" />
        </div>
        @error('profile')<div class="error-message">{{ $message }}</div>@enderror
    </div>

    <div class="form-group-register">
        <label for="isadmin" class="form-label-register">Is Admin:</label>
        <div class="toggle-switch-container">
            {{-- <span>Off</span> --}}
            <label class="toggle-switch" for="isadmin">
                <input type="checkbox" id="isadmin" name="isadmin" value="1">
                <span class="slider"></span>
            </label>
            {{-- <span>On</span> --}}
        </div>
        @error('isadmin')<div class="error-message">{{ $message }}</div>@enderror
    </div>
    <div class="form-group-register form-actions-register">
        <button type="submit" class="btn-primary">Register</button>
        <a href="{{ route('login') }}" class="link-register">Already have an account? Login</a>
    </div>
</form>
@endsection