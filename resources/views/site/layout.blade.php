<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Series Controller</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="site-header d-flex justify-content-center align-items-center">
        <div class="logo">
            <a href="{{ route("index") }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src={{ asset('js/app.js') }}></script>
</body>

</html>
