<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="min-height:100vh; margin:0; background:transparent;">
    <div class="dashboard-layout">
        @include('components.sidebar')
        <div class="dashboard-main">
            @include('components.navbar')
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
