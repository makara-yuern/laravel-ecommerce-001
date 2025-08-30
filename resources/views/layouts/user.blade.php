<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/css/homepage.css', 'resources/js/app.js'])
</head>
<body>
    <div class="main-app-wrapper">
        <div class="flex-1" id="main-content">
            @include('users.partials.user-navbar')
            @isset($header)
                <header class="my-6 px-6">
                    {{ $header }}
                </header>
            @endisset
            <main class="p-3 pt-0 sm:pt-0 sm:p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
