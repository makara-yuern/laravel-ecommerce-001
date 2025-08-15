<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/auth.css', 'resources/css/body.css'])
</head>
<body>
    <div class="main-content" style="min-height:100vh; display:flex; align-items:center; justify-content:center;">
        @yield('content')
    </div>
</body>
</html>
