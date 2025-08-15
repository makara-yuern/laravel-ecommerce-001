@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <h1 class="dashboard-title">Dashboard</h1>
        <div class="dashboard-cards">
            <div class="dashboard-card">
                <h2 class="dashboard-card-title">Total Products</h2>
                <p class="dashboard-card-value">123</p>
            </div>
            <div class="dashboard-card">
                <h2 class="dashboard-card-title">Total Sales</h2>
                <p class="dashboard-card-value">$4,560</p>
            </div>
            <div class="dashboard-card">
                <h2 class="dashboard-card-title">Customers</h2>
                <p class="dashboard-card-value">89</p>
            </div>
        </div>
    </div>
@endsection
