@extends(Auth::check() ? 'layouts.app' : 'layouts.guest')

@section('content')
    @if (!Auth::check())
        <h2>Please login</h2>
        @include('auth.login')
    @else
    @include('dashboard.dashboard')
    @endif
@endsection