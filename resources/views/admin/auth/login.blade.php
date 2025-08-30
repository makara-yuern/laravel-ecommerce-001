@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('login') }}" class="login-form">
    @csrf
    <div class="form-group-login">
        <label for="email" class="form-label-login">Email:</label>
        <input
          id="email"
          type="email"
          name="email"
          value="{{ old('email') }}"
          required
          autofocus
          class="form-input"
        >
        @error('email')
          <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group-login">
        <label for="password" class="form-label-login">Password:</label>
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

    <div class="form-group-login form-actions-login">
        <button type="submit" class="btn-primary">Login</button>
        <a href="{{ route('register') }}" class="link-register">Register</a>
    </div>
</form>
@endsection